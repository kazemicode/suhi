<?php 
/**
 * @file
 * Contains \Drupal\multistep\Form\MultistepFinalForm.
 */

namespace Drupal\multistep\Form;

use Drupal\Core\Form\FormStateInterface;
use Drupal\Core\Url;

class MultistepFinalForm extends MultistepFormBase {

  /**
   * {@inheritdoc}.
   */
  public function getFormId() {
    return 'multistep_init_form';
  }

  /**
   * {@inheritdoc}.
   */
  public function buildForm(array $form, FormStateInterface $form_state) {
  

    $form = parent::buildForm($form, $form_state);

    $form['message-step'] = [
      '#markup' => '<div class="step">' . $this->t('Review') . '</div>',
    ];

    $form['message-title'] = [
      '#markup' => '<div class="form-header"><h2>' . $this->t('Course Scheduling Wizard') . '</h2></div>'
    ];

    $form['message-instructions'] = [
      '#markup' => '<div class="form-instructions"><h4>' . $this->t('Review your course selections:') . '</h4></div>',
    ];
    
    $form['more'] = array (
      '#type' => 'fieldset',
      '#title' => t('If you have additional comments for your counselor, type them below:'),
      '#attributes' => [
        'class' => [
          'form-container',
        ]]
    );

    $form['more']['comments'] = [
      '#type' => 'textarea',
      '#title' => $this->t(''),
      '#default_value' => $this->store->get('comments') ? $this->store->get('comments') : '',
      '#required' => FALSE,
      '#attributes' => [
        'class' => [
          'form-group',
        ]]
    ];
      

    $form['actions']['submit']['#value'] = $this->t('Submit');
    $form['actions']['previous'] = array(
      '#type' => 'submit',
      '#value' => $this->t('Previous'),
     );

    return $form;
  }

  /**
   * {@inheritdoc}
   */
  public function submitForm(array &$form, FormStateInterface $form_state) {
    $this->store->set('comments', $form_state->getValue('comments'));
    if($form_state->getTriggeringElement()['#id'] == 'edit-submit') {
      drupal_set_message($this->store->get('comments'));
      parent::saveData();
     // $form_state->setRedirect('multistep.multistep_success');
    }
    else {
      $form_state->setRedirect('multistep.multistep_elective_class_form');
    }
  }
}