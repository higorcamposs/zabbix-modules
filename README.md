# Zabbix Modules

#### Este repositório contém três módulos que adicionam funcionalidades ao Zabbix, facilitando a customização do monitoramento.

### Descrição

O módulo Add Graphs to Monitoring Menu é projetado para adicionar uma opção de Gráficos ao menu de monitoramento no Zabbix. Com isso, é possível acessar gráficos rapidamente diretamente do menu principal de monitoramento.
Estrutura do Repositório

    Configuration/
    Monitoring/Graphs/
    README.md

Requisitos

    Zabbix versão: Certifique-se de estar usando uma versão do Zabbix compatível com módulos PHP.
    Acesso ao servidor: Permissões para fazer upload e configuração de arquivos PHP no servidor Zabbix.

### Como utilizar
1. Estrutura dos Arquivos

    manifest.json: Contém as informações básicas sobre o módulo.
    Module.php: Implementa a funcionalidade do módulo no Zabbix.

2. Passos para Configurar o Módulo

    Navegue até o diretório de módulos do Zabbix: No servidor Zabbix, vá até o diretório onde os módulos personalizados são carregados. Normalmente, é:

`/usr/3share/zabbix/modules/

Crie um diretório para o novo módulo: Crie um novo diretório com o nome do módulo. Exemplo:

mkdir -p /usr/share/zabbix/modules/AddGraphsToMonitoringMenu

Copie os arquivos para o diretório: Coloque os arquivos manifest.json e Module.php no diretório criado.

cp path/to/manifest.json /usr/share/zabbix/modules/AddGraphsToMonitoringMenu/
cp path/to/Module.php /usr/share/zabbix/modules/AddGraphsToMonitoringMenu/


3. Verificação

    Acesse a interface do Zabbix e confirme se o menu de monitoramento inclui a opção Gráficos.
    Teste a funcionalidade clicando no item para garantir que está funcionando como esperado.

#### Contribuição

Se você quiser contribuir com melhorias, sinta-se à vontade para abrir um pull request ou uma issue neste repositório.
