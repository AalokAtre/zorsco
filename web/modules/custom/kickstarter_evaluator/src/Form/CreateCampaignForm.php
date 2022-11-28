<?php
/**
 * @file
 * Contains \Drupal\kickstarter_evaluator\Form\CreateCampignForm.
 */
namespace Drupal\kickstarter_evaluator\Form;

use Drupal\Core\Form\FormBase;
use Drupal\Core\Form\FormStateInterface;

class CreateCampaignForm extends FormBase {
  /**
   * {@inheritdoc}
   */
  public function getFormId() {
    return 'kickstarter_evaluator_form';
  }
  
  public function buildForm(array $form, FormStateInterface $form_state) {
    $form['project_name'] = [
      '#type' => 'textfield',
      '#title' => t('Enter Project Name'),
      '#required' => TRUE,
    ];
    $form['project_description'] = [
      '#type' => 'textfield',
      '#title' => t('Enter Project Description'),
      '#required' => TRUE,
    ];
    $form['start_date'] = [
      '#type' => 'date',
      '#title' => t('Enter Campaign Start Date'),
      '#required' => TRUE,
    ];
    // $form['student_mail'] = array(
    //   '#type' => 'email',
    //   '#title' => t('Enter Email ID:'),
    //   '#required' => TRUE,
    // );
    // $form['student_phone'] = array (
    //   '#type' => 'tel',
    //   '#title' => t('Enter Contact Number'),
    // );
    // $form['student_dob'] = array (
    //   '#type' => 'date',
    //   '#title' => t('Enter DOB:'),
    //   '#required' => TRUE,
    // );
    // $form['student_gender'] = array (
    //   '#type' => 'select',
    //   '#title' => ('Select Gender:'),
    //   '#options' => array(
    //     'Male' => t('Male'),
		// 'Female' => t('Female'),
    //     'Other' => t('Other'),
    //   ),
    $form['actions']['#type'] = 'actions';
    $form['actions']['submit'] = [
      '#type' => 'submit',
      '#value' => $this->t('Register'),
      '#button_type' => 'primary',
    ];
    return $form;
  }
  
  public function validateForm(array &$form, FormStateInterface $form_state) {
    // if(strlen($form_state->getValue('student_rollno')) < 8) {
    //   $form_state->setErrorByName('student_rollno', $this->t('Please enter a valid Enrollment Number'));
    // }
    // if(strlen($form_state->getValue('student_phone')) < 10) {
    //   $form_state->setErrorByName('student_phone', $this->t('Please enter a valid Contact Number'));
    // }
  }
  
  public function submitForm(array &$form, FormStateInterface $form_state) {
    \Drupal::messenger()->addMessage(t("You have a 92% chance of meeting your campaign goals"));
  }

}
