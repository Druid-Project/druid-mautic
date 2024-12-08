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

/* @bundles/EmailBundle/Tests/OptionsAccessor/EmailToUserAccessorTest.php */
class __TwigTemplate_5f042bbd2c52ce87a678345f7b9354f2 extends Template
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

namespace Mautic\\EmailBundle\\Tests\\OptionsAccessor;

use Mautic\\EmailBundle\\OptionsAccessor\\EmailToUserAccessor;
use Mautic\\UserBundle\\Entity\\User;

class EmailToUserAccessorTest extends \\PHPUnit\\Framework\\TestCase
{
    public function testTransformToUserIds(): void
    {
        \$config            = [];
        \$config['user_id'] = [4, 6];

        \$emailToUserAccessor = new EmailToUserAccessor(\$config);

        \$expected = [
            ['id' => 4],
            ['id' => 6],
        ];

        \$this->assertEquals(\$expected, \$emailToUserAccessor->getUserIdsToSend());
    }

    public function testTransformToUserIdsWithOwnerEntityButNoOwnerSetting(): void
    {
        \$config            = [];
        \$config['user_id'] = [4, 6];

        \$emailToUserAccessor = new EmailToUserAccessor(\$config);

        \$expected = [
            ['id' => 4],
            ['id' => 6],
        ];

        \$mockOwner = \$this->getMockBuilder(User::class)
            ->getMock();

        \$mockOwner->expects(\$this->never()) // \$config['to_owner'] is not set
            ->method('getId')
            ->will(\$this->returnValue(5));

        \$this->assertEquals(\$expected, \$emailToUserAccessor->getUserIdsToSend(\$mockOwner));
    }

    public function testTransformToUserIdsWithDifferentOwnerId(): void
    {
        \$config             = [];
        \$config['user_id']  = [4, 6];
        \$config['to_owner'] = true;

        \$emailToUserAccessor = new EmailToUserAccessor(\$config);

        \$expected = [
            ['id' => 4],
            ['id' => 6],
            ['id' => 5],
        ];

        \$mockOwner = \$this->getMockBuilder(User::class)
            ->getMock();

        \$mockOwner->expects(\$this->exactly(2))
            ->method('getId')
            ->will(\$this->returnValue(5));

        \$this->assertEquals(\$expected, \$emailToUserAccessor->getUserIdsToSend(\$mockOwner));
    }

    public function testTransformToUserIdsWithSameOwnerId(): void
    {
        \$config             = [];
        \$config['user_id']  = [4, 6];
        \$config['to_owner'] = true;

        \$emailToUserAccessor = new EmailToUserAccessor(\$config);

        \$expected = [
            ['id' => 4],
            ['id' => 6],
        ];

        \$mockOwner = \$this->getMockBuilder(User::class)
            ->getMock();

        \$mockOwner->expects(\$this->once())
            ->method('getId')
            ->will(\$this->returnValue(6));

        \$this->assertEquals(\$expected, \$emailToUserAccessor->getUserIdsToSend(\$mockOwner));
    }

    public function testFormatToAddressOneEmail(): void
    {
        \$config       = [];
        \$config['to'] = 'john@doe.com';

        \$emailToUserAccessor = new EmailToUserAccessor(\$config);

        \$expected = ['john@doe.com'];

        \$this->assertEquals(\$expected, \$emailToUserAccessor->getToFormatted());
    }

    public function testFormatToAddressMoreEmails(): void
    {
        \$config       = [];
        \$config['to'] = 'john@doe.com, peter@doe.com,doe@mark.com';

        \$emailToUserAccessor = new EmailToUserAccessor(\$config);

        \$expected = [
            'john@doe.com',
            'peter@doe.com',
            'doe@mark.com',
        ];

        \$this->assertEquals(\$expected, \$emailToUserAccessor->getToFormatted());
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
        return "@bundles/EmailBundle/Tests/OptionsAccessor/EmailToUserAccessorTest.php";
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
        return new Source("", "@bundles/EmailBundle/Tests/OptionsAccessor/EmailToUserAccessorTest.php", "/app/docroot/app/bundles/EmailBundle/Tests/OptionsAccessor/EmailToUserAccessorTest.php");
    }
}
