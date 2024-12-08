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

/* @bundles/LeadBundle/Twig/Helper/AvatarHelper.php */
class __TwigTemplate_ea110b73ae0a88c72901f595244540fd extends Template
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

use Mautic\\CoreBundle\\Exception\\FileNotFoundException;
use Mautic\\CoreBundle\\Helper\\PathsHelper;
use Mautic\\CoreBundle\\Twig\\Helper\\AssetsHelper;
use Mautic\\CoreBundle\\Twig\\Helper\\GravatarHelper;
use Mautic\\LeadBundle\\Entity\\Lead;
use Symfony\\Component\\Filesystem\\Filesystem;

final class AvatarHelper
{
    /**
     * @var array<string>
     */
    private array \$imageTypes = ['jpg', 'jpeg', 'png', 'gif'];

    public function __construct(
        private AssetsHelper \$assetsHelper,
        private PathsHelper \$pathsHelper,
        private GravatarHelper \$gravatarHelper,
        private DefaultAvatarHelper \$defaultAvatarHelper
    ) {
    }

    /**
     * @param string \$filePath
     *
     * @throws FileNotFoundException
     */
    public function createAvatarFromFile(Lead \$lead, \$filePath): void
    {
        if (!file_exists(\$filePath)) {
            throw new FileNotFoundException();
        }

        \$avatarDir = \$this->getAvatarPath(true);

        if (!file_exists(\$avatarDir)) {
            mkdir(\$avatarDir);
        }

        \$ext = strtolower(pathinfo(\$filePath, PATHINFO_EXTENSION));
        if (!in_array(\$ext, \$this->imageTypes)) {
            throw new \\Exception('File is not image');
        }

        \$fs = new Filesystem();
        \$fs->copy(\$filePath, \$avatarDir.DIRECTORY_SEPARATOR.'avatar'.\$lead->getId(), true);
    }

    /**
     * @return mixed
     */
    public function getAvatar(Lead \$lead)
    {
        \$preferred  = \$lead->getPreferredProfileImage();
        \$socialData = \$lead->getSocialCache();
        \$leadEmail  = \$lead->getEmail();

        if ('custom' == \$preferred) {
            \$avatarPath = \$this->getAvatarPath(true).'/avatar'.\$lead->getId();
            if (file_exists(\$avatarPath) && \$fmtime = filemtime(\$avatarPath)) {
                // Append file modified time to ensure the latest is used by browser
                \$img = \$this->assetsHelper->getUrl(
                    \$this->getAvatarPath().'/avatar'.\$lead->getId().'?'.\$fmtime,
                    null,
                    null,
                    false,
                    true
                );
            }
        } elseif (isset(\$socialData[\$preferred]) && !empty(\$socialData[\$preferred]['profile']['profileImage'])) {
            \$img = \$socialData[\$preferred]['profile']['profileImage'];
        }

        if (empty(\$img)) {
            // Default to gravatar if others failed
            if (!empty(\$leadEmail)) {
                \$img = \$this->gravatarHelper->getImage(\$leadEmail);
            } else {
                \$img = \$this->defaultAvatarHelper->getDefaultAvatar();
            }
        }

        return \$img;
    }

    /**
     * Get avatar path.
     *
     * @param bool \$absolute
     */
    public function getAvatarPath(\$absolute = false): string
    {
        \$imageDir = \$this->pathsHelper->getSystemPath('images', \$absolute);

        return \$imageDir.'/lead_avatars';
    }

    /**
     * @deprecated Use DefaultAvatarHelper::getDefaultAvatar instead of it
     *
     * @param bool|false \$absolute
     */
    public function getDefaultAvatar(bool \$absolute = false): string
    {
        return \$this->defaultAvatarHelper->getDefaultAvatar(\$absolute);
    }

    public function getName(): string
    {
        return 'lead_avatar';
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
        return "@bundles/LeadBundle/Twig/Helper/AvatarHelper.php";
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
        return new Source("", "@bundles/LeadBundle/Twig/Helper/AvatarHelper.php", "/app/docroot/app/bundles/LeadBundle/Twig/Helper/AvatarHelper.php");
    }
}
