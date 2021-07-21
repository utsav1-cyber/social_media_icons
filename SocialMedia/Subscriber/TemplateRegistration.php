<?php

namespace SocialMedia\Subscriber;

use Enlight\Event\SubscriberInterface;

class TemplateRegistration implements SubscriberInterface
{
  private $pluginDirectory;

  public static function getSubscribedEvents()
  {
    return [
          'Enlight_Controller_Action_PostDispatchSecure_Frontend_Index' => 'onPostDispatch'
          ];
  }

  public function __construct($pluginDirectory)
  {
  $this->pluginDirectory = $pluginDirectory;
  }

    /**
     * @param \Enlight_Controller_ActionEventArgs $args
     */
  public function onPostDispatch(\Enlight_Controller_ActionEventArgs $args)
  {
    $view = $args->getSubject()->View();
    $view->addTemplateDir($this->pluginDirectory . '/Resources/views');
  }
}