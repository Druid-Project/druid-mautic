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

/* @bundles/IntegrationsBundle/Tests/Unit/Integration/ConfigFormNotesTraitTest.php */
class __TwigTemplate_a2bdef1de123f87dca6d77cc749beac5 extends Template
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

namespace Mautic\\IntegrationsBundle\\Tests\\Unit\\Integration;

use Mautic\\IntegrationsBundle\\DTO\\Note;
use Mautic\\IntegrationsBundle\\Integration\\ConfigFormNotesTrait;
use Mautic\\IntegrationsBundle\\Integration\\Interfaces\\ConfigFormNotesInterface;
use PHPUnit\\Framework\\TestCase;

class ConfigFormNotesTraitTest extends TestCase
{
    public function testConfigFormNotesTraitFormDefaultValues(): void
    {
        \$configFormNotes = new class() implements ConfigFormNotesInterface {
            use ConfigFormNotesTrait;
        };

        \$this->assertNull(\$configFormNotes->getAuthorizationNote());
        \$this->assertNull(\$configFormNotes->getFeaturesNote());
        \$this->assertNull(\$configFormNotes->getFieldMappingNote());
    }

    public function testConfigFormNotesTraitFormForCustomValues(): void
    {
        \$configFormNotes = new class() implements ConfigFormNotesInterface {
            use ConfigFormNotesTrait;

            public function getAuthorizationNote(): ?Note
            {
                return new Note('Authorisation', Note::TYPE_WARNING);
            }

            public function getFeaturesNote(): ?Note
            {
                return new Note('Features', Note::TYPE_INFO);
            }

            public function getFieldMappingNote(): ?Note
            {
                return new Note('Field Mapping', Note::TYPE_WARNING);
            }
        };

        \$this->assertInstanceOf(Note::class, \$configFormNotes->getAuthorizationNote());
        \$this->assertSame(Note::TYPE_WARNING, \$configFormNotes->getAuthorizationNote()->getType());
        \$this->assertSame('Authorisation', \$configFormNotes->getAuthorizationNote()->getNote());

        \$this->assertInstanceOf(Note::class, \$configFormNotes->getFeaturesNote());
        \$this->assertSame(Note::TYPE_INFO, \$configFormNotes->getFeaturesNote()->getType());
        \$this->assertSame('Features', \$configFormNotes->getFeaturesNote()->getNote());

        \$this->assertInstanceOf(Note::class, \$configFormNotes->getFieldMappingNote());
        \$this->assertSame(Note::TYPE_WARNING, \$configFormNotes->getFieldMappingNote()->getType());
        \$this->assertSame('Field Mapping', \$configFormNotes->getFieldMappingNote()->getNote());
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
        return "@bundles/IntegrationsBundle/Tests/Unit/Integration/ConfigFormNotesTraitTest.php";
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
        return new Source("", "@bundles/IntegrationsBundle/Tests/Unit/Integration/ConfigFormNotesTraitTest.php", "/app/docroot/app/bundles/IntegrationsBundle/Tests/Unit/Integration/ConfigFormNotesTraitTest.php");
    }
}
