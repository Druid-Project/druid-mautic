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

/* @bundles/LeadBundle/Twig/Helper/DncReasonHelper.php */
class __TwigTemplate_a5a5c46e061ca38edde783c6dc7e5de8 extends Template
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

namespace Mautic\\LeadBundle\\Twig\\Helper;

use Mautic\\LeadBundle\\Entity\\DoNotContact;
use Mautic\\LeadBundle\\Exception\\UnknownDncReasonException;
use Symfony\\Contracts\\Translation\\TranslatorInterface;

/**
 * Convert DNC reason ID to text.
 */
final class DncReasonHelper
{
    public function __construct(
        private TranslatorInterface \$translator
    ) {
    }

    /**
     * Convert DNC reason ID to text.
     *
     * @throws UnknownDncReasonException
     */
    public function toText(int \$reasonId): string
    {
        \$reasonKey = match (\$reasonId) {
            DoNotContact::IS_CONTACTABLE => 'mautic.lead.event.donotcontact_contactable',
            DoNotContact::UNSUBSCRIBED   => 'mautic.lead.event.donotcontact_unsubscribed',
            DoNotContact::BOUNCED        => 'mautic.lead.event.donotcontact_bounced',
            DoNotContact::MANUAL         => 'mautic.lead.event.donotcontact_manual',
            default                      => throw new UnknownDncReasonException(sprintf(\"Unknown DNC reason ID '%c'\", \$reasonId)),
        };

        return \$this->translator->trans(\$reasonKey);
    }

    /**
     * Returns the canonical name of this helper.
     *
     * @return string The canonical name
     */
    public function getName(): string
    {
        return 'lead_dnc_reason';
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
        return "@bundles/LeadBundle/Twig/Helper/DncReasonHelper.php";
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
        return new Source("", "@bundles/LeadBundle/Twig/Helper/DncReasonHelper.php", "/app/docroot/app/bundles/LeadBundle/Twig/Helper/DncReasonHelper.php");
    }
}
