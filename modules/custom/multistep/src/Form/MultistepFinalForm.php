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
    return 'multistep_final_form';
  }

  /**
   * {@inheritdoc}.
   */
  public function buildForm(array $form, FormStateInterface $form_state) {
  

    $form = parent::buildForm($form, $form_state);

    $course_review = '<div class="course-review"><div class="course-review-item">';

    $english = \Drupal::entityTypeManager()->getStorage('node')->loadByProperties([
      'type' => 'course',
      'field_course_number' => $this->store->get('english'), 
      ]);

    $english = reset($english);

    $course_review .= '📖 ' . $english->title->value . ' (' .  $english->field_course_number->value . ') </div>';



    $math = \Drupal::entityTypeManager()->getStorage('node')->loadByProperties([
      'type' => 'course',
      'field_course_number' => $this->store->get('math'), 
      ]);

    $math = reset($math);

    $course_review .= '<div class="course-review-item">📏 ' . $math->title->value . ' (' .  $math->field_course_number->value . ') </div>';



    $ss = \Drupal::entityTypeManager()->getStorage('node')->loadByProperties([
      'type' => 'course',
      'field_course_number' => $this->store->get('ss'), 
      ]);

    $ss = reset($ss);

    $course_review .=  '<div class="course-review-item">🗺️  ' . $ss->title->value . ' (' .  $ss->field_course_number->value . ') </div>';
    
     if( $this->store->get('gov') != 0){
        $gov = \Drupal::entityTypeManager()->getStorage('node')->loadByProperties([
          'type' => 'course',
          'field_course_number' => $this->store->get('gov'), 
          ]);

        $gov = reset($gov);

        $course_review .=  '<div class="course-review-item">🗺️  ' . $gov->title->value . ' (' .  $gov->field_course_number->value . ') </div>';
       }


    if( $this->store->get('sci') != 0){
      $sci = \Drupal::entityTypeManager()->getStorage('node')->loadByProperties([
        'type' => 'course',
        'field_course_number' => $this->store->get('sci'), 
        ]);

      $sci = reset($sci);
      $course_review .=  '<div class="course-review-item">🔬 ' . $sci->title->value . ' (' .  $sci->field_course_number->value . ') </div>';
    }


    if( $this->store->get('pe') != 0){
      $pe = \Drupal::entityTypeManager()->getStorage('node')->loadByProperties([
        'type' => 'course',
        'field_course_number' => $this->store->get('pe'), 
        ]);
  
      $pe = reset($pe);

      $course_review .=  '<div class="course-review-item">👟 ' . $pe->title->value . ' (' .  $pe->field_course_number->value . ') </div>';
  }
  
  
  if( $this->store->get('vapa') != 0){
      $vapa = \Drupal::entityTypeManager()->getStorage('node')->loadByProperties([
        'type' => 'course',
        'field_course_number' => $this->store->get('vapa'), 
        ]);
  
      $vapa = reset($vapa);
      $course_review .=   '<div class="course-review-item">🎭 ' . $vapa->title->value . ' (' .  $vapa->field_course_number->value . ') </div>';
    }
    
    if( $this->store->get('vapa2') != 0){
      $vapa2 = \Drupal::entityTypeManager()->getStorage('node')->loadByProperties([
        'type' => 'course',
        'field_course_number' => $this->store->get('vapa2'), 
        ]);
  
      $vapa2 = reset($vapa2);
      $course_review .=   '<div class="course-review-item">🎭 ' . $vapa2->title->value . ' (' .  $vapa2->field_course_number->value . ') </div>';
    }
    


  if( $this->store->get('lang') != 0){
    $lang = \Drupal::entityTypeManager()->getStorage('node')->loadByProperties([
      'type' => 'course',
      'field_course_number' => $this->store->get('lang'), 
      ]);

    $lang = reset($lang);
    $course_review .= '<div class="course-review-item">🌎 ' . $lang->title->value . ' (' .  $lang->field_course_number->value . ') </div>';

  }
    
      if( $this->store->get('lang2') != 0){
    $lang2 = \Drupal::entityTypeManager()->getStorage('node')->loadByProperties([
      'type' => 'course',
      'field_course_number' => $this->store->get('lang2'), 
      ]);

    $lang2 = reset($lang2);
    $course_review .= '<div class="course-review-item">🌎 ' . $lang2->title->value . ' (' .  $lang2->field_course_number->value . ') </div>';

  }


if($this->store->get('health') != 0){
    $health = \Drupal::entityTypeManager()->getStorage('node')->loadByProperties([
      'type' => 'course',
      'field_course_number' => $this->store->get('health'), 
      ]);

    $health = reset($health);
    $course_review .=  '<div class="course-review-item">💪 ' . $health->title->value . ' (' .  $health->field_course_number->value . ') </div>';
  }


 


    $elective = \Drupal::entityTypeManager()->getStorage('node')->loadByProperties([
      'type' => 'course',
      'field_course_number' => $this->store->get('elective'), 
      ]);

    $elective = reset($elective);
    $course_review .=  '<div class="course-review-item">🥇 ' . $elective->title->value . ' (' .  $elective->field_course_number->value . ') </div>';
    
    
    if($this->store->get('elective') == 93379){
    $ss_elective = \Drupal::entityTypeManager()->getStorage('node')->loadByProperties([
      'type' => 'course',
      'field_course_number' => $this->store->get('ss_elective'), 
      ]);

    $ss_elective = reset($ss_elective);
    $course_review .=  '<div class="course-review-item">🥇 ' . $ss_elective->title->value . ' (' .  $ss_elective->field_course_number->value . ') </div>';
  }
    
    if($this->store->get('elective') == 94240){
    $macro = \Drupal::entityTypeManager()->getStorage('node')->loadByProperties([
      'type' => 'course',
      'field_course_number' => $this->store->get('macro'), 
      ]);

    $macro = reset($macro);
    $course_review .=  '<div class="course-review-item">🥇 ' . $macro->title->value . ' (' .  $macro->field_course_number->value . ') </div>';
  }
    
    
     $elective2 = \Drupal::entityTypeManager()->getStorage('node')->loadByProperties([
      'type' => 'course',
      'field_course_number' => $this->store->get('elective2'), 
      ]);

    $elective2 = reset($elective2);
    $course_review .=  '<div class="course-review-item">🥈 ' . $elective2->title->value . ' (' .  $elective2->field_course_number->value . ') </div>';
    
    if($this->store->get('elective2') == 93379){
    $ss_elective = \Drupal::entityTypeManager()->getStorage('node')->loadByProperties([
      'type' => 'course',
      'field_course_number' => $this->store->get('ss_elective'), 
      ]);

    $ss_elective = reset($ss_elective);
    $course_review .=  '<div class="course-review-item">🥈 ' . $ss_elective->title->value . ' (' .  $ss_elective->field_course_number->value . ') </div>';
  }
    
    if($this->store->get('elective2') == 94240){
    $macro = \Drupal::entityTypeManager()->getStorage('node')->loadByProperties([
      'type' => 'course',
      'field_course_number' => $this->store->get('macro'), 
      ]);

    $macro = reset($macro);
    $course_review .=  '<div class="course-review-item">🥇 ' . $macro->title->value . ' (' .  $macro->field_course_number->value . ') </div>';
  }
    
    $elective3 = \Drupal::entityTypeManager()->getStorage('node')->loadByProperties([
      'type' => 'course',
      'field_course_number' => $this->store->get('elective3'), 
      ]);

    $elective3 = reset($elective3);
    $course_review .=  '<div class="course-review-item">🥉 ' . $elective3->title->value . ' (' .  $elective3->field_course_number->value . ') </div>';
      
   if($this->store->get('elective3') == 93379) {
    $ss_elective = \Drupal::entityTypeManager()->getStorage('node')->loadByProperties([
      'type' => 'course',
      'field_course_number' => $this->store->get('ss_elective'), 
      ]);

    $ss_elective = reset($ss_elective);
    $course_review .=  '<div class="course-review-item">🥉 ' . $ss_elective->title->value . ' (' .  $ss_elective->field_course_number->value . ') </div>';
  } 
    
    if($this->store->get('elective3') == 94240){
    $macro = \Drupal::entityTypeManager()->getStorage('node')->loadByProperties([
      'type' => 'course',
      'field_course_number' => $this->store->get('macro'), 
      ]);

    $macro = reset($macro);
    $course_review .=  '<div class="course-review-item">🥇 ' . $macro->title->value . ' (' .  $macro->field_course_number->value . ') </div>';
  }
    
  $course_review .= '</div>';
    
      
      
      
      
    
    

    $form['message-step'] = [
      '#markup' => '<div class="step">' . $this->store->get('student_id') .  '</div>',
    ];

    $form['message-title'] = [
      '#markup' => '<div class="form-header"><h2>' . $this->t('Course Scheduling Wizard') . '</h2></div>'
    ];

    $form['message-instructions'] = [
      '#markup' => '<div class="form-instructions"><h4>'  . $this->store->get('first_name') . ' ' . $this->store->get('last_name') . $this->t('\'s Course Wishlist ') . '</h4></div>' .
      '<div class="alert alert-secondary" role="alert">Review your information and course selections before submitting. Remember this is a wishlist and you are not guaranteed all the courses you have selected. Your counselor will do their best to accomodate your preferences.</div>'
    ];

    $form['course-review'] = [
      '#markup' => $course_review,
    ];
    
    $form['more'] = array (
      '#type' => 'fieldset',
      '#title' => t(''),
      '#attributes' => [
        'class' => [
          'form-container',
        ]]
    );

    $form['more']['comments'] = [
      '#type' => 'textarea',
      '#title' => $this->t('Anything else you want your counselor to know? Write it here! If not, you can leave this blank. '),
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
      parent::saveData();
     $form_state->setRedirect('multistep.multistep_init_form');
    }
    else {
      $form_state->setRedirect('multistep.multistep_elective_class_form');
    }
  }
}
