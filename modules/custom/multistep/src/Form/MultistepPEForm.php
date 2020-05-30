<?php 
/**
 * @file
 * Contains \Drupal\multistep\Form\MultistepPEForm.
 */

namespace Drupal\multistep\Form;

use Drupal\Core\Form\FormStateInterface;
use \Drupal\Core\Entity\EntityInterface;
use \Drupal\node\Entity\Node;
use Drupal\Core\Entity;
use Drupal\Core\Url;

class MultistepPEForm extends MultistepFormBase {

  /**
   * {@inheritdoc}.
   */
  public function getFormId() {
    return 'multistep_pe_class_form';
  }

  /**
   * {@inheritdoc}.
   */
  public function buildForm(array $form, FormStateInterface $form_state) {
    $form = parent::buildForm($form, $form_state);
    $grad_requirement = 26; // investigate loading dynamically by label
    $term = \Drupal::entityTypeManager()->getStorage('taxonomy_term')->load($grad_requirement);
    $subject = $term->getName();

    $bilingual_taxonomy = 21;
    $fundamentals_taxonomy = 22;
    $ap_taxonomy = 12;
    $grade_level = $this->store->get('grade_level');
    $isELD = $this->store->get('isELD');
    $isFund = $this->store->get('isFund');
    $isAP = $this->store->get('isAP');




    
    // $terms = \Drupal::entityTypeManager()->getStorage('taxonomy_term')->load()
  

    $results = \Drupal::entityTypeManager()->getStorage('node')->loadByProperties([
      'type' => 'course',
      'field_graduation_requirement' => $grad_requirement, 
      'field_grade_level'=> $grade_level,
      ]);
  
      //todo: create a render array for options
      //$data = array();
      //foreach ($results as $result){
      //  $data[] = array('#' . $result->field_course_number[0]->value =>  $result->title[0]->value);
      //}
  
    
  
    $template = [
      '#theme'=> 'course_list_pe',
      '#grade'=> $grade_level,
      '#results' => $results,
      '#isELD' => $isELD,
      '#isAP' => $isAP,
      '#isFund' => $isFund,
      '#subject' => $subject
    ];
    $output = \Drupal::service('renderer')->renderPlain($template);


    $form['pe_class'] = array(
      '#markup' => $output,
    );

    foreach ($results as $result){
      $form['pe'] = array(
        '#type' => 'radio',
        '#required' => TRUE,
        '#title' => $this->t(''),
        '#default_value' => $this->store->get('pe') ? $this->store->get('') : 0,
        '#return_value' => $result->field_course_number[0]->value,
      );
    }
 


    $form['actions']['submit']['#value'] = $this->t('Next');
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
    $this->store->set('pe', $form_state->getValue('pe'));
    if($form_state->getTriggeringElement()['#id'] == 'edit-submit') {
      drupal_set_message($this->store->get('pe'));
      $form_state->setRedirect('multistep.multistep_vapa_class_form');
    }
    else {
      $form_state->setRedirect('multistep.multistep_sci_class_form');
    }
  }
}