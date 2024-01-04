<?php

return [
    'page_title' => [
        'dashboard' => 'Painel de Controle',
        'detail' => '%entity_as_string%',
        'edit' => 'Editar %entity_label_singular%',
        'index' => '%entity_label_plural%',
        'new' => 'Criar %entity_label_singular%',
        'exception' => 'Erro|Erros',
    ],

    'datagrid' => [
        'hidden_results' => 'Alguns resultados não podem ser exibidos porque você não tem permissões suficientes',
        'no_results' => 'Nenhum resultado encontrado.',
    ],

    'paginator' => [
        'first' => 'Primeiro',
        'previous' => 'Anterior',
        'next' => 'Próximo',
        'last' => 'Último',
        'counter' => '<strong>%start%</strong> - <strong>%end%</strong> de <strong>%results%</strong>',
        'results' => '{0} Sem resultados|{1} <strong>1</strong> resultado|]1,Inf] <strong>%count%</strong> resultados',
    ],

    'label' => [
        'true' => 'Sim',
        'false' => 'Não',
        'empty' => 'Vazio',
        'null' => 'Nulo',
        'object' => 'Objeto PHP',
        'inaccessible' => 'Inacessível',
        'inaccessible.explanation' => 'Não existe um método getter para esse campo ou a propriedade não é pública',
        'form.empty_value' => 'Nenhum',
    ],

    'field' => [
        'code_editor.view_code' => 'Ver código',
        'text_editor.view_content' => 'Ver conteúdo',
    ],

    'action' => [
        'entity_actions' => 'Ações',
        'new' => 'Adicionar %entity_label_singular%',
        'search' => 'Pesquisar',
        'detail' => 'Mostrar',
        'edit' => 'Editar',
        'delete' => 'Excluir',
        'cancel' => 'Cancelar',
        'index' => 'Voltar à listagem',
        'deselect' => 'Desmarcar',
        'add_new_item' => 'Adicionar novo item',
        'remove_item' => 'Remover item',
        'choose_file' => 'Escolher arquivo',
        'close' => 'Fechar',
        'create' => 'Criar',
        'create_and_add_another' => 'Criar e adicionar outro',
        'create_and_continue' => 'Criar e continuar editando',
        'save' => 'Salvar alterações',
        'save_and_continue' => 'Salvar e continuar editando',
    ],

    'batch_action_modal' => [
        'title' => 'Você vai aplicar a ação "%action_name%" a %num_items% item(s).',
        'content' => 'Não há como desfazer essa operação.',
        'action' => 'Proceder',
    ],

    'delete_modal' => [
        'title' => 'Você realmente deseja excluir este item?',
        'content' => 'Não há como desfazer essa operação.',
    ],

    'filter' => [
        'title' => 'Filtros',
        'button.clear' => 'Limpar',
        'button.apply' => 'Aplicar',
        'label.is_equal_to' => 'é igual a',
        'label.is_not_equal_to' => 'é diferente de',
        'label.is_greater_than' => 'é maior que',
        'label.is_greater_than_or_equal_to' => 'é maior ou igual a',
        'label.is_less_than' => 'é menor que',
        'label.is_less_than_or_equal_to' => 'é menor ou igual a',
        'label.is_between' => 'é entre',
        'label.contains' => 'contém',
        'label.not_contains' => 'não contém',
        'label.starts_with' => 'começa com',
        'label.ends_with' => 'termina com',
        'label.exactly' => 'exatamente',
        'label.not_exactly' => 'não exatamente',
        'label.is_same' => 'é o mesmo',
        'label.is_not_same' => 'não é o mesmo',
        'label.is_after' => 'é depois',
        'label.is_after_or_same' => 'é depois ou igual',
        'label.is_before' => 'é antes',
        'label.is_before_or_same' => 'é antes ou igual',
    ],

    'form' => [
        'are_you_sure' => 'Você não salvou as alterações feitas neste formulário.',
        'tab.error_badge_title' => 'Uma entrada inválida|%count% entradas inválidas',
        'slug.confirm_text' => 'Se você alterar o slug, poderá quebrar links em outras páginas.',
    ],

    'user' => [
        'logged_in_as' => 'Autenticado como',
        'unnamed' => 'Usuário sem nome',
        'anonymous' => 'Utilizador anónimo',
        'sign_out' => 'Sair',
        'exit_impersonation' => 'Sair da personificação',
    ],

    'settings' => [
        'appearance' => [
            'label' => 'Definições de aparência',
            'light' => 'Claro',
            'dark' => 'Escuro',
            'auto' => 'Automático',
        ],
        'locale' => 'Configurações de idioma',
    ],

    'login_page' => [
        'username' => 'Nome de utilizador',
        'password' => 'Palavra-passe',
        'sign_in' => 'Entrar',
        'forgot_password' => 'Esqueceu a palavra-passe?',
        'remember_me' => 'Lembrar de mim',
    ],

    'exception' => [
        'entity_not_found' => 'Este item não está mais disponível.',
        'entity_remove' => 'Este item não pode ser excluído porque outros itens dependem dele.',
        'forbidden_action' => 'A ação solicitada não pode ser realizada neste item.',
        'insufficient_entity_permission' => 'Você não tem permissão para acessar este item.',
    ],

    'autocomplete' => [
        'no-results-found' => 'Nenhum resultado encontrado',
        'no-more-results' => 'Não há mais resultados',
        'loading-more-results' => 'Carregando mais resultados...',
    ],
];
