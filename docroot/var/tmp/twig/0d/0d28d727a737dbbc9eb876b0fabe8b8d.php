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

/* @bundles/LeadBundle/Tests/Entity/UtmTagTest.php */
class __TwigTemplate_26b9193eeb62175751e80a7a92ab5a85 extends Template
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

declare(strict_types=1);

namespace Mautic\\LeadBundle\\Tests\\Entity;

use Mautic\\LeadBundle\\Entity\\UtmTag;
use PHPUnit\\Framework\\Assert;

class UtmTagTest extends \\PHPUnit\\Framework\\TestCase
{
    /**
     * @dataProvider setUtmTag
     */
    public function testSetUtmContent(string \$utmContent, int \$expected): void
    {
        \$utmTag = new UtmTag();
        \$utmTag->setUtmContent(\$utmContent);

        Assert::assertEquals(\$expected, mb_strlen(\$utmTag->getUtmContent()));
    }

    /**
     * @return iterable<array<int,int|string>>
     */
    public function setUtmTag(): iterable
    {
        yield ['custom', 6];
        yield ['UTM content longer like 191 UTM content longer like 191 UTM content longer like 191 UTM content longer like 191 UTM content longer like 191 UTM content longer like 191 UTM content longer like 191 UTM content longer like 191 UTM content longer like 191 UTM content longer like 191 UTM content longer like 191 ', 191];
    }

    /**
     * @dataProvider utmTagsDataProvider
     */
    public function testHasUtmTags(?string \$utmCampaign, ?string \$utmSource, ?string \$utmMedium, ?string \$utmContent, ?string \$utmTerm, bool \$expectedResult): void
    {
        \$utmTag = new UtmTag();
        \$utmTag->setUtmCampaign(\$utmCampaign);
        \$utmTag->setUtmSource(\$utmSource);
        \$utmTag->setUtmMedium(\$utmMedium);
        \$utmTag->setUtmContent(\$utmContent);
        \$utmTag->setUtmTerm(\$utmTerm);

        \$this->assertEquals(\$expectedResult, \$utmTag->hasUtmTags());
    }

    /**
     * @return array<string|array<bool|string|''>>
     */
    public static function utmTagsDataProvider(): array
    {
        return [
            'All tags are empty'       => ['', '', '', '', '', false],
            'Only utmCampaign is set'  => ['campaign', '', '', '', '', true],
            'Only utmSource is set'    => ['', 'source', '', '', '', true],
            'Only utmMedium is set'    => ['', '', 'medium', '', '', true],
            'Only utmContent is set'   => ['', '', '', 'content', '', true],
            'Only utmTerm is set'      => ['', '', '', '', 'term', true],
            'All tags are set'         => ['campaign', 'source', 'medium', 'content', 'term', true],
        ];
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
        return "@bundles/LeadBundle/Tests/Entity/UtmTagTest.php";
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
        return new Source("", "@bundles/LeadBundle/Tests/Entity/UtmTagTest.php", "/app/docroot/app/bundles/LeadBundle/Tests/Entity/UtmTagTest.php");
    }
}
