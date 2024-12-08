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

/* @bundles/EmailBundle/EventListener/FormSubscriber.php */
class __TwigTemplate_f16b123509f6878d1862390f13e1d1e6 extends Template
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

namespace Mautic\\EmailBundle\\EventListener;

use Doctrine\\ORM\\ORMException;
use Mautic\\EmailBundle\\Form\\Type\\EmailSendType;
use Mautic\\EmailBundle\\Form\\Type\\FormSubmitActionUserEmailType;
use Mautic\\EmailBundle\\Model\\EmailModel;
use Mautic\\FormBundle\\Event\\FormBuilderEvent;
use Mautic\\FormBundle\\Event\\SubmissionEvent;
use Mautic\\FormBundle\\FormEvents;
use Mautic\\LeadBundle\\Entity\\Lead;
use Mautic\\LeadBundle\\Tracker\\ContactTracker;
use Symfony\\Component\\EventDispatcher\\EventSubscriberInterface;

class FormSubscriber implements EventSubscriberInterface
{
    public function __construct(
        private EmailModel \$emailModel,
        private ContactTracker \$contactTracker
    ) {
    }

    public static function getSubscribedEvents(): array
    {
        return [
            FormEvents::FORM_ON_BUILD            => ['onFormBuilder', 0],
            FormEvents::ON_EXECUTE_SUBMIT_ACTION => [
                ['onFormSubmitActionSendEmail', 0],
            ],
        ];
    }

    /**
     * Add a send email actions to available form submit actions.
     */
    public function onFormBuilder(FormBuilderEvent \$event): void
    {
        \$event->addSubmitAction('email.send.user', [
            'group'             => 'mautic.email.actions',
            'label'             => 'mautic.email.form.action.sendemail.admin',
            'description'       => 'mautic.email.form.action.sendemail.admin.descr',
            'formType'          => FormSubmitActionUserEmailType::class,
            'formTheme'         => '@MauticEmail/FormTheme/FormAction/_formaction_properties_useremail_row.html.twig',
            'eventName'         => FormEvents::ON_EXECUTE_SUBMIT_ACTION,
            'allowCampaignForm' => true,
        ]);

        \$event->addSubmitAction('email.send.lead', [
            'group'           => 'mautic.email.actions',
            'label'           => 'mautic.email.form.action.sendemail.lead',
            'description'     => 'mautic.email.form.action.sendemail.lead.descr',
            'formType'        => EmailSendType::class,
            'formTypeOptions' => ['update_select' => 'formaction_properties_email'],
            'formTheme'       => '@MauticEmail/FormTheme/EmailSendList/emailsend_list_row.html.twig',
            'eventName'       => FormEvents::ON_EXECUTE_SUBMIT_ACTION,
        ]);
    }

    /**
     * @throws ORMException
     */
    public function onFormSubmitActionSendEmail(SubmissionEvent \$event): void
    {
        if (false === \$event->checkContext('email.send.user') && false === \$event->checkContext('email.send.lead')) {
            return;
        }

        \$properties = \$event->getAction()->getProperties();
        \$emailId    = isset(\$properties['useremail']) ? (int) \$properties['useremail']['email'] : (int) \$properties['email'];
        \$email      = \$this->emailModel->getEntity(\$emailId);

        if (null === \$email || false === \$email->isPublished()) {
            return;
        }

        \$currentLead = \$this->getCurrentLead(\$event->getActionFeedback());

        if (isset(\$properties['user_id']) && \$properties['user_id']) {
            \$this->emailModel->sendEmailToUser(\$email, \$properties['user_id'], \$currentLead, \$event->getTokens());
        } elseif (isset(\$currentLead['email'])) {
            \$this->emailModel->sendEmail(\$email, \$currentLead, [
                'source'    => ['form', \$event->getAction()->getForm()->getId()],
                'tokens'    => \$event->getTokens(),
                'ignoreDNC' => true,
            ]);
        }
    }

    private function getCurrentLead(array \$feedback): ?array
    {
        // Deal with Lead email
        if (!empty(\$feedback['lead.create']['lead'])) {
            // the lead was just created via the lead.create action
            \$currentLead = \$feedback['lead.create']['lead'];
        } else {
            \$currentLead = \$this->contactTracker->getContact();
        }

        if (\$currentLead instanceof Lead) {
            \$currentLead = \$currentLead->getProfileFields();
        }

        return \$currentLead;
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
        return "@bundles/EmailBundle/EventListener/FormSubscriber.php";
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
        return new Source("", "@bundles/EmailBundle/EventListener/FormSubscriber.php", "/app/docroot/app/bundles/EmailBundle/EventListener/FormSubscriber.php");
    }
}
