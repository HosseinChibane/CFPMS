<?php

use Symfony\Component\Translation\MessageCatalogue;

$catalogue = new MessageCatalogue('ar', array (
  'validators' => 
  array (
    'This value should be false.' => 'هذه القيمة يجب أن تكون خاطئة.',
    'This value should be true.' => 'هذه القيمة يجب أن تكون حقيقية.',
    'This value should be of type {{ type }}.' => 'هذه القيمة يجب ان تكون من نوع {{ type }}.',
    'This value should be blank.' => 'هذه القيمة يجب ان تكون فارغة.',
    'The value you selected is not a valid choice.' => 'القيمة المختارة ليست خيارا صحيحا.',
    'You must select at least {{ limit }} choice.|You must select at least {{ limit }} choices.' => 'يجب ان تختار {{ limit }} اختيار على الاقل.|يجب ان تختار {{ limit }} اختيار على الاقل.|يجب ان تختار {{ limit }} اختيارات على الاقل.|يجب ان تختار {{ limit }} اختيار على الاقل.|يجب ان تختار {{ limit }} اختيار على الاقل.|يجب ان تختار {{ limit }} اختيار على الاقل.',
    'You must select at most {{ limit }} choice.|You must select at most {{ limit }} choices.' => 'يجب ان تختار {{ limit }} اختيار على الاكثر.|يجب ان تختار {{ limit }} اختيار على الاكثر.|يجب ان تختار {{ limit }} اختيارات على الاكثر.|يجب ان تختار {{ limit }} اختيار على الاكثر.|يجب ان تختار {{ limit }} اختيار على الاكثر.|يجب ان تختار {{ limit }} اختيار على الاكثر.',
    'One or more of the given values is invalid.' => 'واحد أو أكثر من القيم المعطاه خاطئ.',
    'This field was not expected.' => 'لم يكن من المتوقع هذا المجال.',
    'This field is missing.' => 'هذا المجال مفقود.',
    'This value is not a valid date.' => 'هذه القيمة ليست تاريخا صالحا.',
    'This value is not a valid datetime.' => 'هذه القيمة ليست تاريخا و وقتا صالحا.',
    'This value is not a valid email address.' => 'هذه القيمة ليست عنوان بريد إلكتروني صحيح.',
    'The file could not be found.' => 'لا يمكن العثور على الملف.',
    'The file is not readable.' => 'الملف غير قابل للقراءة.',
    'The file is too large ({{ size }} {{ suffix }}). Allowed maximum size is {{ limit }} {{ suffix }}.' => 'الملف كبير جدا ({{ size }} {{ suffix }}).اقصى مساحه مسموح بها ({{ limit }} {{ suffix }}).',
    'The mime type of the file is invalid ({{ type }}). Allowed mime types are {{ types }}.' => 'نوع الملف غير صحيح ({{ type }}). الانواع المسموح بها هى {{ types }}.',
    'This value should be {{ limit }} or less.' => 'هذه القيمة يجب ان تكون {{ limit }} او اقل.',
    'This value is too long. It should have {{ limit }} character or less.|This value is too long. It should have {{ limit }} characters or less.' => 'هذه القيمة طويلة جدا. يجب ان تكون {{ limit }} حرف او اقل.|هذه القيمة طويلة جدا. يجب ان تكون {{ limit }} حرف او اقل.|هذه القيمة طويلة جدا. يجب ان تكون {{ limit }} حروف او اقل.|هذه القيمة طويلة جدا. يجب ان تكون {{ limit }} حرف او اقل.|هذه القيمة طويلة جدا. يجب ان تكون {{ limit }} حرف او اقل.|هذه القيمة طويلة جدا. يجب ان تكون {{ limit }} حرف او اقل.',
    'This value should be {{ limit }} or more.' => 'هذه القيمة يجب ان تكون {{ limit }} او اكثر.',
    'This value is too short. It should have {{ limit }} character or more.|This value is too short. It should have {{ limit }} characters or more.' => 'هذه القيمة قصيرة جدا. يجب ان تكون {{ limit }} حرف او اكثر.|هذه القيمة قصيرة جدا. يجب ان تكون {{ limit }} حرف او اكثر.|هذه القيمة قصيرة جدا. يجب ان تكون {{ limit }} حروف او اكثر.|هذه القيمة قصيرة جدا. يجب ان تكون {{ limit }} حرف او اكثر.|هذه القيمة قصيرة جدا. يجب ان تكون {{ limit }} حرف او اكثر.|هذه القيمة قصيرة جدا. يجب ان تكون {{ limit }} حرف او اكثر.',
    'This value should not be blank.' => 'هذه القيمة يجب الا تكون فارغة.',
    'This value should not be null.' => 'هذه القيمة يجب الا تكون فارغة.',
    'This value should be null.' => 'هذه القيمة يجب ان تكون فارغة.',
    'This value is not valid.' => 'هذه القيمة غير صحيحة.',
    'This value is not a valid time.' => 'هذه القيمة ليست وقت صحيح.',
    'This value is not a valid URL.' => 'هذه القيمة ليست رابط الكترونى صحيح.',
    'The two values should be equal.' => 'القيمتان يجب ان تكونا متساويتان.',
    'The file is too large. Allowed maximum size is {{ limit }} {{ suffix }}.' => 'الملف كبير جدا. اقصى مساحه مسموح بها {{ limit }} {{ suffix }}.',
    'The file is too large.' => 'الملف كبير جدا.',
    'The file could not be uploaded.' => 'لم استطع استقبال الملف.',
    'This value should be a valid number.' => 'هذه القيمة يجب ان تكون رقم.',
    'This file is not a valid image.' => 'هذا الملف ليس صورة صحيحة.',
    'This is not a valid IP address.' => 'هذه القيمة ليست عنوان رقمى صحيح.',
    'This value is not a valid language.' => 'هذه القيمة ليست لغة صحيحة.',
    'This value is not a valid locale.' => 'هذه القيمة ليست موقع صحيح.',
    'This value is not a valid country.' => 'هذه القيمة ليست بلدا صالحا.',
    'This value is already used.' => 'هذه القيمة مستخدمة بالفعل.',
    'The size of the image could not be detected.' => 'لم استطع معرفة حجم الصورة.',
    'The image width is too big ({{ width }}px). Allowed maximum width is {{ max_width }}px.' => 'عرض الصورة كبير جدا ({{ width }}px). اقصى عرض مسموح به هو{{ max_width }}px.',
    'The image width is too small ({{ width }}px). Minimum width expected is {{ min_width }}px.' => 'عرض الصورة صغير جدا ({{ width }}px). اقل عرض مسموح به هو{{ min_width }}px.',
    'The image height is too big ({{ height }}px). Allowed maximum height is {{ max_height }}px.' => 'طول الصورة كبير جدا ({{ height }}px). اقصى طول مسموح به هو{{ max_height }}px.',
    'The image height is too small ({{ height }}px). Minimum height expected is {{ min_height }}px.' => 'طول الصورة صغير جدا ({{ height }}px). اقل طول مسموح به هو{{ min_height }}px.',
    'This value should be the user\'s current password.' => 'هذه القيمة يجب ان تكون كلمة سر المستخدم الحالية.',
    'This value should have exactly {{ limit }} character.|This value should have exactly {{ limit }} characters.' => 'هذه القيمة يجب ان تحتوى على {{ limit }} حرف فقط.|هذه القيمة يجب ان تحتوى على {{ limit }} حرف فقط.|هذه القيمة يجب ان تحتوى على {{ limit }} حروف فقط.|هذه القيمة يجب ان تحتوى على {{ limit }} حرف فقط.|هذه القيمة يجب ان تحتوى على {{ limit }} حرف فقط.|هذه القيمة يجب ان تحتوى على {{ limit }} حرف فقط.',
    'The file was only partially uploaded.' => 'تم استقبال جزء من الملف فقط.',
    'No file was uploaded.' => 'لم يتم ارسال اى ملف.',
    'No temporary folder was configured in php.ini.' => 'لم يتم تهيئة حافظة مؤقتة فى ملف php.ini.',
    'Cannot write temporary file to disk.' => 'لم استطع كتابة الملف المؤقت.',
    'A PHP extension caused the upload to fail.' => 'احد اضافات PHP تسببت فى فشل استقبال الملف.',
    'This collection should contain {{ limit }} element or more.|This collection should contain {{ limit }} elements or more.' => 'هذه المجموعة يجب ان تحتوى على {{ limit }} عنصر او اكثر.|هذه المجموعة يجب ان تحتوى على {{ limit }} عنصر او اكثر.|هذه المجموعة يجب ان تحتوى على {{ limit }} عناصر او اكثر.|هذه المجموعة يجب ان تحتوى على {{ limit }} عنصر او اكثر.|هذه المجموعة يجب ان تحتوى على {{ limit }} عنصر او اكثر.|هذه المجموعة يجب ان تحتوى على {{ limit }} عنصر او اكثر.',
    'This collection should contain {{ limit }} element or less.|This collection should contain {{ limit }} elements or less.' => 'هذه المجموعة يجب ان تحتوى على {{ limit }} عنصر او اقل.|هذه المجموعة يجب ان تحتوى على {{ limit }} عنصر او اقل.|هذه المجموعة يجب ان تحتوى على {{ limit }} عناصر او اقل.|هذه المجموعة يجب ان تحتوى على {{ limit }} عنصر او اقل.|هذه المجموعة يجب ان تحتوى على {{ limit }} عنصر او اقل.|هذه المجموعة يجب ان تحتوى على {{ limit }} عنصر او اقل.',
    'This collection should contain exactly {{ limit }} element.|This collection should contain exactly {{ limit }} elements.' => 'هذه المجموعة يجب ان تحتوى على {{ limit }} عنصر فقط.|هذه المجموعة يجب ان تحتوى على {{ limit }} عنصر فقط.|هذه المجموعة يجب ان تحتوى على {{ limit }} عناصر فقط.|هذه المجموعة يجب ان تحتوى على {{ limit }} عنصر فقط.|هذه المجموعة يجب ان تحتوى على {{ limit }} عنصر فقط.|هذه المجموعة يجب ان تحتوى على {{ limit }} عنصر فقط.',
    'Invalid card number.' => 'رقم البطاقه غير صحيح.',
    'Unsupported card type or invalid card number.' => 'نوع البطاقه غير مدعوم او الرقم غير صحيح.',
    'This is not a valid International Bank Account Number (IBAN).' => 'الرقم IBAN (رقم الحساب المصرفي الدولي) الذي تم إدخاله غير صالح.',
    'This value is not a valid ISBN-10.' => 'هذه القيمة ليست ISBN-10 صالحة.',
    'This value is not a valid ISBN-13.' => 'هذه القيمة ليست ISBN-13 صالحة.',
    'This value is neither a valid ISBN-10 nor a valid ISBN-13.' => 'هذه القيمة ليست ISBN-10 صالحة ولا ISBN-13 صالحة.',
    'This value is not a valid ISSN.' => 'هذه القيمة ليست ISSN صالحة.',
    'This value is not a valid currency.' => 'العُملة غير صحيحة.',
    'This value should be equal to {{ compared_value }}.' => 'القيمة يجب ان تساوي {{ compared_value }}.',
    'This value should be greater than {{ compared_value }}.' => 'القيمة يجب ان تكون اعلي من {{ compared_value }}.',
    'This value should be greater than or equal to {{ compared_value }}.' => 'القيمة يجب ان تكون مساوية او اعلي من {{ compared_value }}.',
    'This value should be identical to {{ compared_value_type }} {{ compared_value }}.' => 'القيمة يجب ان تطابق {{ compared_value_type }} {{ compared_value }}.',
    'This value should be less than {{ compared_value }}.' => 'القيمة يجب ان تكون اقل من {{ compared_value }}.',
    'This value should be less than or equal to {{ compared_value }}.' => 'القيمة يجب ان تساوي او تقل عن {{ compared_value }}.',
    'This value should not be equal to {{ compared_value }}.' => 'القيمة يجب ان لا تساوي {{ compared_value }}.',
    'This value should not be identical to {{ compared_value_type }} {{ compared_value }}.' => 'القيمة يجب ان لا تطابق {{ compared_value_type }} {{ compared_value }}.',
    'The image ratio is too big ({{ ratio }}). Allowed maximum ratio is {{ max_ratio }}.' => 'نسبة العرض على الارتفاع للصورة كبيرة جدا ({{ ratio }}). الحد الأقصى للنسبة المسموح به هو {{ max_ratio }}.',
    'The image ratio is too small ({{ ratio }}). Minimum ratio expected is {{ min_ratio }}.' => 'نسبة العرض على الارتفاع للصورة صغيرة جدا ({{ ratio }}). الحد الأدنى للنسبة المسموح به هو {{ max_ratio }}.',
    'The image is square ({{ width }}x{{ height }}px). Square images are not allowed.' => 'الصورة مربعة ({{ width }}x{{ height }}px). الصور المربعة غير مسموح بها.',
    'The image is landscape oriented ({{ width }}x{{ height }}px). Landscape oriented images are not allowed.' => 'الصورة في وضع أفقي ({{ width }}x{{ height }}px). الصور في وضع أفقي غير مسموح بها.',
    'The image is portrait oriented ({{ width }}x{{ height }}px). Portrait oriented images are not allowed.' => 'الصورة في وضع عمودي ({{ width }}x{{ height }}px). الصور في وضع عمودي غير مسموح بها.',
    'An empty file is not allowed.' => 'ملف فارغ غير مسموح به.',
    'The host could not be resolved.' => 'يتعذر الإتصال بالنطاق.',
    'This value does not match the expected {{ charset }} charset.' => 'هذه القيمة غير متطابقة مع صيغة التحويل {{ charset }}.',
    'This form should not contain extra fields.' => 'هذا النموذج يجب الا يحتوى على اى حقول اضافية.',
    'The uploaded file was too large. Please try to upload a smaller file.' => 'مساحة الملف المرسل كبيرة. من فضلك حاول ارسال ملف اصغر.',
    'The CSRF token is invalid. Please try to resubmit the form.' => 'قيمة رمز الموقع غير صحيحة. من فضلك اعد ارسال النموذج.',
    'fos_user.username.already_used' => 'الإسم المختار مسجل مسبقا',
    'fos_user.username.blank' => 'يرجى تعيين إسم المستخدم',
    'fos_user.username.short' => ' إسم المستخدم قصير جدا',
    'fos_user.username.long' => ' إسم المستخدم طويل جدا',
    'fos_user.email.already_used' => 'البريد الإلكتروني مسجل مسبقا',
    'fos_user.email.blank' => 'يرجى تعين البريد الإلكتروني',
    'fos_user.email.short' => ' البريد الإلكتروني قصير',
    'fos_user.email.long' => ' البريد الإلكتروني طويل',
    'fos_user.email.invalid' => 'البريد الإلكتروني غير صحيح',
    'fos_user.password.blank' => 'يرجى تعيين كلمة المرور',
    'fos_user.password.short' => 'كلمة المرور قصيرة',
    'fos_user.password.mismatch' => 'كلمة المرور المدخلة غير مطابقة للكلمة الأصلية',
    'fos_user.new_password.blank' => 'يرجى تعيين كلمة مرور جديدة',
    'fos_user.new_password.short' => ' كلمة المرور الجديدة قصيرة',
    'fos_user.current_password.invalid' => 'كلمة المرور المدخلة غير صحيحة',
    'fos_user.group.blank' => 'يرجى تعيين إسم المجموعة',
    'fos_user.group.short' => ' إسم المجموعة قصير جدا',
    'fos_user.group.long' => ' إسم المجموعة طويل جدا',
    'fos_group.name.already_used' => 'هذا الإسم غير متاح.',
  ),
  'security' => 
  array (
    'An authentication exception occurred.' => 'حدث خطأ اثناء الدخول.',
    'Authentication credentials could not be found.' => 'لم استطع العثور على معلومات الدخول.',
    'Authentication request could not be processed due to a system problem.' => 'لم يكتمل طلب الدخول نتيجه عطل فى النظام.',
    'Invalid credentials.' => 'معلومات الدخول خاطئة.',
    'Cookie has already been used by someone else.' => 'ملفات تعريف الارتباط(cookies) تم استخدامها من قبل شخص اخر.',
    'Not privileged to request the resource.' => 'ليست لديك الصلاحيات الكافية لهذا الطلب.',
    'Invalid CSRF token.' => 'رمز الموقع غير صحيح.',
    'Digest nonce has expired.' => 'انتهت صلاحية(digest nonce).',
    'No authentication provider found to support the authentication token.' => 'لا يوجد معرف للدخول يدعم الرمز المستخدم للدخول.',
    'No session available, it either timed out or cookies are not enabled.' => 'لا يوجد صلة بينك و بين الموقع اما انها انتهت او ان متصفحك لا يدعم خاصية ملفات تعريف الارتباط (cookies).',
    'No token could be found.' => 'لم استطع العثور على الرمز.',
    'Username could not be found.' => 'لم استطع العثور على اسم الدخول.',
    'Account has expired.' => 'انتهت صلاحية الحساب.',
    'Credentials have expired.' => 'انتهت صلاحية معلومات الدخول.',
    'Account is disabled.' => 'الحساب موقوف.',
    'Account is locked.' => 'الحساب مغلق.',
  ),
  'FOSUserBundle' => 
  array (
    'group.edit.submit' => 'تحديث المجموعة',
    'group.show.name' => 'إسم المجموعة',
    'group.new.submit' => 'إنشاء مجموعة',
    'group.flash.updated' => 'تم تحديث المجموعة',
    'group.flash.created' => 'تم إنشاء المجموعة',
    'group.flash.deleted' => 'تم حـذف المجموعة',
    'security.login.username' => 'إسم المستخدم',
    'security.login.password' => 'كلمة المرور',
    'security.login.remember_me' => 'حفظ البيانات',
    'security.login.submit' => 'تسجيل دخول',
    'profile.show.username' => 'إسم المستخدم',
    'profile.show.email' => 'بريد إلكتروني',
    'profile.edit.submit' => 'تحديث',
    'profile.flash.updated' => 'تم تحديث الملف الشخصي',
    'change_password.submit' => 'تغيير كلمة المرور',
    'change_password.flash.success' => 'تم تغيير كلمة المرور',
    'registration.check_email' => 'لقد تم إرسال رسالة إلكترونية إلى %email% تحتوي على رابط يجب إتباعه لتفعيل حسابك الشخصي.',
    'registration.confirmed' => 'تهانينا %username%، لقد تم تفعيل حسابك.',
    'registration.back' => 'عودة إلى الصفحة الرئيسية',
    'registration.submit' => 'تسجيل',
    'registration.flash.user_created' => 'تم إنشاء حسابك بنجاح',
    'registration.email.subject' => '%username%! مرحبا',
    'registration.email.message' => 'مرحبا %username%!


 لتفعيل حسابك يرجى إتباع الرابط التالي %confirmationUrl%

 الرابط يمكن إستخدامه مرة واحدة فقط لتفعيل حسابك

شكرا،
فريق العمل.
',
    'resetting.check_email' => 'لقد تم إرسال رسالة إلكترونية تحتوي على رابط يجب الضغط عليه لإعادة ضبط كلمة المرور الخاصة بك.
ملحوظة: يمكنك إعادة ضبط كلمة المرور الخاصة بك خلال %tokenLifetime% ساعة

يرجى التحقق من ملف السبام إذا لم تستقبل الرسالة الإلكترونية قريبا أو أعد المحاولة
',
    'resetting.request.username' => 'إسم المستخدم او البريد الالكتروني',
    'resetting.request.submit' => 'إعادة ضبط كلمة المرور',
    'resetting.reset.submit' => 'تغيير كلمة المرور',
    'resetting.flash.success' => 'تم إعادة ضبط كلمة المرور بنجاح',
    'resetting.email.subject' => 'إعادة ضبط كلمة المرور',
    'resetting.email.message' => 'مرحبا %username%!

لإعادة ضبط كلمة المرور يرجى إتباع الرابط التالي %confirmationUrl%

شكرا،
فريق العمل.
',
    'layout.logout' => 'خروج',
    'layout.login' => 'دخول',
    'layout.register' => 'تسجيل',
    'layout.logged_in_as' => 'تم الدخول بإسم %username%',
    'form.group_name' => 'إسم المجموعة',
    'form.username' => 'إسم المستخدم',
    'form.email' => 'البريد الإلكتروني',
    'form.current_password' => 'كلمة المرور الحالية',
    'form.password' => 'كلمة المرور',
    'form.password_confirmation' => 'تأكيد',
    'form.new_password' => 'كلمة المرور الجديدة',
    'form.new_password_confirmation' => 'تأكيد كلمة المرور',
  ),
  'VichUploaderBundle' => 
  array (
    'download' => 'تحميل',
    'form.label.delete' => 'حذف ؟',
  ),
  'EasyAdminBundle' => 
  array (
    'new.page_title' => '"%entity_name%" جديد',
    'show.page_title' => '(#%entity_id%) %entity_name%',
    'edit.page_title' => '(#%entity_id%) %entity_name% تعديل',
    'list.page_title' => '%entity_name%',
    'search.page_title' => '{0} لا توجد اي نتائج |{1} العثور على نتيجة وحيدة|]1,Inf] العثور على <strong>%count%</strong> نتيجة ',
    'search.no_results' => 'لا توجد اي نتائج',
    'list.row_actions' => 'إجراءات',
    'paginator.first' => 'الأول',
    'paginator.previous' => 'السابق',
    'paginator.next' => 'التالي',
    'paginator.last' => 'الأخير',
    'paginator.counter' => '<strong>%results%</strong> / <strong>%end%</strong> - <strong>%start%</strong>',
    'label.true' => 'نعم',
    'label.false' => 'لا',
    'label.empty' => 'فارغ',
    'label.null' => 'لا شيء',
    'label.nullable_field' => 'اتركه فارغ',
    'label.object' => 'Objet PHP',
    'label.inaccessible' => 'لا يمكن الوصول إليها',
    'label.inaccessible.explanation' => 'لا يوجد وصف الوصول لهذه الخاصية أو أنها ليست عامة.',
    'user.logged_in_as' => 'تسجيل الدخول باسم',
    'user.unnamed' => 'مستخدم بدون اسم',
    'user.anonymous' => 'مستخدم مجهول',
    'toggle_navigation' => 'اتاحة أو تعطيل التصفح',
    'delete_modal.title' => 'هل تريد حذف هذا العنصر؟',
    'delete_modal.content' => 'هذا الإجراء غير قابل للالغاء.',
    'delete_modal.action' => 'حذف',
    'action.add_new_item' => 'إضافة عنصر جديد',
    'action.add_another_item' => 'إضافة عنصر آخر',
    'action.remove_item' => 'حذف العنصر',
    'errors' => 'خطأ | أخطاء',
    'form.are_you_sure' => 'لم يتم حفظه التغييرات.',
    'show.remaining_items' => '{1} هناك عنصر آخر لم يتم عرضه في هذه القائمة|]1,Inf] عنصر آخر لم يتم عرضه في هذه القائمة %count% ',
  ),
  'messages' => 
  array (
    'action.new' => '%entity_name% جديد',
    'action.show' => 'إطلاع',
    'action.edit' => 'تعديل',
    'action.search' => 'بحث',
    'action.delete' => 'حذف',
    'action.save' => 'حفظ',
    'action.cancel' => 'الغاء',
    'action.list' => 'رجوع إلى القائمة',
    'label.form.empty_value' => 'لا شيء',
    '__name__label__' => '__name__label__',
  ),
));

$catalogueFr = new MessageCatalogue('fr', array (
  'validators' => 
  array (
    'This value should be false.' => 'Cette valeur doit être fausse.',
    'This value should be true.' => 'Cette valeur doit être vraie.',
    'This value should be of type {{ type }}.' => 'Cette valeur doit être de type {{ type }}.',
    'This value should be blank.' => 'Cette valeur doit être vide.',
    'The value you selected is not a valid choice.' => 'Cette valeur doit être l\'un des choix proposés.',
    'You must select at least {{ limit }} choice.|You must select at least {{ limit }} choices.' => 'Vous devez sélectionner au moins {{ limit }} choix.|Vous devez sélectionner au moins {{ limit }} choix.',
    'You must select at most {{ limit }} choice.|You must select at most {{ limit }} choices.' => 'Vous devez sélectionner au maximum {{ limit }} choix.|Vous devez sélectionner au maximum {{ limit }} choix.',
    'One or more of the given values is invalid.' => 'Une ou plusieurs des valeurs soumises sont invalides.',
    'This field was not expected.' => 'Ce champ n\'a pas été prévu.',
    'This field is missing.' => 'Ce champ est manquant.',
    'This value is not a valid date.' => 'Cette valeur n\'est pas une date valide.',
    'This value is not a valid datetime.' => 'Cette valeur n\'est pas une date valide.',
    'This value is not a valid email address.' => 'Cette valeur n\'est pas une adresse email valide.',
    'The file could not be found.' => 'Le fichier n\'a pas été trouvé.',
    'The file is not readable.' => 'Le fichier n\'est pas lisible.',
    'The file is too large ({{ size }} {{ suffix }}). Allowed maximum size is {{ limit }} {{ suffix }}.' => 'Le fichier est trop volumineux ({{ size }} {{ suffix }}). Sa taille ne doit pas dépasser {{ limit }} {{ suffix }}.',
    'The mime type of the file is invalid ({{ type }}). Allowed mime types are {{ types }}.' => 'Le type du fichier est invalide ({{ type }}). Les types autorisés sont {{ types }}.',
    'This value should be {{ limit }} or less.' => 'Cette valeur doit être inférieure ou égale à {{ limit }}.',
    'This value is too long. It should have {{ limit }} character or less.|This value is too long. It should have {{ limit }} characters or less.' => 'Cette chaine est trop longue. Elle doit avoir au maximum {{ limit }} caractère.|Cette chaine est trop longue. Elle doit avoir au maximum {{ limit }} caractères.',
    'This value should be {{ limit }} or more.' => 'Cette valeur doit être supérieure ou égale à {{ limit }}.',
    'This value is too short. It should have {{ limit }} character or more.|This value is too short. It should have {{ limit }} characters or more.' => 'Cette chaine est trop courte. Elle doit avoir au minimum {{ limit }} caractère.|Cette chaine est trop courte. Elle doit avoir au minimum {{ limit }} caractères.',
    'This value should not be blank.' => 'Cette valeur ne doit pas être vide.',
    'This value should not be null.' => 'Cette valeur ne doit pas être nulle.',
    'This value should be null.' => 'Cette valeur doit être nulle.',
    'This value is not valid.' => 'Cette valeur n\'est pas valide.',
    'This value is not a valid time.' => 'Cette valeur n\'est pas une heure valide.',
    'This value is not a valid URL.' => 'Cette valeur n\'est pas une URL valide.',
    'The two values should be equal.' => 'Les deux valeurs doivent être identiques.',
    'The file is too large. Allowed maximum size is {{ limit }} {{ suffix }}.' => 'Le fichier est trop volumineux. Sa taille ne doit pas dépasser {{ limit }} {{ suffix }}.',
    'The file is too large.' => 'Le fichier est trop volumineux.',
    'The file could not be uploaded.' => 'Le téléchargement de ce fichier est impossible.',
    'This value should be a valid number.' => 'Cette valeur doit être un nombre.',
    'This file is not a valid image.' => 'Ce fichier n\'est pas une image valide.',
    'This is not a valid IP address.' => 'Cette adresse IP n\'est pas valide.',
    'This value is not a valid language.' => 'Cette langue n\'est pas valide.',
    'This value is not a valid locale.' => 'Ce paramètre régional n\'est pas valide.',
    'This value is not a valid country.' => 'Ce pays n\'est pas valide.',
    'This value is already used.' => 'Cette valeur est déjà utilisée.',
    'The size of the image could not be detected.' => 'La taille de l\'image n\'a pas pu être détectée.',
    'The image width is too big ({{ width }}px). Allowed maximum width is {{ max_width }}px.' => 'La largeur de l\'image est trop grande ({{ width }}px). La largeur maximale autorisée est de {{ max_width }}px.',
    'The image width is too small ({{ width }}px). Minimum width expected is {{ min_width }}px.' => 'La largeur de l\'image est trop petite ({{ width }}px). La largeur minimale attendue est de {{ min_width }}px.',
    'The image height is too big ({{ height }}px). Allowed maximum height is {{ max_height }}px.' => 'La hauteur de l\'image est trop grande ({{ height }}px). La hauteur maximale autorisée est de {{ max_height }}px.',
    'The image height is too small ({{ height }}px). Minimum height expected is {{ min_height }}px.' => 'La hauteur de l\'image est trop petite ({{ height }}px). La hauteur minimale attendue est de {{ min_height }}px.',
    'This value should be the user\'s current password.' => 'Cette valeur doit être le mot de passe actuel de l\'utilisateur.',
    'This value should have exactly {{ limit }} character.|This value should have exactly {{ limit }} characters.' => 'Cette chaine doit avoir exactement {{ limit }} caractère.|Cette chaine doit avoir exactement {{ limit }} caractères.',
    'The file was only partially uploaded.' => 'Le fichier a été partiellement transféré.',
    'No file was uploaded.' => 'Aucun fichier n\'a été transféré.',
    'No temporary folder was configured in php.ini.' => 'Aucun répertoire temporaire n\'a été configuré dans le php.ini.',
    'Cannot write temporary file to disk.' => 'Impossible d\'écrire le fichier temporaire sur le disque.',
    'A PHP extension caused the upload to fail.' => 'Une extension PHP a empêché le transfert du fichier.',
    'This collection should contain {{ limit }} element or more.|This collection should contain {{ limit }} elements or more.' => 'Cette collection doit contenir {{ limit }} élément ou plus.|Cette collection doit contenir {{ limit }} éléments ou plus.',
    'This collection should contain {{ limit }} element or less.|This collection should contain {{ limit }} elements or less.' => 'Cette collection doit contenir {{ limit }} élément ou moins.|Cette collection doit contenir {{ limit }} éléments ou moins.',
    'This collection should contain exactly {{ limit }} element.|This collection should contain exactly {{ limit }} elements.' => 'Cette collection doit contenir exactement {{ limit }} élément.|Cette collection doit contenir exactement {{ limit }} éléments.',
    'Invalid card number.' => 'Numéro de carte invalide.',
    'Unsupported card type or invalid card number.' => 'Type de carte non supporté ou numéro invalide.',
    'This is not a valid International Bank Account Number (IBAN).' => 'Le numéro IBAN (International Bank Account Number) saisi n\'est pas valide.',
    'This value is not a valid ISBN-10.' => 'Cette valeur n\'est pas un code ISBN-10 valide.',
    'This value is not a valid ISBN-13.' => 'Cette valeur n\'est pas un code ISBN-13 valide.',
    'This value is neither a valid ISBN-10 nor a valid ISBN-13.' => 'Cette valeur n\'est ni un code ISBN-10, ni un code ISBN-13 valide.',
    'This value is not a valid ISSN.' => 'Cette valeur n\'est pas un code ISSN valide.',
    'This value is not a valid currency.' => 'Cette valeur n\'est pas une devise valide.',
    'This value should be equal to {{ compared_value }}.' => 'Cette valeur doit être égale à {{ compared_value }}.',
    'This value should be greater than {{ compared_value }}.' => 'Cette valeur doit être supérieure à {{ compared_value }}.',
    'This value should be greater than or equal to {{ compared_value }}.' => 'Cette valeur doit être supérieure ou égale à {{ compared_value }}.',
    'This value should be identical to {{ compared_value_type }} {{ compared_value }}.' => 'Cette valeur doit être identique à {{ compared_value_type }} {{ compared_value }}.',
    'This value should be less than {{ compared_value }}.' => 'Cette valeur doit être inférieure à {{ compared_value }}.',
    'This value should be less than or equal to {{ compared_value }}.' => 'Cette valeur doit être inférieure ou égale à {{ compared_value }}.',
    'This value should not be equal to {{ compared_value }}.' => 'Cette valeur ne doit pas être égale à {{ compared_value }}.',
    'This value should not be identical to {{ compared_value_type }} {{ compared_value }}.' => 'Cette valeur ne doit pas être identique à {{ compared_value_type }} {{ compared_value }}.',
    'The image ratio is too big ({{ ratio }}). Allowed maximum ratio is {{ max_ratio }}.' => 'Le rapport largeur/hauteur de l\'image est trop grand ({{ ratio }}). Le rapport maximal autorisé est {{ max_ratio }}.',
    'The image ratio is too small ({{ ratio }}). Minimum ratio expected is {{ min_ratio }}.' => 'Le rapport largeur/hauteur de l\'image est trop petit ({{ ratio }}). Le rapport minimal attendu est {{ min_ratio }}.',
    'The image is square ({{ width }}x{{ height }}px). Square images are not allowed.' => 'L\'image est carrée ({{ width }}x{{ height }}px). Les images carrées ne sont pas autorisées.',
    'The image is landscape oriented ({{ width }}x{{ height }}px). Landscape oriented images are not allowed.' => 'L\'image est au format paysage ({{ width }}x{{ height }}px). Les images au format paysage ne sont pas autorisées.',
    'The image is portrait oriented ({{ width }}x{{ height }}px). Portrait oriented images are not allowed.' => 'L\'image est au format portrait ({{ width }}x{{ height }}px). Les images au format portrait ne sont pas autorisées.',
    'An empty file is not allowed.' => 'Un fichier vide n\'est pas autorisé.',
    'The host could not be resolved.' => 'Le nom de domaine n\'a pas pu être résolu.',
    'This value does not match the expected {{ charset }} charset.' => 'Cette valeur ne correspond pas au jeu de caractères {{ charset }} attendu.',
    'This is not a valid Business Identifier Code (BIC).' => 'Ce n\'est pas un code universel d\'identification des banques (BIC) valide.',
    'This form should not contain extra fields.' => 'Ce formulaire ne doit pas contenir des champs supplémentaires.',
    'The uploaded file was too large. Please try to upload a smaller file.' => 'Le fichier téléchargé est trop volumineux. Merci d\'essayer d\'envoyer un fichier plus petit.',
    'The CSRF token is invalid. Please try to resubmit the form.' => 'Le jeton CSRF est invalide. Veuillez renvoyer le formulaire.',
    'fos_user.username.already_used' => 'Le nom d\'utilisateur est déjà utilisé.',
    'fos_user.username.blank' => 'Entrez un nom d\'utilisateur s\'il vous plait.',
    'fos_user.username.short' => 'Le nom d\'utilisateur est trop court.',
    'fos_user.username.long' => 'Le nom d\'utilisateur est trop long.',
    'fos_user.email.already_used' => 'L\'adresse e-mail est déjà utilisée.',
    'fos_user.email.blank' => 'Entrez une adresse e-mail s\'il vous plait.',
    'fos_user.email.short' => 'L\'adresse e-mail est trop courte.',
    'fos_user.email.long' => 'L\'adresse e-mail est trop longue.',
    'fos_user.email.invalid' => 'L\'adresse e-mail est invalide.',
    'fos_user.password.blank' => 'Entrez un mot de passe s\'il vous plait.',
    'fos_user.password.short' => 'Le mot de passe est trop court.',
    'fos_user.password.mismatch' => 'Les deux mots de passe ne sont pas identiques.',
    'fos_user.new_password.blank' => 'Entrez un nouveau mot de passe s\'il vous plait.',
    'fos_user.new_password.short' => 'Le nouveau mot de passe est trop court.',
    'fos_user.current_password.invalid' => 'Le mot de passe est invalide.',
    'fos_user.group.blank' => 'Entrez un nom s\'il vous plait.',
    'fos_user.group.short' => 'Le nom est trop court.',
    'fos_user.group.long' => 'Le nom est trop long.',
    'fos_group.name.already_used' => 'Le nom est déjà utilisé.',
  ),
  'security' => 
  array (
    'An authentication exception occurred.' => 'Une exception d\'authentification s\'est produite.',
    'Authentication credentials could not be found.' => 'Les identifiants d\'authentification n\'ont pas pu être trouvés.',
    'Authentication request could not be processed due to a system problem.' => 'La requête d\'authentification n\'a pas pu être executée à cause d\'un problème système.',
    'Invalid credentials.' => 'Identifiants invalides.',
    'Cookie has already been used by someone else.' => 'Le cookie a déjà été utilisé par quelqu\'un d\'autre.',
    'Not privileged to request the resource.' => 'Privilèges insuffisants pour accéder à la ressource.',
    'Invalid CSRF token.' => 'Jeton CSRF invalide.',
    'Digest nonce has expired.' => 'Le digest nonce a expiré.',
    'No authentication provider found to support the authentication token.' => 'Aucun fournisseur d\'authentification n\'a été trouvé pour supporter le jeton d\'authentification.',
    'No session available, it either timed out or cookies are not enabled.' => 'Aucune session disponible, celle-ci a expiré ou les cookies ne sont pas activés.',
    'No token could be found.' => 'Aucun jeton n\'a pu être trouvé.',
    'Username could not be found.' => 'Le nom d\'utilisateur n\'a pas pu être trouvé.',
    'Account has expired.' => 'Le compte a expiré.',
    'Credentials have expired.' => 'Les identifiants ont expiré.',
    'Account is disabled.' => 'Le compte est désactivé.',
    'Account is locked.' => 'Le compte est bloqué.',
  ),
  'FOSUserBundle' => 
  array (
    'group.edit.submit' => 'Mettre à jour le groupe',
    'group.show.name' => 'Nom du groupe',
    'group.new.submit' => 'Créer le groupe',
    'group.flash.updated' => 'Le groupe a été mis à jour.',
    'group.flash.created' => 'Le groupe a été créé.',
    'group.flash.deleted' => 'Le groupe a été supprimé.',
    'security.login.username' => 'Nom d\'utilisateur',
    'security.login.password' => 'Mot de passe',
    'security.login.remember_me' => 'Se souvenir de moi',
    'security.login.submit' => 'Connexion',
    'profile.show.username' => 'Nom d\'utilisateur',
    'profile.show.email' => 'Adresse e-mail',
    'profile.edit.submit' => 'Mettre à jour',
    'profile.flash.updated' => 'Le profil a été mis à jour.',
    'change_password.submit' => 'Modifier le mot de passe',
    'change_password.flash.success' => 'Le mot de passe a été modifié.',
    'registration.check_email' => 'Un e-mail a été envoyé à l\'adresse %email%. Il contient un lien d\'activation sur lequel il vous faudra cliquer afin d\'activer votre compte.',
    'registration.confirmed' => 'Félicitations %username%, votre compte est maintenant activé.',
    'registration.back' => 'Retour à la page d\'origine.',
    'registration.submit' => 'Créer un compte',
    'registration.flash.user_created' => 'L\'utilisateur a été créé avec succès.',
    'registration.email.subject' => 'Bienvenue %username% !',
    'registration.email.message' => 'Bonjour %username% !

Pour valider votre compte utilisateur, merci de vous rendre sur %confirmationUrl%

Ce lien ne peut être utilisé qu\'une seule fois pour valider votre compte.

Cordialement,
L\'équipe
',
    'resetting.check_email' => 'Un e-mail a été envoyé. Il contient un lien sur lequel il vous faudra cliquer pour réinitialiser votre mot de passe.
Remarque : Vous ne pouvez demander un nouveau mot de passe que toutes les %tokenLifetime% heures.

Si vous ne recevez pas un email, vérifiez votre dossier spam ou essayez à nouveau.
',
    'resetting.request.username' => 'Nom d\'utilisateur ou adresse e-mail',
    'resetting.request.submit' => 'Réinitialiser le mot de passe',
    'resetting.reset.submit' => 'Modifier le mot de passe',
    'resetting.flash.success' => 'Le mot de passe a été réinitialisé avec succès.',
    'resetting.email.subject' => 'Réinitialisation de votre mot de passe',
    'resetting.email.message' => 'Bonjour %username% !

Pour réinitialiser votre mot de passe, merci de vous rendre sur %confirmationUrl%

Cordialement,
L\'équipe
',
    'layout.logout' => 'Déconnexion',
    'layout.login' => 'Connexion',
    'layout.register' => 'Inscription',
    'layout.logged_in_as' => 'Connecté en tant que %username%',
    'form.group_name' => 'Nom du groupe',
    'form.username' => 'Nom d\'utilisateur',
    'form.email' => 'Adresse e-mail',
    'form.current_password' => 'Mot de passe actuel',
    'form.password' => 'Mot de passe',
    'form.password_confirmation' => 'Répéter le mot de passe',
    'form.new_password' => 'Nouveau mot de passe',
    'form.new_password_confirmation' => 'Répéter le nouveau mot de passe',
  ),
  'VichUploaderBundle' => 
  array (
    'download' => 'Télécharger',
    'form.label.delete' => 'Supprimer ?',
  ),
  'LexikFormFilterBundle' => 
  array (
    'boolean.yes_or_no' => 'Indifférent',
    'boolean.yes' => 'Oui',
    'boolean.no' => 'Non',
    'number.equal' => 'Égal à',
    'number.greater_than' => 'Plus grand que',
    'number.greater_than_equal' => 'Plus grand ou égal à',
    'number.lower_than' => 'Plus petit que',
    'number.lower_than_equal' => 'Plus petit ou égale à',
    'text.starts' => 'Commence par',
    'text.ends' => 'Termine par',
    'text.equals' => 'Égal à',
    'text.both' => 'Contient',
  ),
  'EasyAdminBundle' => 
  array (
    'new.page_title' => 'Créer "%entity_name%"',
    'show.page_title' => '%entity_name% (#%entity_id%)',
    'edit.page_title' => 'Modifier %entity_name% (#%entity_id%)',
    'list.page_title' => '%entity_name%',
    'search.page_title' => '{0} Aucun résultat trouvé|{1} <strong>1</strong> résultat trouvé|]1,Inf] <strong>%count%</strong> résultats trouvés',
    'search.no_results' => 'Aucun résultat trouvé',
    'list.row_actions' => 'Actions',
    'paginator.first' => 'Premier',
    'paginator.previous' => 'Précédent',
    'paginator.next' => 'Suivant',
    'paginator.last' => 'Dernier',
    'paginator.counter' => '<strong>%start%</strong> - <strong>%end%</strong> sur <strong>%results%</strong>',
    'label.true' => 'Oui',
    'label.false' => 'Non',
    'label.empty' => 'Vide',
    'label.null' => 'Aucun(e)',
    'label.nullable_field' => 'Laisser vide',
    'label.object' => 'Objet PHP',
    'label.inaccessible' => 'Inaccessible',
    'label.inaccessible.explanation' => 'Aucun accesseur n\'existe pour cette propriété ou celle-ci n\'est pas publique.',
    'user.logged_in_as' => 'Connecté en tant que',
    'user.unnamed' => 'Utilisateur sans nom',
    'user.anonymous' => 'Utilisateur anonyme',
    'user.signout' => 'Déconnexion',
    'toggle_navigation' => 'Activer ou désactiver la navigation',
    'delete_modal.title' => 'Voulez-vous supprimer cet élément ?',
    'delete_modal.content' => 'Cette action est irréversible.',
    'delete_modal.action' => 'Supprimer',
    'action.add_new_item' => 'Ajouter un nouvel élément',
    'action.add_another_item' => 'Ajouter un autre élément',
    'action.remove_item' => 'Supprimer l\'élément',
    'errors' => 'Erreur|Erreurs',
    'form.are_you_sure' => 'Vous n\'avez pas sauvegardé vos modifications.',
    'show.remaining_items' => '{1} il y a un autre élément qui n\'est pas affiché dans cette liste|]1,Inf] %count% autres éléments ne sont pas affichés dans cette liste',
  ),
  'messages' => 
  array (
    'action.new' => 'Créer %entity_name%',
    'action.show' => 'Voir',
    'action.edit' => 'Éditer',
    'action.search' => 'Rechercher',
    'action.delete' => 'Supprimer',
    'action.save' => 'Sauvegarder les modifications',
    'action.cancel' => 'Annuler',
    'action.list' => 'Retour à la liste',
    'label.form.empty_value' => 'Aucun(e)',
    '__name__label__' => '__name__label__',
  ),
));
$catalogue->addFallbackCatalogue($catalogueFr);

return $catalogue;
