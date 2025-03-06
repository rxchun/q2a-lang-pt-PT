<?php
/*
	Question2Answer by Gideon Greenspan and contributors
	http://www.question2answer.org/

	Description: Language phrases for email notifications


	This program is free software; you can redistribute it and/or
	modify it under the terms of the GNU General Public License
	as published by the Free Software Foundation; either version 2
	of the License, or (at your option) any later version.

	This program is distributed in the hope that it will be useful,
	but WITHOUT ANY WARRANTY; without even the implied warranty of
	MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
	GNU General Public License for more details.

	More about this license: http://www.question2answer.org/license.php
*/

return array(
	'a_commented_body' => "A sua resposta em ^site_title tem um novo comentário de ^c_handle:\n\n^open^c_content^close\n\nA sua resposta foi:\n\n^open^c_context^close\n\nPode responder adicionando o seu próprio comentário:\n\n^url\n\nObrigado,\n\n^site_title",
	'a_commented_subject' => 'A sua resposta em ^site_title tem um novo comentário',

	'a_followed_body' => "A sua resposta em ^site_title tem uma nova pergunta relacionada por ^q_handle:\n\n^open^q_title^close\n\nA sua resposta foi:\n\n^open^a_content^close\n\nClique abaixo para responder à nova pergunta:\n\n^url\n\nObrigado,\n\n^site_title",
	'a_followed_subject' => 'A sua resposta ^site_title tem uma pergunta relacionada',

	'a_selected_body' => "Parabéns! A sua resposta em ^site_title foi selecionada como melhor resposta por ^s_handle:\n\n^open^a_content^close\n\nA pergunta era:\n\n^open^q_title^close\n\nClique abaixo para ver a sua resposta:\n\n^url\n\nObrigado,\n\n^site_title",
	'a_selected_subject' => 'A sua resposta em ^site_title foi selecionada!',

	'c_commented_body' => "Um novo comentário de ^c_handle foi adicionado após o seu comentário em ^site_title:\n\n^open^c_content^close\n\nA discussão está a seguir:\n\n^open^c_context^close\n\nPode responder adicionando outro comentário:\n\n^url\n\nObrigado,\n\n^site_title",
	'c_commented_subject' => 'O seu comentário em ^site_title foi adicionado a',

	'confirm_body' => "Por favor clique no link abaixo para confirmar o seu e-mail para ^site_title.\n\n^url\n\nCódigo de confirmação: ^code\n\n Obrigado,\n^site_title",
	'confirm_subject' => '^site_title - Confirmação de e-mail',

	'feedback_body' => "Comentários:\n^message\n\nNome:\n^name\n\nE-mail:\n^email\n\nPágina anterior:\n^previous\n\nUsuário:\n^url\n\nEndereço IP:\n^ip\n\nNavegador:\n^browser",
	'feedback_subject' => '^ feedback',

	'flagged_body' => "Uma publicação de ^p_handle recebeu ^flags:\n\n^open^p_context^close\n\nClique abaixo para ver a publicação:\n\n^url\n\n\nClique abaixo para rever todas as publicações denunciadas:\n\n^a_url\n\n\nObrigado,\n\n^site_title",
	'flagged_subject' => '^site_title tem uma publicação denunciada',

	'moderate_body' => "Uma publicação de ^p_handle requer a sua aprovação:\n\n^open^p_context^close\n\nClique abaixo para aprovar ou rejeitar a publicação:\n\n^url\n\n\nClique abaixo para rever todas as publicações na fila:\n\n^a_url\n\n\nObrigado,\n\n^site_title",
	'moderate_subject' => 'Moderação em ^site_title',

	'new_password_body' => "A sua nova palavra-passe para ^site_title encontra-se abaixo. \n\nPassword: ^password\n\nÉ recomendável alterar esta palavra-passe imediatamente após iniciar sessão. \n\nObrigado,\n^site_title\n^url",
	'new_password_subject' => '^site_title - A sua nova palavra-passe',

	'private_message_body' => "Recebeu uma mensagem privada de ^f_handle em ^site_title:\n\n^abrir^mensagem^fechar\n\n^moreObrigado,\n\n^site_title\n\n\nPara bloquear mensagens privadas, visite o perfil da sua conta:\n^a_url",
	'private_message_info' => "Mais informações sobre ^f_handle:\n\n^url\n\n",
	'private_message_reply' => "Clique abaixo para responder a ^f_handle em mensagem privada:\n\n^url\n\n",
	'private_message_subject' => 'Mensagem de ^f_handle em ^site_title',

	'q_answered_body' => "A sua pergunta em ^site_title foi respondida por ^a_handle:\n\n^open^a_content^close\n\nA sua pergunta foi:\n\n^open^q_title^close\n\nSe gostou desta resposta, pode seleccioná-la como melhor resposta:\n\n^url\n\nObrigado,\n\n^site_title",
	'q_answered_subject' => 'A sua pergunta em ^site_title foi respondida',

	'q_commented_body' => "A sua pergunta em ^site_title tem um novo comentário de ^c_handle:\n\n^open^c_content^close\n\nA sua pergunta foi:\n\n^open^c_context^close\n\nPode responder adicionando o seu próprio comentário:\n\n^url\n\nObrigado,\n\n^site_title",
	'q_commented_subject' => 'A sua pergunta em ^site_title tem um novo comentário',

	'q_posted_body' => "Uma nova pergunta foi feita por ^q_handle:\n\n^open^q_title\n\n^q_content^close\n\nClique abaixo para ver a pergunta:\n\n^url\n\nObrigado,\n\n^site_title",
	'q_posted_subject' => '^site_title tem uma nova pergunta',

	'remoderate_body' => "Uma publicação editada por ^p_handle requer a sua reaprovação:\n\n^open^p_context^close\n\nClique abaixo para aprovar ou ocultar a publicação editada:\n\n^url\n\n\nClique abaixo para rever todas as publicações na fila:\n\n^a_url\n\n\nObrigado,\n\n^site_title",
	'remoderate_subject' => 'Moderação - Uma publicação editada em ^site_title requer reaprovação',

	'reset_body' => "Clique abaixo para redefinir a sua palavra-passe para ^site_title. \n\n^url\n\nEm alternativa, introduza o código no campo abaixo fornecido. \n\nCódigo: ^code\n\nSe não solicitou a redefinição da sua palavra-passe, ignore esta mensagem. \n\nObrigado,\n^site_title",
	'reset_subject' => '^site_title - Redefinir palavra-passe esquecida',

	'to_handle_prefix' => "^,\n\n",

	'u_registered_body' => "Um novo utilizador foi registado como ^u_handle. \n\nClique abaixo para ver o perfil do utilizador:\n\n^url\n\nObrigado,\n\n^site_title",
	'u_registered_subject' => '^site_title tem um novo utilizador registado',
	'u_to_approve_body' => "Um novo utilizador registou-se como ^u_handle. \n\nClique abaixo para aprovar o utilizador:\n\n^url\n\nClique abaixo para analisar todos os utilizadores que aguardam aprovação:\n\n^a_url\n\nObrigado,\n\n^site_title",

	'u_approved_body' => "Pode ver o seu novo perfil de utilizador aqui:\n\n^url\n\nObrigado,\n\n^site_title",
	'u_approved_subject' => 'A sua conta em ^site_title foi aprovada',

	'wall_post_body' => "^f_handle publicou no mural do seu perfil em ^site_title:\n\n^open^post^close\n\nPode responder à publicação aqui:\n\n^url\n\nObrigado,\n\n^site_title",
	'wall_post_subject' => 'Nova pulicação no seu mural em ^site_title',

	'welcome_body' => "Obrigado por se registar no ^site_title. \n\n^custom^confirm Os seus dados para início de sessão são os seguintes:\n\nNome de utilizador: ^handle\nE-mail: ^email\n\nMantenha estas informações seguras para futura referência. \n\nObrigado,\n\n^site_title\n^url",
	'welcome_confirm' => "Por favor clique no link abaixo para confirmar o teu endereço de seu e-mail.\n\n^url\n\n",
	'welcome_subject' => 'Bem-vindo(a) ao ^site_title!',
);
