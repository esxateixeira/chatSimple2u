<?php
echo<<<HTML
<script type='text/javascript' src='https://service.force.com/embeddedservice/5.0/esw.min.js'></script>
<script type='text/javascript'>
	var initESW = function(gslbBaseURL) {
		embedded_svc.settings.displayHelpButton = true; //Ou falso
		embedded_svc.settings.language = ''; //Por exemplo, insira "pt" ou "pt-BR"

		//embedded_svc.settings.defaultMinimizedText = '...'; //(Assume como padrão o Chat com um especialista)
		//embedded_svc.settings.disabledMinimizedText = '...'; //(Assume como padrão Agente off-line)

		//embedded_svc.settings.loadingText = ''; //(Assume como padrão Carregando)
		//embedded_svc.settings.storageDomain = 'yourdomain.com'; //(Define o domínio de sua implantação para que seus visitantes possam navegar em subdomínios durante uma sessão de chat)

		// Configurações para Chat
		//embedded_svc.settings.directToButtonRouting = function(prechatFormData) {
			// Dynamically changes the button ID based on what the visitor enters in the pre-chat form.
			// Returns a valid button ID.
		//};
		//embedded_svc.settings.prepopulatedPrechatFields = {}; //Define o preenchimento automático de campos de formulário de pré-chat
		//embedded_svc.settings.fallbackRouting = []; //Uma matriz de IDs de botão, IDs de usuário ou userId_buttonId
		//embedded_svc.settings.offlineSupportMinimizedText = '...'; //(Padronizado para Entre em contato conosco)

		embedded_svc.settings.enabledFeatures = ['LiveAgent'];
		embedded_svc.settings.entryFeature = 'LiveAgent';

		embedded_svc.init(
			'https://mongeralaegon--magdev.my.salesforce.com',
			'https://magdev-plataformadeprodutores.cs218.force.com/parceiros',
			gslbBaseURL,
			'00D8F0000004XAb',
			'suporte_N2',
			{
				baseLiveAgentContentURL: 'https://c.la5-c1cs-ia5.salesforceliveagent.com/content',
				deploymentId: '5723o000001HinK',
				buttonId: '5738F000000002G',
				baseLiveAgentURL: 'https://d.la5-c1cs-ia5.salesforceliveagent.com/chat',
				eswLiveAgentDevName: 'EmbeddedServiceLiveAgent_Parent04I8F000000001TUAQ_180af2751f0',
				isOfflineSupportEnabled: false
			}
		);
	};

	if (!window.embedded_svc) {
		var s = document.createElement('script');
		s.setAttribute('src', 'https://mongeralaegon--magdev.my.salesforce.com/embeddedservice/5.0/esw.min.js');
		s.onload = function() {
			initESW(null);
		};
		document.body.appendChild(s);
	} else {
		initESW('https://service.force.com');
	}
</script>
HTML;
?>
