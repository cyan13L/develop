<?php

namespace Database\Seeders;

use App\Models\Co_Act;
use App\Models\Leadsheet;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CoActSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Co_Act::create([
            'kodeCO' => 'EX1015', 
            'kodeCA' => 'EX112',
            'control_act' => 'Management must approve all purchase orders, with higher level management authority required for unusual purchases (such as capital outlays or standing orders) and all purchases that exceed established limits.  Board approval is required for specified types of purchases and this approval is appropriately documented.',
            'description' => 'A standing order is a binding declaration to procure a material or service from a supplier within a certain period of time at an agreed price.  This price may be dependent on other criteria, such as quantity, specified period of time, or other special discounts negotiated with the supplier.  A specific delivery date or quantity may be specified in individual orders (e.g., 10 items each week), which are called release orders.',
            'test_of_control' => 'Corroborative Inquiry Supported by Examination of Documentation:  Understand and document the policies and procedures related to managements and/or the boards review and approval of purchase orders, according to established materiality thresholds. Interview management personnel who approve purchase orders and those who are responsible for any reports or automated routines used during the approval process, including those who have programming responsibility for such reports or routines.  Ask them to describe and demonstrate  (a) the steps involved in approving purchase orders, including how they (or the computerized application system) determine the appropriate level(s) of approval required and how approval is documented (e.g., on-line approval or initialing a source document), (b) the reports (if any) or other documents (e.g., manual or on-line purchase orders) used during the process, including the key fields and exception criteria that serve as the basis for such reports and the procedures used to maintain the accuracy of such reports, (c) any exceptions, misstatements, or unusual items noted, during the period of intended reliance, (d) who has programming access to any system-generated reports used in performing this control activity, (e) any instances where the control activity operated in a way contrary to their understanding of how it should operate, and (f) any modifications made during the period of intended reliance to the way purchase orders are reviewed and approved, including changes in the level of management approval required for different monetary amounts. Examine documentary evidence (e.g., manual or on-line sign-offs on purchase orders) indicating that the purchase orders were approved by management.  Also test user access to approval commands to ensure that only authorized individuals can approve purchase orders.  Samples should be reasonably distributed throughout the period of intended reliance. Corroborative Inquiry Supported by Reperformance (Programmed Control Activity):  Understand and document the policies and procedures related to the control activity. Interview individuals who use information affected by the operation of the programmed control activity and those within the computer processing environment that have the ability to impact its operation.  Ask them to describe the following: (a) how the control activity is designed to function, (b) how exceptions, misstatements or unusual items are detected and resolved, (c) any reports or other information resulting from the operation of the control activity, including how they are used, (d) who has programming access to the control activity, (e) any instances where the programmed control activity has operated in a way contrary to their understanding of how it should operate, and (f) any modifications made to the  control activity during the period of intended reliance, including the results of any implementation tests. Obtain evidence that corroborates the responses to our inquiries by reperforming the control activity.  Reperform the programmed elements of the control activity either by (a) entering test data into the computerized application system and comparing the actual outcome with our expectation, or (b) using file interrogation to subject actual client data to the same control activity and comparing our result to the actual client result.  For manual elements of the control activity (if any), obtain evidence to corroborate our inquiries by reperforming the control activity or examining documentation that such activities were performed in accordance with the established policies and procedures.  Our tests should be performed at various times throughout the period of intended reliance and should be designed to conclude that the control activity operated effectively during such time. Corroborative Inquiry Supported by Reperformance (Manual Control Activity):  Understand and document the policies and procedures related to the control activity.  Interview individuals who perform the control activity.  Ask them to describe the following:  (a) the steps involved, (b) reports and other information used, including how they are used, (c) the procedures performed when exceptions, misstatements or unusual items are encountered, (d) how the control activity is performed in their absence, and (e) any changes to the control activity during the period of intended reliance, including changes in the individuals who perform the activity.  Obtain evidence that corroborates the responses to our inquiries by reperforming the control activity.  Our tests should be performed at various times throughout the period of intended reliance and should be designed to conclude that the control activity operated effectively during such time. Corroborative Inquiry Supported by Observation: Understand and document the policies and procedures related to the control activity.  Interview individuals who perform the control activity.  Ask them to describe the following:  (a) the steps involved, (b) reports and other information used, including how they are used, (c) the procedures performed when exceptions, misstatements or unusual items are encountered, (d) how the control activity is performed in their absence, and (e) any changes to the control activity during the period of intended reliance, including changes in the individuals who perform the activity. Obtain evidence that corroborates the responses to our inquiries by observing the client as they perform the control activity.  Our observations should be conducted on an unannounced basis whenever possible.  Our tests should be performed at various times throughout the period of intended reliance and should be designed to conclude that the control activity operated effectively during such time. Examination of Documentation:  Understand and document the policies and procedures related to managements approval of purchase orders. Using attribute sampling guidelines, select the appropriate number of purchase orders (i.e., a representative sample of 25 items if no deviations are expected and the control activity is not intended to mitigate a specific risk or 45 items if no deviations are expected and the control activity is intended to mitigate a specific risk) from audit population and examine documentary evidence (e.g., manual or on-line sign-offs on purchase orders) indicating that the purchase orders were approved by management.  Also test user access to approval commands to ensure that only authorized individuals can approve purchase orders.  Samples should be reasonably distributed throughout the period of intended reliance.',
            'nature' => 'Key Audit',
        ]);
        
        Co_Act::create([
            'kodeCO' => 'EX1025', 
            'kodeCA' => 'EX213',
            'control_act' => 'Purchase order entry data is compared to source documents by individuals who are independent of the purchase order entry process.',
            'description' => 'In some batch-oriented application systems, on-line edit and validation routines are limited, especially in older applications.  With these applications, it is necessary to compare order entry data to source documents manually to ensure the accuracy of data input.  Such a procedure may be unnecessary in many modern application systems, which perform more rigorous data edit and validation and/or confirm purchase order details with suppliers and requisition data.  However, it may remain appropriate in certain cases; for example, if individual purchase orders are large and complex and not readily subject to automated editing and validation. In order for this control to be most effective, the person comparing the purchase order entry data to source documents should not be the one who originally entered the purchase orders.  This kind of control is often achieved through peer-to-peer or supervisory review.',
            'test_of_control' => 'tesnya EX213. Lorem ipsum dolor sit amet consectetur adipisicing elit. Enim odio in necessitatibus, dolor amet ex a commodi temporibus! Necessitatibus corrupti natus, ratione placeat molestias asperiores facere incidunt rem doloribus maiores, ab alias est expedita odio iusto eaque rerum! Sequi fugit eius molestiae et obcaecati nisi eligendi praesentium optio in sint laboriosam voluptatem dicta doloribus ex perferendis ipsum, illo non adipisci saepe aperiam ipsam quaerat itaque debitis! Consequuntur accusantium qui doloremque debitis eveniet quo, similique laudantium culpa quisquam amet magnam molestias sint labore pariatur ea corrupti reprehenderit nulla, quasi, in voluptates nisi dolorum. Exercitationem ipsa repellat tenetur natus veniam et culpa.',
            'nature' => 'Added Value',
        ]);
        
        Co_Act::create([
            'kodeCO' => 'MO01', 
            'kodeCA' => 'MO0101',
            'control_act' => 'lorem amet Purchase order entry data is compared to source documents by individuals who are independent of the purchase order entry process.',
            'description' => 'In some batch-oriented application systems, on-line edit and validation routines are limited, especially in older applications.  With these applications, it is necessary to compare order entry data to source documents manually to ensure the accuracy of data input.  Such a procedure may be unnecessary in many modern application systems, which perform more rigorous data edit and validation and/or confirm purchase order details with suppliers and requisition data.  However, it may remain appropriate in certain cases; for example, if individual purchase orders are large and complex and not readily subject to automated editing and validation. In order for this control to be most effective, the person comparing the purchase order entry data to source documents should not be the one who originally entered the purchase orders.  This kind of control is often achieved through peer-to-peer or supervisory review.',
            'test_of_control' => 'ya itu',
            'nature' => 'Key Audit',
        ]);
        
        Co_Act::create([
            'kodeCO' => 'MO01', 
            'kodeCA' => 'MO0102',
            'control_act' => 'lorem lorem Purchase order entry data is compared to source documents by individuals who are independent of the purchase order entry process.',
            'description' => 'In some batch-oriented application systems, on-line edit and validation routines are limited, especially in older applications.  With these applications, it is necessary to compare order entry data to source documents manually to ensure the accuracy of data input.  Such a procedure may be unnecessary in many modern application systems, which perform more rigorous data edit and validation and/or confirm purchase order details with suppliers and requisition data.  However, it may remain appropriate in certain cases; for example, if individual purchase orders are large and complex and not readily subject to automated editing and validation. In order for this control to be most effective, the person comparing the purchase order entry data to source documents should not be the one who originally entered the purchase orders.  This kind of control is often achieved through peer-to-peer or supervisory review.',
            'test_of_control' => 'ya itu lagi',
            'nature' => 'Key Audit',
        ]);
        
        Co_Act::create([
            'kodeCO' => 'MA01', 
            'kodeCA' => 'MA0101',
            'control_act' => 'lorem amet doler ipsum Purchase order entry data is compared to source documents by individuals who are independent of the purchase order entry process.',
            'description' => 'In some batch-oriented application systems, on-line edit and validation routines are limited, especially in older applications.  With these applications, it is necessary to compare order entry data to source documents manually to ensure the accuracy of data input.  Such a procedure may be unnecessary in many modern application systems, which perform more rigorous data edit and validation and/or confirm purchase order details with suppliers and requisition data.  However, it may remain appropriate in certain cases; for example, if individual purchase orders are large and complex and not readily subject to automated editing and validation. In order for this control to be most effective, the person comparing the purchase order entry data to source documents should not be the one who originally entered the purchase orders.  This kind of control is often achieved through peer-to-peer or supervisory review.',
            'test_of_control' => 'ya lagi ya lagi',
            'nature' => 'Key Audit',
        ]);
        
        Co_Act::create([
            'kodeCO' => 'MA01', 
            'kodeCA' => 'MA0102',
            'control_act' => 'lorem ipsum doler amet Purchase order entry data is compared to source documents by individuals who are independent of the purchase order entry process.',
            'description' => 'In some batch-oriented application systems, on-line edit and validation routines are limited, especially in older applications.  With these applications, it is necessary to compare order entry data to source documents manually to ensure the accuracy of data input.  Such a procedure may be unnecessary in many modern application systems, which perform more rigorous data edit and validation and/or confirm purchase order details with suppliers and requisition data.  However, it may remain appropriate in certain cases; for example, if individual purchase orders are large and complex and not readily subject to automated editing and validation. In order for this control to be most effective, the person comparing the purchase order entry data to source documents should not be the one who originally entered the purchase orders.  This kind of control is often achieved through peer-to-peer or supervisory review.',
            'test_of_control' => 'ya lagi ya lagi llagi',
            'nature' => 'Key Audit',
        ]);

        //numpang seeder leadsheet
        Leadsheet::create([
            'kodeLeadsheet' => 'BCE25-U001',
            'kodeBisCyc' => 'MO',
            'kodeCO' => 'MO01',
            'kodeCA' => 'MO0101',
            'desain' => Null,
            'test' => Null,
            'issue' => Null,
        ]);
        Leadsheet::create([
            'kodeLeadsheet' => 'BCE25-U001',
            'kodeBisCyc' => 'MO',
            'kodeCO' => 'MO01',
            'kodeCA' => 'MO0102',
            'desain' => Null,
            'test' => Null,
            'issue' => Null,
        ]);
        
        Leadsheet::create([
            'kodeLeadsheet' => 'BCE25-U001',
            'kodeBisCyc' => 'MA',
            'kodeCO' => 'MA01',
            'kodeCA' => 'MA0101',
            'desain' => Null,
            'test' => Null,
            'issue' => Null,
        ]);
        
        Leadsheet::create([
            'kodeLeadsheet' => 'BCE25-U001',
            'kodeBisCyc' => 'MA',
            'kodeCO' => 'MA01',
            'kodeCA' => 'MA0102',
            'desain' => Null,
            'test' => Null,
            'issue' => Null,
        ]);
    }
}
