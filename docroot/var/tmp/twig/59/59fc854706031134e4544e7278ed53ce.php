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

/* @bundles/AssetBundle/Controller/PublicController.php */
class __TwigTemplate_f4abf74a392c2dc6897070b8d7b3dd63 extends Template
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

namespace Mautic\\AssetBundle\\Controller;

use Mautic\\CoreBundle\\Controller\\FormController as CommonFormController;
use Mautic\\CoreBundle\\Helper\\CoreParametersHelper;
use Symfony\\Component\\HttpFoundation\\RedirectResponse;
use Symfony\\Component\\HttpFoundation\\Request;
use Symfony\\Component\\HttpFoundation\\Response;

class PublicController extends CommonFormController
{
    /**
     * @param string \$slug
     *
     * @return Response
     */
    public function downloadAction(Request \$request, CoreParametersHelper \$parametersHelper, \$slug)
    {
        // find the asset
        /** @var \\Mautic\\AssetBundle\\Model\\AssetModel \$model */
        \$model = \$this->getModel('asset');

        /** @var \\Mautic\\AssetBundle\\Entity\\Asset \$entity */
        \$entity = \$model->getEntityBySlugs(\$slug);

        if (!empty(\$entity)) {
            \$published = \$entity->isPublished();

            // make sure the asset is published or deny access if not
            if ((!\$published) && (!\$this->security->hasEntityAccess('asset:assets:viewown', 'asset:assets:viewother', \$entity->getCreatedBy()))) {
                \$model->trackDownload(\$entity, \$request, 401);

                return \$this->accessDenied();
            }

            // make sure URLs match up
            \$url        = \$model->generateUrl(\$entity, false);
            \$requestUri = \$request->getRequestUri();
            // remove query
            \$query = \$request->getQueryString();

            if (!empty(\$query)) {
                \$requestUri = str_replace(\"?{\$query}\", '', \$url);
            }

            // redirect if they don't match
            if (\$requestUri != \$url) {
                \$model->trackDownload(\$entity, \$request, 301);

                return \$this->redirect(\$url, 301);
            }

            if (\$entity->isRemote()) {
                \$model->trackDownload(\$entity, \$request, 200);

                // Redirect to remote URL
                \$response = new RedirectResponse(\$entity->getRemotePath());
            } else {
                try {
                    // set the uploadDir
                    \$entity->setUploadDir(\$parametersHelper->get('upload_dir'));
                    \$contents = \$entity->getFileContents();
                    \$model->trackDownload(\$entity, \$request, 200);
                } catch (\\Exception) {
                    \$model->trackDownload(\$entity, \$request, 404);

                    return \$this->notFound();
                }

                \$response = new Response();

                if (\$entity->getDisallow()) {
                    \$response->headers->set('X-Robots-Tag', 'noindex, nofollow, noarchive');
                }

                \$response->headers->set('Content-Type', \$entity->getFileMimeType());

                // Display the file directly in the browser just for selected extensions
                \$stream = \$request->get('stream', in_array(\$entity->getExtension(), \$this->coreParametersHelper->get('streamed_extensions')));
                if (!\$stream) {
                    \$response->headers->set('Content-Disposition', 'attachment;filename=\"'.\$entity->getOriginalFileName());
                }
                \$response->setContent(\$contents);
            }

            return \$response;
        }

        \$model->trackDownload(\$entity, \$request, 404);

        return \$this->notFound();
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
        return "@bundles/AssetBundle/Controller/PublicController.php";
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
        return new Source("", "@bundles/AssetBundle/Controller/PublicController.php", "/app/docroot/app/bundles/AssetBundle/Controller/PublicController.php");
    }
}
