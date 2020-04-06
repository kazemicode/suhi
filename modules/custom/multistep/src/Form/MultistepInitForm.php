<?php 
/**
 * @file
 * Contains \Drupal\multistep\Form\MultistepInitForm.
 */

namespace Drupal\multistep\Form;

use Drupal\Core\Form\FormStateInterface;

class MultistepInitForm extends MultistepFormBase {

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

    $form['first_name'] = array(
      '#type' => 'textfield',
      '#title' => $this->t('First name'),
      '#default_value' => $this->store->get('first_name') ? $this->store->get('first_name') : '',
      '#required' => TRUE,
    );

    $form['last_name'] = array(
      '#type' => 'textfield',
      '#title' => $this->t('Last name'),
      '#default_value' => $this->store->get('last_name') ? $this->store->get('last_name') : '',
      '#required' => TRUE,
    );

    $form['student_id'] = array(
        '#type' => 'number',
        '#title' => $this->t('Student ID number'),
        '#default_value' => $this->store->get('student_id') ? $this->store->get('student_id') : '',
        '#required' => TRUE,
      );

      

    $form['actions']['submit']['#value'] = $this->t('Next');
    return $form;
  }

  /**
   * {@inheritdoc}
   */
  public function validateForm(array &$form, FormStateInterface $form_state) {
    $student_id = $form_state->getValue('student_id');
    if ($student_id > 9999999 || $student_id < 1000000) {
      $form_state->setErrorByName('student_id', $this->t('Student ID must be 7 digits'));
    }
  }

  /**
   * {@inheritdoc}
   */
  public function submitForm(array &$form, FormStateInterface $form_state) {
    $this->store->set('first_name', $form_state->getValue('first_name'));
    $this->store->set('last_name', $form_state->getValue('last_name'));
    $this->store->set('student_id', $form_state->getValue('student_id'));
    $form_state->setRedirect('multistep.multistep_info');
  }
}