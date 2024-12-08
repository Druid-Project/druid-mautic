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

/* @bundles/EmailBundle/Tests/Controller/PreviewSettingsFunctionalTest.php */
class __TwigTemplate_a5d3bc5a4b07377954fe2ab1df70bb22 extends Template
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

namespace Mautic\\EmailBundle\\Tests\\Controller;

use Mautic\\CoreBundle\\Test\\MauticMysqlTestCase;
use Mautic\\EmailBundle\\Entity\\Email;
use Symfony\\Component\\HttpFoundation\\Request;

class PreviewSettingsFunctionalTest extends MauticMysqlTestCase
{
    public function testPreviewSettingsAllEnabled(): void
    {
        \$emailMain = new Email();
        \$emailMain->setIsPublished(true);
        \$emailMain->setDateAdded(new \\DateTime());
        \$emailMain->setName('Preview settings test');
        \$emailMain->setSubject('email-main');
        \$emailMain->setTemplate('Blank');
        \$emailMain->setCustomHtml('Test Html');
        \$emailMain->setLanguage('en');

        \$this->em->persist(\$emailMain);
        \$this->em->flush();

        \$mainPageId = \$emailMain->getId();

        \$crawler = \$this->client->request(Request::METHOD_GET, '/s/emails');
        self::assertStringContainsString(\$emailMain->getName(), \$crawler->text());

        \$crawler = \$this->client->request(Request::METHOD_GET, \"/s/emails/view/{\$mainPageId}\");

        // Translation choice is not visible
        self::assertCount(
            0,
            \$crawler->filterXPath('//*[@id=\"content_preview_settings_translation\"]')
        );

        // Variant choice is not visible
        self::assertCount(
            0,
            \$crawler->filterXPath('//*[@id=\"content_preview_settings_variant\"]')
        );

        // Contact lookup is not visible
        self::assertCount(
            1,
            \$crawler->filterXPath('//*[@id=\"content_preview_settings_contact\"]')
        );

        \$emailTranslated = new Email();
        \$emailTranslated->setIsPublished(true);
        \$emailTranslated->setDateAdded(new \\DateTime());
        \$emailTranslated->setName('Preview settings test - NL translation');
        \$emailTranslated->setSubject('page-trans-nl');
        \$emailTranslated->setTemplate('Blank');
        \$emailTranslated->setCustomHtml('Test Html');
        \$emailTranslated->setLanguage('nl_CW');

        // Add translation relationship to main page
        \$emailMain->addTranslationChild(\$emailTranslated);
        \$emailTranslated->setTranslationParent(\$emailMain);

        \$emailVariant = new Email();
        \$emailVariant->setIsPublished(true);
        \$emailVariant->setDateAdded(new \\DateTime());
        \$emailVariant->setName('Preview settings test - B variant');
        \$emailVariant->setSubject('page-variant-b');
        \$emailVariant->setTemplate('Blank');
        \$emailVariant->setCustomHtml('Test Html');
        \$emailVariant->setLanguage('en');

        // Add variant relationship to main page
        \$emailMain->addVariantChild(\$emailVariant);

        \$this->em->persist(\$emailMain);
        \$this->em->persist(\$emailTranslated);
        \$this->em->persist(\$emailVariant);
        \$this->em->flush();

        \$crawler = \$this->client->request(Request::METHOD_GET, \"/s/emails/view/{\$mainPageId}\");

        // Translation choice is visible
        self::assertCount(
            1,
            \$crawler->filterXPath('//*[@id=\"content_preview_settings_translation\"]')
        );

        self::assertCount(
            1,
            \$crawler->filterXPath('//*[@id=\"content_preview_settings_translation\"]/option[@value=\"'.\$emailTranslated->getId().'\"]')
        );

        // Variant choice is visible
        self::assertCount(
            1,
            \$crawler->filterXPath('//*[@id=\"content_preview_settings_variant\"]')
        );

        self::assertCount(
            1,
            \$crawler->filterXPath('//*[@id=\"content_preview_settings_variant\"]/option[@value=\"'.\$emailVariant->getId().'\"]')
        );

        // Contact lookup is visible
        self::assertCount(
            1,
            \$crawler->filterXPath('//*[@id=\"content_preview_settings_contact\"]')
        );
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
        return "@bundles/EmailBundle/Tests/Controller/PreviewSettingsFunctionalTest.php";
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
        return new Source("", "@bundles/EmailBundle/Tests/Controller/PreviewSettingsFunctionalTest.php", "/app/docroot/app/bundles/EmailBundle/Tests/Controller/PreviewSettingsFunctionalTest.php");
    }
}
