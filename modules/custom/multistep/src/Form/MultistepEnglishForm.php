<?php 
/**
 * @file
 * Contains \Drupal\multistep\Form\MultistepEnglishForm.
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
    return 'multistep_english_class';
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
    // $radios = [];
    // $course_titles = [];
    // $course_descriptions = [];
    // $course_a_g_reqs = [];

  

    $results = \Drupal::entityTypeManager()->getStorage('node')->loadByProperties([
      'type' => 'course',
      'field_graduation_requirement' => $grad_requirement, 
      'field_grade_level'=> $grade_level,
      ]);


      // foreach ($results as $result) {
      //   $course_titles[] = $result.title[0].value;
      //   $course_descriptions[] = $result.body[0].value;
      //   $course_a_g_reqs[] = $result.title[0].value;
      // }

  
    
  
    $template = [
      '#theme'=> 'course_list',
      '#grade'=> $grade_level,
      '#results' => $results
    ];
    $output = \Drupal::service('renderer')->renderPlain($template);


    $form['english_class'] = array(
      // show entities with entityViewBuilder
      // create a template to render "view"-like stuff
      //'#options' =>


      '#markup' => $output,
  
    );



    $form['actions']['submit']['#value'] = $this->t('Next');

    $form['actions']['previous'] = array(
        '#type' => 'link',
        '#title' => $this->t('Previous'),
        '#attributes' => array(
          'class' => array('button'),
        ),
        '#weight' => 0,
        '#url' => Url::fromRoute('multistep.multistep_info'),
      );
    return $form;
  }

  /**
   * {@inheritdoc}
   */
  public function submitForm(array &$form, FormStateInterface $form_state) {
    $this->store->set('english_class', $form_state->getValue('english_class'));
    //$form_state->setRedirect('multistep.multistep_english_class');
    drupal_set_message($this->store->get('grade_level'));

  }
}