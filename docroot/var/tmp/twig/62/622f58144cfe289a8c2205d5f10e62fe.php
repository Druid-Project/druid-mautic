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

/* @bundles/IntegrationsBundle/Tests/Unit/DTO/NoteTest.php */
class __TwigTemplate_29d1b706738461a3d33fa05e208ec797 extends Template
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

use Mautic\\IntegrationsBundle\\DTO\\Note;
use PHPUnit\\Framework\\TestCase;

final class NoteTest extends TestCase
{
    public function testGetterFunctions(): void
    {
        \$note = 'This is note';
        \$type = Note::TYPE_WARNING;

        \$noteObject = new Note(\$note, \$type);

        \$this->assertSame(\$note, \$noteObject->getNote());
        \$this->assertSame(\$type, \$noteObject->getType());
    }

    public function testGetterFunctionsThrowsException(): void
    {
        \$this->expectException(InvalidArgumentException::class);
        \$this->expectExceptionMessage(sprintf('Type value can be either \"%s\" or \"%s\".', Note::TYPE_INFO, Note::TYPE_WARNING));

        \$noteObject = new Note('Notes', 'randomType');
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
        return "@bundles/IntegrationsBundle/Tests/Unit/DTO/NoteTest.php";
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
        return new Source("", "@bundles/IntegrationsBundle/Tests/Unit/DTO/NoteTest.php", "/app/docroot/app/bundles/IntegrationsBundle/Tests/Unit/DTO/NoteTest.php");
    }
}
