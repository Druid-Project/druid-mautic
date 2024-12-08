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

/* @bundles/EmailBundle/Mailer/Message/MauticMessage.php */
class __TwigTemplate_1e2fded2873f054883c84dec74636ed9 extends Template
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

namespace Mautic\\EmailBundle\\Mailer\\Message;

use Symfony\\Component\\Mime\\Email;

class MauticMessage extends Email
{
    /**
     * @var array<string, array<string, mixed[]>>
     */
    protected \$metadata = [];

    protected ?string \$leadIdHash = null;

    /**
     * @param array<string, string> \$metadata
     */
    public function addMetadata(string \$email, array \$metadata): void
    {
        \$this->metadata[\$email] = \$metadata;
    }

    /**
     * @return array<string, array<string, mixed[]>>
     */
    public function getMetadata(): array
    {
        return \$this->metadata;
    }

    /**
     * Clears the metadata.
     */
    public function clearMetadata(): void
    {
        \$this->metadata = [];
    }

    public function updateLeadIdHash(?string \$hash): void
    {
        \$this->leadIdHash = \$hash;
    }

    public function getLeadIdHash(): ?string
    {
        return \$this->leadIdHash;
    }

    /**
     * @return array<mixed>
     */
    public function __serialize(): array
    {
        if (empty(\$this->leadIdHash)) {
            \$this->leadIdHash = '';
        }

        return [\$this->metadata, \$this->leadIdHash, parent::__serialize()];
    }

    /**
     * @param array<mixed> \$data
     */
    public function __unserialize(array \$data): void
    {
        [\$this->metadata, \$this->leadIdHash, \$parentData] = \$data;

        parent::__unserialize(\$parentData);
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
        return "@bundles/EmailBundle/Mailer/Message/MauticMessage.php";
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
        return new Source("", "@bundles/EmailBundle/Mailer/Message/MauticMessage.php", "/app/docroot/app/bundles/EmailBundle/Mailer/Message/MauticMessage.php");
    }
}
