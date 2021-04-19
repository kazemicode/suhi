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
  // this section is uncommented when form is inactive
  public function buildForm(array $form, FormStateInterface $form_state) {

    $form['message-title'] = [
        '#markup' => '<div class="form-header"><h2>' . $this->t('Pre-registration has closed') . '</h2></div>'
    ];

    $form['message-instructions'] = [
        '#markup' => '<div class="form-instructions"><h4>' . $this->t('Hi! Pre-registration for the ') . $year . $this->t('-') . $nextYear . $this->t(' has closed. Please <a href="https://suhicounseling.blogspot.com/p/contact-us.html">contact your counselor</a> for course change requests.') . '</h4></div>',
    ];
 }
}

//Uncomment below to enable form
//   public function buildForm(array $form, FormStateInterface $form_state) {
//     $year = date("Y");
//     $nextYear = date("Y") + 1;
  

//     $form = parent::buildForm($form, $form_state);

//     $form['message-step'] = [
//       '#markup' => '<div class="step">' . $this->t('Step 1 of 12') . '</div>',
//     ];

//     $form['message-title'] = [
//       '#markup' => '<div class="form-header"><h2>' . $this->t('Course Scheduling Wizard') . '</h2></div>'
//     ];

//     $form['message-instructions'] = [
//       '#markup' => '<div class="form-instructions"><h4>' . $this->t('Hi! To help you select courses for the ') . $year . $this->t('-') . $nextYear . $this->t(' academic year, we need to know a few things about you:') . '</h4></div>',
//     ];
    
//     $form['name'] = array (
//       '#type' => 'fieldset',
//       '#title' => t(''),
//       '#attributes' => [
//         'class' => [
//           'form-container',
//         ]]
//     );

//     $form['name']['first_name'] = [
//       '#type' => 'textfield',
//       '#title' => $this->t('First name'),
//       '#default_value' => $this->store->get('first_name') ? $this->store->get('first_name') : '',
//       '#required' => TRUE,
//       '#attributes' => [
//         'class' => [
//           'form-group',
//         ]]
//     ];

//     $form['name']['last_name'] = [
//       '#type' => 'textfield',
//       '#title' => $this->t('Last name'),
//       '#default_value' => $this->store->get('last_name') ? $this->store->get('last_name') : '',
//       '#required' => TRUE,
//       '#attributes' => [
//         'class' => [
//           'form-group',
//         ]]
//     ];

//     $form['name']['student_id'] = [
//         '#type' => 'number',
//         '#title' => $this->t('Student ID number'),
//         '#default_value' => $this->store->get('student_id') ? $this->store->get('student_id') : '',
//         '#required' => TRUE,
//         '#attributes' => [
//           'class' => [
//             'form-group',
//           ]]
//     ];

//       $form['name']['grade_level'] = [
//         '#type' => 'select',
//         '#title' => $this->t('In the ') . $year . $this->t('-') . $nextYear . $this->t(' academic year, I will be a:'),
//         '#default_value' => $this->store->get('grade_level') ? $this->store->get('grade_level') : '',
//         '#options' => [
//           '8' => $this
//             ->t('9th grader (Freshman)'),
//           '9' => $this
//             ->t('10th grader (Sophomore)'),
//           '10' => $this
//           ->t('11th grader (Junior)'),
//           '11' => $this
//           ->t('12th grader (Senior)'),
//         ],
//         '#required' => TRUE,
//         '#attributes' => [
//           'class' => [
//             'dropdown',
//           ]]
//       ];

      

//     $form['actions']['submit']['#value'] = $this->t('Next');
//     $form['#attached']['library'][] = 'multistep/multistep_form';
//     return $form;
//   }

//   /**
//    * {@inheritdoc}
//    */
//   public function validateForm(array &$form, FormStateInterface $form_state) {
//     $student_id = $form_state->getValue('student_id');
//     if ($student_id > 9999999 || $student_id < 1000000) {
//       $form_state->setErrorByName('student_id', $this->t('Student ID must be 7 digits'));
//     }
//   }

//   /**
//    * {@inheritdoc}
//    */
//   public function submitForm(array &$form, FormStateInterface $form_state) {

//     $keys = ['first_name', 'last_name', 'student_id', 'grade_level'];
//     foreach ($keys as $key) {
//       $this->store->set($key, $form_state->getValue($key));
//     }
//     $form_state->setRedirect('multistep.multistep_info_form');
//   }
// }
