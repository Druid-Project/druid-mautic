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

/* @bundles/UserBundle/Model/UserModel.php */
class __TwigTemplate_b7bf3229be326443373df688e3a8c7c9 extends Template
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

namespace Mautic\\UserBundle\\Model;

use Doctrine\\ORM\\EntityManager;
use Mautic\\CoreBundle\\Helper\\CoreParametersHelper;
use Mautic\\CoreBundle\\Helper\\UserHelper;
use Mautic\\CoreBundle\\Model\\FormModel;
use Mautic\\CoreBundle\\Security\\Permissions\\CorePermissions;
use Mautic\\CoreBundle\\Translation\\Translator;
use Mautic\\EmailBundle\\Helper\\MailHelper;
use Mautic\\UserBundle\\Entity\\Role;
use Mautic\\UserBundle\\Entity\\User;
use Mautic\\UserBundle\\Entity\\UserRepository;
use Mautic\\UserBundle\\Entity\\UserToken;
use Mautic\\UserBundle\\Enum\\UserTokenAuthorizator;
use Mautic\\UserBundle\\Event\\UserEvent;
use Mautic\\UserBundle\\Form\\Type\\UserType;
use Mautic\\UserBundle\\Model\\UserToken\\UserTokenServiceInterface;
use Mautic\\UserBundle\\UserEvents;
use Psr\\Log\\LoggerInterface;
use Symfony\\Component\\EventDispatcher\\EventDispatcherInterface;
use Symfony\\Component\\Form\\FormFactoryInterface;
use Symfony\\Component\\HttpKernel\\Exception\\MethodNotAllowedHttpException;
use Symfony\\Component\\PasswordHasher\\Hasher\\UserPasswordHasher;
use Symfony\\Component\\PasswordHasher\\Hasher\\UserPasswordHasherInterface;
use Symfony\\Component\\Routing\\Generator\\UrlGeneratorInterface;
use Symfony\\Contracts\\EventDispatcher\\Event;

/**
 * @extends FormModel<User>
 */
class UserModel extends FormModel
{
    public function __construct(
        protected MailHelper \$mailHelper,
        private UserTokenServiceInterface \$userTokenService,
        EntityManager \$em,
        CorePermissions \$security,
        EventDispatcherInterface \$dispatcher,
        UrlGeneratorInterface \$router,
        Translator \$translator,
        UserHelper \$userHelper,
        LoggerInterface \$mauticLogger,
        CoreParametersHelper \$coreParametersHelper
    ) {
        parent::__construct(\$em, \$security, \$dispatcher, \$router, \$translator, \$userHelper, \$mauticLogger, \$coreParametersHelper);
    }

    public function getRepository(): UserRepository
    {
        return \$this->em->getRepository(User::class);
    }

    public function getPermissionBase(): string
    {
        return 'user:users';
    }

    /**
     * @throws MethodNotAllowedHttpException
     */
    public function saveEntity(\$entity, \$unlock = true): void
    {
        if (!\$entity instanceof User) {
            throw new MethodNotAllowedHttpException(['User'], 'Entity must be of class User()');
        }

        parent::saveEntity(\$entity, \$unlock);
    }

    /**
     * Get a list of users for an autocomplete input.
     *
     * @param string \$search
     * @param int    \$limit
     * @param int    \$start
     * @param array  \$permissionLimiter
     *
     * @return array
     */
    public function getUserList(\$search = '', \$limit = 10, \$start = 0, \$permissionLimiter = [])
    {
        return \$this->getRepository()->getUserList(\$search, \$limit, \$start, \$permissionLimiter);
    }

    /**
     * Checks for a new password and rehashes if necessary.
     *
     * @param string     \$submittedPassword
     * @param bool|false \$validate
     */
    public function checkNewPassword(User \$entity, UserPasswordHasherInterface \$hasher, \$submittedPassword, \$validate = false): ?string
    {
        if (\$validate) {
            if (strlen(\$submittedPassword) < 6) {
                throw new \\InvalidArgumentException(\$this->translator->trans('mautic.user.user.password.minlength', [], 'validators'));
            }
        }

        if (!empty(\$submittedPassword)) {
            // hash the clear password submitted via the form
            return \$hasher->hashPassword(\$entity, \$submittedPassword);
        }

        return \$entity->getPassword();
    }

    /**
     * @throws \\Symfony\\Component\\HttpKernel\\Exception\\NotFoundHttpException
     */
    public function createForm(\$entity, FormFactoryInterface \$formFactory, \$action = null, \$options = []): \\Symfony\\Component\\Form\\FormInterface
    {
        if (!\$entity instanceof User) {
            throw new MethodNotAllowedHttpException(['User'], 'Entity must be of class User()');
        }
        if (!empty(\$action)) {
            \$options['action'] = \$action;
        }

        return \$formFactory->create(UserType::class, \$entity, \$options);
    }

    public function getEntity(\$id = null): ?User
    {
        if (null === \$id) {
            return new User();
        }

        \$entity = parent::getEntity(\$id);

        if (\$entity) {
            // add user's permissions
            \$entity->setActivePermissions(
                \$this->em->getRepository(\\Mautic\\UserBundle\\Entity\\Permission::class)->getPermissionsByRole(\$entity->getRole())
            );
        }

        return \$entity;
    }

    /**
     * @return User|null
     */
    public function getSystemAdministrator()
    {
        \$adminRole = \$this->em->getRepository(Role::class)->findOneBy(['isAdmin' => true]);

        return \$this->getRepository()->findOneBy(
            [
                'role'        => \$adminRole,
                'isPublished' => true,
            ]
        );
    }

    /**
     * @throws MethodNotAllowedHttpException
     */
    protected function dispatchEvent(\$action, &\$entity, \$isNew = false, Event \$event = null): ?Event
    {
        if (!\$entity instanceof User) {
            throw new MethodNotAllowedHttpException(['User'], 'Entity must be of class User()');
        }

        switch (\$action) {
            case 'pre_save':
                \$name = UserEvents::USER_PRE_SAVE;
                break;
            case 'post_save':
                \$name = UserEvents::USER_POST_SAVE;
                break;
            case 'pre_delete':
                \$name = UserEvents::USER_PRE_DELETE;
                break;
            case 'post_delete':
                \$name = UserEvents::USER_POST_DELETE;
                break;
            default:
                return null;
        }

        if (\$this->dispatcher->hasListeners(\$name)) {
            if (empty(\$event)) {
                \$event = new UserEvent(\$entity, \$isNew);
                \$event->setEntityManager(\$this->em);
            }
            \$this->dispatcher->dispatch(\$event, \$name);

            return \$event;
        }

        return null;
    }

    /**
     * Get list of entities for autopopulate fields.
     *
     * @param string \$type
     * @param string \$filter
     * @param int    \$limit
     *
     * @return array
     */
    public function getLookupResults(\$type, \$filter = '', \$limit = 10)
    {
        \$results = [];

        return match (\$type) {
            'role'     => \$this->em->getRepository(Role::class)->getRoleList(\$filter, \$limit),
            'user'     => \$this->em->getRepository(User::class)->getUserList(\$filter, \$limit),
            'position' => \$this->em->getRepository(User::class)->getPositionList(\$filter, \$limit),
            default    => \$results,
        };
    }

    /**
     * Resets the user password and emails it.
     *
     * @param string \$newPassword
     */
    public function resetPassword(User \$user, UserPasswordHasher \$hasher, \$newPassword): void
    {
        \$hashedPassword = \$this->checkNewPassword(\$user, \$hasher, \$newPassword);

        \$user->setPassword(\$hashedPassword);
        \$this->saveEntity(\$user);
    }

    /**
     * @return UserToken
     */
    protected function getResetToken(User \$user)
    {
        \$userToken = new UserToken();
        \$userToken->setUser(\$user)
            ->setAuthorizator(UserTokenAuthorizator::RESET_PASSWORD_AUTHORIZATOR)
            ->setExpiration((new \\DateTime())->add(new \\DateInterval('PT24H')))
            ->setOneTimeOnly();

        return \$this->userTokenService->generateSecret(\$userToken, 64);
    }

    /**
     * @param string \$token
     *
     * @return bool
     */
    public function confirmResetToken(User \$user, \$token)
    {
        \$userToken = new UserToken();
        \$userToken->setUser(\$user)
            ->setAuthorizator(UserTokenAuthorizator::RESET_PASSWORD_AUTHORIZATOR)
            ->setSecret(\$token);

        return \$this->userTokenService->verify(\$userToken);
    }

    /**
     * @throws \\RuntimeException
     */
    public function sendResetEmail(User \$user): void
    {
        \$mailer = \$this->mailHelper->getMailer();

        \$resetToken = \$this->getResetToken(\$user);
        \$this->em->persist(\$resetToken);
        try {
            \$this->em->flush();
        } catch (\\Exception \$exception) {
            \$this->logger->error(\$exception->getMessage());
            throw new \\RuntimeException();
        }
        \$resetLink  = \$this->router->generate('mautic_user_passwordresetconfirm', ['token' => \$resetToken->getSecret()], UrlGeneratorInterface::ABSOLUTE_URL);

        \$mailer->setTo([\$user->getEmail() => \$user->getName()]);
        \$mailer->setSubject(\$this->translator->trans('mautic.user.user.passwordreset.subject'));
        \$text = \$this->translator->trans(
            'mautic.user.user.passwordreset.email.body',
            ['%name%' => \$user->getFirstName(), '%resetlink%' => '<a href=\"'.\$resetLink.'\">'.\$resetLink.'</a>']
        );
        \$text = str_replace('\\\\n', \"\\n\", \$text);
        \$html = nl2br(\$text);

        \$this->emailUser(
            \$user,
            \$this->translator->trans('mautic.user.user.passwordreset.subject'),
            \$html
        );
    }

    /**
     * @throws \\RuntimeException
     */
    public function sendChangePasswordInfo(User \$user): void
    {
        \$text = \$this->translator->trans(
            'mautic.user.user.passwordchange.email.body',
            ['%name%' => \$user->getFirstName()]
        );
        \$text = str_replace('\\\\n', \"\\n\", \$text);
        \$html = nl2br(\$text);

        \$this->emailUser(
            \$user,
            \$this->translator->trans('mautic.user.user.passwordchange.subject'),
            \$html
        );
    }

    /**
     * @throws \\RuntimeException
     */
    public function sendChangeEmailInfo(string \$oldEmail, User \$user): void
    {
        \$mailer = \$this->mailHelper->getMailer();
        \$text   = \$this->translator->trans(
            'mautic.user.user.emailchange.email.body',
            ['%name%' => \$user->getFirstName()]
        );
        \$text = str_replace('\\\\n', \"\\n\", \$text);
        \$html = nl2br(\$text);

        \$mailer->setTo([\$oldEmail => \$user->getName()]);
        \$mailer->setBody(\$html);
        \$mailer->setSubject(\$this->translator->trans('mautic.user.user.emailchange.subject'));
        \$mailer->send();
    }

    public function emailUser(User \$user, string \$subject, string \$content): void
    {
        \$mailer  = \$this->prepareEMail(\$subject, \$content);
        \$mailer->setTo([\$user->getEmail() => \$user->getName()]);
        \$mailer->send();
    }

    /**
     * @param string[] \$emailAddresses
     */
    public function sendMailToEmailAddresses(array \$emailAddresses, string \$subject, string \$content): void
    {
        \$mailer  = \$this->prepareEMail(\$subject, \$content);
        \$mailer->setTo(\$emailAddresses);
        \$mailer->send();
    }

    private function prepareEMail(string \$subject, string \$content): MailHelper
    {
        \$mailer  = \$this->mailHelper->getMailer();
        \$content = str_replace('\\\\n', \"\\n\", \$content);
        \$html    = nl2br(\$content);
        \$mailer->setSubject(\$subject);
        \$mailer->setBody(\$html);
        \$mailer->setPlainText(strip_tags(\$content));

        return \$mailer;
    }

    /**
     * Set user preference.
     */
    public function setPreference(\$key, \$value = null, User \$user = null): void
    {
        if (null == \$user) {
            \$user = \$this->userHelper->getUser();
        }

        \$preferences       = \$user->getPreferences();
        \$preferences[\$key] = \$value;

        \$user->setPreferences(\$preferences);

        \$this->getRepository()->saveEntity(\$user);
    }

    /**
     * Get user preference.
     */
    public function getPreference(\$key, \$default = null, User \$user = null)
    {
        if (null == \$user) {
            \$user = \$this->userHelper->getUser();
        }
        \$preferences = \$user->getPreferences();

        return \$preferences[\$key] ?? \$default;
    }

    /**
     * Return list of Users for formType Choice.
     */
    public function getOwnerListChoices(): array
    {
        return \$this->getRepository()->getOwnerListChoices();
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
        return "@bundles/UserBundle/Model/UserModel.php";
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
        return new Source("", "@bundles/UserBundle/Model/UserModel.php", "/app/docroot/app/bundles/UserBundle/Model/UserModel.php");
    }
}