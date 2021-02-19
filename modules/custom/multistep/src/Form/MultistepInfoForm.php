<?php 
/**
 * @file
 * Contains \Drupal\multistep\Form\MultistepInitForm.
 */

namespace Drupal\multistep\Form;

use Drupal\Core\Form\FormStateInterface;
use Drupal\Core\Url;

class MultistepInfoForm extends MultistepFormBase {

  /**
   * {@inheritdoc}.
   */
  public function getFormId() {
    return 'multistep_info_form';
  }

  /**
   * {@inheritdoc}.
   */
  public function buildForm(array $form, FormStateInterface $form_state) {

    $first_name = $this->store->get('first_name');

    $form = parent::buildForm($form, $form_state);

    $form['message-step'] = [
      '#markup' => '<div class="step">' . $this->t('Step 2 of 12') . '</div>',
    ];

    $form['message-title'] = [
      '#markup' => '<div class="form-header"><h2>' . $this->t('Course Scheduling Wizard') . '</h2></div>'
    ];

    $form['message-instructions'] = [
      '#markup' => '<div class="form-instructions"><h4>' . $this->t('Thank you, <span class="name">')  . $first_name . $this->t('</span>! Next, we need to know about any special types of courses you may prefer.') . '</h4></div>',
    ];

    $form['prefs'] = array (
      '#type' => 'fieldset',
      '#title' => t('Select all that apply.'),
      '#attributes' => [
        'class' => [
          'form-container',
        ]]
    );

    $form['prefs']['isAP'] = array(
      '#type' => 'checkbox',
      '#title' => $this->t('I am interested in Honors or AP (Advanced Placement) courses.'),
      '#default_value' => $this->store->get('isAP') ? $this->store->get('isAP') : 0,
      '#return_value' => 1,
      '#required' => FALSE,
    );

    $form['prefs']['isFund'] = array(
        '#type' => 'checkbox',
        '#title' => $this->t('I am enrolled in the Fundamentals program.'),
        '#default_value' => $this->store->get('isFund') ? $this->store->get('isFund') : 0,
        '#return_value' => 1,
        '#required' => FALSE,
      );

    $form['prefs']['isELD'] = array(
      '#type' => 'checkbox',
      '#title' => $this->t('I will be enrolled in ELD next academic year.'),
      '#default_value' => $this->store->get('isELD') ? $this->store->get('isELD') : 0,
      '#return_value' => 1,
      '#required' => FALSE,
    );
    
    $form['prefs']['isCP'] = array(
      '#type' => 'checkbox',
      '#title' => $this->t('Just show me the regular college prep courses!'),
      '#return_value' => 1,
      '#required' => FALSE,
    );


  


    $form['actions']['submit']['#value'] = $this->t('Next');

    $form['actions']['previous'] = array(
      '#type' => 'link',
      '#title' => $this->t('Previous'),
      '#attributes' => array(
        'class' => array('btn', 'btn-primary'),
      ),
      '#weight' => 0,
      '#url' => Url::fromRoute('multistep.multistep_init_form')
     );

    return $form;
  }

  /**
   * {@inheritdoc}
   */
  public function submitForm(array &$form, FormStateInterface $form_state) {

    $keys = ['isAP', 'isFund', 'isELD'];
    foreach ($keys as $key) {
      $this->store->set($key, $form_state->getValue($key));
    }

 
    if($form_state->getTriggeringElement()['#id'] == 'edit-submit') {
      $form_state->setRedirect('multistep.multistep_english_class_form');
    }
    else {
      $form_state->setRedirect('multistep.multistep_init_form');
    }
  }
}
