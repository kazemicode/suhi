<?php 
/**
 * @file
 * Contains \Drupal\multistep\Form\MultistepMathForm.
 */

namespace Drupal\multistep\Form;

use Drupal\Core\Form\FormStateInterface;
use \Drupal\Core\Entity\EntityInterface;
use \Drupal\node\Entity\Node;
use Drupal\Core\Entity;
use Drupal\Core\Url;

class MultistepEnglishForm extends MultistepFormBase {

  /**
   * {@inheritdoc}.
   */
  public function getFormId() {
    return 'multistep_math_class_form';
  }

  /**
   * {@inheritdoc}.
   */
  public function buildForm(array $form, FormStateInterface $form_state) {

    $form = parent::buildForm($form, $form_state);
    $grad_requirement = 17; // investigate loading dynamically by label
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

  
    
  
    $template = [
      '#theme'=> 'course_list',
      '#grade'=> $grade_level,
      '#results' => $results,
      '#isELD' => $isELD,
      '#isAP' => $isAP,
      '#isFund' => $isFund
    ];
    $output = \Drupal::service('renderer')->renderPlain($template);


    $form['math_class'] = array(
      // show entities with entityViewBuilder
      // create a template to render "view"-like stuff
      //'#options' =>


      '#markup' => $output,
  
    );



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
    $this->store->set('math_class', $form_state->getValue('math_class'));
    if($form_state->getTriggeringElement()['#id'] == 'edit-submit') {
      drupal_set_message('submit');
      //$form_state->setRedirect('multistep.multistep_ss_class_form');
    }
    else {
      $form_state->setRedirect('multistep.multistep_english_class_form');
      drupal_set_message('previous');
    }
  }
}