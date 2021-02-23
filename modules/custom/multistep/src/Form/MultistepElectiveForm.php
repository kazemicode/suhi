<?php 
/**
 * @file
 * Contains \Drupal\multistep\Form\MultistepElectiveForm.
 */

namespace Drupal\multistep\Form;

use Drupal\Core\Form\FormStateInterface;
use \Drupal\Core\Entity\EntityInterface;
use \Drupal\node\Entity\Node;
use Drupal\Core\Entity;
use Drupal\Core\Url;

class MultistepElectiveForm extends MultistepFormBase {

  /**
   * {@inheritdoc}.
   */
  public function getFormId() {
    return 'multistep_elective_class_form';
  }

  /**
   * {@inheritdoc}.
   */
  public function buildForm(array $form, FormStateInterface $form_state) {
    $form = parent::buildForm($form, $form_state);
    $grad_requirement = 13; // investigate loading dynamically by label
    $term = \Drupal::entityTypeManager()->getStorage('taxonomy_term')->load($grad_requirement);
    $subject = $term->getName();

    $bilingual_taxonomy = 21;
    $fundamentals_taxonomy = 22;
    $ap_taxonomy = 12;
    $grade_level = $this->store->get('grade_level');
    $isELD = $this->store->get('isELD');
    $isFund = $this->store->get('isFund');
    $isAP = $this->store->get('isAP');


// to do use entityQuery to get sorted results
//$query =  \Drupal::entityQuery('node')
 //               ->condition('type', 'course')
 //               ->condition('field_graduation_requirement', '$grad_requirement') 
 //               ->condition('field_grade_level', '$grade_level')
 //               ->sort('title' , 'ASC'); 
//$ids = $query->execute();
    



  
if($grade_level+1 < 12){
    $results = \Drupal::entityTypeManager()->getStorage('node')->loadByProperties([
      'type' => 'course',
      'field_graduation_requirement' => $grad_requirement, 
      'field_grade_level'=> $grade_level,
      ]);
  }
    else {
      $results = \Drupal::entityTypeManager()->getStorage('node')->loadByProperties([
      'type' => 'course',
      'field_grade_level'=> $grade_level,
      ]);
    } 
  
   
    
  
    $template = [
      '#theme'=> 'course_list_elec',
      '#grade'=> $grade_level,
      '#results' => $results,
      '#isELD' => $isELD,
      '#isAP' => $isAP,
      '#isFund' => $isFund,
      '#subject' => $subject
    ];
    $output = \Drupal::service('renderer')->renderPlain($template);


    $form['elective_class'] = array(
      '#markup' => $output,
    );

    foreach ($results as $result){
      $form['elective'] = array(
        '#type' => 'radio',
        '#required' => TRUE,
        '#title' => $this->t(''),
        '#default_value' => $this->store->get('elective') ? $this->store->get('') : 0,
        '#return_value' => $result->field_course_number[0]->value,
      );
    }
 
    if($this->store->get('grade_level') > 8) {
      $prev_url = Url::fromRoute('multistep.multistep_health_class_form');
      }
      else {
        $prev_url = Url::fromRoute('multistep.multistep_lang_class_form2');
      }

    $form['actions']['submit']['#value'] = $this->t('Next');
    $form['actions']['previous'] = array(
      '#type' => 'link',
      '#title' => $this->t('Previous'),
      '#attributes' => array(
        'class' => array('btn', 'btn-primary'),
      ),
      '#weight' => 0,
      '#url' => $prev_url
     );


    return $form;
  }

  /**
   * {@inheritdoc}
   */
  public function submitForm(array &$form, FormStateInterface $form_state) {
    $this->store->set('elective', $form_state->getValue('elective'));
    if($form_state->getValue('elective') == 93379) {
      $this->store->set('ss_elective', 95176);
    }
    else if( $form_state->getValue('elective') == 94240) {
      $this->store->set('ss_elective',0);
      $this->store->set('macro', 94239);
    else {
      $this->store->set('ss_elective', 0);
      $this->store->set('macro',0);
    }
    if($form_state->getTriggeringElement()['#id'] == 'edit-submit') {
      $form_state->setRedirect('multistep.multistep_elective_class_form2');
    }
    else {
      if($this->store->get('grade_level') > 8) {
      $form_state->setRedirect('multistep.multistep_health_class_form');
      }
      else {
        $form_state->setRedirect('multistep.multistep_lang_class_form2');
      }
    }
  }
}

