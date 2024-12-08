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

/* @bundles/EmailBundle/Model/EmailActionModel.php */
class __TwigTemplate_3fa0bfd76d434945d8e06739e88994b8 extends Template
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

namespace Mautic\\EmailBundle\\Model;

use Mautic\\CategoryBundle\\Entity\\Category;
use Mautic\\CoreBundle\\Security\\Permissions\\CorePermissions;
use Mautic\\EmailBundle\\Entity\\Email;
use Mautic\\EmailBundle\\Entity\\EmailRepository;

class EmailActionModel
{
    public function __construct(
        private EmailModel \$emailModel,
        private EmailRepository \$emailRepository,
        private CorePermissions \$corePermissions,
    ) {
    }

    /**
     * @param array<int> \$emailsIds
     *
     * @return array<Email>
     */
    public function setCategory(array \$emailsIds, Category \$newCategory): array
    {
        \$emails = \$this->emailRepository->findBy(['id' => \$emailsIds]);

        \$affected = [];

        foreach (\$emails as \$email) {
            if (!\$this->canEdit(\$email)) {
                continue;
            }

            \$email->setCategory(\$newCategory);
            \$affected[] = \$email;
        }

        if (\$affected) {
            \$this->saveEntities(\$emails);
        }

        return \$affected;
    }

    private function canEdit(Email \$email): bool
    {
        return \$this->corePermissions->hasEntityAccess('email:emails:editown', 'email:emails:editother', \$email->getCreatedBy());
    }

    /**
     * @param array<Email> \$emails
     */
    private function saveEntities(array \$emails): void
    {
        \$this->emailModel->saveEntities(\$emails);
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
        return "@bundles/EmailBundle/Model/EmailActionModel.php";
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
        return new Source("", "@bundles/EmailBundle/Model/EmailActionModel.php", "/app/docroot/app/bundles/EmailBundle/Model/EmailActionModel.php");
    }
}
