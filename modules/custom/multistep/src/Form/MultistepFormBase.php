<?php
/**
 * @file
 * Contains \Drupal\multistep\Form\MultistepFormBase.
 */

namespace Drupal\multistep\Form;

use Drupal\Core\Form\FormBase;
use Drupal\Core\Form\FormStateInterface;
use Drupal\Core\TempStore\PrivateTempStoreFactory;
use Drupal\Core\TempStore\PrivateTempStore;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Drupal\node\Entity\Node;

abstract class MultistepFormBase extends FormBase {

  /**
   * @var \Drupal\Core\TempStore\PrivateTempStoreFactory
   */
  protected $tempStoreFactory;

  
  /**
   * @var \Drupal\Core\TempStore\PrivateTempStore
   */
  protected $store;

  /**
   * Constructs a \Drupal\demo\Form\Multistep\MultistepFormBase.
   *
   * @param \Drupal\user\PrivateTempStoreFactory $temp_store_factory
   * @param \Drupal\Core\Session\SessionManagerInterface $session_manager
   * @param \Drupal\Core\Session\AccountInterface $current_user
   */
  public function __construct(PrivateTempStoreFactory $temp_store_factory) {
    $this->tempStoreFactory = $temp_store_factory; // used for temp storage for data private to current user
    $this->store = $this->tempStoreFactory->get('multistep_data');
  }

  /**
   * {@inheritdoc}
   */
  public static function create(ContainerInterface $container) {
    return new static(
      $container->get('tempstore.private')
    );
  }

  /**
   * {@inheritdoc}.
   */
  public function buildForm(array $form, FormStateInterface $form_state) {

    // Base submit action button present on all implementing forms
    $form = array();
    $form['#cache'] = ['max-age' => 0];
    $form['actions']['#type'] = 'actions';
    $form['actions']['submit'] = array(
      '#type' => 'submit',
      '#value' => $this->t('Submit'),
      '#button_type' => 'primary',
      '#weight' => 10,
    );

    $form['#attached']['library'][] = 'multistep/multistep_form';
    return $form;
  }

  // To implement
  /**
   * Saves the data from the multistep form.
   */
  protected function saveData() {
    // Logic for saving data goes here...

    $node_array = [
      'type' => 'wishlist',
      'title' => $this->store->get('student_id'),
      'field_student_id' => $this->store->get('student_id'),
      'field_first_name' => $this->store->get('first_name'),
      'field_last_name' => $this->store->get('last_name'),
      'field_student_grade_level' => $this->store->get('grade_level') + 1,
      'field_comments' => $this->store->get('comments'),];

    $english = \Drupal::entityTypeManager()->getStorage('node')->loadByProperties([
      'type' => 'course',
      'field_course_number' => $this->store->get('english'), 
      ]);

    $node_array += ['field_english_course' => $english];

    $math = \Drupal::entityTypeManager()->getStorage('node')->loadByProperties([
      'type' => 'course',
      'field_course_number' => $this->store->get('math'), 
      ]);

    $node_array += ['field_math_course' => $math];


    if( $this->store->get('ss') != 0){
      $ss = \Drupal::entityTypeManager()->getStorage('node')->loadByProperties([
        'type' => 'course',
        'field_course_number' => $this->store->get('ss'), 
        ]);

      $node_array += ['field_social_science_course' => $ss];
    }
    
    if( $this->store->get('gov') != 0){
      $gov = \Drupal::entityTypeManager()->getStorage('node')->loadByProperties([
        'type' => 'course',
        'field_course_number' => $this->store->get('gov'), 
        ]);

      $node_array += ['field_government' => $gov];
    }

    if( $this->store->get('sci') != 0){ 
    $sci = \Drupal::entityTypeManager()->getStorage('node')->loadByProperties([
      'type' => 'course',
      'field_course_number' => $this->store->get('sci'), 
      ]);

      $node_array += ['field_science_course' => $sci];

    }

    if( $this->store->get('pe') != 0){
    $pe = \Drupal::entityTypeManager()->getStorage('node')->loadByProperties([
      'type' => 'course',
      'field_course_number' => $this->store->get('pe'), 
      ]);
    $node_array += ['field_pe_course' => $pe];
    }


   if($this->store->get('health') != 0){
    $health = \Drupal::entityTypeManager()->getStorage('node')->loadByProperties([
      'type' => 'course',
      'field_course_number' => $this->store->get('health'), 
      ]);

    $node_array += ['field_health_course' => $health];
    }


    if( $this->store->get('vapa') != 0){
    $vapa = \Drupal::entityTypeManager()->getStorage('node')->loadByProperties([
      'type' => 'course',
      'field_course_number' => $this->store->get('vapa'), 
      ]);
      $node_array += ['field_vapa_course' => $vapa];
    }
    
    if( $this->store->get('vapa2') != 0){
    $vapa2 = \Drupal::entityTypeManager()->getStorage('node')->loadByProperties([
      'type' => 'course',
      'field_course_number' => $this->store->get('vapa2'), 
      ]);
      $node_array += ['field_vapa_course2' => $vapa2];
    }


    if( $this->store->get('lang') != 0){
    $lang = \Drupal::entityTypeManager()->getStorage('node')->loadByProperties([
      'type' => 'course',
      'field_course_number' => $this->store->get('lang'), 
      ]);
      $node_array += ['field_foreign_language_course' => $lang];
    }
    
    


    $elective = \Drupal::entityTypeManager()->getStorage('node')->loadByProperties([
      'type' => 'course',
      'field_course_number' => $this->store->get('elective'), 
      ]);
    $node_array += ['field_elective_course_s_' => $elective];
  
   if( $this->store->get('ss_elective') != 0){
     $ss_elective = \Drupal::entityTypeManager()->getStorage('node')->loadByProperties([
      'type' => 'course',
      'field_course_number' => $this->store->get('ss_elective'), 
      ]);
    $node_array += ['field_single_sem_elective' => $ss_elective];
   }
    
   if( $this->store->get('macro') != 0){
    $macro = \Drupal::entityTypeManager()->getStorage('node')->loadByProperties([
      'type' => 'course',
      'field_course_number' => $this->store->get('macro'), 
      ]);
    $node_array += ['field_macro' => $macro];
   }
    
    $elective2 = \Drupal::entityTypeManager()->getStorage('node')->loadByProperties([
      'type' => 'course',
      'field_course_number' => $this->store->get('elective2'), 
      ]);
    $node_array += ['field_colle' => $elective2];
    
    $elective3 = \Drupal::entityTypeManager()->getStorage('node')->loadByProperties([
    'type' => 'course',
    'field_course_number' => $this->store->get('elective3'), 
    ]);
    $node_array += ['field_elective_3' => $elective3]; 


    $node = Node::create($node_array);

    $node->save();
   
    $this->deleteStore();
    drupal_set_message($this->t('Your wishlist has been submitted to your counselor.'));

  }

  /**
   * Helper method that removes all the keys from the store collection used for
   * the multistep form.
   */
  protected function deleteStore() {
    $keys = ['first_name', 'last_name', 'student_id', 'grade_level', 'isAP', 'isFund', 'isELD', 'english', 'math', 'ss', 'sci', 'pe', 'gov', 'health', 'elective', 'elective2', 'elective3', 'ss_elective', 'macro', 'vapa', 'vapa2', 'lang', 'comments'];
    foreach ($keys as $key) {
      $this->store->delete($key);
    }
  }
}
