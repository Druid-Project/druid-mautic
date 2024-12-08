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

/* @bundles/EmailBundle/Translations/en_US/messages.ini */
class __TwigTemplate_4261c43f54f708dc37907e89c12a1f04 extends Template
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
        yield "mautic.campaign.email.open=\"Email is opened\"
mautic.campaign.email.click=\"Email is clicked\"
mautic.campaign.email.send=\"Send or schedule email\"
mautic.campaign.email.reply=\"Replied to email\"
mautic.campaign.email.validate.address=\"Has valid email address\"
mautic.config.tab.emailconfig=\"Email Settings\"
mautic.placeholder_tokens.email_tokens=\"Email specific tokens\"
mautic.placeholder_tokens.email_tokens.explanation=\"The following tokens are available for use only within the email builder.\"
mautic.placeholder_tokens.email.signature=\"Signature\"
mautic.placeholder_tokens.email.subject=\"Subject\"
mautic.placeholder_tokens.email.unsubscribe_text=\"Unsubscribe text (HTML link)\"
mautic.placeholder_tokens.email.unsubscribe_url=\"Unsubscribe URL\"
mautic.placeholder_tokens.email.resubscribe_url=\"Resubscribe URL\"
mautic.placeholder_tokens.email.webview_text=\"Web view text\"
mautic.placeholder_tokens.email.webview_url=\"Web view URL\"
mautic.email.abtest.criteria.clickthrough=\"Clickthrough rate\"
mautic.email.abtest.criteria.open=\"Read rate\"
mautic.email.abtest.label.clickthrough=\"Number of clickthroughs\"
mautic.email.abtest.label.opened=\"Number read\"
mautic.email.abtest.label.sent=\"Number sent\"
mautic.protip.emails.unsubscribe=\"Always include an unsubscribe link and never use a no-reply email address.\"
mautic.protip.emails.test=\"Preview and test your emails across devices and clients to ensure they look great everywhere.\"
mautic.protip.emails.personalize=\"Personalize email content based on user behavior and preferences.\"
mautic.protip.emails.spam=\"Avoid spam trigger words in subject lines and email content\"
mautic.protip.emails.cta=\"Limit emails to one primary CTA to avoid decision paralysis\"
mautic.email.actions=\"Email actions\"
mautic.email.add_recipient=\"Add recipient\"
mautic.email.address.invalid_format=\"%email% is invalid.\"
mautic.email.address.invalid_characters=\"%email% has characters not allowed in email addresses.\"
mautic.email.address.invalid_domain=\"%email% does not seem to have a valid email domain (MX DNS record).\"
mautic.email.attachments=\"Attachments\"
mautic.email.attachments.help=\"Attachments are sent as file copies and can’t be tracked. To track downloads, use their link in the email content.\"
mautic.email.bcc.tooltip=\"Set a BCC address to receive a copy of every email sent.\"
mautic.email.bcc=\"BCC address\"
mautic.email.utm_tags=\"UTM tags\"
mautic.email.utm_tags.tooltip=\"Generate custom campaign parameters for your advertising URLs. Add parameters to URLs to identify the campaigns that refer traffic.\"
mautic.email.campaign_source=\"Campaign source\"
mautic.email.campaign_medium=\"Campaign medium\"
mautic.email.campaign_name=\"Campaign name\"
mautic.email.campaign_content=\"Campaign content\"
mautic.email.bounce.reason.antispam=\"Blocked as spam\"
mautic.email.bounce.reason.autoreply=\"Received an auto-reply\"
mautic.email.bounce.reason.bad_email=\"Incorrectly formatted email address\"
mautic.email.bounce.reason.command_reject=\"Server rejected request\"
mautic.email.bounce.reason.concurrent=\"Too many concurrent connections\"
mautic.email.bounce.reason.content_reject=\"Content was rejected\"
mautic.email.bounce.reason.defer=\"Message was deferred\"
mautic.email.bounce.reason.delayed=\"Message has been delayed\"
mautic.email.bounce.reason.dns_loop=\"There is a DNS loop\"
mautic.email.bounce.reason.dns_unknown=\"Domain is unknown\"
mautic.email.bounce.reason.full=\"Mailbox is full\"
mautic.email.bounce.reason.hard_bounce=\"Hard bounce\"
mautic.email.bounce.reason.inactive=\"Mailbox is inactive\"
mautic.email.bounce.reason.internal_error=\"Temporary system error\"
mautic.email.bounce.reason.invalid=\"Email is invalid\"
mautic.email.bounce.reason.latin_only=\"Server accepts latin characters only\"
mautic.email.bounce.reason.other=\"Delivery failed\"
mautic.email.bounce.reason.outofoffice=\"User is out of office\"
mautic.email.bounce.reason.oversize=\"Message is oversized\"
mautic.email.bounce.reason.rejected=\"Mail rejected\"
mautic.email.bounce.reason.soft_bounce=\"Soft bounce\"
mautic.email.bounce.reason.spam=\"Marked as spam\"
mautic.email.bounce.reason.unknown=\"Unknown user or server\"
mautic.email.bounce.reason.unrecognized=\"Unrecognized user\"
mautic.email.bounce.reason.unsubscribed=\"Contact unsubscribed via email\"
mautic.email.bounce.reason.user_reject=\"User rejected this email\"
mautic.email.bounce.reason.warning=\"Server gave warning\"
mautic.email.complaint.reason.unknown=\"Unknown complaint from mail provider\"
mautic.email.complaint.reason.abuse=\"Mail provider indicated unsolicited email or some other kind of email abuse\"
mautic.email.complaint.reason.fraud=\"Mail provider indicated some kind of fraud or phishing activity\"
mautic.email.complaint.reason.virus=\"Mail provider reports that a virus is found in the originating message\"
mautic.email.contact_already_received_marketing_email=\"%contact% has already received this marketing email.\"
mautic.email.contact_has_no_email=\"%contact% has no email address.\"
mautic.email.contact_has_unsubscribed_from_category=\"%contact% has unsubscribed the category %category%.\"
mautic.email.builder.addcontent=\"Click to add content\"
mautic.email.builder.index=\"Extras\"
mautic.email.campaign.event.open=\"Opens email\"
mautic.email.campaign.event.open_descr=\"Trigger actions when an email is opened. Connect a Send Email action to the top of this decision.\"
mautic.email.campaign.event.click=\"Clicks email\"
mautic.email.campaign.event.click_descr=\"Trigger actions when an email is clicked. Connect a Send Email action to the top of this decision.\"
mautic.email.campaign.event.failure_missing_email=\"Email not found or published\"
mautic.email.click.urls.contains=\"Limit to Urls contains\"
mautic.email.campaign.event.send=\"Send email\"
mautic.email.campaign.event.send_descr=\"Send the selected email to the contact.\"
mautic.email.campaign.event.send.to.user=\"Send email to user\"
mautic.email.campaign.event.send.to.user_descr=\"Send email to user, owner or other email addresses\"
mautic.email.campaign.event.validate_address=\"Has valid email address\"
mautic.email.campaign.event.validate_address_descr=\"Attempt to validate contact's email address. This may not be 100% accurate.\"
mautic.email.campaignId.filter=\"Campaign filter\"
mautic.form.action.send.email.to.owner=\"Send email to contact's owner\"
mautic.email.choose.emails_descr=\"Choose the email to be sent. If your email is not displayed, it may not be published or it is a segment email.\"
mautic.email.companyId.filter=\"Company filter\"
mautic.email.config.header.mail=\"Mail Send Settings\"
mautic.email.config.header.mail.setting=\"Email Settings\"
mautic.email.config.header.message=\"Message Settings\"
mautic.email.config.header.monitored_email=\"Monitored Inbox Settings\"
mautic.email.config.mailer.append.tracking.pixel.tooltip=\"Enables automatic appending of tracking pixel image into email body. WARNING: Disabling this option will disable tracking of email open actions!\"
mautic.email.config.mailer.append.tracking.pixel=\"Append tracking pixel into email body ?\"
mautic.email.config.mailer.disable.trackable.urls=\"Disable trackable urls\"
mautic.email.config.mailer.disable.trackable.urls.tooltip=\"Gmail (and GSuite) don't like redirecting urls.\"
mautic.email.config.mailer.minify.html=\"Minify HTML\"
mautic.email.config.mailer.minify.html.tooltip=\"Minifying HTML can improve the performance of sending marketing emails by reducing the size of the email. However, it may also cause a slight delay in the sending process and increase CPU usage on the sender's end.\"
mautic.email.config.mailer.convert.embed.images.tooltip=\"Enable automatic conversion of embed images to Base64\"
mautic.email.config.mailer.convert.embed.images=\"Convert embed images to Base64\"
mautic.email.config.mailer.encryption.tooltip=\"Set the encryption type used by the SMTP server\"
mautic.email.config.mailer.encryption=\"SMTP encryption type\"
mautic.email.config.mailer.from.email.tooltip=\"Set the from email for email sent by Mautic\"
mautic.email.config.mailer.from.email=\"E-mail address to send mail from\"
mautic.email.config.mailer.from.name.tooltip=\"Set the from name for email sent by Mautic\"
mautic.email.config.mailer.from.name=\"Name to send mail as\"
mautic.email.config.mailer.host.tooltip=\"Set the host for SMTP server\"
mautic.email.config.mailer.host=\"SMTP host\"
mautic.email.config.mailer.is.owner.tooltip=\"Set the default mailer is owner setting for all new emails that are created\"
mautic.email.config.mailer.is.owner=\"Mailer is owner\"
mautic.email.config.mailer.is.owner.local.warning=\"The global mailer is owner option is set to <strong>%value%</strong>. This option overwrites that global option just for this email.\"
mautic.email.config.mailer.password.tooltip=\"Set the password required to authenticate the selected mail service\"
mautic.email.config.mailer.password=\"Password for the selected mail service\"
mautic.email.config.mailer.port.tooltip=\"Set the port for the mail server\"
mautic.email.config.mailer.port=\"Port\"
mautic.email.config.mailer.return.path.tooltip=\"Set a custom return path/bounce email for emails sent from the system. Note that some mail transports, such as Gmail, will not support this.\"
mautic.email.config.mailer.return.path=\"Custom return path (bounce) address\"
mautic.email.config.mailer.transport.test_send.body=\"Hi! This is a test email from Mautic. Testing...testing...1...2...3!\"
mautic.email.config.mailer.transport.test_send.subject=\"Mautic test email\"
mautic.email.config.mailer.transport.test_send=\"Send test email\"
mautic.email.config.mailer.transport.tooltip=\"Set the service email should be sent through. Mautic is not affiliated with any of these services but simply supply their SMTP settings for convenience.\"
mautic.email.config.mailer.transport=\"Service to send mail through\"
mautic.email.config.mailer.user.tooltip=\"Set the username required to authenticate the selected mail service\"
mautic.email.config.mailer.user=\"Username for the selected mail service\"
mautic.email.config.mailer_transport.smtp=\"Other SMTP Server\"
mautic.email.config.monitored_email.not_configured=\"IMAP account is not configured.\"
mautic.email.config.monitored_email.bounce_folder.tooltip=\"Folder to monitor for new bounce messages.  Leave blank to disable. <strong>NOTE</strong>: Gmail will rewrite Return-Path headers when sending through their SMTP servers. Mautic will still attempt to analyze new messages for bounces but it is best to use another sending method or configure a unique mailbox.\"
mautic.email.config.monitored_email.bounce_folder=\"Bounces\"
mautic.email.config.monitored_email.general=\"Default Mailbox\"
mautic.email.config.monitored_email.test_connection=\"Test connection and fetch folders\"
mautic.email.config.monitored_email.unsubscribe_folder.tooltip=\"Folder to monitor for new unsubscribe requests. Leave blank to disable.\"
mautic.email.config.monitored_email.unsubscribe_folder=\"Unsubscribe Requests\"
mautic.email.config.monitored_email_address.tooltip=\"The address for the account to be monitored. This will be used when generating a bounce, unsubscribe, etc., addresses if applicable.\"
mautic.email.config.monitored_email_address=\"Monitored address\"
mautic.email.config.monitored_email_encryption.ssl_novalidate=\"SSL with novalidate-cert\"
mautic.email.config.monitored_email_encryption.tls_novalidate=\"TLS with novalidate-cert\"
mautic.email.config.monitored_email_encryption.tooltip=\"Encryption for server connection. Some servers may require the no-validate options which will not validate the server's SSL certificate.\"
mautic.email.config.monitored_email_encryption=\"Encryption\"
mautic.email.config.monitored_email_folder.tooltip=\"Choose the folder to check or leave empty to disable.\"
mautic.email.config.monitored_email_folder=\"Folder to check\"
mautic.email.config.monitored_email_host.tooltip=\"IMAP URL for the mail service host.\"
mautic.email.config.monitored_email_host=\"IMAP host\"
mautic.email.config.monitored_email_override_settings.tooltip=\"If yes, configure custom connection settings for this mailbox. Otherwise, Mautic will use the default mailbox.\"
mautic.email.config.monitored_email_override_settings=\"Use custom connection settings?\"
mautic.email.config.monitored_email_password.tooltip=\"Password to login to the IMAP server.\"
mautic.email.config.monitored_email_password=\"IMAP password\"
mautic.email.config.monitored_email_port.tooltip=\"Port to use to connect to the mail host.\"
mautic.email.config.monitored_email_port=\"Port\"
mautic.email.config.monitored_email_user.tooltip=\"Username to login to the IMAP server.\"
mautic.email.config.monitored_email_user=\"IMAP username\"
mautic.email.config.resubscribe_message.tooltip=\"Set the default text for the message displayed to the contact when they resubscribe using the link displayed in the unsubscribe success message. Be sure to use the <code>|URL|</code> placeholder where the unsubscribe url is to be injected. The use of <code>|EMAIL|</code> is optional.\"
mautic.email.config.resubscribe_message=\"Resubscribed confirmation message\"
mautic.email.config.unsubscribe_message.tooltip=\"Set the default text for the message displayed to the contact when they unsubscribe using the link in an email. Be sure to use the <code>|URL|</code> placeholder where the resubscribe url is to be injected. The use of <code>|EMAIL|</code> is optional.\"
mautic.email.config.unsubscribe_message=\"Unsubscribed confirmation message\"
mautic.email.config.unsubscribe_text.tooltip=\"Set the default text for the {unsubscribe_text} token used in emails. Be sure to use the <code>|URL|</code> placeholder where the unsubscribe url is to be injected.\"
mautic.email.config.unsubscribe_text=\"Text for the {unsubscribe_text} token\"
mautic.email.config.webview_text.tooltip=\"Set the default text for the {webview_text} token used in emails. Be sure to use the <code>|URL|</code> placeholder where the web view url is to be injected.\"
mautic.email.config.webview_text=\"Text for the {webview_text} token\"
mautic.email.config.mailer.mailjet.sandbox=\"Sandbox mode\"
mautic.email.config.mailer.mailjet.sandbox.mail=\"Default mail for Sandbox mode\"
mautic.email.custom_headers=\"Custom headers\"
mautic.email.custom_headers.config.tooltip=\"Define custom headers to use for any outgoing email that is not associated with a Mautic Email. This includes password reset emails, emails to Mautic users, form post results, directly composed email to contacts, etc. If custom headers are required for an Email (used in campaigns or broadcasts), set customer headers in the Advanced tab of the Email.\"
mautic.email.custom_headers.tooltip=\"Add information for email tracking, spam identification, authentication, and more\"
mautic.email.dashboard.widgets=\"Email Widgets\"
mautic.email.default.signature=\"Best regards, %from_name%\"
mautic.email.dnc.failed=\"Too many failures when attempting to deliver the email with a subject of '%subject%'.\"
mautic.email.dnc.retries=\"There were more than 3 attempts to send the email.\"
mautic.email.dnc.unsubscribed=\"User unsubscribed.\"
mautic.email.dnc=\"Contact has requested to not be emailed.\"
mautic.email.email=\"Email\"
mautic.email.emails=\"Emails\"
mautic.keyboard.section.emails=\"Emails\"
mautic.email.event.sent.direct=\"Direct email to %contact%\"
mautic.email.event.sent=\"%email% sent %x% times\"
mautic.email.example_recipients=\"Recipients\"
mautic.email.failed.emails=\"Failed emails\"
mautic.email.failed=\"Email failed\"
mautic.email.replied=\"Email replied\"
mautic.email.fetch.processed=\"{0}0 emails processed for %imapPath% with a criteria of %criteria%|{1}1 email processed for %imapPath% with a criteria of %criteria%|]1,Inf[%count% emails processed for %imapPath% with a criteria of %criteria%\"
mautic.email.fetch.no_mailboxes_configured=\"No mailboxes are configured.\"
mautic.email.filter.options.empty=\"There are no filter options. Create some Email Categories or Contact Segments.\"
mautic.email.filter.placeholder=\"Segment/Theme Filter\"
mautic.email.flag.failed=\"Only failed emails\"
mautic.email.flag.filter=\"Email state filter\"
mautic.email.flag.opened=\"Only opened emails\"
mautic.email.flag.sent.and.opened.and.failed=\"Sent, opened and failed emails\"
mautic.email.flag.sent.and.opened=\"Sent and opened emails\"
mautic.email.flag.sent=\"Only sent emails\"
mautic.email.form.abtestwinner=\"A/B test winner criteria\"
mautic.email.form.action.sendemail.admin=\"Send email to user\"
mautic.email.form.action.sendemail.admin.descr=\"Send the selected email to the selected user(s) upon form submission.\"
mautic.email.form.action.sendemail.lead.descr=\"Send the selected email to the contact upon form submission.\"
mautic.email.form.action.sendemail.lead=\"Send email to contact\"
mautic.email.form.body=\"HTML Code\"
mautic.email.form.body.help=\"Customise your email's HTML content.\"
mautic.email.form.confirmbatchdelete=\"Delete the selected emails? WARNING - this will also delete all associated A/B tests and translations!\"
mautic.email.form.confirmdelete=\"Delete the email, %name%? WARNING - this will also delete all associated A/B tests and translations!\"
mautic.email.form.confirmsend=\"Queue, %name%, for sending?\"
mautic.email.form.internal.name=\"Internal Name\"
mautic.email.form.list=\"Contact segment\"
mautic.email.form.excluded_list=\"Exclude contact segment\"
mautic.email.form.plaintext.help=\"Use the Email Builder to customize your email's HTML. If you want a plain text version associated with the email, enter the text below.\"
mautic.email.form.plaintext=\"Plain text version\"
mautic.email.form.publishdown.help=\"For Segment emails - To schedule an ‘unpublish date’ on a segment email, select your unpublish date before saving and closing.\"
mautic.email.form.submit.message=\"Send message\"
mautic.email.form.submit.message_descr=\"Custom 'thank you' message\"
mautic.email.form.template.help=\"Choose the theme that will give the email it's look and feel. Then use the Builder to fill in the contents. WARNING: Changing the theme after building the email may cause content to not display if the two themes do not use the same slots.\"
mautic.email.form.trafficweight.help=\"Define the percentage of traffic that will be shown this variant. For example, 50 will send the parent/main email 50% of the time and this variant 50% of the time. If there are two variants each with a weight of 25, then the parent/main email will be sent 50% of the time, one variant 25%, and the other 25%. And so forth with additional variants.\"
mautic.email.form.trafficweight=\"Traffic Weight\"
mautic.email.form.unsubscribeform.tooltip=\"Display the selected form on the unsubscribe page if a user unsubscribes through this email.\"
mautic.email.form.unsubscribeform=\"Unsubscribe feedback form\"
mautic.email.from_email.tooltip=\"Set the from address for this email. This will default to the system configuration if left blank.\"
mautic.email.from_email=\"From address\"
mautic.email.from_name.tooltip=\"Set the from name for the this email. This will default to the system configuration if left blank.\"
mautic.email.from_name=\"From name\"
mautic.email.use.owner.as.mailer.tooltip=\"If identified in the contact’s profile, the owner’s email and name will be set as sender.\"
mautic.email.use.owner.as.mailer=\"Use contact owner as mailer\"
mautic.email.graph.line.stats.failed=\"Failed\"
mautic.email.graph.line.stats.read=\"Read\"
mautic.email.graph.line.stats.sent=\"Sent\"
mautic.email.graph.line.stats=\"Emails sent\"
mautic.email.graph.pie.ignored.read.failed.failed=\"Failed\"
mautic.email.graph.pie.ignored.read.failed.ignored=\"Ignored\"
mautic.email.graph.pie.ignored.read.failed.read=\"Read\"
mautic.email.graph.pie.ignored.read.failed=\"Ignored / Read / Failed emails\"
mautic.email.graph.pie.read.ingored.unsubscribed.bounced=\"Read / Ignored / Unsubscribed / Bounced\"
mautic.email.graph.pie.sent.read.clicked.unsubscribed=\"Sent / Read / Clicked / Unsubscribed\"
mautic.email.graph.bar.read.clicked.unsubscribed.bounced=\"Read / Clicked / Unsubscribed / Bounced\"
mautic.email.header.edit=\"Edit Email - %name%\"
mautic.email.header.new=\"New Email\"
mautic.email.icon_tooltip.abtest=\"Has A/B tests\"
mautic.email.icon_tooltip.list_email=\"Is a segment (broadcast) email\"
mautic.email.icon_tooltip.has_draft=\"Has Draft\"
mautic.email.config.enable.draft=\"Enable Email Drafts\"
mautic.email.config.enable.draft.tooltip=\"Allow saving new email changes as drafts to compare the differences. Drafts can be then approved or discarded.\"
mautic.email.imap_extension_missing=\"The <a href='http://php.net/manual/en/book.imap.php' target='_new'>PHP IMAP extension</a> is required in order to enable monitored email features.\"
mautic.email.lead.list.comparison=\"Contact segments comparison\"
mautic.email.label.reads=\"Read count\"
mautic.email.label.sends=\"Send count\"
mautic.email.lists.combined=\"All lists combined\"
mautic.email.no.emails.note=\"There are no emails to choose from. Create some first.\"
mautic.email.open.limittoemails=\"Limit to these selected emails\"
mautic.email.open.limittoemails_descr=\"Only apply if the selected emails are opened. If none are selected, any email opened will be applicable.\"
mautic.email.permissions.emails=\"Emails - User has access to\"
mautic.email.permissions.header=\"Email Permissions\"
mautic.email.plaintext.generate=\"Auto Generate\"
mautic.email.point.action.open=\"Opens an email\"
mautic.email.point.action.send=\"Is sent an email\"
mautic.email.point.trigger.sendemail=\"Send an email\"
mautic.email.point.trigger.send_email_to_user=\"Send an email to user\"
mautic.email.read=\"Email read\"
mautic.email.click=\"Email clicked\"
mautic.email.point.trigger=\"Email triggers\"
mautic.email.read.emails=\"Read emails\"
mautic.email.readcount=\"Read count\"
mautic.email.recipient.lists=\"Recipient Lists\"
mautic.email.reply_to_email.tooltip=\"Leave blank to use the from address.\"
mautic.email.reply_to_email=\"Reply to address\"
mautic.email.report.read.delay=\"Read delay\"
mautic.email.report.read_count=\"Read count\"
mautic.email.report.read_ratio=\"Read ratio\"
mautic.email.report.sent_count=\"Sent count\"
mautic.email.report.is_hit=\"Clicked\"
mautic.email.report.hits_count=\"Clicks\"
mautic.email.report.unique_hits_count=\"Unique clicks\"
mautic.email.report.hits_ratio=\"Clicks ratio\"
mautic.email.report.unique_ratio=\"Unique clicks ratio\"
mautic.email.report.unsubscribed=\"Unsubscribed\"
mautic.email.report.unsubscribed_ratio=\"Unsubscribed ratio\"
mautic.email.report.bounced=\"Bounced\"
mautic.email.report.bounced_ratio=\"Bounced ratio\"
mautic.email.report.revision=\"Revision\"
mautic.email.report.stat.date_read=\"Date read\"
mautic.email.report.stat.date_sent=\"Date sent\"
mautic.email.report.stat.email_address=\"Email address\"
mautic.email.report.stat.is_failed=\"Is failed\"
mautic.email.report.stat.is_read=\"Read\"
mautic.email.report.stat.retry_count=\"Retry count\"
mautic.email.report.stat.viewed_in_browser=\"Viewed in browser\"
mautic.email.report.variant_parent_id=\"A/B test parent ID\"
mautic.email.report.variant_parent_subject=\"A/B test parent subject\"
mautic.email.report.variant_read_count=\"A/B test read count\"
mautic.email.report.variant_sent_count=\"A/B test sent count\"
mautic.email.report.variant_start_date=\"A/B test start date\"
mautic.email.report.click_through_count=\"Click-through count\"
mautic.email.report.click_through_rate=\"Click-through rate\"
mautic.email.report.click_to_open_rate=\"Click-to-open rate\"
mautic.email.resubscribed.success=\"%email% has been re-subscribed. If this was by mistake, <a href='%unsubscribeUrl%'>click here to unsubscribe</a>.\"
mautic.email.segmentId.filter=\"Segment filter\"
mautic.email.send=\"Send\"
mautic.email.send.emailtype=\"Email type\"
mautic.email.send.emailtype.tooltip=\"Transactional emails can be sent to the same contact multiple times across campaigns. Transactional emails ignore the DNC setting and can be sent to 'Do Not Contact' contacts. Marketing emails will be sent only once to the contact even if it was sent from another campaign.\"
mautic.email.send.emailtype.transactional=\"Transactional\"
mautic.email.send.emailtype.marketing=\"Marketing\"
mautic.email.send.edit.email.desc=\"Edit email from here. New window will pop up and allows you to edit email\"
mautic.email.send.edit.email=\"Edit Email\"
mautic.email.send.example=\"Send Example\"
mautic.email.send.disabled=\"Email is sending in the background. Sending from the browser is blocked to prevent duplicate emails\"
mautic.email.send.inprogress=\"Sending is in progress. Leaving this page will stop the process but may cause contacts to receive duplicate emails when restarted.\"
mautic.email.send.instructions=\"Enter the number of emails to send per batch then click Send to start the process.\"
mautic.email.send.list=\"Send &quot;%name%&quot;\"
mautic.email.send.new.email.desc=\"Create new email from here. New window will pop up and allows you to create new email.\"
mautic.email.send.new.email=\"New Email\"
mautic.email.send.pending=\"{0} There are no pending contacts.|{1} There is one pending contact.|[2, +Inf[ There are %count% pending contacts.\"
mautic.email.send.preview.email =\"Preview Email\"
mautic.email.send.preview.email.desc=\"Preview email from here. New window will pop up and allows you to preview email\"
mautic.email.send.selectemails=\"Email to send\"
mautic.email.send.stats=\"%sent% sent and %failed% failed\"
mautic.email.send.success=\"&quot;%subject%&quot; was sent out!\"
mautic.email.send.with_errors=\"&quot;%subject%&quot; was sent but with some failures.\"
mautic.email.sendmanual=\"Send (Manual)\"
mautic.email.sent.emails=\"Sent emails\"
mautic.email.sent=\"Email sent\"
mautic.email.stage.action.open=\"Opens an email\"
mautic.email.stage.action.send=\"Sends an email\"
mautic.email.stats.options.title=\"Emails\"
mautic.email.stats=\"Email Stats\"
mautic.email.stats.report.table=\"Emails Sent\"
mautic.email.stat.leadcount=\"%count% Pending\"
mautic.email.stat.readcount=\"%count% Read\"
mautic.email.stat.sentcount=\"%count% Sent\"
mautic.email.stat.failed=\"Failed\"
mautic.email.stat.leadcount.tooltip=\"Number of contacts that have not received this email.\"
mautic.email.stat.pending=\"Pending\"
mautic.email.stat.queued=\"%count% Queued\"
mautic.email.stat.queued.tooltip=\"Number of contacts that has this emailed queued to be sent based on their frequency rules.\"
mautic.email.stat.read=\"Read\"
mautic.email.stat.notread=\"Not Read\"
mautic.email.stat.readpercent=\"%count%% Read\"
mautic.email.stat.sent=\"Sent\"
mautic.email.stat.delivered=\"Delivered\"
mautic.email.stat_record.not_found=\"Record not found.\"
mautic.email.subject=\"Subject\"
mautic.email.table.most.emails.failed=\"Most emails failed\"
mautic.email.table.most.emails.unsubscribed=\"Most emails unsubscribed\"
mautic.email.table.most.emails.bounced=\"Most emails bounced\"
mautic.email.table.most.emails.read.percent=\"Read ratio [%]\"
mautic.email.table.most.emails.read=\"Most emails read\"
mautic.email.table.most.emails.sent=\"Most emails sent\"
mautic.email.table.most.emails.clicks=\"Most clicked links\"
mautic.email.thead.stats=\"Stats\"
mautic.email.thead.maps=\"Map\"
mautic.email.timeline.event.bounced=\"Email Bounced\"
mautic.email.timeline.event.custom_email=\"Custom Email\"
mautic.email.timeline.event.email_reply=\"Reply\"
mautic.email.timeline.event.failed=\"Sending email failed.\"
mautic.email.timeline.event.list=\"Email was sent to this contact because they belong to the '%list%' segment.\"
mautic.email.timeline.event.not.read=\"Email has probably <strong>not been read</strong> yet.\"
mautic.email.timeline.open_details=\"Email Opened History\"
mautic.email.timeline.event.read=\"Email <strong>was first read on %date%</strong>. That was %interval% after the email was sent %sent%.\"
mautic.email.timeline.event.retried=\"one: Email was re-sent once for now.|some: Email was re-sent %count% times for now.\"
mautic.email.timeline.event.sent=\"Email <strong>was first read on %date%</strong>. That was %interval% after the email was sent.\"
mautic.email.timeline.event.viewed.in.browser=\"Contact also viewed this email in the browser.\"
mautic.email.token.dragme=\"Drag and drop me!\"
mautic.email.token.help=\"Drag and drop the desired token into the content section of choice.\"
mautic.email.token.signature.descr=\"Signature text defined in the configuration or in the user profile\"
mautic.email.token.signature=\"Signature\"
mautic.email.config.default_signature_text=\"Default email signature\"
mautic.email.config.default_signature_text.tooltip=\"This signature will be used for emails sent to a contact who doesn't have any owner. If the 'Mailer is owner' option is ON and contact has an owner, the signature of this owner/user profile will be used. Use {signature} token to insert it in an email.\"
mautic.email.token.unsubscribe_text.descr=\"Inserts an unsubscribe message and link.\"
mautic.email.token.unsubscribe_text=\"Unsubscribe Text\"
mautic.email.token.unsubscribe_url.descr=\"Inserts only the unsubscribe URL.\"
mautic.email.token.unsubscribe_url=\"Unsubscribe URL\"
mautic.email.token.unsubscribe_all_url=\"Unsubscribe from all URL\"
mautic.email.token.resubscribe_url.descr=\"Inserts only the resubscribe URL.\"
mautic.email.token.resubscribe_url=\"Resubscribe URL\"
mautic.email.token.webview_text.descr=\"Inserts a web view message and link.\"
mautic.email.token.webview_text=\"Web View Text\"
mautic.email.token.webview_url.descr=\"Inserts only the web view URL.\"
mautic.email.token.webview_url=\"Web View URL\"
mautic.email.tokens.header=\"Tokens\"
mautic.email.tokens.help=\"Tokens are placeholders for featured objects. Just drag and drop the token into the editor to add it!\"
mautic.email.total=\"Total\"
mautic.email.type.header=\"What type of email do you want to create?\"
mautic.email.type.segment.differences.1st=\"For newsletters, offers, updates etc\"
mautic.email.type.segment.differences.2nd=\"Allows one send per contact\"
mautic.email.type.segment.differences.3rd=\"Designed for marketing use\"
mautic.email.type.segment.differences.4th=\"Used in mass email sending\"
mautic.email.type.list.header=\"Segment email\"
mautic.email.type.list=\"Segment Emails\"
mautic.email.type.template.header=\"Triggered email\"
mautic.email.type.template.differences.1st=\"For campaigns, forms and points events\"
mautic.email.type.template.differences.2nd=\"Allows to send multiple times\"
mautic.email.type.template.differences.3rd=\"Suited for transactional use\"
mautic.email.type.template.differences.4th=\"Based on users' specific actions\"
mautic.email.type.template=\"Triggered Emails\"
mautic.email.unsubscribe.text=\"<a href='%link%'>Unsubscribe</a> to no longer receive emails from us.\"
mautic.email.unsubscribe=\"Unsubscribe\"
mautic.email.unsubscribed.success=\"We are sorry to see you go! %email% will no longer receive emails from us. If this was by mistake, <a href='%resubscribeUrl%'>click here to re-subscribe</a>.\"
mautic.email.unsubscribe_all.text=\"<a href='%link%'>Unsubscribe</a> from all marketing messages.\"
mautic.email.preferences_center_success_message.text=\"Preferences saved successfully\"
mautic.email.urlvariant=\"Public Preview URL\"
mautic.email.preview.show.translation=\"Show preview for translation\"
mautic.email.preview.show.ab.variant=\"Show preview for A/B variant\"
mautic.email.preview.show.contact=\"Show preview for contact\"
mautic.email.drafturlvariant=\"Public Draft Preview URL\"
mautic.email.preview.url=\"Preview URL\"
mautic.email.draft.preview.url=\"Draft Preview URL\"
mautic.email.variant.misconfiguration=\"There is a mismatched configuration between variants. Please ensure all variants are configured with the same winner criteria.\"
mautic.email.variants=\"Variants\"
mautic.email.variantstartdate=\"A/B Test started on %date% at %time%\"
mautic.email.variant.graph.all=\"All\"
mautic.email.variant.graph.variant=\"Variant\"
mautic.email.webhook.event.send=\"Email Send Event\"
mautic.email.webhook.event.open=\"Email Open Event\"
mautic.email.webview.text=\"<a href='%link%'>Having trouble reading this email? Click here.</a>\"
mautic.widget.created.emails=\"Created emails\"
mautic.widget.emails.in.time=\"Emails in time\"
mautic.widget.emails.best.hours=\"Best email read hours \"
mautic.widget.emails.best.hours.reads_total=\"Hourly percentage from %reads% reads\"
mautic.widget.most.hit.email.redirects=\"Most hit email redirects\"
mautic.widget.sent.email.to.contacts=\"Sent email to contacts\"
mautic.widget.ignored.vs.read.emails=\"Ignored vs read\"
mautic.widget.most.read.emails=\"Most read emails\"
mautic.widget.most.sent.emails=\"Most sent emails\"
mautic.widget.upcoming.emails=\"Upcoming emails\"
mautic.email.ignored.emails=\"Ignored emails\"
mautic.email.unsubscribed.emails=\"Unsubscribed emails\"
mautic.email.bounced.emails=\"Bounced emails\"
mautic.email.unsubscribed=\"Unsubscribed\"
mautic.email.bounced=\"Bounced\"
mautic.email.clicked=\"Clicked\"
mautic.email.config.header.queue=\"Queue\"
mautic.email.config.alert.queue=\"Be sure to have your credentials properly written\"
mautic.email.config.track.mail.use.queue=\"Use queue\"
mautic.email.config.track.mail.use.queue.tooltip=\"Emails are tracked using rabbitmq\"
device.granularity.email=\"Devices for emails read\"
mautic.widget.device.granularity.email=\"Devices for emails read\"
mautic.email.config.header.unsubscribe=\"Unsubscribe Settings\"
mautic.email.config.show.preference.options=\"Show contact preference settings\"
mautic.email.config.show.preference.options.tooltip=\"If this option is enabled, the default unsubscribed message will not show.\"
mautic.email.config.show.contact.segments=\"Show contact segment preferences\"
mautic.email.config.show.contact.segments.tooltip=\"This option will allow the contact to unselect their segments.\"
mautic.email.config.show.contact.frequency=\"Show contact frequency preferences\"
mautic.email.config.show.contact.frequency.tooltip=\"This will allow the contact to set their frequency rules.\"
mautic.email.config.show.contact.pause.dates=\"Show pause contact preferences\"
mautic.email.config.show.contact.pause.dates.tooltip=\"This will allow the contact set a pause start date and end date.\"
mautic.email.config.show.contact.categories=\"Show contact's categories\"
mautic.email.config.show.contact.categories.tooltip=\"This will allow the contact to opt out of categories they belong to.\"
mautic.email.config.show.contact.preferred.channels=\"Show contact's preferred channel option\"
mautic.email.config.show.contact.preferred.channels.tooltip=\"This will allow the contact to set their preferred channel; it will only show if there is more than one contact channels.\"
mautic.lead.message.preferences=\"Message Preferences\"
mautic.lead.message.preferences.descr=\"Please use the form below to set your message preferences.\"
mautic.report.group.emails=\"Emails\"
mautic.email.campaign.event.reply=\"Replies to email\"
mautic.email.campaign.event.reply_descr=\"Trigger action when contact replies to an email\"
mautic.email.config.monitored_email.reply_folder=\"Contact Replies\"
mautic.email.stat.tooltip=\"Details may not match summary numbers if the contact no longer exists in your Mautic Account or if a contact was sent or read an email multiple times\"
mautic.email.stat.simple.tooltip=\"Details may not match summary numbers if the contact no longer exists in your Mautic Account\"
mautic.email.associated.contacts=\"Contacts\"
mautic.email.segment.choice.generated_email_domain=\"Email Domain\"
mautic.email.config.mailer_encryption.none=\"None\"
mautic.email.config.mailer_encryption.ssl=\"SSL\"
mautic.email.config.mailer_encryption.tls=\"TLS\"
mautic.email.config.header.dsn=\"Email DSN\"
mautic.email.heatmap.click_heatmap=\"Click heatmap\"
mautic.email.heatmap.clicks=\"{0}0 clicks|{1}1 click|[2,Inf]%count% clicks\"
mautic.email.heatmap.clicks_recorded=\"Clicks recorded\"
mautic.email.heatmap.total=\"total\"
mautic.email.heatmap.unique=\"unique\"
mautic.email.heatmap.heat_scale=\"Heat scale\"
mautic.email.heatmap.cold=\"cold\"
mautic.email.heatmap.hot=\"hot\"
mautic.email.usages=\"Email usages\"
mautic.email.no_usages=\"This email is not used by other components.\"
mautic.email.preheader_text=\"Preheader Text\"
mautic.email.preheader_text.tooltip=\"Short summary text that follows the subject line when viewing an email from the inbox, ideally between 85 and 100 characters.\"
mautic.email.preheader_text=\"Preheader Text\"
mautic.email.preheader_text.tooltip=\"Short summary text that follows the subject line when viewing an email from the inbox, ideally between 85 and 100 characters.\"
mautic.email.send.dnc.label=\"Send to unsubscribed contacts\"
mautic.email.send.dnc.tooltip.info=\"If it is Yes, your email will be sent to people who have unsubscribed. Only emails that are transactional, have critical information, or are prompted by recipient actions should bypass the unsubscribe status.\"
mautic.email.send.dnc.tooltip=\"If you select this, your email will be sent to people who have unsubscribed. Only emails that are transactional, have critical information, or are prompted by recipient actions should bypass the unsubscribe status.\"
mautic.email.send.dnc.confirmation=\"If you select this, your email will be sent to people who meet the stated criteria, including those who unsubscribed. Only emails that are transactional, have critical information, or are prompted by recipient actions should bypass the unsubscribe status. Proceed?\"
mautic.email.send.dnc.confirmation.confirm.text=\"Yes\"
mautic.email.send.dnc.confirmation.cancel.text=\"Cancel\"
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@bundles/EmailBundle/Translations/en_US/messages.ini";
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
        return new Source("", "@bundles/EmailBundle/Translations/en_US/messages.ini", "/app/docroot/app/bundles/EmailBundle/Translations/en_US/messages.ini");
    }
}