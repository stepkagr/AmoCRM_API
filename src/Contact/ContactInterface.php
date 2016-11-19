<?php
namespace AmoCMSAPI\Contact;

use AmoCMSAPI\JsonDecodableInterface;

/**
 * @author Artur Sh. Mamedbekov
 */
interface ContactInterface extends \JsonSerializable, JsonDecodableInterface{
  public function getId();

  public function getRequestId();

  public function getName();

  /**
   * @see ContactType
   *
   * @return string
   */
  public function getType();

  public function getCompanyName();

  public function getLeadsId();

  public function getTags();

  public function getCustomFields();

  public function getCreatorId();

  public function getAdded();

  public function getUpdated();
}
