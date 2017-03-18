<?php

use Symfony\Component\Translation\MessageCatalogue;

$catalogue = new MessageCatalogue('pt', array (
  'validators' => 
  array (
    'This value should be false.' => 'Este valor deveria ser falso.',
    'This value should be true.' => 'Este valor deveria ser verdadeiro.',
    'This value should be of type {{ type }}.' => 'Este valor deveria ser do tipo {{ type }}.',
    'This value should be blank.' => 'Este valor deveria ser vazio.',
    'The value you selected is not a valid choice.' => 'O valor selecionado não é uma opção válida.',
    'You must select at least {{ limit }} choice.|You must select at least {{ limit }} choices.' => 'Você deveria selecionar {{ limit }} opção no mínimo.|Você deveria selecionar {{ limit }} opções no mínimo.',
    'You must select at most {{ limit }} choice.|You must select at most {{ limit }} choices.' => 'Você deve selecionar, no máximo {{ limit }} opção.|Você deve selecionar, no máximo {{ limit }} opções.',
    'One or more of the given values is invalid.' => 'Um ou mais dos valores introduzidos não são válidos.',
    'This field was not expected.' => 'Este campo não era esperado.',
    'This field is missing.' => 'Este campo está faltando.',
    'This value is not a valid date.' => 'Este valor não é uma data válida.',
    'This value is not a valid datetime.' => 'Este valor não é uma data-hora válida.',
    'This value is not a valid email address.' => 'Este valor não é um endereço de e-mail válido.',
    'The file could not be found.' => 'O arquivo não pôde ser encontrado.',
    'The file is not readable.' => 'O arquivo não pôde ser lido.',
    'The file is too large ({{ size }} {{ suffix }}). Allowed maximum size is {{ limit }} {{ suffix }}.' => 'O arquivo é muito grande ({{ size }} {{ suffix }}). O tamanho máximo permitido é de {{ limit }} {{ suffix }}.',
    'The mime type of the file is invalid ({{ type }}). Allowed mime types are {{ types }}.' => 'O tipo mime do arquivo é inválido ({{ type }}). Os tipos mime permitidos são {{ types }}.',
    'This value should be {{ limit }} or less.' => 'Este valor deveria ser {{ limit }} ou menor.',
    'This value is too long. It should have {{ limit }} character or less.|This value is too long. It should have {{ limit }} characters or less.' => 'O valor é muito longo. Deveria ter {{ limit }} caracteres ou menos.',
    'This value should be {{ limit }} or more.' => 'Este valor deveria ser {{ limit }} ou mais.',
    'This value is too short. It should have {{ limit }} character or more.|This value is too short. It should have {{ limit }} characters or more.' => 'O valor é muito curto. Deveria de ter {{ limit }} caractere ou mais.|O valor é muito curto. Deveria de ter {{ limit }} caracteres ou mais.',
    'This value should not be blank.' => 'Este valor não deveria ser branco/vazio.',
    'This value should not be null.' => 'Este valor não deveria ser nulo.',
    'This value should be null.' => 'Este valor deveria ser nulo.',
    'This value is not valid.' => 'Este valor não é válido.',
    'This value is not a valid time.' => 'Este valor não é uma hora válida.',
    'This value is not a valid URL.' => 'Este valor não é um URL válido.',
    'The two values should be equal.' => 'Os dois valores deveriam ser iguais.',
    'The file is too large. Allowed maximum size is {{ limit }} {{ suffix }}.' => 'O arquivo é muito grande. O tamanho máximo permitido é de {{ limit }} {{ suffix }}.',
    'The file is too large.' => 'O ficheiro é muito grande.',
    'The file could not be uploaded.' => 'Não foi possível carregar o ficheiro.',
    'This value should be a valid number.' => 'Este valor deveria de ser um número válido.',
    'This file is not a valid image.' => 'Este ficheiro não é uma imagem.',
    'This is not a valid IP address.' => 'Este endereço de IP não é válido.',
    'This value is not a valid language.' => 'Este valor não é uma linguagem válida.',
    'This value is not a valid locale.' => 'Este valor não é um \'locale\' válido.',
    'This value is not a valid country.' => 'Este valor não é um País válido.',
    'This value is already used.' => 'Este valor já está a ser usado.',
    'The size of the image could not be detected.' => 'O tamanho da imagem não foi detetado.',
    'The image width is too big ({{ width }}px). Allowed maximum width is {{ max_width }}px.' => 'A largura da imagem ({{ width }}px) é muito grande. A largura máxima da imagem é: {{ max_width }}px.',
    'The image width is too small ({{ width }}px). Minimum width expected is {{ min_width }}px.' => 'A largura da imagem ({{ width }}px) é muito pequena. A largura miníma da imagem é de: {{ min_width }}px.',
    'The image height is too big ({{ height }}px). Allowed maximum height is {{ max_height }}px.' => 'A altura da imagem ({{ height }}px) é muito grande. A altura máxima da imagem é de: {{ max_height }}px.',
    'The image height is too small ({{ height }}px). Minimum height expected is {{ min_height }}px.' => 'A altura da imagem ({{ height }}px) é muito pequena. A altura miníma da imagem é de: {{ min_height }}px.',
    'This value should be the user\'s current password.' => 'Este valor deveria de ser a password atual do utilizador.',
    'This value should have exactly {{ limit }} character.|This value should have exactly {{ limit }} characters.' => 'Este valor tem de ter exatamente {{ limit }} carateres.',
    'The file was only partially uploaded.' => 'Só foi enviado parte do ficheiro.',
    'No file was uploaded.' => 'Nenhum ficheiro foi enviado.',
    'No temporary folder was configured in php.ini.' => 'Não existe nenhum directório temporária configurado no ficheiro php.ini.',
    'Cannot write temporary file to disk.' => 'Não foi possível escrever ficheiros temporários no disco.',
    'A PHP extension caused the upload to fail.' => 'Uma extensão PHP causou a falha no envio.',
    'This collection should contain {{ limit }} element or more.|This collection should contain {{ limit }} elements or more.' => 'Esta coleção deve conter {{ limit }} elemento ou mais.|Esta coleção deve conter {{ limit }} elementos ou mais.',
    'This collection should contain {{ limit }} element or less.|This collection should contain {{ limit }} elements or less.' => 'Esta coleção deve conter {{ limit }} elemento ou menos.|Esta coleção deve conter {{ limit }} elementos ou menos.',
    'This collection should contain exactly {{ limit }} element.|This collection should contain exactly {{ limit }} elements.' => 'Esta coleção deve conter exatamente {{ limit }} elemento.|Esta coleção deve conter exatamente {{ limit }} elementos.',
    'Invalid card number.' => 'Número de cartão inválido.',
    'Unsupported card type or invalid card number.' => 'Tipo de cartão não suportado ou número de cartão inválido.',
    'This is not a valid International Bank Account Number (IBAN).' => 'Este não é um Número Internacional de Conta Bancária (IBAN) válido.',
    'This value is not a valid ISBN-10.' => 'Este valor não é um ISBN-10 válido.',
    'This value is not a valid ISBN-13.' => 'Este valor não é um ISBN-13 válido.',
    'This value is neither a valid ISBN-10 nor a valid ISBN-13.' => 'Este valor não é um ISBN-10 ou ISBN-13 válido.',
    'This value is not a valid ISSN.' => 'Este valor não é um ISSN válido.',
    'This value is not a valid currency.' => 'Este não é um valor monetário válido.',
    'This value should be equal to {{ compared_value }}.' => 'Este valor deve ser igual a {{ compared_value }}.',
    'This value should be greater than {{ compared_value }}.' => 'Este valor deve ser superior a {{ compared_value }}.',
    'This value should be greater than or equal to {{ compared_value }}.' => 'Este valor deve ser igual ou superior a {{ compared_value }}.',
    'This value should be identical to {{ compared_value_type }} {{ compared_value }}.' => 'Este valor deve ser idêntico a {{ compared_value_type }} {{ compared_value }}.',
    'This value should be less than {{ compared_value }}.' => 'Este valor deve ser inferior a {{ compared_value }}.',
    'This value should be less than or equal to {{ compared_value }}.' => 'Este valor deve ser igual ou inferior a {{ compared_value }}.',
    'This value should not be equal to {{ compared_value }}.' => 'Este valor não deve ser igual a {{ compared_value }}.',
    'This value should not be identical to {{ compared_value_type }} {{ compared_value }}.' => 'Este valor não deve ser idêntico a {{ compared_value_type }} {{ compared_value }}.',
    'The image ratio is too big ({{ ratio }}). Allowed maximum ratio is {{ max_ratio }}.' => 'O formato da imagem é muito grande ({{ ratio }}). O formato máximo é {{ max_ratio }}.',
    'The image ratio is too small ({{ ratio }}). Minimum ratio expected is {{ min_ratio }}.' => 'O formato da imagem é muito pequeno ({{ ratio }}). O formato mínimo esperado é {{ min_ratio }}.',
    'The image is square ({{ width }}x{{ height }}px). Square images are not allowed.' => 'A imagem é um quadrado ({{ width }}x{{ height }}px). Imagens quadradas não são permitidas.',
    'The image is landscape oriented ({{ width }}x{{ height }}px). Landscape oriented images are not allowed.' => 'A imagem está orientada à paisagem ({{ width }}x{{ height }}px). Imagens orientadas à paisagem não são permitidas.',
    'The image is portrait oriented ({{ width }}x{{ height }}px). Portrait oriented images are not allowed.' => 'A imagem está orientada ao retrato ({{ width }}x{{ height }}px). Imagens orientadas ao retrato não são permitidas.',
    'An empty file is not allowed.' => 'Ficheiro vazio não é permitido.',
    'This form should not contain extra fields.' => 'Este formulário não deveria conter campos extra.',
    'The uploaded file was too large. Please try to upload a smaller file.' => 'O arquivo enviado é muito grande. Por favor, tente enviar um ficheiro mais pequeno.',
    'The CSRF token is invalid. Please try to resubmit the form.' => 'O token CSRF é inválido. Por favor submeta o formulário novamente.',
    'fos_user.username.already_used' => 'Este utilizador já existe',
    'fos_user.username.blank' => 'Por favor introduza o nome de utilizador',
    'fos_user.username.short' => '[-Inf,Inf]O nome de utilizador é muito curto',
    'fos_user.username.long' => '[-Inf,Inf]O nome de utilizador é muito longo',
    'fos_user.email.already_used' => 'Este email já está a ser usado',
    'fos_user.email.blank' => 'Por favor introduza o email',
    'fos_user.email.short' => '[-Inf,Inf]Este email é muito curto',
    'fos_user.email.long' => '[-Inf,Inf]Este email é muito longo',
    'fos_user.email.invalid' => 'Este email é inválido',
    'fos_user.password.blank' => 'Por favor introduza a senha',
    'fos_user.password.short' => '[-Inf,Inf]Esta senha é muito curta',
    'fos_user.password.mismatch' => 'As senhas não correspondem',
    'fos_user.new_password.blank' => 'Por favor introduza a nova senha',
    'fos_user.new_password.short' => '[-Inf,Inf]A nova senha é muito curta',
    'fos_user.current_password.invalid' => 'A senha está incorreta',
    'fos_user.group.blank' => 'Por favor introduza o nome',
    'fos_user.group.short' => '[-Inf,Inf]O nome é muito curto',
    'fos_user.group.long' => '[-Inf,Inf]O nome é muito longo',
  ),
  'FOSUserBundle' => 
  array (
    'group.edit.submit' => 'Atualizar Grupo',
    'group.show.name' => 'Nome do Grupo',
    'group.new.submit' => 'Criar Grupo',
    'group.flash.updated' => 'O grupo foi atualizado',
    'group.flash.created' => 'O grupo foi criado',
    'group.flash.deleted' => 'O grupo foi apagado',
    'security.login.username' => 'Utilizador',
    'security.login.password' => 'Password',
    'security.login.remember_me' => 'Lembrar-me',
    'security.login.submit' => 'Entrar',
    'profile.show.username' => 'Utilizador',
    'profile.show.email' => 'Email',
    'profile.edit.submit' => 'Atualizar conta',
    'profile.flash.updated' => 'O perfil foi atualizado',
    'change_password.submit' => 'Mudar a password',
    'change_password.flash.success' => 'A password foi alterada',
    'registration.check_email' => 'Foi enviado um email para %email%. Este contém um link de ativação que terá de visitar para ativar a sua conta.',
    'registration.confirmed' => 'Parabéns %username%, a sua conta foi confirmada.',
    'registration.back' => 'Voltar para a página anterior.',
    'registration.submit' => 'Registar',
    'registration.flash.user_created' => 'O utilizador foi criado com sucesso',
    'registration.email.subject' => 'Bem-vindo(a) %username%!',
    'registration.email.message' => 'Olá %username%!

Para completar a validação da sua conta, por favor visite o seguinte link: %confirmationUrl%

Cumprimentos,
A equipa.
',
    'resetting.password_already_requested' => 'Uma password para este utilizador já foi requisitada nas últimas 24 horas.',
    'resetting.check_email' => 'Foi enviado um email para %email% com a informação necessária para recuperar a sua password.',
    'resetting.request.invalid_username' => 'O username ou email "%username%" não existe.',
    'resetting.request.username' => 'Utilizador',
    'resetting.request.submit' => 'Recuperar password',
    'resetting.reset.submit' => 'Alterar password',
    'resetting.flash.success' => 'A password foi recuperada com sucesso',
    'resetting.email.subject' => 'Recuperar password',
    'resetting.email.message' => 'Olá %username%!

Para recuperar a password, por favor visite o seguinte link: %confirmationUrl%

Cumprimentos,
A equipa.
',
    'layout.logout' => 'Sair',
    'layout.login' => 'Entrar',
    'layout.register' => 'Registar',
    'layout.logged_in_as' => 'Entrou como %username%',
    'form.group_name' => 'Nome do Grupo',
    'form.username' => 'Utilizador',
    'form.email' => 'Email',
    'form.current_password' => 'Password atual',
    'form.password' => 'Password',
    'form.password_confirmation' => 'Verificar',
    'form.new_password' => 'Nova password',
    'form.new_password_confirmation' => 'Verificar',
  ),
));


return $catalogue;
