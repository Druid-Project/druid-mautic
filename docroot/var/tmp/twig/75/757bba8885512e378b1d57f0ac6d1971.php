<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;
use Twig\TemplateWrapper;

/* @bundles/LeadBundle/Tests/Helper/TokenHelperTest.php */
class __TwigTemplate_c9662324a7e4e76e4bbbc84130a30772 extends Template
{
    private Source $source;
    /**
     * @var array<string, Template>
     */
    private array $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 1
        yield "<?php

namespace Mautic\\LeadBundle\\Tests\\Helper;

use Mautic\\LeadBundle\\Helper\\TokenHelper;

class TokenHelperTest extends \\PHPUnit\\Framework\\TestCase
{
    private \$lead = [
        'firstname' => 'Bob',
        'lastname'  => 'Smith',
        'country'   => '',
        'date'      => '2000-05-05 12:45:50',
        'companies' => [
            [
                'companyzip' => '77008',
            ],
        ],
    ];

    protected function setUp(): void
    {
        \$reflectionProperty = new \\ReflectionProperty(TokenHelper::class, 'parameters');
        \$reflectionProperty->setAccessible(true);
        \$reflectionProperty->setValue([
            'date_format_dateonly' => 'F j, Y',
            'date_format_timeonly' => 'g:i a',
        ]);

        parent::setUp();
    }

    public function testContactTokensAreReplaced(): void
    {
        \$lead = [
            'firstname' => 'Bob',
            'lastname'  => 'Smith',
            'country'   => 'USA',
            'companies' => [
                [
                    'companyzip' => '77008',
                ],
            ],
        ];

        \$token = '{contactfield=country}';

        \$tokenList = TokenHelper::findLeadTokens(\$token, \$lead);
        \$this->assertEquals([\$token => 'USA'], \$tokenList);
    }

    public function testCompanyTokensAreReplaced(): void
    {
        \$leads = [
            [
                'firstname' => 'Bob',
                'lastname'  => 'Smith',
                'companies' => [
                    [
                        'companyzip' => '77009',
                        'is_primary' => 0,
                    ],
                    [
                        'companyzip' => '77008',
                        'is_primary' => 1,
                    ],
                ],
            ],
            [
                'firstname' => 'Jane',
                'lastname'  => 'Smith',
            ],
            [
                'firstname' => 'Joey',
                'lastname'  => 'Smith',
                'companies' => [],
            ],
        ];

        \$token = '{contactfield=companyzip}';

        \$tokenList = TokenHelper::findLeadTokens(\$token, \$leads[0]);
        \$this->assertEquals([\$token => '77008'], \$tokenList);

        \$tokenList = TokenHelper::findLeadTokens(\$token, \$leads[1]);
        \$this->assertEquals([\$token => ''], \$tokenList);

        \$tokenList = TokenHelper::findLeadTokens(\$token, \$leads[2]);
        \$this->assertEquals([\$token => ''], \$tokenList);
    }

    public function testDefaultValueIsUsed(): void
    {
        \$lead = [
            'firstname' => 'Bob',
            'lastname'  => 'Smith',
            'country'   => '',
            'companies' => [
                [
                    'companyzip' => '77008',
                ],
            ],
        ];

        \$token = '{contactfield=country|USA}';

        \$tokenList = TokenHelper::findLeadTokens(\$token, \$lead);
        \$this->assertEquals([\$token => 'USA'], \$tokenList);
    }

    public function testValueIsUrlEncoded(): void
    {
        \$lead = [
            'firstname' => 'Bob',
            'lastname'  => 'Smith',
            'country'   => 'Somewhere&Else',
            'companies' => [
                [
                    'companyzip' => '77008',
                ],
            ],
        ];

        \$token = '{contactfield=country|true}';

        \$tokenList = TokenHelper::findLeadTokens(\$token, \$lead);
        \$this->assertEquals([\$token => 'Somewhere%26Else'], \$tokenList);
    }

    public function testGetValueFromTokensWhenSomeValue(): void
    {
        \$token  = '{contactfield=website}';
        \$tokens = [
            '{contactfield=website}' => 'https://mautic.org',
        ];
        \$this->assertEquals(
            'https://mautic.org',
            TokenHelper::getValueFromTokens(\$tokens, \$token)
        );
    }

    public function testGetValueFromTokensWhenSomeValueWithDefaultValue(): void
    {
        \$token  = '{contactfield=website|ftp://default.url}';
        \$tokens = [
            '{contactfield=website}' => 'https://mautic.org',
        ];
        \$this->assertEquals(
            'https://mautic.org',
            TokenHelper::getValueFromTokens(\$tokens, \$token)
        );
    }

    public function testGetValueFromTokensWhenNoValueWithDefaultValue(): void
    {
        \$token  = '{contactfield=website|ftp://default.url}';
        \$tokens = [
            '{contactfield=website}' => '',
        ];
        \$this->assertEquals(
            'ftp://default.url',
            TokenHelper::getValueFromTokens(\$tokens, \$token)
        );
    }

    public function testGetValueFromTokensWhenNoValueWithoutDefaultValue(): void
    {
        \$token  = '{contactfield=website}';
        \$tokens = [
            '{contactfield=website}' => '',
        ];
        \$this->assertEquals(
            '',
            TokenHelper::getValueFromTokens(\$tokens, \$token)
        );
    }

    public function testDateTimeFormatValue(): void
    {
        \$token     = '{contactfield=date|datetime}';
        \$tokenList = TokenHelper::findLeadTokens(\$token, \$this->lead);
        \$this->assertNotSame(\$this->lead['date'], \$tokenList[\$token]);
    }

    public function testDateFormatValue(): void
    {
        \$token     = '{contactfield=date|date}';
        \$tokenList = TokenHelper::findLeadTokens(\$token, \$this->lead);
        \$this->assertNotSame(\$this->lead['date'], \$tokenList[\$token]);
    }

    public function testTimeFormatValue(): void
    {
        \$token     = '{contactfield=date|time}';
        \$tokenList = TokenHelper::findLeadTokens(\$token, \$this->lead);
        \$this->assertNotSame(\$this->lead['date'], \$tokenList[\$token]);
    }

    public function testDateFormatForEmptyValue(): void
    {
        \$lead         = \$this->lead;
        \$lead['date'] = '';

        \$token     = '{contactfield=date|time}';
        \$tokenList = TokenHelper::findLeadTokens(\$token, \$lead);
        \$this->assertEmpty(\$tokenList[\$token]);
    }
}
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@bundles/LeadBundle/Tests/Helper/TokenHelperTest.php";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@bundles/LeadBundle/Tests/Helper/TokenHelperTest.php", "/app/docroot/app/bundles/LeadBundle/Tests/Helper/TokenHelperTest.php");
    }
}
