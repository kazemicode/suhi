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

    $form = parent::buildForm($form, $form_state);

    $form['grade_level'] = array(
      '#type' => 'select',
      '#title' => $this->t('Which grade will you be entering in the upcoming school year?'),
      '#options' => [
        '8' => $this
          ->t('9th (Freshman)'),
        '9' => $this
          ->t('10th (Sophomore)'),
        '10' => $this
        ->t('11th (Junior)'),
        '11' => $this
        ->t('12th (Senior)'),
      ],
      '#required' => TRUE,
    );

    $form['isAP'] = array(
      '#type' => 'select',
      '#title' => $this->t('Are you interested in taking AP (Advanced Placement) courses?'),
      '#options' => [
        '1' => $this
          ->t('Yes'),
        '0' => $this
          ->t('No'),
      ],
      '#required' => TRUE,
    );

    $form['isFund'] = array(
        '#type' => 'select',
        '#title' => $this->t('Are you currently enrolled in the Fundamentals program?'),
        '#options' => [
          '1' => $this
            ->t('Yes'),
          '0' => $this
            ->t('No'),
        ],
        '#required' => TRUE,
      );

    $form['isELD'] = array(
      '#type' => 'select',
      '#title' => $this->t('Are you currently enrolled in ELD (English Language Development) I, II, or III?'),
      '#options' => [
        '1' => $this
          ->t('Yes'),
        '0' => $this
          ->t('No'),
      ],
      '#required' => TRUE,
    );

  

    $form['actions']['submit']['#value'] = $this->t('Next');


    $form['actions']['previous'] = array(
      '#type' => 'link',
      '#title' => $this->t('Previous'),
      '#attributes' => array(
        'class' => array('button'),
      ),
      '#weight' => 0,
      '#url' => Url::fromRoute('multistep.multistep_init'),
    );


    return $form;
  }

  /**
   * {@inheritdoc}
   */
  public function submitForm(array &$form, FormStateInterface $form_state) {
    $this->store->set('grade_level', $form_state->getValue('grade_level'));
    $this->store->set('isAP', $form_state->getValue('isAP'));
    $this->store->set('isFund', $form_state->getValue('isFund'));
    $this->store->set('isELD', $form_state->getValue('isELD'));
    $form_state->setRedirect('multistep.multistep_english_class');
  }
  
}