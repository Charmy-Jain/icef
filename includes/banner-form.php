<?php
// Default values if not set in the parent page
if (!isset($selected_service)) $selected_service = "";
if (!isset($selected_sub_service)) $selected_sub_service = "";
if (!isset($is_sub_service_page)) $is_sub_service_page = false;

// Sub-services mapping
$sub_services_data = [
    'it_emerging' => [
        'iot_rfid' => 'IOT & RFID Based Products',
        'application_development' => 'Application Development',
        'customized_software' => 'Customized Software Development',
        'emerging_tech' => 'Emerging Tech'
    ],
    'assessment_testing' => [
        'cognitive' => 'Cognitive/Domain',
        'online_offline' => 'Online/Offline',
        'proctoring' => 'Proctoring'
    ],
    'recruitment_hiring' => [
        'screening' => 'Screening',
        'assessments' => 'Assessments',
        'merit_lists' => 'Merit Lists'
    ],
    'exam_management' => [
        'question_banks' => 'Question Banks',
        'conduct' => 'Conduct',
        'processing' => 'Processing'
    ],
    'manpower_workforce' => [
        'staffing' => 'Staffing',
        'outsourcing' => 'Outsourcing',
        'deployment' => 'Deployment'
    ],
    'call_center_bpo' => [
        'inbound_outbound' => 'Inbound/Outbound',
        'tele_calling' => 'Tele-calling',
        'support' => 'Support'
    ]
];

$all_services = [
    'it_emerging' => 'IT & Emerging Tech Enablement',
    'assessment_testing' => 'Assessment & Testing',
    'recruitment_hiring' => 'Recruitment & Hiring',
    'exam_management' => 'Exam Management',
    'manpower_workforce' => 'Manpower & Workforce',
    'call_center_bpo' => 'Call Center & BPOs'
];
?>

<form action="#" method="POST" class="rs-contact-form-banner">
    <div class="rs-form-row">
        <div class="rs-form-group">
            <input type="text" name="first_name" placeholder="First Name" required>
        </div>
        <div class="rs-form-group">
            <input type="text" name="last_name" placeholder="Last Name" required>
        </div>
    </div>
    <div class="rs-form-row">
        <div class="rs-form-group">
            <input type="email" name="email" placeholder="Email Address" required>
        </div>
        <div class="rs-form-group">
            <input type="tel" name="phone" placeholder="Phone Number" required>
        </div>
    </div>
    <div class="rs-form-row">
        <div class="rs-form-group">
            <select name="service" id="banner-service-select" <?php echo ($selected_service != "" ? 'disabled' : ''); ?>>
                <option value="" disabled <?php echo ($selected_service == "" ? "selected" : ""); ?>>Select Service</option>
                <?php foreach ($all_services as $val => $label): ?>
                    <option value="<?php echo $val; ?>" <?php echo ($selected_service == $val ? "selected" : ""); ?>><?php echo $label; ?></option>
                <?php endforeach; ?>
            </select>
            <?php if ($selected_service != ""): ?>
                <input type="hidden" name="service" value="<?php echo $selected_service; ?>">
            <?php endif; ?>
        </div>
        <div class="rs-form-group">
            <select name="sub_service" id="banner-sub-service-select" <?php echo ($selected_sub_service != "" ? 'disabled' : ''); ?>>
                <option value="" disabled <?php echo ($selected_sub_service == "" ? "selected" : ""); ?>>Select Sub-Service</option>
                <?php 
                if ($selected_service && isset($sub_services_data[$selected_service])) {
                    foreach ($sub_services_data[$selected_service] as $val => $label) {
                        echo '<option value="'.$val.'" '.($selected_sub_service == $val ? "selected" : "").'>'.$label.'</option>';
                    }
                }
                ?>
            </select>
            <?php if ($selected_sub_service != ""): ?>
                <input type="hidden" name="sub_service" value="<?php echo $selected_sub_service; ?>">
            <?php endif; ?>
        </div>
    </div>
    <div class="rs-form-row">
        <div class="rs-form-group rs-form-group-full">
            <textarea name="message" placeholder="Enquiry Description" rows="4"></textarea>
        </div>
    </div>
    <div class="rs-form-row">
        <div class="rs-form-group rs-form-group-full">
            <button type="submit" class="rs-banner-form-btn">GET IN TOUCH</button>
        </div>
    </div>
</form>

<script>
(function() {
    const subServicesData = <?php echo json_encode($sub_services_data); ?>;
    const serviceSelect = document.getElementById('banner-service-select');
    const subServiceSelect = document.getElementById('banner-sub-service-select');

    if (serviceSelect && subServiceSelect && !serviceSelect.disabled) {
        serviceSelect.addEventListener('change', function() {
            const service = this.value;
            const subServices = subServicesData[service] || {};
            
            // Clear existing options
            subServiceSelect.innerHTML = '<option value="" disabled selected>Select Service</option>';
            
            // Add new options
            for (const [val, label] of Object.entries(subServices)) {
                const option = document.createElement('option');
                option.value = val;
                option.textContent = label;
                subServiceSelect.appendChild(option);
            }
        });
    }
})();
</script>
