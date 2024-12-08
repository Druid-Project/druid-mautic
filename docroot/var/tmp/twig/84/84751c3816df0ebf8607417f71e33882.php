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

/* @bundles/EmailBundle/Model/EmailDraftModel.php */
class __TwigTemplate_39e08f81291765f4cef168fa133dd6bc extends Template
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

use Mautic\\CoreBundle\\Model\\AbstractCommonModel;
use Mautic\\EmailBundle\\Entity\\Email;
use Mautic\\EmailBundle\\Entity\\EmailDraft;
use Mautic\\EmailBundle\\Entity\\EmailDraftRepository;
use Symfony\\Component\\HttpKernel\\Exception\\NotFoundHttpException;

class EmailDraftModel extends AbstractCommonModel
{
    public function createDraft(Email \$email, string \$html, string \$template, bool \$publicPreview = true): EmailDraft
    {
        \$emailDraft = \$this->getRepository()->findOneBy(['email' => \$email]);
        if (!is_null(\$emailDraft)) {
            throw new \\Exception(sprintf('Draft already exists for email %d', \$email->getId()));
        }
        \$emailDraft = new EmailDraft(\$email, \$html, \$template, \$publicPreview);

        \$this->em->persist(\$emailDraft);
        \$this->em->flush();

        return \$emailDraft;
    }

    public function deleteDraft(Email \$email): void
    {
        if (is_null(\$emailDraft = \$email->getDraft())) {
            throw new NotFoundHttpException(sprintf('Draft not found for email %d', \$email->getId()));
        }
        \$this->em->remove(\$emailDraft);
        \$this->em->flush();
    }

    public function getPermissionBase(): string
    {
        return 'email:emails';
    }

    public function getRepository(): EmailDraftRepository
    {
        return \$this->em->getRepository(EmailDraft::class);
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
        return "@bundles/EmailBundle/Model/EmailDraftModel.php";
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
        return new Source("", "@bundles/EmailBundle/Model/EmailDraftModel.php", "/app/docroot/app/bundles/EmailBundle/Model/EmailDraftModel.php");
    }
}
