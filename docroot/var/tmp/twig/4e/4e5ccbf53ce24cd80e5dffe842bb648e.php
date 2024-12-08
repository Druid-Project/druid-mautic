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

/* @bundles/FormBundle/Model/SubmissionResultLoader.php */
class __TwigTemplate_0fcfe0fa038d1d9b8a281be4e16fb5df extends Template
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

namespace Mautic\\FormBundle\\Model;

use Doctrine\\ORM\\EntityManager;
use Mautic\\CoreBundle\\Model\\MauticModelInterface;
use Mautic\\FormBundle\\Entity\\Submission;
use Mautic\\FormBundle\\Entity\\SubmissionRepository;

class SubmissionResultLoader implements MauticModelInterface
{
    public function __construct(
        private EntityManager \$entityManager
    ) {
    }

    /**
     * @param int \$id
     */
    public function getSubmissionWithResult(\$id): ?Submission
    {
        \$repository = \$this->getRepository();

        return \$repository->getEntity(\$id);
    }

    /**
     * @return SubmissionRepository
     */
    private function getRepository()
    {
        return \$this->entityManager->getRepository(Submission::class);
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
        return "@bundles/FormBundle/Model/SubmissionResultLoader.php";
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
        return new Source("", "@bundles/FormBundle/Model/SubmissionResultLoader.php", "/app/docroot/app/bundles/FormBundle/Model/SubmissionResultLoader.php");
    }
}
