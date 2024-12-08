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

/* @bundles/EmailBundle/OptionsAccessor/EmailToUserAccessor.php */
class __TwigTemplate_6730d9222c6bf3c83fd28910a5a04a50 extends Template
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

namespace Mautic\\EmailBundle\\OptionsAccessor;

use Mautic\\CoreBundle\\Form\\DataTransformer\\ArrayStringTransformer;
use Mautic\\UserBundle\\Entity\\User;

class EmailToUserAccessor
{
    private ArrayStringTransformer \$transformer;

    public function __construct(
        private array \$config
    ) {
        \$this->transformer = new ArrayStringTransformer();
    }

    public function getEmailID(): int
    {
        return (int) \$this->config['useremail']['email'];
    }

    /**
     * @return bool
     */
    public function shouldSentToOwner()
    {
        return empty(\$this->config['to_owner']) ? false : \$this->config['to_owner'];
    }

    /**
     * Gets array of User ids formated for EmailModel.
     *
     * @param User|null \$owner If Owner is passed in and config is setted for it, adds owner to returned array
     */
    public function getUserIdsToSend(User \$owner = null): array
    {
        \$userIds = empty(\$this->config['user_id']) ? [] : \$this->config['user_id'];

        \$users = [];
        if (\$userIds) {
            foreach (\$userIds as \$userId) {
                \$users[] = ['id' => \$userId];
            }
        }

        if (\$this->shouldSentToOwner() && \$owner && !in_array(\$owner->getId(), \$userIds)) {
            \$users[] = ['id' => \$owner->getId()];
        }

        return \$users;
    }

    /**
     * @return array
     */
    public function getToFormatted()
    {
        \$property = 'to';

        return empty(\$this->config[\$property]) ? [] : \$this->transformer->reverseTransform(\$this->config[\$property]);
    }

    /**
     * @return array
     */
    public function getCcFormatted()
    {
        \$property = 'cc';

        return empty(\$this->config[\$property]) ? [] : \$this->transformer->reverseTransform(\$this->config[\$property]);
    }

    /**
     * @return array
     */
    public function getBccFormatted()
    {
        \$property = 'bcc';

        return empty(\$this->config[\$property]) ? [] : \$this->transformer->reverseTransform(\$this->config[\$property]);
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
        return "@bundles/EmailBundle/OptionsAccessor/EmailToUserAccessor.php";
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
        return new Source("", "@bundles/EmailBundle/OptionsAccessor/EmailToUserAccessor.php", "/app/docroot/app/bundles/EmailBundle/OptionsAccessor/EmailToUserAccessor.php");
    }
}
