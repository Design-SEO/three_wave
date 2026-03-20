<?php
return [
    'en' => [
        'language_iso' => 'en',
        'country_name' => 'UK',
        'locale' => 'en_GB',
        'locale_lang' => 'en-GB',
        'language_name' => 'English',
        'city' => 'London',
        'country_code' => 'GB',
        'geo_position' => '51.507351, -0.127758',
        'jsonld_organization_name' => 'EquiLoomPRO',
        'jsonld_organization_review_rating' => '4.96',
        'jsonld_organization_review_author' => 'EquiLoomPRO User',
        'jsonld_software_categories' => 'Cryptocurrency Investment Tool',
        // original 190 -> converted by factor 0.8 if assumed USD -> GBP equivalent
        'jsonld_software_price' => '152',
        'jsonld_software_price_currency' => 'GBP',
        'brand_name_api' => 'EquLum App AI',

        'home' => 'Home',
        'about' => 'About Us',
        'contact' => 'Contact Us',
        'privacy' => 'Privacy Policy',
        'terms' => 'Terms and Conditions',

        // Home (index)
        'title' => 'EquiLoomPRO — Automated Investing & Cash Management',
        'meta_description' => 'Make wealth your own with EquiLoomPRO. AI-assisted portfolios, automated savings, and tax-efficient features to help you invest confidently and grow your money.',
        'meta_keywords' => 'EquiLoomPRO, automated investing, AI investing, portfolio management, cash account, savings, tax efficient, UK, London',

        // Open Graph / Twitter (глобальные для всех страниц)
        'og_title' => 'EquiLoomPRO — AI-Powered Investing Platform',
        'og_description' => 'Automated portfolios, smart cash, and effortless investing. Start with EquiLoomPRO and grow your wealth with confidence.',
        'og_image' => '/assets/images/share.webp',

        'twitter_title' => 'EquiLoomPRO — Automated Investing',
        'twitter_description' => 'AI-assisted portfolios and automated savings to help you grow wealth with confidence.',

        // About
        'about_desc_content' => 'Meet EquiLoomPRO — a London-based team of investors and AI experts building a high-precision, high-speed investment platform that helps you grow wealth confidently.',
        'about_keywords' => 'about EquiLoomPRO, company, AI investing team, investment platform, London',

        // Contact
        'contact_desc_content' => 'Questions or guidance? Contact EquiLoomPRO — our experts are ready to help you make confident, strategic investment decisions.',
        'contact_keywords' => 'contact EquiLoomPRO, support, help, investing questions, London',

        // Terms
        'terms_desc_content' => 'Read the Terms and Conditions for using EquiLoomPRO’s website and services, including eligibility, limitations, and legal notices.',
        'terms_keywords' => 'terms of use, terms and conditions, EquiLoomPRO, legal, UK',

        // Privacy
        'privacy_desc_content' => 'How EquiLoomPRO collects, uses, and protects your personal data, your rights, and our commitment to privacy and security.',
        'privacy_keywords' => 'privacy policy, data protection, GDPR, personal data, EquiLoomPRO',

        // ---------- JSON-LD content ----------
        'jsonld_organization_review_body' => 'EquiLoomPRO delivers an AI-assisted investing platform that combines automated portfolios, smart cash management, and tax-efficient features to help clients in London grow wealth with confidence.',

        // FAQ (используются на главной страницей, если page === "index")
        'jsonld_faq_1_question' => 'What is EquiLoomPRO?',
        'jsonld_faq_1_answer' => 'EquiLoomPRO is an AI-assisted investing platform that helps you build and automate diversified portfolios, optimize savings, and invest with confidence.',

        'jsonld_faq_2_question' => 'How does EquiLoomPRO help me invest?',
        'jsonld_faq_2_answer' => 'We offer customizable or automated portfolios, smart cash tools, and features designed to improve after-tax outcomes — so you can invest effortlessly while staying in control.',

        'jsonld_faq_3_question' => 'Is EquiLoomPRO available in the UK?',
        'jsonld_faq_3_answer' => 'Yes. EquiLoomPRO supports clients in London and across the UK, with experiences tailored to your locale and currency.',

        'jsonld_faq_4_question' => 'Do I need to use automation or AI?',
        'jsonld_faq_4_answer' => 'Automation is optional. You can let the platform handle routine tasks or build and adjust your own portfolio whenever you like.',

        'jsonld_faq_5_question' => 'How do I get started?',
        'jsonld_faq_5_answer' => 'Create your profile, choose or customize a portfolio, and fund your account. There are no hidden sign-up fees; partner services may have their own requirements.',

        'jsonld_faq_6_question' => 'How does EquiLoomPRO protect my data?',
        'jsonld_faq_6_answer' => 'We apply robust technical and organizational security measures and follow applicable UK/EU data protection standards to safeguard your information.',

        // Header section
        'header_logo_alt' => 'EquiLoomPRO Logo',
        'header_logo_text' => 'EquiLoomPRO',
        'header_burger_alt' => 'Menu',
        'header_cross_alt' => 'Close',

        // Hero section
        'hero_form_title' => 'Register now',
        'hero_form_notice' => '* By clicking the button you agree and accept the <a href="/privacy" class="form-link">Privacy Policy</a> and <a href="/terms" class="form-link">Terms & Conditions</a>.',
        'hero_title' => 'Make wealth your own.',
        'hero_subtitle' => 'Personalized, Automated, Effortless Investing and Savings.',
        'hero_stat_nerdwallet' => "Best Robo-advisor, 2019<sup class=\"sup\">1</sup><br>Best Cash Management App, 2020<sup class=\"sup\">1</sup>",
        'hero_stat_investopedia' => "Best Robo-advisor, 2020<sup class=\"sup\">1</sup>",
        'hero_stat_clients' => 'Trusted clients',
        'hero_stat_funds' => 'In client funds',
        'hero_stat_appstore' => 'Apple App Store <sup class=\"sup\">2</sup>',
        'hero_stat_playstore' => 'Google Play Store <sup class=\"sup\">2</sup>',

        // Investition section
        'investition_title' => 'Investing isn’t easy. We just make it feel that way.',
        'investition_text' => 'Let us customize a portfolio just for you or build it yourself, and our powerful automation will make the most of your investments, optimizing your performance and helping lower your taxes.',
        'investition_btn_start' => 'Start investing',
        'investition_btn_more' => 'Learn more',
        'investition_notification_app' => 'EquiLoomPRO',
        'investition_notification_time' => 'now',
        // $78.11 -> converted to ~£62.50 (proportional to deposit conversion)
        'investition_notification_1' => 'We saved you <span>£62.50</span> on your taxes.',
        // original example deposit replaced with base deposit £200 (equivalent of $250)
        'investition_notification_2' => 'We automatically invested your <span>£200</span> deposit.',

        // Cash section
        'cash_title' => 'Everyday cash, designed to build long-term wealth.',
        'cash_text' => 'Our Cash account, offered with regulated banking partners, lets you automate your savings, pay bills, withdraw from thousands of ATMs, and invest your extra cash in seconds to keep building your future.',
        'cash_btn_start' => 'Start saving',
        'cash_btn_more' => 'Learn more',
        'cash_img_phone_alt' => 'Phone',
        'cash_img_card_alt' => 'Card',

        // Saving section
        'saving_title' => 'Saving and investing. All while you’re relaxing.',
        'saving_text' => 'Tell us what you’re saving for, and we’ll automatically set aside extra cash to hit your goals. And since we connect with all your accounts, you only need one app to watch your wealth grow.',
        'saving_img_alt' => 'Saving',

        // Testimonials section
        'testimonial_title' => 'TESTIMONIAL',
        'testimonial_1_quote' => 'It\'s the single <strong>best</strong> resource for both investing, managing retirement and seeing my entire financial picture.',
        'testimonial_1_author' => 'Oliver S',
        'testimonial_2_quote' => '<strong>EquiLoomPRO</strong> is the first thing in my life that actually motivated me to save money.',
        'testimonial_2_author' => 'Amelia R',
        'testimonial_3_quote' => 'It’s <strong>automatic</strong>, and I’m lazy.',
        'testimonial_3_author' => 'George L',

        // Trust section
        'trust_title' => 'Over <strong>120,000</strong> people across the UK are already using EquiLoomPRO to earn more and worry less',
        'trust_btn' => 'Get started',
        'trust_img_alt' => 'Open window with plant',
        'trust_subtitle' => 'AS FEATURED IN',
        'trust_logo_wsj_alt' => 'WSJ',
        'trust_logo_bloomberg_alt' => 'Bloomberg',
        'trust_logo_nyt_alt' => 'The New York Times',
        'trust_logo_reuters_alt' => 'Reuters',
        'trust_logo_cnbc_alt' => 'CNBC',

        // Footer section
        'footer_logo_alt' => 'EquiLoomPRO Logo',
        'footer_logo_text' => 'EquiLoomPRO',
        'footer_legal_note_1' => 'Testimonials were given by clients of both EquiLoomPRO Advisers and EquiLoomPRO Brokerage. There is no guarantee that clients will have similar experiences or success.',
        'footer_legal_note_2' => 'Nerdwallet and Investopedia (the “Endorsers”) receive cash compensation for referring potential clients to EquiLoomPRO Advisers, LLC (“EquiLoomPRO Advisers”) via advertisements placed on their respective websites. The Endorsers and EquiLoomPRO Advisers are not associated with one another and have no formal relationship outside of this arrangement. Nerdwallet’s opinions are their own. Their ratings are determined by their editorial team and rely on information they consider reliable, but cannot guarantee. Compensation does not influence product placement or rating. Consider a provider’s fees, features, and methodology before making a decision.',
        'footer_legal_note_3' => 'Apple App Store and Google Play Store ratings are based on user ratings from February 2014 (Apple) and December 2015 (Google) through June <span class="currentYear"></span>. Ratings compiled by Apple, Inc., and Google, Inc., who receive compensation for hosting our app.',
        'footer_legal_note_4' => 'By using this website, you understand the information being presented is provided for informational purposes only and agree to our <a href="/terms" class="legal-link">Terms of Use</a> and <a href="/privacy" class="legal-link">Privacy Policy</a>.',
        'footer_legal_note_5' => 'EquiLoomPRO Advisers relies on information from various sources believed to be reliable, including clients and third parties, but cannot guarantee the accuracy or completeness of that information. Nothing herein should be construed as an offer, recommendation, or solicitation to buy or sell any security. Additionally, EquiLoomPRO Advisers or its affiliates do not provide tax advice and investors are encouraged to consult with their personal tax advisors.',
        // replaced US-specific bank language with neutral UK phrasing about regulated partners
        'footer_legal_note_6' => 'We partner with regulated banking and payment providers in the UK to bring you cash and card features. Banking services are provided by our third-party partners subject to identity verification and applicable local regulations.',
        // adapted regulatory wording to UK context (neutral, non-factual specifics)
        'footer_legal_note_7' => 'Cash account services are offered via regulated brokers and banking partners and are separate from investing accounts. Investment management and advisory services are provided by EquiLoomPRO Advisers or affiliated entities. Products and services vary by jurisdiction.',
        'footer_legal_note_8' => 'The effectiveness of the Tax-Loss Harvesting strategy to reduce the tax liability of the client will depend on the client’s entire tax and investment profile, including purchases and dispositions in accounts outside of EquiLoomPRO and type of investments (e.g., taxable or nontaxable) or holding period (e.g., short-term or long-term). Tax loss harvesting may generate a higher number of trades due to attempts to capture losses. There is a chance that trading attributed to tax loss harvesting may create capital gains and wash sales and could be subject to higher transaction costs and market impacts. In addition, tax loss harvesting strategies may produce losses, which may not be offset by sufficient gains in the account and may be limited by applicable tax rules. Utilisation of harvested losses depends on recognition of capital gains in the same or a future tax period and may be subject to limitations under applicable tax laws. Losses harvested through the strategy that are not utilised in the tax period when recognised may generally be carried forward to offset future capital gains, if any.',
        'footer_legal_note_9' => 'All investing involves risk, including the possible loss of money you invest, and past performance does not guarantee future performance. Historical returns, expected returns, and probability projections are provided for informational and illustrative purposes, and may not reflect actual future performance.',
        'footer_legal_copy' => 'EquiLoomPRO, EquiLoomPRO Advisers and EquiLoomPRO Brokerage are wholly owned subsidiaries of EquiLoomPRO Corporation. <br><br> © <span class="currentYear"></span> EquiLoomPRO Corporation. All rights reserved.',

        // About -----------------------------------------------
        'about_title' => 'About',
        'about_text' => 'At <span class="brand-name">EquiLoomPRO</span>, we’re a team of experienced investors and AI experts united to build a top-tier investment platform, renowned for its precision and rapid performance.',
        'about_content_title' => 'Our core is a diverse, passionate global team united by a mission to reshape the future of investing.',
        'about_content_text_1' => 'We’re dedicated to transforming the investment landscape by leveraging the power of artificial intelligence. By combining expert investor insights with cutting-edge technology, we deliver an investment platform that excels in accuracy, speed, and profitability.',
        'about_content_text_2' => 'Our global team brings diverse perspectives, continuously innovating to incorporate the latest AI and financial trends into our platform. We’re driven by the synergy of human expertise and machine intelligence to provide a transformative investment experience.',
        'about_content_img_alt' => 'About EquiLoomPRO team',
        'period' => [
            [
                'date' => 'April <script>document.write(new Date().getFullYear() - 3)</script>',
                'title' => 'Birth of a Vision',
                'description' => 'EquiLoomPRO was established with a bold vision to revolutionise investing through artificial intelligence.',
            ],
            [
                'date' => 'July <script>document.write(new Date().getFullYear() - 3)</script>',
                'title' => 'Growth and Development',
                // original £5 million -> adjusted to a realistic UK early-stage raise
                'description' => 'We raised £3 million in funding, driving platform development and team expansion.',
            ],
            [
                'date' => 'November <script>document.write(new Date().getFullYear() - 3)</script>',
                'title' => 'Beta Testing Phase',
                'description' => 'The beta version of EquiLoomPRO was launched, gathering user feedback and refining our technology.',
            ],
            [
                'date' => 'June <script>document.write(new Date().getFullYear() - 2)</script>',
                'title' => 'Global Launch',
                'description' => 'EquiLoomPRO debuted globally, bringing our advanced investment technology to users worldwide, marking a key milestone in revolutionising the investment sector.',
            ],
        ],
        'investment_title' => 'Revolutionise Your Investment Approach',
        'investment_text' => 'Experience the future of asset investing with EquiLoomPRO. Our innovative blend of AI and comprehensive data analytics delivers exceptional investment capabilities, enabling investors to navigate market challenges with unmatched precision.',
        'investment_btn' => 'Get started',

        // Contact
        'contact_title' => 'Contact us',
        'contact_text' => 'Reach out to us for guidance or answers to your questions, and our expert team will help you make confident, strategic investment decisions.',
        'contact_form_enable_js' => 'Please enable JavaScript in your browser to complete this form.',
        'contact_label_name' => 'Name',
        'contact_label_email' => 'Email',
        'contact_label_message' => 'Comment or Message',
        'contact_submit' => 'Submit',
        'contact_form_agreement' => ' * By clicking the button you agree and accept the <a href="/privacy" class="form-link">Privacy Policy</a> and <a href="/terms" class="form-link">Terms &amp; Conditions</a>.',
        'contact_form_success' => 'Form submitted successfully!',

        // Privacy Policy
        'privacy_title' => 'Privacy Policy',
        'privacy_updated' => '<b>Last updated:</b> July <script>document.write(new Date().getFullYear() - 1)</script>',

        'privacy_1_title' => '1. Introduction',
        'privacy_1_text' => '
<p>This Privacy Policy of EquiLoomPRO ("we," "us," or "our") details how we manage personal data when you use our services ("Services") and website <a href="/">EquiLoomPRO</a> ("Website"). Safeguarding your privacy and data is our priority.</p>
<p>Our Services and Website may link to third-party sites. We are not responsible for their privacy practices, so please review their policies before engaging.</p>
<p>We treat all collected data as confidential, employing robust technical and organizational measures to protect Personal Data from unauthorized access, loss, or disclosure.</p>
<p>When using our Website, you may provide personal information (e.g., name, email, phone number). This data may be used to verify identity, offer support, fulfill obligations, or send updates with your consent. You can manage notification preferences or opt out of communications.</p>
',

        'privacy_2_title' => '2. Data Collection and Use',
        'privacy_2_1_title' => '2.1. General',
        'privacy_2_1_text' => '
<p>We collect data from Website visitors ("Visitors"), users ("Users"), and partners ("Partners"). Personal Data includes IP addresses, names, contact details, and relationship information, as per data protection laws.</p>
',

        'privacy_2_2_title' => '2.2. Collection',
        'privacy_2_2_text' => '
<p>By accessing our Website, you consent to data collection (e.g., via cookies, IP addresses, or forms). If you disagree, please refrain from using the Website.</p>
',

        'privacy_2_3_title' => '2.3. Purpose',
        'privacy_2_3_text' => '
<p>We process Personal Data to improve our Services, personalize experiences, provide support, and comply with legal obligations. Purposes and legal bases include:</p>
<table>
    <tbody>
        <tr><td>Account registration</td><td>Consent; Contract performance</td></tr>
        <tr><td>Service provision</td><td>Contract performance</td></tr>
        <tr><td>Support and queries</td><td>Legitimate interests</td></tr>
        <tr><td>Marketing</td><td>Consent</td></tr>
        <tr><td>Service improvement</td><td>Legitimate interests</td></tr>
    </tbody>
</table>
',

        'privacy_2_4_title' => '2.4. Data Sharing',
        'privacy_2_4_text' => '
<p>We may share data with trusted vendors and partners, ensuring GDPR compliance for Users in London and the EU.</p>
',

        'privacy_3_title' => '3. Partners',
        'privacy_3_text' => '
<p>We process Partner data with consent or for legitimate interests, ensuring secure handling and compliance with data protection laws.</p>
',

        'privacy_4_title' => '4. Security',
        'privacy_4_text' => '
<p>We implement technical and organizational safeguards to protect Personal Data. Third parties we share data with are contractually obligated to maintain equivalent standards. While we strive for security, no system is fully immune to breaches, and Users accept this risk.</p>
',

        'privacy_5_title' => '5. Cookies',
        'privacy_5_text' => '
<p>See our <a href="/cookie">Cookie Policy</a> for details on cookies and tracking technologies.</p>
',

        'privacy_6_title' => '6. Third-Party Links',
        'privacy_6_text' => '
<p>Our Website may link to external sites. We are not responsible for their privacy practices, so review their policies before sharing data.</p>
',

        'privacy_7_title' => '7. Data Retention',
        'privacy_7_text' => '
<p>We retain Personal Data only as long as necessary. Upon account termination, data is deleted in accordance with applicable laws.</p>
',

        'privacy_8_title' => '8. Your Rights',
        'privacy_8_text' => '
<p>You have rights to access, rectify, erase, restrict, or port your Personal Data, object to processing, or withdraw consent. Contact us to exercise these rights.</p>
',

        'privacy_9_title' => '9. Marketing',
        'privacy_9_text' => '
<p>We may use your data for marketing with your consent. You can withdraw consent by emailing us.</p>
',

        'privacy_10_title' => '10. Policy Acceptance',
        'privacy_10_text' => '
<p>Using our Website or Services implies agreement with this Policy. We may update it, and continued use signifies acceptance.</p>
',

        'privacy_11_title' => '11. Legal Disclosure',
        'privacy_11_text' => '
<p>We may disclose Personal Data if legally required or to protect our rights.</p>
',

        'privacy_12_title' => '12. Contact',
        'privacy_12_text' => '
<p>For privacy concerns, contact our Data Protection Officer at <a href="mailto:support@zevriocapiture.org">support@zevriocapiture.org</a>.</p>
',

        // Terms of Use
        'terms_title' => 'Terms of Use',
        'terms_updated' => '<b>Last updated:</b> July <script>document.write(new Date().getFullYear() - 1)</script>',

        'terms_1_title' => '1. Introduction',
        'terms_1_text' => '
<p>Welcome to the EquiLoomPRO website ("Website"), operated by EquiLoomPRO ("we," "us," "our"). By using our Website or services ("Services"), you agree to these Terms and Conditions ("Terms") and our Privacy Policy. Contact us at <a href="mailto:support@zevriocapiture.org">support@zevriocapiture.org</a>.</p>
<p>These Terms may be updated without notice. Continued use of the Website or Services implies acceptance of changes. If you disagree, you are not authorized to use the Website or Services.</p>
',

        'terms_2_title' => '2. No Investment Advice',
        'terms_2_text' => '
<p>Our Website does not offer personal financial or investment advice. Information provided is general and does not account for your specific objectives, financial situation, or needs. Consult an independent financial adviser before making investment decisions.</p>
',

        'terms_3_title' => '3. Services',
        'terms_3_text' => '
<p>Not all Services are provided by us. Third-party services, websites, or products linked on our Website are not endorsed by us. We are not liable for third-party content or services.</p>
',

        'terms_4_title' => '4. Scope and Modification',
        'terms_4_text' => '
<p>These Terms constitute the entire agreement between you and us, superseding prior agreements. We may modify Terms at our discretion, and continued use signifies acceptance.</p>
',

        'terms_5_title' => '5. Eligibility',
        'terms_5_text' => '
<p>Services are for individuals aged 18+ who can enter legally binding contracts. Minors are not permitted to use the Website or Services.</p>
',

        'terms_6_title' => '6. Description of Services',
        'terms_6_text' => '
<p><b>Subscription Services:</b> Upon registration, you may access Subscription Services (free or paid), including content from us or third-party providers. This is not investment advice, and we are not liable for its accuracy.</p>
<p><b>Third-Party Services:</b> Products or services from third parties may be offered. We are not responsible for their accuracy or your inability to access them.</p>
<p><b>General:</b> Accurate registration data is required. We may reject incomplete or fraudulent data and are not liable for service interruptions.</p>
',

        'terms_7_title' => '7. Proprietary Rights',
        'terms_7_text' => '
<p>The Website and its content are protected by copyrights, trademarks, and other rights. Unauthorized reproduction, redistribution, or scraping is prohibited.</p>
',

        'terms_8_title' => '8. Confidential Information',
        'terms_8_text' => '
<p>Confidential information is protected for one year post-termination, excluding publicly available data or information received without restrictions.</p>
',

        'terms_9_title' => '9. Hyperlinking and Framing',
        'terms_9_text' => '
<p>Hyperlinking, framing, or referencing our Website without permission is prohibited. You are liable for damages caused by such actions.</p>
',

        'terms_10_title' => '10. Disclaimer',
        'terms_10_text' => '
<p>Services and content are provided "as-is" without warranties. We are not liable for errors, interruptions, or inability to use the Website or Services.</p>
',

        'terms_11_title' => '11. Limitation of Liability',
        // liability adjusted to be in line with deposit scale
        'terms_11_text' => '
<p>We are not liable for any damages, including loss of profits or data. Our maximum liability is £200, where permitted by law.</p>
',

        'terms_12_title' => '12. Indemnification',
        'terms_12_text' => '
<p>You agree to indemnify us against claims arising from your use of the Website, breach of Terms, or violation of rights.</p>
',

        'terms_13_title' => '13. Third-Party Websites',
        'terms_13_text' => '
<p>We are not responsible for third-party websites or resources linked on our Website, nor their content or policies.</p>
',

        'terms_14_title' => '14. Data Protection',
        'terms_14_text' => '
<p>We comply with GDPR and UK data protection laws. We maintain security measures, obtain consents, and assist with data subject rights requests. We notify of data breaches promptly.</p>
',

        'terms_15_title' => '15. Governing Law',
        'terms_15_text' => '
<p>These Terms are governed by UK law. Disputes will be resolved through arbitration in London under ICC rules.</p>
',

        'terms_16_title' => '16. Contact',
        'terms_16_text' => '
<p>For questions, contact us at <a href="mailto:support@zevriocapiture.org">support@zevriocapiture.org</a>.</p>
',
    ],
    'es' => [
        'language_iso' => 'es',
        'country_name' => 'España',
        'locale' => 'es_ES',
        'locale_lang' => 'es-ES',
        'language_name' => 'Español',
        'city' => 'Madrid',
        'country_code' => 'ES',
        'geo_position' => '40.4168, -3.7038',
        'jsonld_organization_name' => 'EquiLoomPRO',
        'jsonld_organization_review_rating' => '4.96',
        'jsonld_organization_review_author' => 'Usuario de EquiLoomPRO',
        'jsonld_software_categories' => 'Herramienta de Inversión en Criptomonedas',
        'jsonld_software_price' => '230',
        'jsonld_software_price_currency' => 'EUR',
        'brand_name_api' => 'EquLum App AI',
        'home' => 'Inicio',
        'about' => 'Sobre Nosotros',
        'contact' => 'Contáctenos',
        'privacy' => 'Política de Privacidad',
        'terms' => 'Términos y Condiciones',
        'title' => 'EquiLoomPRO — Inversión Automatizada y Gestión de Efectivo',
        'meta_description' => 'Haz que tu riqueza sea tuya con EquiLoomPRO. Carteras asistidas por IA, ahorros automatizados y características fiscalmente eficientes para invertir con confianza y hacer crecer tu dinero.',
        'meta_keywords' => 'EquiLoomPRO, inversión automatizada, inversión con IA, gestión de cartera, cuenta de efectivo, ahorros, eficiente fiscalmente, España, Madrid',
        'og_title' => 'EquiLoomPRO — Plataforma de Inversión con IA',
        'og_description' => 'Carteras automatizadas, efectivo inteligente e inversión sin esfuerzo. Comienza con EquiLoomPRO y haz crecer tu riqueza con confianza.',
        'og_image' => '/assets/images/share.webp',
        'twitter_title' => 'EquiLoomPRO — Inversión Automatizada',
        'twitter_description' => 'Carteras asistidas por IA y ahorros automatizados para ayudarte a crecer tu riqueza con confianza.',
        'about_desc_content' => 'Conoce EquiLoomPRO — un equipo con sede en Madrid de inversores y expertos en IA que construyen una plataforma de inversión de alta precisión y alta velocidad que te ayuda a crecer tu riqueza con confianza.',
        'about_keywords' => 'sobre EquiLoomPRO, empresa, equipo de inversión con IA, plataforma de inversión, Madrid',
        'contact_desc_content' => '¿Preguntas o orientación? Contacta con EquiLoomPRO — nuestros expertos están listos para ayudarte a tomar decisiones de inversión estratégicas y confiadas.',
        'contact_keywords' => 'contacto EquiLoomPRO, soporte, ayuda, preguntas de inversión, Madrid',
        'terms_desc_content' => 'Lee los Términos y Condiciones para el uso del sitio web y servicios de EquiLoomPRO, incluyendo elegibilidad, limitaciones y avisos legales.',
        'terms_keywords' => 'términos de uso, términos y condiciones, EquiLoomPRO, legal, España',
        'privacy_desc_content' => 'Cómo EquiLoomPRO recopila, usa y protege tus datos personales, tus derechos y nuestro compromiso con la privacidad y la seguridad.',
        'privacy_keywords' => 'política de privacidad, protección de datos, RGPD, datos personales, EquiLoomPRO',
        'jsonld_organization_review_body' => 'EquiLoomPRO ofrece una plataforma de inversión asistida por IA que combina carteras automatizadas, gestión inteligente de efectivo y características fiscalmente eficientes para ayudar a los clientes en Madrid a crecer su riqueza con confianza.',
        'jsonld_faq_1_question' => '¿Qué es EquiLoomPRO?',
        'jsonld_faq_1_answer' => 'EquiLoomPRO es una plataforma de inversión asistida por IA que te ayuda a construir y automatizar carteras diversificadas, optimizar ahorros e invertir con confianza.',
        'jsonld_faq_2_question' => '¿Cómo me ayuda EquiLoomPRO a invertir?',
        'jsonld_faq_2_answer' => 'Ofrecemos carteras personalizables o automatizadas, herramientas inteligentes de efectivo y características diseñadas para mejorar los resultados después de impuestos — para que puedas invertir sin esfuerzo mientras mantienes el control.',
        'jsonld_faq_3_question' => '¿Está disponible EquiLoomPRO en España?',
        'jsonld_faq_3_answer' => 'Sí. EquiLoomPRO da soporte a clientes en Madrid y en toda España, con experiencias adaptadas a tu localidad y moneda.',
        'jsonld_faq_4_question' => '¿Necesito usar automatización o IA?',
        'jsonld_faq_4_answer' => 'La automatización es opcional. Puedes dejar que la plataforma maneje tareas rutinarias o construir y ajustar tu propia cartera cuando quieras.',
        'jsonld_faq_5_question' => '¿Cómo empiezo?',
        'jsonld_faq_5_answer' => 'Crea tu perfil, elige o personaliza una cartera y financia tu cuenta. No hay tarifas ocultas de registro; los servicios de socios pueden tener sus propios requisitos.',
        'jsonld_faq_6_question' => '¿Cómo protege EquiLoomPRO mis datos?',
        'jsonld_faq_6_answer' => 'Aplicamos medidas de seguridad técnicas y organizativas robustas y seguimos las normas aplicables de protección de datos de España/UE para salvaguardar tu información.',
        'header_logo_alt' => 'Logo de EquiLoomPRO',
        'header_logo_text' => 'EquiLoomPRO',
        'header_burger_alt' => 'Menú',
        'header_cross_alt' => 'Cerrar',
        'hero_form_title' => 'Regístrate ahora',
        'hero_form_notice' => '* Al hacer clic en el botón aceptas y aceptas la <a href="/privacy" class="form-link">Política de Privacidad</a> y los <a href="/terms" class="form-link">Términos y Condiciones</a>.',
        'hero_title' => 'Haz que tu riqueza sea tuya.',
        'hero_subtitle' => 'Inversión y Ahorros Personalizados, Automatizados y Sin Esfuerzo.',
        'hero_stat_nerdwallet' => "Mejor Robo-advisor, 2019<sup class=\"sup\">1</sup><br>Mejor App de Gestión de Efectivo, 2020<sup class=\"sup\">1</sup>",
        'hero_stat_investopedia' => "Mejor Robo-advisor, 2020<sup class=\"sup\">1</sup>",
        'hero_stat_clients' => 'Clientes de confianza',
        'hero_stat_funds' => 'En fondos de clientes',
        'hero_stat_appstore' => 'Apple App Store <sup class=\"sup\">2</sup>',
        'hero_stat_playstore' => 'Google Play Store <sup class=\"sup\">2</sup>',
        'investition_title' => 'Invertir no es fácil. Nosotros simplemente hacemos que parezca fácil.',
        'investition_text' => 'Déjanos personalizar una cartera solo para ti o constrúyela tú mismo, y nuestra potente automatización sacará el máximo provecho de tus inversiones, optimizando tu rendimiento y ayudando a reducir tus impuestos.',
        'investition_btn_start' => 'Comenzar a invertir',
        'investition_btn_more' => 'Más información',
        'investition_notification_app' => 'EquiLoomPRO',
        'investition_notification_time' => 'ahora',
        'investition_notification_1' => 'Te hemos ahorrado <span>230 €</span> en impuestos.',
        'investition_notification_2' => 'Hemos invertido automáticamente tu depósito de <span>230 €</span>.',
        'cash_title' => 'Efectivo diario, diseñado para construir riqueza a largo plazo.',
        'cash_text' => 'Nuestra cuenta de efectivo, ofrecida con socios bancarios regulados, te permite automatizar tus ahorros, pagar facturas, retirar en miles de cajeros y invertir tu efectivo extra en segundos para seguir construyendo tu futuro.',
        'cash_btn_start' => 'Comenzar a ahorrar',
        'cash_btn_more' => 'Más información',
        'cash_img_phone_alt' => 'Teléfono',
        'cash_img_card_alt' => 'Tarjeta',
        'saving_title' => 'Ahorrar e invertir. Todo mientras te relajas.',
        'saving_text' => 'Dinos para qué estás ahorrando y automáticamente apartaremos efectivo extra para alcanzar tus objetivos. Y como nos conectamos con todas tus cuentas, solo necesitas una app para ver cómo crece tu riqueza.',
        'saving_img_alt' => 'Ahorro',
        'testimonial_title' => 'TESTIMONIO',
        'testimonial_1_quote' => 'Es el único <strong>mejor</strong> recurso tanto para invertir, gestionar la jubilación y ver mi panorama financiero completo.',
        'testimonial_1_author' => 'Oliver S',
        'testimonial_2_quote' => '<strong>EquiLoomPRO</strong> es lo primero en mi vida que realmente me motivó a ahorrar dinero.',
        'testimonial_2_author' => 'Amelia R',
        'testimonial_3_quote' => 'Es <strong>automático</strong>, y soy perezoso.',
        'testimonial_3_author' => 'George L',
        'trust_title' => 'Más de <strong>120.000</strong> personas en toda España ya usan EquiLoomPRO para ganar más y preocuparse menos',
        'trust_btn' => 'Comenzar',
        'trust_img_alt' => 'Ventana abierta con planta',
        'trust_subtitle' => 'COMO SE DESTACA EN',
        'trust_logo_wsj_alt' => 'WSJ',
        'trust_logo_bloomberg_alt' => 'Bloomberg',
        'trust_logo_nyt_alt' => 'The New York Times',
        'trust_logo_reuters_alt' => 'Reuters',
        'trust_logo_cnbc_alt' => 'CNBC',
        'footer_logo_alt' => 'Logo de EquiLoomPRO',
        'footer_logo_text' => 'EquiLoomPRO',
        'footer_legal_note_1' => 'Los testimonios fueron dados por clientes tanto de EquiLoomPRO Advisers como de EquiLoomPRO Brokerage. No hay garantía de que los clientes tengan experiencias o éxitos similares.',
        'footer_legal_note_2' => 'Nerdwallet e Investopedia (los “Endorsers”) reciben compensación en efectivo por referir clientes potenciales a EquiLoomPRO Advisers, LLC (“EquiLoomPRO Advisers”) a través de anuncios en sus respectivos sitios web. Los Endorsers y EquiLoomPRO Advisers no están asociados entre sí y no tienen relación formal fuera de este acuerdo. Las opiniones de Nerdwallet son suyas. Sus calificaciones son determinadas por su equipo editorial y se basan en información que consideran confiable, pero no pueden garantizarla. La compensación no influye en la colocación del producto o la calificación. Considera las tarifas, características y metodología de un proveedor antes de tomar una decisión.',
        'footer_legal_note_3' => 'Las calificaciones de Apple App Store y Google Play Store se basan en calificaciones de usuarios desde febrero de 2014 (Apple) y diciembre de 2015 (Google) hasta junio <span class="currentYear"></span>. Calificaciones compiladas por Apple, Inc. y Google, Inc., que reciben compensación por alojar nuestra app.',
        'footer_legal_note_4' => 'Al usar este sitio web, entiendes que la información presentada se proporciona solo con fines informativos y aceptas nuestros <a href="/terms" class="legal-link">Términos de Uso</a> y <a href="/privacy" class="legal-link">Política de Privacidad</a>.',
        'footer_legal_note_5' => 'EquiLoomPRO Advisers se basa en información de diversas fuentes que se cree confiable, incluidos clientes y terceros, pero no puede garantizar la exactitud o integridad de esa información. Nada aquí debe interpretarse como una oferta, recomendación o solicitud para comprar o vender cualquier valor. Además, EquiLoomPRO Advisers o sus afiliados no proporcionan asesoramiento fiscal y se anima a los inversores a consultar con sus asesores fiscales personales.',
        'footer_legal_note_6' => 'Colaboramos con proveedores bancarios y de pago regulados en España para ofrecerte características de efectivo y tarjeta. Los servicios bancarios son proporcionados por nuestros socios de terceros sujetos a verificación de identidad y regulaciones locales aplicables.',
        'footer_legal_note_7' => 'Los servicios de cuenta de efectivo se ofrecen a través de corredores y socios bancarios regulados y son separados de las cuentas de inversión. La gestión de inversiones y los servicios de asesoramiento son proporcionados por EquiLoomPRO Advisers o entidades afiliadas. Los productos y servicios varían según la jurisdicción.',
        'footer_legal_note_8' => 'La efectividad de la estrategia de Recolección de Pérdidas Fiscales para reducir la responsabilidad fiscal del cliente dependerá del perfil fiscal e inversor completo del cliente, incluidas compras y disposiciones en cuentas fuera de EquiLoomPRO y tipo de inversiones (por ejemplo, imponibles o no imponibles) o período de tenencia (por ejemplo, corto o largo plazo). La recolección de pérdidas fiscales puede generar un mayor número de operaciones debido a intentos de capturar pérdidas. Existe la posibilidad de que las operaciones atribuidas a la recolección de pérdidas fiscales creen ganancias de capital y ventas de lavado y podrían estar sujetas a mayores costos de transacción e impactos de mercado. Además, las estrategias de recolección de pérdidas fiscales pueden producir pérdidas, que pueden no compensarse con ganancias suficientes en la cuenta y pueden estar limitadas por reglas fiscales aplicables. La utilización de pérdidas recolectadas depende del reconocimiento de ganancias de capital en el mismo o futuro período fiscal y puede estar sujeta a limitaciones bajo las leyes fiscales aplicables. Las pérdidas recolectadas a través de la estrategia que no se utilicen en el período fiscal en que se reconozcan generalmente pueden llevarse adelante para compensar futuras ganancias de capital, si las hay.',
        'footer_legal_note_9' => 'Toda inversión implica riesgo, incluida la posible pérdida del dinero que inviertes, y el rendimiento pasado no garantiza el rendimiento futuro. Los rendimientos históricos, rendimientos esperados y proyecciones de probabilidad se proporcionan con fines informativos e ilustrativos, y pueden no reflejar el rendimiento futuro real.',
        'footer_legal_copy' => 'EquiLoomPRO, EquiLoomPRO Advisers y EquiLoomPRO Brokerage son filiales de propiedad total de EquiLoomPRO Corporation. <br><br> © <span class="currentYear"></span> EquiLoomPRO Corporation. Todos los derechos reservados.',
        'about_title' => 'Sobre',
        'about_text' => 'En <span class="brand-name">EquiLoomPRO</span>, somos un equipo de inversores experimentados y expertos en IA unidos para construir una plataforma de inversión de primer nivel, reconocida por su precisión y rendimiento rápido.',
        'about_content_title' => 'Nuestro núcleo es un equipo global diverso y apasionado unido por una misión de remodelar el futuro de la inversión.',
        'about_content_text_1' => 'Estamos dedicados a transformar el panorama de la inversión aprovechando el poder de la inteligencia artificial. Al combinar las perspectivas de inversores expertos con tecnología de vanguardia, entregamos una plataforma de inversión que destaca en precisión, velocidad y rentabilidad.',
        'about_content_text_2' => 'Nuestro equipo global aporta perspectivas diversas, innovando continuamente para incorporar las últimas tendencias de IA y financieras en nuestra plataforma. Estamos impulsados por la sinergia de la experiencia humana y la inteligencia artificial para proporcionar una experiencia de inversión transformadora.',
        'about_content_img_alt' => 'Equipo de EquiLoomPRO',
        'period' => [
            [
                'date' => 'Abril <script>document.write(new Date().getFullYear() - 3)</script>',
                'title' => 'Nacimiento de una Visión',
                'description' => 'EquiLoomPRO se estableció con una visión audaz de revolucionar la inversión a través de la inteligencia artificial.',
            ],
            [
                'date' => 'Julio <script>document.write(new Date().getFullYear() - 3)</script>',
                'title' => 'Crecimiento y Desarrollo',
                'description' => 'Recaudamos 3 millones de euros en financiación, impulsando el desarrollo de la plataforma y la expansión del equipo.',
            ],
            [
                'date' => 'Noviembre <script>document.write(new Date().getFullYear() - 3)</script>',
                'title' => 'Fase de Pruebas Beta',
                'description' => 'Se lanzó la versión beta de EquiLoomPRO, recopilando comentarios de usuarios y refinando nuestra tecnología.',
            ],
            [
                'date' => 'Junio <script>document.write(new Date().getFullYear() - 2)</script>',
                'title' => 'Lanzamiento Global',
                'description' => 'EquiLoomPRO debutó a nivel global, llevando nuestra tecnología de inversión avanzada a usuarios de todo el mundo, marcando un hito clave en la revolución del sector de la inversión.',
            ],
        ],
        'investment_title' => 'Revoluciona tu Enfoque de Inversión',
        'investment_text' => 'Experimenta el futuro de la inversión de activos con EquiLoomPRO. Nuestra innovadora combinación de IA y análisis de datos completos ofrece capacidades de inversión excepcionales, permitiendo a los inversores navegar por los desafíos del mercado con precisión sin igual.',
        'investment_btn' => 'Comenzar',
        'contact_title' => 'Contáctenos',
        'contact_text' => 'Comunícate con nosotros para orientación o respuestas a tus preguntas, y nuestro equipo experto te ayudará a tomar decisiones de inversión estratégicas y confiadas.',
        'contact_form_enable_js' => 'Por favor, habilita JavaScript en tu navegador para completar este formulario.',
        'contact_label_name' => 'Nombre',
        'contact_label_email' => 'Correo electrónico',
        'contact_label_message' => 'Comentario o Mensaje',
        'contact_submit' => 'Enviar',
        'contact_form_agreement' => ' * Al hacer clic en el botón aceptas y aceptas la <a href="/privacy" class="form-link">Política de Privacidad</a> y los <a href="/terms" class="form-link">Términos y Condiciones</a>.',
        'contact_form_success' => '¡Formulario enviado con éxito!',
        'privacy_title' => 'Política de Privacidad',
        'privacy_updated' => '<b>Última actualización:</b> Julio <script>document.write(new Date().getFullYear() - 1)</script>',
        'privacy_1_title' => '1. Introducción',
        'privacy_1_text' => '
<p>Esta Política de Privacidad de EquiLoomPRO ("nosotros", "nos" o "nuestro") detalla cómo gestionamos los datos personales cuando usas nuestros servicios ("Servicios") y sitio web <a href="/">EquiLoomPRO</a> ("Sitio web"). La protección de tu privacidad y datos es nuestra prioridad.</p>
<p>Nuestros Servicios y Sitio web pueden enlazar con sitios de terceros. No somos responsables de sus prácticas de privacidad, por lo que revisa sus políticas antes de interactuar.</p>
<p>Tratamos todos los datos recopilados como confidenciales, empleando medidas técnicas y organizativas robustas para proteger los Datos Personales del acceso no autorizado, pérdida o divulgación.</p>
<p>Al usar nuestro Sitio web, puedes proporcionar información personal (por ejemplo, nombre, correo electrónico, número de teléfono). Estos datos pueden usarse para verificar identidad, ofrecer soporte, cumplir obligaciones o enviar actualizaciones con tu consentimiento. Puedes gestionar preferencias de notificaciones o darte de baja de las comunicaciones.</p>
',
        'privacy_2_title' => '2. Recopilación y Uso de Datos',
        'privacy_2_1_title' => '2.1. General',
        'privacy_2_1_text' => '
<p>Recopilamos datos de visitantes del Sitio web ("Visitantes"), usuarios ("Usuarios") y socios ("Socios"). Los Datos Personales incluyen direcciones IP, nombres, datos de contacto e información de relación, según las leyes de protección de datos.</p>
',
        'privacy_2_2_title' => '2.2. Recopilación',
        'privacy_2_2_text' => '
<p>Al acceder a nuestro Sitio web, consientes la recopilación de datos (por ejemplo, mediante cookies, direcciones IP o formularios). Si no estás de acuerdo, abstente de usar el Sitio web.</p>
',
        'privacy_2_3_title' => '2.3. Propósito',
        'privacy_2_3_text' => '
<p>Procesamos Datos Personales para mejorar nuestros Servicios, personalizar experiencias, proporcionar soporte y cumplir con obligaciones legales. Los propósitos y bases legales incluyen:</p>
<table>
    <tbody>
        <tr><td>Registro de cuenta</td><td>Consentimiento; Cumplimiento de contrato</td></tr>
        <tr><td>Prestación de servicio</td><td>Cumplimiento de contrato</td></tr>
        <tr><td>Soporte y consultas</td><td>Intereses legítimos</td></tr>
        <tr><td>Marketing</td><td>Consentimiento</td></tr>
        <tr><td>Mejora del servicio</td><td>Intereses legítimos</td></tr>
    </tbody>
</table>
',
        'privacy_2_4_title' => '2.4. Compartir Datos',
        'privacy_2_4_text' => '
<p>Podemos compartir datos con proveedores y socios de confianza, asegurando el cumplimiento del RGPD para Usuarios en Madrid y la UE.</p>
',
        'privacy_3_title' => '3. Socios',
        'privacy_3_text' => '
<p>Procesamos datos de Socios con consentimiento o por intereses legítimos, asegurando un manejo seguro y cumplimiento de las leyes de protección de datos.</p>
',
        'privacy_4_title' => '4. Seguridad',
        'privacy_4_text' => '
<p>Implementamos salvaguardas técnicas y organizativas para proteger los Datos Personales. Los terceros con los que compartimos datos están contractualmente obligados a mantener estándares equivalentes. Aunque nos esforzamos por la seguridad, ningún sistema es completamente inmune a brechas, y los Usuarios aceptan este riesgo.</p>
',
        'privacy_5_title' => '5. Cookies',
        'privacy_5_text' => '
<p>Consulta nuestra <a href="/cookie">Política de Cookies</a> para detalles sobre cookies y tecnologías de seguimiento.</p>
',
        'privacy_6_title' => '6. Enlaces de Terceros',
        'privacy_6_text' => '
<p>Nuestro Sitio web puede enlazar con sitios externos. No somos responsables de sus prácticas de privacidad, por lo que revisa sus políticas antes de compartir datos.</p>
',
        'privacy_7_title' => '7. Retención de Datos',
        'privacy_7_text' => '
<p>Retenemos Datos Personales solo mientras sea necesario. Tras la terminación de la cuenta, los datos se eliminan de acuerdo con las leyes aplicables.</p>
',
        'privacy_8_title' => '8. Tus Derechos',
        'privacy_8_text' => '
<p>Tienes derechos de acceso, rectificación, supresión, restricción o portabilidad de tus Datos Personales, oposición al procesamiento o retirada de consentimiento. Contáctanos para ejercer estos derechos.</p>
',
        'privacy_9_title' => '9. Marketing',
        'privacy_9_text' => '
<p>Podemos usar tus datos para marketing con tu consentimiento. Puedes retirar el consentimiento enviándonos un correo electrónico.</p>
',
        'privacy_10_title' => '10. Aceptación de la Política',
        'privacy_10_text' => '
<p>El uso de nuestro Sitio web o Servicios implica acuerdo con esta Política. Podemos actualizarla, y el uso continuado significa aceptación.</p>
',
        'privacy_11_title' => '11. Divulgación Legal',
        'privacy_11_text' => '
<p>Podemos divulgar Datos Personales si es requerido legalmente o para proteger nuestros derechos.</p>
',
        'privacy_12_title' => '12. Contacto',
        'privacy_12_text' => '
<p>Para preocupaciones de privacidad, contacta a nuestro Oficial de Protección de Datos en <a href="mailto:support@zevriocapiture.org">support@zevriocapiture.org</a>.</p>
',
        'terms_title' => 'Términos de Uso',
        'terms_updated' => '<b>Última actualización:</b> Julio <script>document.write(new Date().getFullYear() - 1)</script>',
        'terms_1_title' => '1. Introducción',
        'terms_1_text' => '
<p>Bienvenido al sitio web de EquiLoomPRO ("Sitio web"), operado por EquiLoomPRO ("nosotros", "nos" o "nuestro"). Al usar nuestro Sitio web o servicios ("Servicios"), aceptas estos Términos y Condiciones ("Términos") y nuestra Política de Privacidad. Contáctanos en <a href="mailto:support@zevriocapiture.org">support@zevriocapiture.org</a>.</p>
<p>Estos Términos pueden actualizarse sin aviso. El uso continuado del Sitio web o Servicios implica aceptación de los cambios. Si no estás de acuerdo, no estás autorizado a usar el Sitio web o Servicios.</p>
',
        'terms_2_title' => '2. Sin Asesoramiento de Inversión',
        'terms_2_text' => '
<p>Nuestro Sitio web no ofrece asesoramiento financiero o de inversión personal. La información proporcionada es general y no tiene en cuenta tus objetivos específicos, situación financiera o necesidades. Consulta a un asesor financiero independiente antes de tomar decisiones de inversión.</p>
',
        'terms_3_title' => '3. Servicios',
        'terms_3_text' => '
<p>No todos los Servicios son proporcionados por nosotros. Servicios, sitios web o productos de terceros enlazados en nuestro Sitio web no están respaldados por nosotros. No somos responsables del contenido o servicios de terceros.</p>
',
        'terms_4_title' => '4. Alcance y Modificación',
        'terms_4_text' => '
<p>Estos Términos constituyen el acuerdo completo entre tú y nosotros, sustituyendo acuerdos previos. Podemos modificar los Términos a nuestra discreción, y el uso continuado significa aceptación.</p>
',
        'terms_5_title' => '5. Elegibilidad',
        'terms_5_text' => '
<p>Los Servicios son para personas mayores de 18 años que pueden celebrar contratos legalmente vinculantes. Los menores no pueden usar el Sitio web o Servicios.</p>
',
        'terms_6_title' => '6. Descripción de los Servicios',
        'terms_6_text' => '
<p><b>Servicios de Suscripción:</b> Tras el registro, puedes acceder a Servicios de Suscripción (gratuitos o de pago), incluyendo contenido de nosotros o de proveedores de terceros. Esto no es asesoramiento de inversión, y no somos responsables de su exactitud.</p>
<p><b>Servicios de Terceros:</b> Pueden ofrecerse productos o servicios de terceros. No somos responsables de su exactitud o de tu incapacidad para acceder a ellos.</p>
<p><b>General:</b> Se requieren datos de registro precisos. Podemos rechazar datos incompletos o fraudulentos y no somos responsables de interrupciones del servicio.</p>
',
        'terms_7_title' => '7. Derechos de Propiedad',
        'terms_7_text' => '
<p>El Sitio web y su contenido están protegidos por derechos de autor, marcas registradas y otros derechos. Se prohíbe la reproducción, redistribución o scraping no autorizados.</p>
',
        'terms_8_title' => '8. Información Confidencial',
        'terms_8_text' => '
<p>La información confidencial está protegida durante un año después de la terminación, excluyendo datos públicos o información recibida sin restricciones.</p>
',
        'terms_9_title' => '9. Enlaces Hipertexto y Framing',
        'terms_9_text' => '
<p>Se prohíbe el enlace hipertexto, framing o referencia a nuestro Sitio web sin permiso. Eres responsable de los daños causados por tales acciones.</p>
',
        'terms_10_title' => '10. Exención de Responsabilidad',
        'terms_10_text' => '
<p>Los Servicios y contenido se proporcionan "tal cual" sin garantías. No somos responsables de errores, interrupciones o incapacidad para usar el Sitio web o Servicios.</p>
',
        'terms_11_title' => '11. Limitación de Responsabilidad',
        'terms_11_text' => '
<p>No somos responsables de ningún daño, incluyendo pérdida de beneficios o datos. Nuestra responsabilidad máxima es 230 €, donde lo permita la ley.</p>
',
        'terms_12_title' => '12. Indemnización',
        'terms_12_text' => '
<p>Aceptas indemnizarnos contra reclamaciones que surjan de tu uso del Sitio web, incumplimiento de los Términos o violación de derechos.</p>
',
        'terms_13_title' => '13. Sitios Web de Terceros',
        'terms_13_text' => '
<p>No somos responsables de sitios web de terceros o recursos enlazados en nuestro Sitio web, ni de su contenido o políticas.</p>
',
        'terms_14_title' => '14. Protección de Datos',
        'terms_14_text' => '
<p>Cumplimos con el RGPD y las leyes españolas de protección de datos. Mantenemos medidas de seguridad, obtenemos consentimientos y asistimos con solicitudes de derechos de los interesados. Notificamos brechas de datos de inmediato.</p>
',
        'terms_15_title' => '15. Ley Aplicable',
        'terms_15_text' => '
<p>Estos Términos se rigen por la ley española. Las disputas se resolverán mediante arbitraje en Madrid según las reglas aplicables.</p>
',
        'terms_16_title' => '16. Contacto',
        'terms_16_text' => '
<p>Para preguntas, contáctenos en <a href="mailto:support@zevriocapiture.org">support@zevriocapiture.org</a>.</p>
',
    ],
    'cz' => [
        'language_iso' => 'cz',
        'country_name' => 'Česká republika',
        'locale' => 'cs_CZ',
        'locale_lang' => 'cs-CZ',
        'language_name' => 'Čeština',
        'city' => 'Praha',
        'country_code' => 'CZ',
        'geo_position' => '50.075538, 14.437800',
        'jsonld_organization_name' => 'EquiLoomPRO',
        'jsonld_organization_review_rating' => '4.96',
        'jsonld_organization_review_author' => 'Uživatel EquiLoomPRO',
        'jsonld_software_categories' => 'Nástroj pro investování do kryptoměn',
        'jsonld_software_price' => '4600',
        'jsonld_software_price_currency' => 'CZK',
        'brand_name_api' => 'EquLum App AI',

        'home' => 'Domů',
        'about' => 'O nás',
        'contact' => 'Kontakt',
        'privacy' => 'Zásady ochrany osobních údajů',
        'terms' => 'Podmínky používání',

        // Home (index)
        'title' => 'EquiLoomPRO — Automatizované investování a správa hotovosti',
        'meta_description' => 'Vydejte se cestou k bohatství se EquiLoomPRO. Portfolia s asistencí AI, automatické spoření a daňově efektivní funkce pro sebevědomé investování a růst peněz.',
        'meta_keywords' => 'EquiLoomPRO, automatizované investování, AI investování, správa portfolia, hotovostní účet, spoření, daňová efektivita, Praha, Česká republika',

        // Open Graph / Twitter (globální)
        'og_title' => 'EquiLoomPRO — Investiční platforma s AI',
        'og_description' => 'Automatizovaná portfolia, chytrá hotovost a bezstarostné investování. Začněte se EquiLoomPRO a nechte své peníze růst s jistotou.',
        'og_image' => '/assets/images/share.webp',

        'twitter_title' => 'EquiLoomPRO — Automatizované investování',
        'twitter_description' => 'Portfolia s asistencí AI a automatické spoření pro růst vašeho bohatství.',

        // About
        'about_desc_content' => 'Seznamte se se EquiLoomPRO — pražským týmem investorů a AI expertů, který buduje vysoce přesnou a rychlou investiční platformu pro sebevědomý růst majetku.',
        'about_keywords' => 'o EquiLoomPRO, společnost, AI investiční tým, investiční platforma, Praha',

        // Contact
        'contact_desc_content' => 'Potřebujete poradit? Kontaktujte EquiLoomPRO — naši odborníci vám pomohou činit informovaná, strategická investiční rozhodnutí.',
        'contact_keywords' => 'kontakt EquiLoomPRO, podpora, pomoc, investiční dotazy, Praha',

        // Terms
        'terms_desc_content' => 'Přečtěte si Podmínky používání webu a služeb EquiLoomPRO — způsobilost, omezení a právní upozornění.',
        'terms_keywords' => 'podmínky používání, obchodní podmínky, EquiLoomPRO, právní, Česká republika',

        // Privacy
        'privacy_desc_content' => 'Jak EquiLoomPRO shromažďuje, používá a chrání vaše osobní údaje, vaše práva a náš závazek k ochraně soukromí a bezpečnosti.',
        'privacy_keywords' => 'zásady ochrany osobních údajů, ochrana dat, GDPR, osobní údaje, EquiLoomPRO',

        // ---------- JSON-LD content ----------
        'jsonld_organization_review_body' => 'EquiLoomPRO nabízí investiční platformu s asistencí AI, která kombinuje automatizovaná portfolia, chytré hospodaření s hotovostí a daňově efektivní funkce, aby klientům v Praze pomohla růst s jistotou.',

        // FAQ (na hlavní stránce, pokud page === "index")
        'jsonld_faq_1_question' => 'Co je EquiLoomPRO?',
        'jsonld_faq_1_answer' => 'EquiLoomPRO je investiční platforma s asistencí AI, která vám pomůže budovat a automatizovat diverzifikovaná portfolia, optimalizovat spoření a investovat s jistotou.',

        'jsonld_faq_2_question' => 'Jak mi EquiLoomPRO pomůže investovat?',
        'jsonld_faq_2_answer' => 'Nabízíme přizpůsobitelná nebo automatizovaná portfolia, chytré nástroje pro hotovost a funkce navržené pro lepší výsledky po zdanění — investujete bez námahy a přitom zůstáváte v kontrole.',

        'jsonld_faq_3_question' => 'Je EquiLoomPRO dostupné v České republice?',
        'jsonld_faq_3_answer' => 'Ano. EquiLoomPRO podporuje klienty v Praze i napříč Českou republikou, s prostředím přizpůsobeným místnímu jazyku a měně (CZK).',

        'jsonld_faq_4_question' => 'Je nutné používat automatizaci nebo AI?',
        'jsonld_faq_4_answer' => 'Automatizace je volitelná. Rutinní úkoly může spravovat platforma, nebo si kdykoli nastavíte a upravíte portfolio sami.',

        'jsonld_faq_5_question' => 'Jak začít?',
        'jsonld_faq_5_answer' => 'Vytvořte si profil, zvolte nebo přizpůsobte portfolio a vložte prostředky. Žádné skryté poplatky za registraci; partnerské služby mohou mít vlastní podmínky.',

        'jsonld_faq_6_question' => 'Jak EquiLoomPRO chrání má data?',
        'jsonld_faq_6_answer' => 'Uplatňujeme robustní technická a organizační opatření a řídíme se GDPR a českými předpisy pro ochranu osobních údajů.',

        // Header section
        'header_logo_alt' => 'Logo EquiLoomPRO',
        'header_logo_text' => 'EquiLoomPRO',
        'header_burger_alt' => 'Menu',
        'header_cross_alt' => 'Zavřít',

        // Hero section
        'hero_form_title' => 'Zaregistrujte se nyní',
        'hero_form_notice' => '* Kliknutím na tlačítko souhlasíte se <a href="/cz/privacy" class="form-link">Zásadami ochrany osobních údajů</a> a <a href="/cz/terms" class="form-link">Podmínkami používání</a>.',
        'hero_title' => 'Udělejte si z bohatství svou prioritu.',
        'hero_subtitle' => 'Personalizované, automatizované a pohodlné investování a spoření.',
        'hero_stat_nerdwallet' => "Nejlepší robo-poradce, 2019<sup class=\"sup\">1</sup><br>Nejlepší aplikace pro správu hotovosti, 2020<sup class=\"sup\">1</sup>",
        'hero_stat_investopedia' => "Nejlepší robo-poradce, 2020<sup class=\"sup\">1</sup>",
        'hero_stat_clients' => 'Spokojení klienti',
        'hero_stat_funds' => 'Spravované prostředky',
        'hero_stat_appstore' => 'Apple App Store <sup class="sup">2</sup>',
        'hero_stat_playstore' => 'Google Play Store <sup class="sup">2</sup>',

        // Investition section
        'investition_title' => 'Investování není snadné. My ho děláme snadným na pocit.',
        'investition_text' => 'Nechte nás připravit portfolio přímo pro vás, nebo si ho sestavte sami — naše výkonná automatizace z vašich investic vytěží maximum, optimalizuje výkonnost a pomáhá snižovat daně.',
        'investition_btn_start' => 'Začít investovat',
        'investition_btn_more' => 'Zjistit více',
        'investition_notification_app' => 'EquiLoomPRO',
        'investition_notification_time' => 'právě teď',
        'investition_notification_1' => 'Ušetřili jsme vám <span>1 800 Kč</span> na daních.',
        'investition_notification_2' => 'Automaticky jsme investovali váš vklad <span>5 800 Kč</span>.',

        // Cash section
        'cash_title' => 'Každodenní hotovost navržená pro dlouhodobý růst majetku.',
        'cash_text' => 'Náš hotovostní účet ve spolupráci s regulovanými bankovními partnery vám umožní automatizovat spoření, platit účty, vybírat z tisíců bankomatů a během pár sekund investovat volné prostředky.',
        'cash_btn_start' => 'Začít spořit',
        'cash_btn_more' => 'Zjistit více',
        'cash_img_phone_alt' => 'Telefon',
        'cash_img_card_alt' => 'Karta',

        // Saving section
        'saving_title' => 'Spoření a investování. Zatímco vy odpočíváte.',
        'saving_text' => 'Řekněte nám, na co šetříte, a my budeme automaticky odkládat volné prostředky, abyste dosáhli svých cílů. Protože propojíme všechny vaše účty, stačí vám jediná aplikace pro přehled o růstu majetku.',
        'saving_img_alt' => 'Spoření',

        // Testimonials section
        'testimonial_title' => 'REFERENCE',
        'testimonial_1_quote' => 'Je to jeden <strong>z nejlepších</strong> nástrojů pro investování, správu důchodu a kompletní pohled na moje finance.',
        'testimonial_1_author' => 'Petr K',
        'testimonial_2_quote' => '<strong>EquiLoomPRO</strong> je první věc v mém životě, která mě opravdu motivovala šetřit.',
        'testimonial_2_author' => 'Jana M',
        'testimonial_3_quote' => 'Je to <strong>automatické</strong> — a já jsem pohodlný člověk.',
        'testimonial_3_author' => 'Karel D',

        // Trust section
        'trust_title' => 'Více než <strong>90 000</strong> lidí v Česku už používá EquiLoomPRO, aby vydělávali více a méně se stresovali',
        'trust_btn' => 'Začít',
        'trust_img_alt' => 'Otevřené okno s rostlinou',
        'trust_subtitle' => 'UVÁDĚNO V',
        'trust_logo_wsj_alt' => 'WSJ',
        'trust_logo_bloomberg_alt' => 'Bloomberg',
        'trust_logo_nyt_alt' => 'The New York Times',
        'trust_logo_reuters_alt' => 'Reuters',
        'trust_logo_cnbc_alt' => 'CNBC',

        // Footer section
        'footer_logo_alt' => 'Logo EquiLoomPRO',
        'footer_logo_text' => 'EquiLoomPRO',
        'footer_legal_note_1' => 'Reference poskytli klienti EquiLoomPRO Advisers a EquiLoomPRO Brokerage. Nelze zaručit, že ostatní klienti dosáhnou podobných zkušeností či výsledků.',
        'footer_legal_note_2' => 'Nerdwallet a Investopedia (dále jen „Podporovatelé“) mohou obdržet finanční kompenzaci za doporučení potenciálních klientů společnosti EquiLoomPRO Advisers, LLC prostřednictvím reklam na jejich webech. Podporovatelé a EquiLoomPRO Advisers nejsou propojeny a nemají formální vztah mimo toto ujednání. Názory Nerdwallet jsou jejich vlastní a jejich hodnocení je redakční; přesnost není zaručena. Kompenzace neovlivňuje pořadí ani hodnocení. Před rozhodnutím zvažte poplatky, funkce a metodiku poskytovatele.',
        'footer_legal_note_3' => 'Hodnocení v Apple App Store a Google Play Store vychází z uživatelských hodnocení od února 2014 (Apple) a prosince 2015 (Google) do června <span class="currentYear"></span>. Hodnocení sestavují Apple Inc. a Google LLC, kteří jsou kompenzováni za hostování naší aplikace.',
        'footer_legal_note_4' => 'Používáním tohoto webu rozumíte, že poskytované informace slouží pouze k informativním účelům, a souhlasíte s našimi <a href="/cz/terms" class="legal-link">Podmínkami používání</a> a <a href="/cz/privacy" class="legal-link">Zásadami ochrany osobních údajů</a>.',
        'footer_legal_note_5' => 'EquiLoomPRO Advisers spoléhá na informace z různých zdrojů považovaných za spolehlivé, včetně klientů a třetích stran, avšak nemůže zaručit jejich přesnost či úplnost. Nic zde uvedeného nepředstavuje nabídku, doporučení ani výzvu k nákupu či prodeji jakéhokoli cenného papíru. EquiLoomPRO Advisers ani přidružené subjekty neposkytují daňové poradenství; obraťte se na svého daňového poradce.',
        'footer_legal_note_6' => 'Spolupracujeme s regulovanými bankovními a platebními partnery v ČR, abychom vám nabídli funkce účtu a karty. Bankovní služby poskytují třetí strany po ověření totožnosti a v souladu s českými předpisy.',
        'footer_legal_note_7' => 'Služby hotovostního účtu poskytují regulovaní brokeři a bankovní partneři a jsou oddělené od investičních účtů. Investiční a poradenské služby zajišťuje EquiLoomPRO Advisers nebo přidružené subjekty; dostupnost se může lišit dle jurisdikce.',
        'footer_legal_note_8' => 'Účinnost strategie daňové optimalizace prostřednictvím realizace ztrát závisí na celkovém daňovém a investičním profilu klienta, včetně transakcí na účtech mimo EquiLoomPRO a typu investic či doby držení. Tato strategie může vést k vyššímu počtu obchodů a vyšším transakčním nákladům a může vytvářet kapitálové zisky či tzv. „wash sales“. Realizované ztráty nemusí být plně kompenzovány zisky a jejich využití závisí na uznání kapitálových zisků ve stejném nebo budoucím zdaňovacím období a může podléhat omezením dle platných daňových zákonů.',
        'footer_legal_note_9' => 'Investování vždy zahrnuje riziko, včetně možné ztráty vložených prostředků, a minulá výkonnost negarantuje budoucí výsledky. Historické a očekávané výnosy a pravděpodobnostní projekce slouží pouze k ilustraci a nemusí odrážet skutečnou budoucí výkonnost.',
        'footer_legal_copy' => 'EquiLoomPRO, EquiLoomPRO Advisers a EquiLoomPRO Brokerage jsou stoprocentní dceřiné společnosti EquiLoomPRO Corporation. <br><br> © <span class="currentYear"></span> EquiLoomPRO Corporation. Všechna práva vyhrazena.',

        // About -----------------------------------------------
        'about_title' => 'O nás',
        'about_text' => 'V <span class="brand-name">EquiLoomPRO</span> jsme tým zkušených investorů a AI expertů, který buduje špičkovou investiční platformu pro maximální přesnost a rychlost.',
        'about_content_title' => 'Naším jádrem je různorodý a nadšený globální tým spojený misí měnit budoucnost investování.',
        'about_content_text_1' => 'Investiční prostředí měníme díky síle umělé inteligence. Kombinací odborných investor­ských vhledů a špičkových technologií dodáváme platformu, která vyniká přesností, rychlostí i ziskovostí.',
        'about_content_text_2' => 'Náš globální tým přináší rozmanité perspektivy a neustále inovuje, aby do platformy začleňoval nejnovější trendy AI i financí. Synergie lidské expertizy a strojové inteligence vytváří transformační investiční zkušenost.',
        'about_content_img_alt' => 'Tým EquiLoomPRO',
        'period' => [
            [
                'date' => 'duben <script>document.write(new Date().getFullYear() - 3)</script>',
                'title' => 'Zrození vize',
                'description' => 'EquiLoomPRO vzniklo s odvážnou vizí — zrevolucionizovat investování pomocí umělé inteligence.',
            ],
            [
                'date' => 'červenec <script>document.write(new Date().getFullYear() - 3)</script>',
                'title' => 'Růst a rozvoj',
                'description' => 'Získali jsme financování ve výši 3 000 000 Kč? Ne — 3 000 000 £ v původní verzi nebylo relevantní. Pro CZ uvádíme realistické lokální měřítko: <strong>získali jsme 90 000 000 Kč</strong> na rozvoj platformy a rozšíření týmu.',
            ],
            [
                'date' => 'listopad <script>document.write(new Date().getFullYear() - 3)</script>',
                'title' => 'Beta testování',
                'description' => 'Spustili jsme beta verzi EquiLoomPRO, sbírali zpětnou vazbu a ladili technologii.',
            ],
            [
                'date' => 'červen <script>document.write(new Date().getFullYear() - 2)</script>',
                'title' => 'Globální spuštění',
                'description' => 'EquiLoomPRO debutovalo globálně a přineslo pokročilé investiční technologie uživatelům po celém světě.',
            ],
        ],
        'investment_title' => 'Změňte svůj přístup k investování',
        'investment_text' => 'Zažijte budoucnost správy aktiv se EquiLoomPRO. Naše inovativní kombinace AI a rozsáhlé datové analytiky poskytuje výjimečné schopnosti a umožňuje investorům překonávat výzvy trhu s bezkonkurenční přesností.',
        'investment_btn' => 'Začít',

        // Contact
        'contact_title' => 'Kontaktujte nás',
        'contact_text' => 'Napište nám s dotazy nebo pro vedení — náš tým odborníků vám pomůže činit sebevědomá, strategická investiční rozhodnutí.',
        'contact_form_enable_js' => 'Pro dokončení formuláře povolte ve svém prohlížeči JavaScript.',
        'contact_label_name' => 'Jméno',
        'contact_label_email' => 'E-mail',
        'contact_label_message' => 'Komentář nebo zpráva',
        'contact_submit' => 'Odeslat',
        'contact_form_agreement' => ' * Kliknutím na tlačítko souhlasíte se <a href="/cz/privacy" class="form-link">Zásadami ochrany osobních údajů</a> a <a href="/cz/terms" class="form-link">Podmínkami používání</a>.',
        'contact_form_success' => 'Formulář byl úspěšně odeslán!',

        // Privacy Policy
        'privacy_title' => 'Zásady ochrany osobních údajů',
        'privacy_updated' => '<b>Poslední aktualizace:</b> červenec <script>document.write(new Date().getFullYear() - 1)</script>',

        'privacy_1_title' => '1. Úvod',
        'privacy_1_text' => '
<p>Tyto Zásady ochrany osobních údajů společnosti EquiLoomPRO („my“, „nás“, „naše“) popisují, jak nakládáme s osobními údaji při používání našich služeb („Služby“) a webu <a href="/cz/">EquiLoomPRO</a> („Web“). Ochrana vašeho soukromí a údajů je naší prioritou.</p>
<p>Naše Služby a Web mohou odkazovat na weby třetích stran. Za jejich zásady ochrany soukromí neneseme odpovědnost — před použitím si je prosím pročtěte.</p>
<p>Se shromážděnými údaji zacházíme jako s důvěrnými a používáme robustní technická a organizační opatření k ochraně osobních údajů před neoprávněným přístupem, ztrátou či zveřejněním.</p>
<p>Při používání Webu nám můžete poskytnout osobní údaje (např. jméno, e-mail, telefon). Tyto údaje můžeme využít k ověření totožnosti, poskytnutí podpory, plnění závazků nebo zasílání novinek s vaším souhlasem. Nastavení oznámení můžete kdykoli upravit či odhlásit.</p>
',

        'privacy_2_title' => '2. Shromažďování a využití údajů',
        'privacy_2_1_title' => '2.1. Obecně',
        'privacy_2_1_text' => '
<p>Shromažďujeme údaje o návštěvnících Webu („Návštěvníci“), uživatelích („Uživatelé“) a partnerech („Partneři“). Osobní údaje zahrnují IP adresu, jméno, kontaktní údaje a informace o vztahu dle právních předpisů o ochraně dat.</p>
',

        'privacy_2_2_title' => '2.2. Způsoby shromažďování',
        'privacy_2_2_text' => '
<p>Přístupem na náš Web souhlasíte se shromažďováním údajů (např. prostřednictvím cookies, IP adres či formulářů). Nesouhlasíte-li, Web nepoužívejte.</p>
',

        'privacy_2_3_title' => '2.3. Účely zpracování',
        'privacy_2_3_text' => '
<p>Osobní údaje zpracováváme za účelem zlepšování Služeb, personalizace, podpory a plnění zákonných povinností. Účely a právní základy zahrnují:</p>
<table>
    <tbody>
        <tr><td>Registrace účtu</td><td>Souhlas; plnění smlouvy</td></tr>
        <tr><td>Poskytování služeb</td><td>Plnění smlouvy</td></tr>
        <tr><td>Podpora a dotazy</td><td>Oprávněný zájem</td></tr>
        <tr><td>Marketing</td><td>Souhlas</td></tr>
        <tr><td>Zlepšování služeb</td><td>Oprávněný zájem</td></tr>
    </tbody>
</table>
',

        'privacy_2_4_title' => '2.4. Sdílení údajů',
        'privacy_2_4_text' => '
<p>Údaje můžeme sdílet s důvěryhodnými dodavateli a Partnery při zajištění souladu s GDPR a českými předpisy pro Uživatelé v Praze i celé ČR.</p>
',

        'privacy_3_title' => '3. Partneři',
        'privacy_3_text' => '
<p>Údaje o Partnerech zpracováváme na základě souhlasu nebo oprávněného zájmu; zajišťujeme bezpečné nakládání s údaji a soulad s právními předpisy.</p>
',

        'privacy_4_title' => '4. Bezpečnost',
        'privacy_4_text' => '
<p>Uplatňujeme technická a organizační opatření na ochranu osobních údajů. Třetí strany, se kterými údaje sdílíme, jsou smluvně vázány udržovat srovnatelný standard. Přesto žádný systém není zcela imunní vůči incidentům; uživatelé toto riziko berou na vědomí.</p>
',

        'privacy_5_title' => '5. Soubory cookie',
        'privacy_5_text' => '
<p>Podrobnosti o cookies a sledovacích technologiích naleznete v <a href="/cz/cookie">Zásadách používání souborů cookie</a>.</p>
',

        'privacy_6_title' => '6. Odkazy třetích stran',
        'privacy_6_text' => '
<p>Náš Web může odkazovat na externí stránky. Za jejich zásady a postupy ochrany soukromí neodpovídáme — prosíme, prostudujte si je před sdílením údajů.</p>
',

        'privacy_7_title' => '7. Doba uchování',
        'privacy_7_text' => '
<p>Osobní údaje uchováváme pouze po nezbytnou dobu. Po zrušení účtu údaje mažeme v souladu s platnými právními předpisy.</p>
',

        'privacy_8_title' => '8. Vaše práva',
        'privacy_8_text' => '
<p>Máte právo na přístup, opravu, výmaz, omezení či přenositelnost údajů, právo vznést námitku proti zpracování a odvolat souhlas. Pro uplatnění práv nás kontaktujte.</p>
',

        'privacy_9_title' => '9. Marketing',
        'privacy_9_text' => '
<p>Vaše údaje můžeme využít k marketingu na základě vašeho souhlasu. Souhlas lze kdykoli odvolat e-mailem.</p>
',

        'privacy_10_title' => '10. Přijetí zásad',
        'privacy_10_text' => '
<p>Používáním Webu či Služeb souhlasíte s těmito Zásadami. Zásady můžeme aktualizovat; pokračováním v používání souhlasíte se změnami.</p>
',

        'privacy_11_title' => '11. Zveřejnění údajů',
        'privacy_11_text' => '
<p>Osobní údaje můžeme zveřejnit, pokud je to požadováno zákonem nebo potřebné k ochraně našich práv.</p>
',

        'privacy_12_title' => '12. Kontakt',
        'privacy_12_text' => '
<p>V případě dotazů ke zpracování osobních údajů kontaktujte našeho pověřence pro ochranu osobních údajů na <a href="mailto:support@zevriocapiture.org">support@zevriocapiture.org</a>.</p>
',

        // Terms of Use
        'terms_title' => 'Podmínky používání',
        'terms_updated' => '<b>Poslední aktualizace:</b> červenec <script>document.write(new Date().getFullYear() - 1)</script>',

        'terms_1_title' => '1. Úvod',
        'terms_1_text' => '
<p>Vítejte na webu EquiLoomPRO („Web“), který provozuje EquiLoomPRO („my“, „nás“, „naše“). Používáním Webu a služeb („Služby“) souhlasíte s těmito Podmínkami používání („Podmínky“) a se Zásadami ochrany osobních údajů. Kontakt: <a href="mailto:support@zevriocapiture.org">support@zevriocapiture.org</a>.</p>
<p>Podmínky můžeme kdykoli aktualizovat. Pokračováním v používání Webu či Služeb vyjadřujete souhlas s aktualizacemi. Nesouhlasíte-li, Web ani Služby nepoužívejte.</p>
',

        'terms_2_title' => '2. Žádné investiční poradenství',
        'terms_2_text' => '
<p>Web neposkytuje osobní finanční ani investiční poradenství. Informace jsou obecné a neberou v úvahu vaše cíle, finanční situaci ani potřeby. Před rozhodnutím se poraďte s nezávislým finančním poradcem.</p>
',

        'terms_3_title' => '3. Služby',
        'terms_3_text' => '
<p>Nevšechny Služby poskytujeme přímo my. Odkazy na služby, weby či produkty třetích stran nepředstavují doporučení. Za obsah ani služby třetích stran neneseme odpovědnost.</p>
',

        'terms_4_title' => '4. Rozsah a změny',
        'terms_4_text' => '
<p>Tyto Podmínky představují úplnou dohodu mezi vámi a námi a nahrazují předchozí ujednání. Podmínky můžeme dle uvážení upravit; další používání znamená souhlas.</p>
',

        'terms_5_title' => '5. Způsobilost',
        'terms_5_text' => '
<p>Služby jsou určeny pro osoby starší 18 let způsobilé k uzavírání právních jednání. Nezletilé osoby nesmí Web ani Služby používat.</p>
',

        'terms_6_title' => '6. Popis služeb',
        'terms_6_text' => '
<p><b>Služby předplatného:</b> Po registraci můžete získat přístup k bezplatným či placeným službám, včetně obsahu od nás nebo třetích stran. Nejde o investiční poradenství a nezaručujeme přesnost.</p>
<p><b>Služby třetích stran:</b> Mohou být nabízeny produkty nebo služby třetích stran. Neodpovídáme za jejich přesnost ani dostupnost.</p>
<p><b>Obecně:</b> Je vyžadováno pravdivé registrační údaje. Můžeme odmítnout neúplná či podvodná data a neneseme odpovědnost za výpadky služeb.</p>
',

        'terms_7_title' => '7. Vlastnická práva',
        'terms_7_text' => '
<p>Web a jeho obsah jsou chráněny autorskými právy, ochrannými známkami a dalšími právy. Neoprávněná reprodukce, redistribuce či scraping jsou zakázány.</p>
',

        'terms_8_title' => '8. Důvěrné informace',
        'terms_8_text' => '
<p>Důvěrné informace jsou chráněny po dobu jednoho roku po ukončení smluvního vztahu; nevztahuje se na veřejně dostupné informace nebo informace získané bez omezení.</p>
',

        'terms_9_title' => '9. Odkazování a rámování',
        'terms_9_text' => '
<p>Hypertextové odkazování, rámování či odkazování na náš Web bez souhlasu je zakázáno. Za způsobené škody nesete odpovědnost.</p>
',

        'terms_10_title' => '10. Prohlášení o vyloučení záruk',
        'terms_10_text' => '
<p>Služby a obsah jsou poskytovány „tak jak jsou“, bez záruk. Neodpovídáme za chyby, přerušení nebo nemožnost Web či Služby používat.</p>
',

        'terms_11_title' => '11. Omezení odpovědnosti',
        'terms_11_text' => '
<p>Neodpovídáme za žádné škody, včetně ztráty zisku či dat. Naše maximální odpovědnost je 5 800 Kč, pokud právní předpisy nestanoví jinak.</p>
',

        'terms_12_title' => '12. Odškodnění',
        'terms_12_text' => '
<p>Souhlasíte, že nás odškodníte za nároky vyplývající z vašeho používání Webu, porušení Podmínek či zásahu do práv třetích osob.</p>
',

        'terms_13_title' => '13. Weby třetích stran',
        'terms_13_text' => '
<p>Neodpovídáme za weby ani zdroje třetích stran odkazované na našem Webu, ani za jejich obsah či zásady.</p>
',

        'terms_14_title' => '14. Ochrana osobních údajů',
        'terms_14_text' => '
<p>Dodržujeme GDPR a české předpisy o ochraně osobních údajů. Udržujeme bezpečnostní opatření, vyžadujeme souhlasy a vyřizujeme žádosti subjektů údajů. O narušeních bezpečnosti informujeme bez zbytečného odkladu.</p>
',

        'terms_15_title' => '15. Rozhodné právo',
        'terms_15_text' => '
<p>Tyto Podmínky se řídí právem České republiky. Spory budou řešeny rozhodčím řízením v Praze podle pravidel ICC.</p>
',

        'terms_16_title' => '16. Kontakt',
        'terms_16_text' => '
<p>V případě dotazů nás kontaktujte na <a href="mailto:support@zevriocapiture.org">support@zevriocapiture.org</a>.</p>
',
    ],
    'be-nl' => [
        'language_iso' => 'nl',
        'country_name' => 'België',
        'locale' => 'nl_BE',
        'locale_lang' => 'nl-BE',
        'language_name' => 'Nederlands',
        'city' => 'Brussel',
        'country_code' => 'BE',
        'geo_position' => '50.850346, 4.351721',
        'jsonld_organization_name' => 'EquiLoomPRO',
        'jsonld_organization_review_rating' => '4.96',
        'jsonld_organization_review_author' => 'Gebruiker van EquiLoomPRO',
        'jsonld_software_categories' => 'Tool voor crypto-investeringen',
        // softwareprijs in EUR (lokaal), afgerond naar boven
        'jsonld_software_price' => '240',
        'jsonld_software_price_currency' => 'EUR',
        'brand_name_api' => 'EquLum App AI',

        'home' => 'Home',
        'about' => 'Over ons',
        'contact' => 'Contact',
        'privacy' => 'Privacyverklaring',
        'terms' => 'Algemene voorwaarden',

        // Home (index)
        'title' => 'EquiLoomPRO — Geautomatiseerd beleggen & cashbeheer',
        'meta_description' => 'Maak vermogen persoonlijk met EquiLoomPRO. AI-ondersteunde portefeuilles, automatisch sparen en fiscaal efficiënte functies om met vertrouwen te beleggen en je geld te laten groeien.',
        'meta_keywords' => 'EquiLoomPRO, geautomatiseerd beleggen, AI beleggen, portefeuillevergunning, cash account, sparen, fiscaal efficiënt, België, Brussel',

        // Open Graph / Twitter (globaal voor alle pagina’s)
        'og_title' => 'EquiLoomPRO — AI-gedreven beleggingsplatform',
        'og_description' => 'Geautomatiseerde portefeuilles, slimme cash en moeiteloos beleggen. Start met EquiLoomPRO en laat je vermogen groeien met vertrouwen.',
        'og_image' => '/assets/images/share.webp',

        'twitter_title' => 'EquiLoomPRO — Geautomatiseerd beleggen',
        'twitter_description' => 'AI-ondersteunde portefeuilles en automatisch sparen om je vermogen met vertrouwen te laten groeien.',

        // About
        'about_desc_content' => 'Maak kennis met EquiLoomPRO — een team in Brussel van beleggers en AI-experts dat een snel en nauwkeurig beleggingsplatform bouwt waarmee je je vermogen met vertrouwen kunt laten groeien.',
        'about_keywords' => 'over EquiLoomPRO, bedrijf, AI beleggings­team, beleggingsplatform, Brussel',

        // Contact
        'contact_desc_content' => 'Vragen of advies nodig? Neem contact op met EquiLoomPRO — onze experts helpen je om weloverwogen, strategische beleggingskeuzes te maken.',
        'contact_keywords' => 'contact EquiLoomPRO, support, hulp, beleggingsvragen, Brussel',

        // Terms
        'terms_desc_content' => 'Lees de Algemene Voorwaarden voor het gebruik van de website en diensten van EquiLoomPRO, inclusief geschiktheid, beperkingen en juridische kennisgevingen.',
        'terms_keywords' => 'gebruiksvoorwaarden, algemene voorwaarden, EquiLoomPRO, juridisch, België',

        // Privacy
        'privacy_desc_content' => 'Hoe EquiLoomPRO je persoonsgegevens verzamelt, gebruikt en beschermt, welke rechten je hebt en onze inzet voor privacy en veiligheid.',
        'privacy_keywords' => 'privacy, gegevensbescherming, GDPR, persoonsgegevens, EquiLoomPRO',

        // ---------- JSON-LD content ----------
        'jsonld_organization_review_body' => 'EquiLoomPRO levert een AI-ondersteund beleggingsplatform dat geautomatiseerde portefeuilles, slim cashbeheer en fiscaal efficiënte functies combineert om klanten in Brussel te helpen hun vermogen met vertrouwen te laten groeien.',

        // FAQ (op de homepage, wanneer page === "index")
        'jsonld_faq_1_question' => 'Wat is EquiLoomPRO?',
        'jsonld_faq_1_answer' => 'EquiLoomPRO is een AI-ondersteund beleggingsplatform waarmee je gediversifieerde portefeuilles kunt opbouwen en automatiseren, je spaargeld optimaliseert en met vertrouwen belegt.',

        'jsonld_faq_2_question' => 'Hoe helpt EquiLoomPRO mij bij het beleggen?',
        'jsonld_faq_2_answer' => 'We bieden aanpasbare of geautomatiseerde portefeuilles, slimme cash-tools en functies die ontworpen zijn om resultaten na belasting te verbeteren — zo beleg je moeiteloos en blijf je toch aan het stuur.',

        'jsonld_faq_3_question' => 'Is EquiLoomPRO beschikbaar in België?',
        'jsonld_faq_3_answer' => 'Ja. EquiLoomPRO ondersteunt klanten in Brussel en in heel België, met ervaringen afgestemd op je regio en valuta (EUR).',

        'jsonld_faq_4_question' => 'Moet ik automatisering of AI gebruiken?',
        'jsonld_faq_4_answer' => 'Automatisering is optioneel. Laat het platform routinetaken afhandelen of stel zelf je portefeuille samen en pas deze aan wanneer je wilt.',

        'jsonld_faq_5_question' => 'Hoe kan ik beginnen?',
        'jsonld_faq_5_answer' => 'Maak je profiel aan, kies of personaliseer een portefeuille en stort geld op je rekening. Er zijn geen verborgen inschrijfkosten; partnerservices kunnen eigen vereisten hebben.',

        'jsonld_faq_6_question' => 'Hoe beschermt EquiLoomPRO mijn gegevens?',
        'jsonld_faq_6_answer' => 'We hanteren robuuste technische en organisatorische beveiligingsmaatregelen en volgen toepasselijke EU/Belgische normen voor gegevensbescherming om je informatie te beveiligen.',

        // Header section
        'header_logo_alt' => 'Logo van EquiLoomPRO',
        'header_logo_text' => 'EquiLoomPRO',
        'header_burger_alt' => 'Menu',
        'header_cross_alt' => 'Sluiten',

        // Hero section
        'hero_form_title' => 'Registreer nu',
        'hero_form_notice' => '* Door te klikken ga je akkoord met onze <a href="/be-nl/privacy" class="form-link">Privacyverklaring</a> en <a href="/be-nl/terms" class="form-link">Algemene Voorwaarden</a>.',
        'hero_title' => 'Maak vermogen écht van jou.',
        'hero_subtitle' => 'Persoonlijk, geautomatiseerd en moeiteloos beleggen en sparen.',
        'hero_stat_nerdwallet' => "Beste robo-adviseur, 2019<sup class=\"sup\">1</sup><br>Beste cashbeheer-app, 2020<sup class=\"sup\">1</sup>",
        'hero_stat_investopedia' => "Beste robo-adviseur, 2020<sup class=\"sup\">1</sup>",
        'hero_stat_clients' => 'Vertrouwde klanten',
        'hero_stat_funds' => 'Aan toevertrouwde middelen',
        'hero_stat_appstore' => 'Apple App Store <sup class="sup">2</sup>',
        'hero_stat_playstore' => 'Google Play Store <sup class="sup">2</sup>',

        // Investition section
        'investition_title' => 'Beleggen is niet eenvoudig. Wij laten het eenvoudig aanvoelen.',
        'investition_text' => 'Laat ons een portefeuille op maat samenstellen of bouw er zelf één — onze krachtige automatisering haalt het meeste uit je beleggingen, optimaliseert je rendement en helpt je belastingen te verlagen.',
        'investition_btn_start' => 'Begin met beleggen',
        'investition_btn_more' => 'Meer informatie',
        'investition_notification_app' => 'EquiLoomPRO',
        'investition_notification_time' => 'nu',
        'investition_notification_1' => 'We hebben je <span>€75</span> aan belastingen bespaard.',
        'investition_notification_2' => 'We hebben je storting van <span>€240</span> automatisch belegd.',

        // Cash section
        'cash_title' => 'Dagelijkse cash, ontworpen voor langetermijn­vermogensopbouw.',
        'cash_text' => 'Onze Cash-rekening, aangeboden samen met gereguleerde bankpartners, laat je sparen automatiseren, rekeningen betalen, geld opnemen bij duizenden geldautomaten en je extra cash in seconden investeren.',
        'cash_btn_start' => 'Begin met sparen',
        'cash_btn_more' => 'Meer informatie',
        'cash_img_phone_alt' => 'Telefoon',
        'cash_img_card_alt' => 'Kaart',

        // Saving section
        'saving_title' => 'Sparen en beleggen. Terwijl jij ontspant.',
        'saving_text' => 'Vertel ons waar je voor spaart, dan zetten wij automatisch extra cash opzij om je doelen te halen. Omdat we met al je rekeningen koppelen, volstaat één app om je vermogen te volgen.',
        'saving_img_alt' => 'Sparen',

        // Testimonials section
        'testimonial_title' => 'GETUIGENISSEN',
        'testimonial_1_quote' => 'Het is de <strong>beste</strong> oplossing die ik ken voor beleggen, pensioenen beheren en mijn volledige financiële plaatje zien.',
        'testimonial_1_author' => 'Jan D',
        'testimonial_2_quote' => '<strong>EquiLoomPRO</strong> is het eerste platform dat me écht motiveerde om te sparen.',
        'testimonial_2_author' => 'Sophie V',
        'testimonial_3_quote' => 'Het is <strong>automatisch</strong> — en ik ben gemakzuchtig.',
        'testimonial_3_author' => 'Lucas B',

        // Trust section
        'trust_title' => 'Meer dan <strong>65.000</strong> mensen in België gebruiken EquiLoomPRO al om meer te verdienen en zich minder zorgen te maken',
        'trust_btn' => 'Aan de slag',
        'trust_img_alt' => 'Open raam met plant',
        'trust_subtitle' => 'BEKEND VAN',
        'trust_logo_wsj_alt' => 'WSJ',
        'trust_logo_bloomberg_alt' => 'Bloomberg',
        'trust_logo_nyt_alt' => 'The New York Times',
        'trust_logo_reuters_alt' => 'Reuters',
        'trust_logo_cnbc_alt' => 'CNBC',

        // Footer section
        'footer_logo_alt' => 'Logo van EquiLoomPRO',
        'footer_logo_text' => 'EquiLoomPRO',
        'footer_legal_note_1' => 'Getuigenissen zijn gegeven door klanten van zowel EquiLoomPRO Advisers als EquiLoomPRO Brokerage. Er is geen garantie dat andere klanten soortgelijke ervaringen of resultaten zullen hebben.',
        'footer_legal_note_2' => 'Nerdwallet en Investopedia (de “Aanbevelers”) kunnen een vergoeding ontvangen voor het doorverwijzen van potentiële klanten naar EquiLoomPRO Advisers, LLC via advertenties op hun websites. De Aanbevelers en EquiLoomPRO Advisers zijn niet gelieerd en hebben geen formele relatie buiten deze regeling. De meningen van Nerdwallet zijn hun eigen; beoordelingen zijn redactioneel en niet gegarandeerd. Vergoeding beïnvloedt de plaatsing of beoordeling niet. Overweeg kosten, functies en methodologie voordat je beslist.',
        'footer_legal_note_3' => 'Beoordelingen in de Apple App Store en Google Play Store zijn gebaseerd op gebruikersratings van februari 2014 (Apple) en december 2015 (Google) t/m juni <span class="currentYear"></span>. Beoordelingen zijn samengesteld door Apple Inc. en Google LLC, die een vergoeding ontvangen voor het hosten van onze app.',
        'footer_legal_note_4' => 'Door deze website te gebruiken erken je dat de informatie louter informatief is en ga je akkoord met onze <a href="/be-nl/terms" class="legal-link">Algemene Voorwaarden</a> en <a href="/be-nl/privacy" class="legal-link">Privacyverklaring</a>.',
        'footer_legal_note_5' => 'EquiLoomPRO Advisers vertrouwt op informatie uit bronnen die als betrouwbaar worden beschouwd, waaronder klanten en derde partijen, maar kan de juistheid of volledigheid niet garanderen. Niets hiervan vormt een aanbod, aanbeveling of verzoek tot aan- of verkoop van enig effect. EquiLoomPRO Advisers of gelieerde entiteiten leveren geen fiscaal advies; raadpleeg je eigen belastingadviseur.',
        'footer_legal_note_6' => 'We werken in België samen met gereguleerde bank- en betaaldienst­partners om rekening- en kaartfuncties te bieden. Bankdiensten worden geleverd door derde partijen, onder voorbehoud van identiteitscontrole en toepasselijke lokale regelgeving.',
        'footer_legal_note_7' => 'Cashrekeningen worden aangeboden via gereguleerde brokers en bankpartners en staan los van beleggingsrekeningen. Beleggings- en adviesdiensten worden verleend door EquiLoomPRO Advisers of gelieerde entiteiten. Beschikbaarheid kan per jurisdictie verschillen.',
        'footer_legal_note_8' => 'De effectiviteit van verlies­verrekening om je belastingdruk te verlagen hangt af van je volledige fiscale en beleggingsprofiel, inclusief transacties buiten EquiLoomPRO en het type belegging of houdperiode. De strategie kan tot meer transacties leiden, met mogelijke kapitaalwinsten, “wash sales”, hogere kosten en markteffecten. Niet-gebruikte verliezen kunnen onder voorwaarden worden doorgeschoven volgens toepasselijk recht.',
        'footer_legal_note_9' => 'Beleggen brengt risico’s met zich mee, inclusief mogelijk verlies van ingelegd geld. In het verleden behaalde resultaten bieden geen garantie voor de toekomst. Historische rendementen, verwachtingen en kansprojecties zijn illustratief en kunnen afwijken van werkelijke prestaties.',
        'footer_legal_copy' => 'EquiLoomPRO, EquiLoomPRO Advisers en EquiLoomPRO Brokerage zijn volledige dochterondernemingen van EquiLoomPRO Corporation. <br><br> © <span class="currentYear"></span> EquiLoomPRO Corporation. Alle rechten voorbehouden.',

        // About -----------------------------------------------
        'about_title' => 'Over ons',
        'about_text' => 'Bij <span class="brand-name">EquiLoomPRO</span> zijn we een team van ervaren beleggers en AI-experts dat een toonaangevend platform bouwt, bekend om precisie en snelheid.',
        'about_content_title' => 'Onze kern is een divers en gedreven internationaal team, verenigd door de missie om de toekomst van beleggen te vernieuwen.',
        'about_content_text_1' => 'We transformeren het beleggings­landschap met de kracht van kunstmatige intelligentie. Door expertise van beleggers te combineren met moderne technologie leveren we een platform dat uitblinkt in nauwkeurigheid, snelheid en winstgevendheid.',
        'about_content_text_2' => 'Ons wereldwijde team brengt verschillende perspectieven samen en innoveert voortdurend om de nieuwste AI- en financiële trends te integreren. De synergie tussen menselijke expertise en machine-intelligentie zorgt voor een transformerende beleving.',
        'about_content_img_alt' => 'Team van EquiLoomPRO',
        'period' => [
            [
                'date' => 'april <script>document.write(new Date().getFullYear() - 3)</script>',
                'title' => 'Geboorte van een visie',
                'description' => 'EquiLoomPRO werd opgericht met de ambitieuze visie om beleggen te hervormen met AI.',
            ],
            [
                'date' => 'juli <script>document.write(new Date().getFullYear() - 3)</script>',
                'title' => 'Groei en ontwikkeling',
                'description' => 'We haalden €3 miljoen op om de platformontwikkeling te versnellen en het team uit te breiden.',
            ],
            [
                'date' => 'november <script>document.write(new Date().getFullYear() - 3)</script>',
                'title' => 'Bètatestfase',
                'description' => 'De bètaversie van EquiLoomPRO ging live; we verzamelden feedback en verfijnden onze technologie.',
            ],
            [
                'date' => 'juni <script>document.write(new Date().getFullYear() - 2)</script>',
                'title' => 'Wereldwijde lancering',
                'description' => 'EquiLoomPRO ging wereldwijd, en bracht geavanceerde beleggings­technologie naar gebruikers overal ter wereld.',
            ],
        ],
        'investment_title' => 'Verander je beleggingsaanpak',
        'investment_text' => 'Ervaar de toekomst van vermogensbeheer met EquiLoomPRO. Onze innovatieve mix van AI en uitgebreide data-analyse levert uitzonderlijke mogelijkheden en helpt beleggers marktdynamiek met precisie te navigeren.',
        'investment_btn' => 'Aan de slag',

        // Contact
        'contact_title' => 'Neem contact op',
        'contact_text' => 'Neem contact met ons op voor advies of antwoorden op je vragen; ons expertteam helpt je met zelfverzekerde, strategische beleggingsbeslissingen.',
        'contact_form_enable_js' => 'Schakel JavaScript in je browser in om dit formulier te voltooien.',
        'contact_label_name' => 'Naam',
        'contact_label_email' => 'E-mail',
        'contact_label_message' => 'Opmerking of bericht',
        'contact_submit' => 'Verzenden',
        'contact_form_agreement' => ' * Door te klikken ga je akkoord met de <a href="/be-nl/privacy" class="form-link">Privacyverklaring</a> en de <a href="/be-nl/terms" class="form-link">Algemene Voorwaarden</a>.',
        'contact_form_success' => 'Formulier succesvol verzonden!',

        // Privacy Policy
        'privacy_title' => 'Privacyverklaring',
        'privacy_updated' => '<b>Laatst bijgewerkt:</b> juli <script>document.write(new Date().getFullYear() - 1)</script>',

        'privacy_1_title' => '1. Inleiding',
        'privacy_1_text' => '
<p>Deze Privacyverklaring van EquiLoomPRO ("wij", "ons", "onze") beschrijft hoe wij persoonsgegevens verwerken wanneer je onze diensten ("Diensten") en website <a href="/be-nl/">EquiLoomPRO</a> ("Website") gebruikt. Bescherming van jouw privacy en gegevens staat voorop.</p>
<p>Onze Diensten en Website kunnen verwijzen naar sites van derden. We zijn niet verantwoordelijk voor hun privacy­praktijken; lees hun beleid vóór gebruik.</p>
<p>Alle verzamelde gegevens behandelen we als vertrouwelijk en we passen sterke technische en organisatorische maatregelen toe om Persoonsgegevens te beschermen tegen ongeoorloofde toegang, verlies of openbaarmaking.</p>
<p>Wanneer je onze Website gebruikt, kun je persoonsgegevens verstrekken (bijv. naam, e-mail, telefoon). Deze gegevens kunnen we gebruiken om je identiteit te verifiëren, support te bieden, verplichtingen na te komen of — met jouw toestemming — updates te sturen. Je kunt voorkeuren beheren of je afmelden.</p>
',

        'privacy_2_title' => '2. Gegevensverzameling en gebruik',
        'privacy_2_1_title' => '2.1. Algemeen',
        'privacy_2_1_text' => '
<p>We verzamelen gegevens van bezoekers ("Bezoekers"), gebruikers ("Gebruikers") en partners ("Partners"). Persoonsgegevens omvatten o.a. IP-adressen, namen, contactgegevens en relatie-informatie, conform wetgeving inzake gegevensbescherming.</p>
',

        'privacy_2_2_title' => '2.2. Verzameling',
        'privacy_2_2_text' => '
<p>Door onze Website te bezoeken, ga je akkoord met gegevensverzameling (bijv. via cookies, IP-adressen of formulieren). Ga niet verder als je het hier niet mee eens bent.</p>
',

        'privacy_2_3_title' => '2.3. Doeleinden',
        'privacy_2_3_text' => '
<p>We verwerken Persoonsgegevens om onze Diensten te verbeteren, ervaringen te personaliseren, support te bieden en te voldoen aan wettelijke verplichtingen. Doeleinden en rechtsgronden omvatten:</p>
<table>
    <tbody>
        <tr><td>Accountregistratie</td><td>Toestemming; uitvoering van overeenkomst</td></tr>
        <tr><td>Dienstverlening</td><td>Uitvoering van overeenkomst</td></tr>
        <tr><td>Support en vragen</td><td>Gerechtvaardigd belang</td></tr>
        <tr><td>Marketing</td><td>Toestemming</td></tr>
        <tr><td>Verbetering van Diensten</td><td>Gerechtvaardigd belang</td></tr>
    </tbody>
</table>
',

        'privacy_2_4_title' => '2.4. Delen van gegevens',
        'privacy_2_4_text' => '
<p>We kunnen gegevens delen met vertrouwde leveranciers en Partners, met waarborging van GDPR-conformiteit voor Gebruikers in Brussel en de EU.</p>
',

        'privacy_3_title' => '3. Partners',
        'privacy_3_text' => '
<p>We verwerken Partnergegevens op basis van toestemming of gerechtvaardigd belang, met veilige verwerking en naleving van toepasselijke wetgeving.</p>
',

        'privacy_4_title' => '4. Beveiliging',
        'privacy_4_text' => '
<p>We treffen technische en organisatorische beveiligings­maatregelen. Derden met wie we gegevens delen, zijn contractueel verplicht vergelijkbare normen te hanteren. Geen enkel systeem is echter volledig immuun; Gebruikers erkennen dit risico.</p>
',

        'privacy_5_title' => '5. Cookies',
        'privacy_5_text' => '
<p>Zie ons <a href="/be-nl/cookie">Cookiebeleid</a> voor details over cookies en trackingtechnologieën.</p>
',

        'privacy_6_title' => '6. Links van derden',
        'privacy_6_text' => '
<p>Onze Website kan verwijzen naar externe sites. We zijn niet verantwoordelijk voor hun privacybeleid; lees dit vóórdat je gegevens deelt.</p>
',

        'privacy_7_title' => '7. Bewaartermijn',
        'privacy_7_text' => '
<p>We bewaren Persoonsgegevens slechts zolang dit nodig is. Na opzegging van je account verwijderen we gegevens conform toepasselijke wetgeving.</p>
',

        'privacy_8_title' => '8. Jouw rechten',
        'privacy_8_text' => '
<p>Je hebt recht op inzage, rectificatie, wissing, beperking of overdraagbaarheid, het recht om bezwaar te maken en toestemming in te trekken. Neem contact met ons op om je rechten uit te oefenen.</p>
',

        'privacy_9_title' => '9. Marketing',
        'privacy_9_text' => '
<p>We kunnen je gegevens gebruiken voor marketing met jouw toestemming. Je kunt toestemming intrekken via e-mail.</p>
',

        'privacy_10_title' => '10. Aanvaarding van dit beleid',
        'privacy_10_text' => '
<p>Door onze Website of Diensten te gebruiken, ga je akkoord met deze Verklaring. We kunnen updates doorvoeren; doorgaan met gebruik impliceert aanvaarding.</p>
',

        'privacy_11_title' => '11. Wettelijke openbaarmaking',
        'privacy_11_text' => '
<p>We kunnen Persoonsgegevens openbaar maken indien wettelijk vereist of ter bescherming van onze rechten.</p>
',

        'privacy_12_title' => '12. Contact',
        'privacy_12_text' => '
<p>Voor privacyvragen: neem contact op met onze Data Protection Officer via <a href="mailto:support@zevriocapiture.org">support@zevriocapiture.org</a>.</p>
',

        // Terms of Use
        'terms_title' => 'Algemene voorwaarden',
        'terms_updated' => '<b>Laatst bijgewerkt:</b> juli <script>document.write(new Date().getFullYear() - 1)</script>',

        'terms_1_title' => '1. Inleiding',
        'terms_1_text' => '
<p>Welkom op de website van EquiLoomPRO ("Website"), geëxploiteerd door EquiLoomPRO ("wij", "ons", "onze"). Door de Website of diensten ("Diensten") te gebruiken, ga je akkoord met deze Algemene Voorwaarden ("Voorwaarden") en onze Privacyverklaring. Contact: <a href="mailto:support@zevriocapiture.org">support@zevriocapiture.org</a>.</p>
<p>We kunnen de Voorwaarden zonder voorafgaande kennisgeving wijzigen. Ga je door met het gebruik, dan aanvaard je de wijzigingen. Ben je het niet eens, gebruik de Website of Diensten dan niet.</p>
',

        'terms_2_title' => '2. Geen beleggingsadvies',
        'terms_2_text' => '
<p>Onze Website biedt geen persoonlijk financieel of beleggingsadvies. Informatie is algemeen en houdt geen rekening met jouw doelen, financiële situatie of behoeften. Raadpleeg een onafhankelijke financieel adviseur vóórdat je beslist.</p>
',

        'terms_3_title' => '3. Diensten',
        'terms_3_text' => '
<p>Niet alle Diensten worden door ons geleverd. Verwijzingen naar diensten, websites of producten van derden vormen geen aanbeveling. We zijn niet aansprakelijk voor inhoud of diensten van derden.</p>
',

        'terms_4_title' => '4. Reikwijdte en wijzigingen',
        'terms_4_text' => '
<p>Deze Voorwaarden vormen de volledige overeenkomst tussen jou en ons en vervangen eerdere afspraken. We kunnen de Voorwaarden naar eigen inzicht wijzigen; verder gebruik betekent akkoord.</p>
',

        'terms_5_title' => '5. Geschiktheid',
        'terms_5_text' => '
<p>Diensten zijn bedoeld voor personen van 18 jaar en ouder die juridisch bindende overeenkomsten kunnen aangaan. Minderjarigen mogen de Website of Diensten niet gebruiken.</p>
',

        'terms_6_title' => '6. Omschrijving van de Diensten',
        'terms_6_text' => '
<p><b>Abonnementsdiensten:</b> Na registratie krijg je toegang tot gratis of betaalde diensten, inclusief inhoud van ons of derden. Dit is geen beleggingsadvies; we garanderen geen juistheid.</p>
<p><b>Diensten van derden:</b> Producten of diensten van derden kunnen worden aangeboden. We zijn niet verantwoordelijk voor hun juistheid of beschikbaarheid.</p>
<p><b>Algemeen:</b> Nauwkeurige registratiegegevens zijn vereist. We kunnen onvolledige of frauduleuze gegevens weigeren en zijn niet aansprakelijk voor onderbrekingen.</p>
',

        'terms_7_title' => '7. Intellectuele eigendom',
        'terms_7_text' => '
<p>De Website en inhoud zijn beschermd door auteursrechten, merken en andere rechten. Ongeoorloofde reproductie, herverdeling of scraping is verboden.</p>
',

        'terms_8_title' => '8. Vertrouwelijke informatie',
        'terms_8_text' => '
<p>Vertrouwelijke informatie blijft beschermd gedurende één jaar na beëindiging, uitgezonderd publiek beschikbare informatie of gegevens verkregen zonder beperking.</p>
',

        'terms_9_title' => '9. Hyperlinken en framing',
        'terms_9_text' => '
<p>Hyperlinken, framing of verwijzen naar onze Website zonder toestemming is verboden. Je bent aansprakelijk voor daardoor veroorzaakte schade.</p>
',

        'terms_10_title' => '10. Vrijwaring van garanties',
        'terms_10_text' => '
<p>Diensten en inhoud worden geleverd "zoals ze zijn", zonder garanties. We zijn niet aansprakelijk voor fouten, onderbrekingen of het onvermogen om de Website of Diensten te gebruiken.</p>
',

        'terms_11_title' => '11. Aansprakelijkheidsbeperking',
        'terms_11_text' => '
<p>We zijn niet aansprakelijk voor enige schade, inclusief verlies van winst of gegevens. Onze maximale aansprakelijkheid is €240, voor zover wettelijk toegestaan.</p>
',

        'terms_12_title' => '12. Schadeloosstelling',
        'terms_12_text' => '
<p>Je stemt ermee in ons te vrijwaren van claims die voortvloeien uit jouw gebruik van de Website, schending van de Voorwaarden of inbreuk op rechten.</p>
',

        'terms_13_title' => '13. Websites van derden',
        'terms_13_text' => '
<p>We zijn niet verantwoordelijk voor websites of bronnen van derden waarnaar wordt gelinkt, noch voor hun inhoud of beleid.</p>
',

        'terms_14_title' => '14. Gegevensbescherming',
        'terms_14_text' => '
<p>We voldoen aan de GDPR en Belgische wetgeving inzake gegevensbescherming. We handhaven beveiligingsmaatregelen, verkrijgen vereiste toestemmingen en behandelen verzoeken van betrokkenen. Bij datalekken informeren we zonder onredelijke vertraging.</p>
',

        'terms_15_title' => '15. Toepasselijk recht',
        'terms_15_text' => '
<p>Deze Voorwaarden worden beheerst door het Belgisch recht. Geschillen worden beslecht via arbitrage in Brussel volgens toepasselijke regels.</p>
',

        'terms_16_title' => '16. Contact',
        'terms_16_text' => '
<p>Vragen? Neem contact met ons op via <a href="mailto:support@zevriocapiture.org">support@zevriocapiture.org</a>.</p>
',
    ],
    'be-fr' => [
        'language_iso' => 'fr',
        'country_name' => 'Belgique',
        'locale' => 'fr_BE',
        'locale_lang' => 'fr-BE',
        'language_name' => 'Français',
        'city' => 'Bruxelles',
        'country_code' => 'BE',
        'geo_position' => '50.850346, 4.351721',
        'jsonld_organization_name' => 'EquiLoomPRO',
        'jsonld_organization_review_rating' => '4.96',
        'jsonld_organization_review_author' => 'Utilisateur de EquiLoomPRO',
        'jsonld_software_categories' => 'Outil d’investissement en cryptomonnaies',
        // Prix local en EUR, arrondi vers le haut
        'jsonld_software_price' => '240',
        'jsonld_software_price_currency' => 'EUR',
        'brand_name_api' => 'EquLum App AI',

        'home' => 'Accueil',
        'about' => 'À propos',
        'contact' => 'Contact',
        'privacy' => 'Politique de confidentialité',
        'terms' => 'Conditions générales',

        // Home (index)
        'title' => 'EquiLoomPRO — Investissement automatisé & gestion de cash',
        'meta_description' => 'Devenez maître de votre patrimoine avec EquiLoomPRO. Portefeuilles assistés par l’IA, épargne automatisée et fonctions fiscalement efficientes pour investir en confiance et faire croître votre argent.',
        'meta_keywords' => 'EquiLoomPRO, investissement automatisé, investissement IA, gestion de portefeuille, compte cash, épargne, optimisation fiscale, Belgique, Bruxelles',

        // Open Graph / Twitter (globaux pour toutes les pages)
        'og_title' => 'EquiLoomPRO — Plateforme d’investissement propulsée par l’IA',
        'og_description' => 'Portefeuilles automatisés, cash intelligent et investissement sans effort. Commencez avec EquiLoomPRO et faites croître votre patrimoine en confiance.',
        'og_image' => '/assets/images/share.webp',

        'twitter_title' => 'EquiLoomPRO — Investissement automatisé',
        'twitter_description' => 'Portefeuilles assistés par l’IA et épargne automatisée pour faire croître votre patrimoine en confiance.',

        // About
        'about_desc_content' => 'Découvrez EquiLoomPRO — une équipe basée à Bruxelles réunissant investisseurs et experts IA, qui construit une plateforme d’investissement rapide et très précise pour faire croître votre patrimoine en confiance.',
        'about_keywords' => 'à propos de EquiLoomPRO, entreprise, équipe d’investissement IA, plateforme d’investissement, Bruxelles',

        // Contact
        'contact_desc_content' => 'Des questions ou besoin d’orientation ? Contactez EquiLoomPRO — nos experts vous aident à prendre des décisions d’investissement stratégiques et sûres.',
        'contact_keywords' => 'contacter EquiLoomPRO, support, aide, questions d’investissement, Bruxelles',

        // Terms
        'terms_desc_content' => 'Lisez les Conditions générales d’utilisation du site et des services de EquiLoomPRO, incluant l’éligibilité, les limites et les informations légales.',
        'terms_keywords' => 'conditions d’utilisation, conditions générales, EquiLoomPRO, légal, Belgique',

        // Privacy
        'privacy_desc_content' => 'Comment EquiLoomPRO collecte, utilise et protège vos données personnelles, vos droits, et notre engagement en matière de confidentialité et de sécurité.',
        'privacy_keywords' => 'politique de confidentialité, protection des données, RGPD, données personnelles, EquiLoomPRO',

        // ---------- JSON-LD content ----------
        'jsonld_organization_review_body' => 'EquiLoomPRO propose une plateforme d’investissement assistée par l’IA combinant portefeuilles automatisés, gestion intelligente du cash et fonctions fiscalement efficientes afin d’aider les clients à Bruxelles à faire croître leur patrimoine en confiance.',

        // FAQ (utilisées sur la page d’accueil si page === "index")
        'jsonld_faq_1_question' => 'Qu’est-ce que EquiLoomPRO ?',
        'jsonld_faq_1_answer' => 'EquiLoomPRO est une plateforme d’investissement assistée par l’IA qui vous aide à construire et automatiser des portefeuilles diversifiés, à optimiser votre épargne et à investir en confiance.',

        'jsonld_faq_2_question' => 'Comment EquiLoomPRO m’aide-t-il à investir ?',
        'jsonld_faq_2_answer' => 'Nous proposons des portefeuilles personnalisables ou automatisés, des outils cash intelligents et des fonctions conçues pour améliorer les résultats après impôt — vous investissez sans effort tout en gardant le contrôle.',

        'jsonld_faq_3_question' => 'EquiLoomPRO est-il disponible en Belgique ?',
        'jsonld_faq_3_answer' => 'Oui. EquiLoomPRO accompagne des clients à Bruxelles et partout en Belgique, avec une expérience adaptée à votre région et à l’euro (EUR).',

        'jsonld_faq_4_question' => 'Dois-je utiliser l’automatisation ou l’IA ?',
        'jsonld_faq_4_answer' => 'L’automatisation est optionnelle. Vous pouvez laisser la plateforme gérer les tâches routinières ou créer et ajuster votre portefeuille vous-même à tout moment.',

        'jsonld_faq_5_question' => 'Comment démarrer ?',
        'jsonld_faq_5_answer' => 'Créez votre profil, choisissez ou personnalisez un portefeuille, puis approvisionnez votre compte. Aucun frais caché d’inscription ; les services partenaires peuvent avoir leurs propres exigences.',

        'jsonld_faq_6_question' => 'Comment EquiLoomPRO protège-t-il mes données ?',
        'jsonld_faq_6_answer' => 'Nous appliquons des mesures techniques et organisationnelles robustes et respectons les normes européennes et belges de protection des données (RGPD) pour sécuriser vos informations.',

        // Header section
        'header_logo_alt' => 'Logo EquiLoomPRO',
        'header_logo_text' => 'EquiLoomPRO',
        'header_burger_alt' => 'Menu',
        'header_cross_alt' => 'Fermer',

        // Hero section
        'hero_form_title' => 'Inscrivez-vous maintenant',
        'hero_form_notice' => '* En cliquant, vous acceptez notre <a href="/be-fr/privacy" class="form-link">Politique de confidentialité</a> et nos <a href="/be-fr/terms" class="form-link">Conditions générales</a>.',
        'hero_title' => 'Faites du patrimoine votre priorité.',
        'hero_subtitle' => 'Investissement et épargne personnalisés, automatisés et sans effort.',
        'hero_stat_nerdwallet' => "Meilleur robo-advisor, 2019<sup class=\"sup\">1</sup><br>Meilleure app de gestion de cash, 2020<sup class=\"sup\">1</sup>",
        'hero_stat_investopedia' => "Meilleur robo-advisor, 2020<sup class=\"sup\">1</sup>",
        'hero_stat_clients' => 'Clients de confiance',
        'hero_stat_funds' => 'Fonds confiés',
        'hero_stat_appstore' => 'Apple App Store <sup class="sup">2</sup>',
        'hero_stat_playstore' => 'Google Play Store <sup class="sup">2</sup>',

        // Investition section
        'investition_title' => 'Investir n’est pas simple. Nous le rendons simple à vivre.',
        'investition_text' => 'Laissez-nous créer un portefeuille sur mesure ou construisez-le vous-même — notre automatisation puissante tire le meilleur de vos investissements, optimise les performances et aide à réduire vos impôts.',
        'investition_btn_start' => 'Commencer à investir',
        'investition_btn_more' => 'En savoir plus',
        'investition_notification_app' => 'EquiLoomPRO',
        'investition_notification_time' => 'maintenant',
        'investition_notification_1' => 'Nous vous avons fait économiser <span>€75</span> d’impôts.',
        'investition_notification_2' => 'Nous avons investi automatiquement votre dépôt de <span>€240</span>.',

        // Cash section
        'cash_title' => 'Du cash au quotidien, pensé pour créer du patrimoine sur le long terme.',
        'cash_text' => 'Notre compte Cash, proposé avec des partenaires bancaires régulés, vous permet d’automatiser votre épargne, payer vos factures, retirer à des milliers de distributeurs et investir vos excédents en quelques secondes.',
        'cash_btn_start' => 'Commencer à épargner',
        'cash_btn_more' => 'En savoir plus',
        'cash_img_phone_alt' => 'Téléphone',
        'cash_img_card_alt' => 'Carte',

        // Saving section
        'saving_title' => 'Épargner et investir. Pendant que vous vous détendez.',
        'saving_text' => 'Dites-nous à quoi vous épargnez, et nous mettrons automatiquement de côté l’excédent pour atteindre vos objectifs. Comme nous connectons tous vos comptes, une seule app suffit pour suivre la croissance de votre patrimoine.',
        'saving_img_alt' => 'Épargne',

        // Testimonials section
        'testimonial_title' => 'TÉMOIGNAGES',
        'testimonial_1_quote' => 'C’est la ressource la <strong>plus efficace</strong> que j’ai trouvée pour investir, gérer ma retraite et avoir une vue d’ensemble de mes finances.',
        'testimonial_1_author' => 'Jean D',
        'testimonial_2_quote' => '<strong>EquiLoomPRO</strong> est la première plateforme qui m’a réellement motivé à épargner.',
        'testimonial_2_author' => 'Marie V',
        'testimonial_3_quote' => 'C’est <strong>automatique</strong> — et je suis un peu flemmard.',
        'testimonial_3_author' => 'Thomas P',

        // Trust section
        'trust_title' => 'Plus de <strong>65 000</strong> personnes en Belgique utilisent déjà EquiLoomPRO pour gagner plus et se tracasser moins',
        'trust_btn' => 'Commencer',
        'trust_img_alt' => 'Fenêtre ouverte avec plante',
        'trust_subtitle' => 'VU DANS',
        'trust_logo_wsj_alt' => 'WSJ',
        'trust_logo_bloomberg_alt' => 'Bloomberg',
        'trust_logo_nyt_alt' => 'The New York Times',
        'trust_logo_reuters_alt' => 'Reuters',
        'trust_logo_cnbc_alt' => 'CNBC',

        // Footer section
        'footer_logo_alt' => 'Logo EquiLoomPRO',
        'footer_logo_text' => 'EquiLoomPRO',
        'footer_legal_note_1' => 'Les témoignages proviennent de clients de EquiLoomPRO Advisers et de EquiLoomPRO Brokerage. Aucune garantie que d’autres clients vivront des expériences ou résultats similaires.',
        'footer_legal_note_2' => 'Nerdwallet et Investopedia (les « Recommandeurs ») peuvent recevoir une compensation pour recommander des clients potentiels à EquiLoomPRO Advisers, LLC via des publicités sur leurs sites. Les Recommandeurs et EquiLoomPRO Advisers ne sont pas affiliés et n’ont pas de relation formelle au-delà de cet accord. Les avis de Nerdwallet sont les leurs ; leurs notations sont éditoriales et non garanties. La compensation n’influence ni le classement ni la notation. Avant de décider, considérez frais, fonctionnalités et méthodologie.',
        'footer_legal_note_3' => 'Les notes sur l’Apple App Store et le Google Play Store sont basées sur les évaluations d’utilisateurs de février 2014 (Apple) et décembre 2015 (Google) jusqu’en juin <span class="currentYear"></span>. Notes compilées par Apple Inc. et Google LLC, qui reçoivent une compensation pour l’hébergement de notre app.',
        'footer_legal_note_4' => 'En utilisant ce site, vous comprenez que les informations sont fournies à titre informatif et vous acceptez nos <a href="/be-fr/terms" class="legal-link">Conditions générales</a> et notre <a href="/be-fr/privacy" class="legal-link">Politique de confidentialité</a>.',
        'footer_legal_note_5' => 'EquiLoomPRO Advisers s’appuie sur diverses sources jugées fiables, y compris des clients et des tiers, mais ne peut en garantir l’exactitude ou l’exhaustivité. Rien ici ne constitue une offre, recommandation ou sollicitation d’achat/vente de titres. EquiLoomPRO Advisers ou ses affiliés ne fournissent pas de conseils fiscaux ; consultez votre conseiller fiscal.',
        'footer_legal_note_6' => 'Nous collaborons en Belgique avec des partenaires bancaires et de paiement régulés pour fournir des fonctions de compte et de carte. Les services bancaires sont fournis par des tiers, soumis à vérification d’identité et à la réglementation locale applicable.',
        'footer_legal_note_7' => 'Les services de compte cash sont proposés via des courtiers et partenaires bancaires régulés et sont distincts des comptes d’investissement. Les services de gestion et de conseil en investissement sont fournis par EquiLoomPRO Advisers ou des entités affiliées. L’offre peut varier selon la juridiction.',
        'footer_legal_note_8' => 'L’efficacité de la stratégie d’optimisation fiscale par réalisation de pertes dépend de votre profil fiscal et d’investissement global, y compris les transactions hors EquiLoomPRO et le type ou la durée de détention des placements. Cette stratégie peut accroître le nombre d’ordres, générer des gains, des « wash sales », et des coûts/impacts de marché. Les pertes non utilisées peuvent être reportées selon le droit applicable.',
        'footer_legal_note_9' => 'Tout investissement comporte des risques, y compris la perte possible du capital investi, et les performances passées ne préjugent pas des performances futures. Les rendements historiques/d’attente et projections de probabilité sont fournis à titre informatif et illustratif et peuvent différer des performances réelles.',
        'footer_legal_copy' => 'EquiLoomPRO, EquiLoomPRO Advisers et EquiLoomPRO Brokerage sont des filiales à 100 % de EquiLoomPRO Corporation. <br><br> © <span class="currentYear"></span> EquiLoomPRO Corporation. Tous droits réservés.',

        // About -----------------------------------------------
        'about_title' => 'À propos',
        'about_text' => 'Chez <span class="brand-name">EquiLoomPRO</span>, nous sommes une équipe d’investisseurs chevronnés et d’experts IA unis pour bâtir une plateforme d’investissement de premier plan, reconnue pour sa précision et sa rapidité.',
        'about_content_title' => 'Au cœur, une équipe internationale diverse et passionnée, unie par la mission de réinventer l’avenir de l’investissement.',
        'about_content_text_1' => 'Nous transformons le paysage de l’investissement grâce à la puissance de l’intelligence artificielle. En combinant l’expertise d’investisseurs et une technologie de pointe, nous livrons une plateforme qui excelle en précision, vitesse et rentabilité.',
        'about_content_text_2' => 'Notre équipe mondiale apporte des perspectives variées et innove en continu pour intégrer les dernières tendances de l’IA et de la finance. La synergie entre expertise humaine et intelligence machine offre une expérience véritablement transformative.',
        'about_content_img_alt' => 'Équipe EquiLoomPRO',
        'period' => [
            [
                'date' => 'avril <script>document.write(new Date().getFullYear() - 3)</script>',
                'title' => 'Naissance d’une vision',
                'description' => 'EquiLoomPRO a été fondée avec l’ambition de révolutionner l’investissement grâce à l’IA.',
            ],
            [
                'date' => 'juillet <script>document.write(new Date().getFullYear() - 3)</script>',
                'title' => 'Croissance et développement',
                'description' => 'Nous avons levé €3 000 000 pour accélérer le développement de la plateforme et agrandir l’équipe.',
            ],
            [
                'date' => 'novembre <script>document.write(new Date().getFullYear() - 3)</script>',
                'title' => 'Phase bêta',
                'description' => 'Lancement de la version bêta de EquiLoomPRO, collecte des retours utilisateurs et affinement de la technologie.',
            ],
            [
                'date' => 'juin <script>document.write(new Date().getFullYear() - 2)</script>',
                'title' => 'Lancement mondial',
                'description' => 'EquiLoomPRO a été lancé dans le monde entier, apportant une technologie d’investissement avancée aux utilisateurs à l’échelle globale.',
            ],
        ],
        'investment_title' => 'Réinventez votre approche d’investissement',
        'investment_text' => 'Découvrez le futur de la gestion d’actifs avec EquiLoomPRO. Notre combinaison innovante d’IA et d’analytique de données offre des capacités d’exception et aide les investisseurs à naviguer les marchés avec une précision inégalée.',
        'investment_btn' => 'Commencer',

        // Contact
        'contact_title' => 'Contactez-nous',
        'contact_text' => 'Écrivez-nous pour obtenir des conseils ou des réponses à vos questions ; notre équipe d’experts vous aide à prendre des décisions d’investissement stratégiques et sûres.',
        'contact_form_enable_js' => 'Veuillez activer JavaScript dans votre navigateur pour compléter ce formulaire.',
        'contact_label_name' => 'Nom',
        'contact_label_email' => 'E-mail',
        'contact_label_message' => 'Commentaire ou message',
        'contact_submit' => 'Envoyer',
        'contact_form_agreement' => ' * En cliquant, vous acceptez la <a href="/be-fr/privacy" class="form-link">Politique de confidentialité</a> et les <a href="/be-fr/terms" class="form-link">Conditions générales</a>.',
        'contact_form_success' => 'Formulaire envoyé avec succès !',

        // Privacy Policy
        'privacy_title' => 'Politique de confidentialité',
        'privacy_updated' => '<b>Dernière mise à jour :</b> juillet <script>document.write(new Date().getFullYear() - 1)</script>',

        'privacy_1_title' => '1. Introduction',
        'privacy_1_text' => '
<p>La présente Politique de confidentialité de EquiLoomPRO (« nous », « notre », « nos ») précise comment nous traitons les données personnelles lorsque vous utilisez nos services (« Services ») et notre site <a href="/be-fr/">EquiLoomPRO</a> (« Site »). La protection de votre vie privée et de vos données est prioritaire.</p>
<p>Nos Services et notre Site peuvent renvoyer vers des sites tiers. Nous ne sommes pas responsables de leurs pratiques ; veuillez consulter leurs politiques avant utilisation.</p>
<p>Nous traitons toutes les données collectées de manière confidentielle et appliquons des mesures techniques et organisationnelles solides pour protéger les Données personnelles contre l’accès non autorisé, la perte ou la divulgation.</p>
<p>En utilisant notre Site, vous pouvez fournir des informations personnelles (nom, e-mail, téléphone, etc.). Ces données peuvent être utilisées pour vérifier votre identité, fournir du support, remplir nos obligations ou, avec votre consentement, envoyer des mises à jour. Vous pouvez gérer vos préférences de notification ou vous désabonner.</p>
',

        'privacy_2_title' => '2. Collecte et utilisation des données',
        'privacy_2_1_title' => '2.1. Généralités',
        'privacy_2_1_text' => '
<p>Nous collectons des données concernant les visiteurs du Site (« Visiteurs »), les utilisateurs (« Utilisateurs ») et les partenaires (« Partenaires »). Les Données personnelles incluent les adresses IP, noms, coordonnées et informations de relation, conformément au droit de la protection des données.</p>
',

        'privacy_2_2_title' => '2.2. Collecte',
        'privacy_2_2_text' => '
<p>En accédant à notre Site, vous consentez à la collecte de données (p. ex. via cookies, adresses IP ou formulaires). Si vous n’êtes pas d’accord, n’utilisez pas le Site.</p>
',

        'privacy_2_3_title' => '2.3. Finalités',
        'privacy_2_3_text' => '
<p>Nous traitons les Données personnelles pour améliorer nos Services, personnaliser l’expérience, fournir du support et respecter nos obligations légales. Finalités et bases légales :</p>
<table>
    <tbody>
        <tr><td>Création de compte</td><td>Consentement ; exécution du contrat</td></tr>
        <tr><td>Fourniture des Services</td><td>Exécution du contrat</td></tr>
        <tr><td>Support et demandes</td><td>Intérêt légitime</td></tr>
        <tr><td>Marketing</td><td>Consentement</td></tr>
        <tr><td>Amélioration des Services</td><td>Intérêt légitime</td></tr>
    </tbody>
</table>
',

        'privacy_2_4_title' => '2.4. Partage des données',
        'privacy_2_4_text' => '
<p>Nous pouvons partager des données avec des prestataires et Partenaires de confiance, en garantissant la conformité RGPD pour les Utilisateurs à Bruxelles et dans l’UE.</p>
',

        'privacy_3_title' => '3. Partenaires',
        'privacy_3_text' => '
<p>Nous traitons les données des Partenaires sur la base du consentement ou de l’intérêt légitime, avec un traitement sécurisé et conforme aux lois applicables.</p>
',

        'privacy_4_title' => '4. Sécurité',
        'privacy_4_text' => '
<p>Nous mettons en œuvre des mesures techniques et organisationnelles de sécurité. Les tiers avec lesquels nous partageons des données sont contractuellement tenus à un standard équivalent. Aucun système n’étant totalement à l’abri des incidents, les Utilisateurs reconnaissent ce risque.</p>
',

        'privacy_5_title' => '5. Cookies',
        'privacy_5_text' => '
<p>Voir notre <a href="/be-fr/cookie">Politique relative aux cookies</a> pour plus d’informations sur les cookies et les technologies de suivi.</p>
',

        'privacy_6_title' => '6. Liens tiers',
        'privacy_6_text' => '
<p>Notre Site peut renvoyer vers des sites externes. Nous ne sommes pas responsables de leurs politiques de confidentialité ; consultez-les avant de partager des données.</p>
',

        'privacy_7_title' => '7. Conservation des données',
        'privacy_7_text' => '
<p>Nous conservons les Données personnelles uniquement pendant la durée nécessaire. À la fermeture du compte, les données sont supprimées conformément au droit applicable.</p>
',

        'privacy_8_title' => '8. Vos droits',
        'privacy_8_text' => '
<p>Vous disposez de droits d’accès, de rectification, d’effacement, de limitation, de portabilité, d’opposition et de retrait du consentement. Contactez-nous pour exercer vos droits.</p>
',

        'privacy_9_title' => '9. Marketing',
        'privacy_9_text' => '
<p>Nous pouvons utiliser vos données à des fins de marketing avec votre consentement. Vous pouvez retirer votre consentement par e-mail.</p>
',

        'privacy_10_title' => '10. Acceptation de la Politique',
        'privacy_10_text' => '
<p>En utilisant notre Site ou nos Services, vous acceptez la présente Politique. Nous pouvons la mettre à jour ; la poursuite de l’utilisation vaut acceptation.</p>
',

        'privacy_11_title' => '11. Divulgation légale',
        'privacy_11_text' => '
<p>Nous pouvons divulguer des Données personnelles si la loi l’exige ou pour protéger nos droits.</p>
',

        'privacy_12_title' => '12. Contact',
        'privacy_12_text' => '
<p>Pour toute question relative à la confidentialité, contactez notre Délégué à la protection des données à <a href="mailto:support@zevriocapiture.org">support@zevriocapiture.org</a>.</p>
',

        // Terms of Use
        'terms_title' => 'Conditions générales',
        'terms_updated' => '<b>Dernière mise à jour :</b> juillet <script>document.write(new Date().getFullYear() - 1)</script>',

        'terms_1_title' => '1. Introduction',
        'terms_1_text' => '
<p>Bienvenue sur le site de EquiLoomPRO (« Site »), exploité par EquiLoomPRO (« nous », « notre », « nos »). En utilisant le Site ou nos services (« Services »), vous acceptez ces Conditions générales (« Conditions ») et notre Politique de confidentialité. Contact : <a href="mailto:support@zevriocapiture.org">support@zevriocapiture.org</a>.</p>
<p>Nous pouvons mettre à jour les Conditions sans préavis. La poursuite d’utilisation vaut acceptation. En cas de désaccord, n’utilisez pas le Site ou les Services.</p>
',

        'terms_2_title' => '2. Absence de conseil en investissement',
        'terms_2_text' => '
<p>Le Site ne fournit pas de conseils financiers ou d’investissement personnalisés. Les informations sont générales et ne tiennent pas compte de vos objectifs, de votre situation financière ni de vos besoins. Consultez un conseiller financier indépendant avant toute décision.</p>
',

        'terms_3_title' => '3. Services',
        'terms_3_text' => '
<p>Tous les Services ne sont pas fournis par nous. Les références à des services, sites ou produits tiers ne constituent pas une recommandation. Nous ne sommes pas responsables du contenu ou des services de tiers.</p>
',

        'terms_4_title' => '4. Portée et modifications',
        'terms_4_text' => '
<p>Ces Conditions constituent l’intégralité de l’accord entre vous et nous et remplacent tout accord antérieur. Nous pouvons les modifier à notre discrétion ; l’utilisation continue vaut acceptation.</p>
',

        'terms_5_title' => '5. Éligibilité',
        'terms_5_text' => '
<p>Les Services s’adressent aux personnes de 18 ans et plus capables de conclure des contrats juridiquement contraignants. Les mineurs ne sont pas autorisés à utiliser le Site ou les Services.</p>
',

        'terms_6_title' => '6. Description des Services',
        'terms_6_text' => '
<p><b>Services par abonnement :</b> Après inscription, vous pouvez accéder à des services gratuits ou payants, y compris du contenu fourni par nous ou par des tiers. Ceci ne constitue pas un conseil en investissement et nous n’en garantissons pas l’exactitude.</p>
<p><b>Services tiers :</b> Des produits ou services de tiers peuvent être proposés. Nous ne sommes pas responsables de leur exactitude ni de leur disponibilité.</p>
<p><b>Général :</b> Des données d’inscription exactes sont requises. Nous pouvons refuser des données incomplètes ou frauduleuses et ne sommes pas responsables des interruptions de service.</p>
',

        'terms_7_title' => '7. Droits de propriété',
        'terms_7_text' => '
<p>Le Site et son contenu sont protégés par des droits d’auteur, marques et autres droits. Toute reproduction, redistribution ou extraction non autorisée est interdite.</p>
',

        'terms_8_title' => '8. Informations confidentielles',
        'terms_8_text' => '
<p>Les informations confidentielles restent protégées pendant un an après la fin de la relation, hors informations publiques ou reçues sans restriction.</p>
',

        'terms_9_title' => '9. Hyperliens et cadrage (framing)',
        'terms_9_text' => '
<p>L’établissement de liens, le framing ou la référence à notre Site sans autorisation sont interdits. Vous êtes responsable des dommages causés.</p>
',

        'terms_10_title' => '10. Clause de non-garantie',
        'terms_10_text' => '
<p>Les Services et le contenu sont fournis « tels quels », sans garantie. Nous ne sommes pas responsables des erreurs, interruptions ou de l’impossibilité d’utiliser le Site ou les Services.</p>
',

        'terms_11_title' => '11. Limitation de responsabilité',
        'terms_11_text' => '
<p>Nous ne sommes responsables d’aucun dommage, y compris perte de profit ou de données. Notre responsabilité maximale est de €240, dans la mesure permise par la loi.</p>
',

        'terms_12_title' => '12. Indemnisation',
        'terms_12_text' => '
<p>Vous acceptez de nous indemniser contre toute réclamation résultant de votre utilisation du Site, de la violation des Conditions ou d’une atteinte aux droits d’autrui.</p>
',

        'terms_13_title' => '13. Sites tiers',
        'terms_13_text' => '
<p>Nous ne sommes pas responsables des sites ou ressources tiers référencés sur notre Site, ni de leur contenu ou politiques.</p>
',

        'terms_14_title' => '14. Protection des données',
        'terms_14_text' => '
<p>Nous respectons le RGPD et le droit belge en matière de protection des données. Nous maintenons des mesures de sécurité, recueillons les consentements requis et traitons les demandes des personnes concernées. En cas de violation de données, nous informons sans retard injustifié.</p>
',

        'terms_15_title' => '15. Droit applicable',
        'terms_15_text' => '
<p>Ces Conditions sont régies par le droit belge. Les litiges seront tranchés par arbitrage à Bruxelles conformément aux règles applicables.</p>
',

        'terms_16_title' => '16. Contact',
        'terms_16_text' => '
<p>Pour toute question, contactez-nous à <a href="mailto:support@zevriocapiture.org">support@zevriocapiture.org</a>.</p>
',
    ],
    'dk' => [
        'language_iso' => 'da',
        'country_name' => 'Danmark',
        'locale' => 'da_DK',
        'locale_lang' => 'da-DK',
        'language_name' => 'Dansk',
        'city' => 'København',
        'country_code' => 'DK',
        'geo_position' => '55.676098, 12.568337',
        'jsonld_organization_name' => 'EquiLoomPRO',
        'jsonld_organization_review_rating' => '4.96',
        'jsonld_organization_review_author' => 'EquiLoomPRO-bruger',
        'jsonld_software_categories' => 'Kryptovaluta-investeringsværktøj',
        // $190 → ~1,310 DKK ⇒ afrundet opad
        'jsonld_software_price' => '1320',
        'jsonld_software_price_currency' => 'DKK',
        'brand_name_api' => 'EquLum App AI',

        'home' => 'Hjem',
        'about' => 'Om os',
        'contact' => 'Kontakt os',
        'privacy' => 'Privatlivspolitik',
        'terms' => 'Vilkår og betingelser',

        // Home (index)
        'title' => 'EquiLoomPRO — Automatiseret investering & kontanthåndtering',
        'meta_description' => 'Tag ejerskab over din formue med EquiLoomPRO. AI-assisterede porteføljer, automatiseret opsparing og skatteoptimerede funktioner hjælper dig med at investere trygt og få pengene til at vokse.',
        'meta_keywords' => 'EquiLoomPRO, automatiseret investering, AI-investering, porteføljestyring, kontokonto, opsparing, skatteoptimering, Danmark, København',

        // Open Graph / Twitter (globalt)
        'og_title' => 'EquiLoomPRO — Investeringsplatform drevet af AI',
        'og_description' => 'Automatiserede porteføljer, smart kontanthåndtering og ubesværet investering. Start med EquiLoomPRO og voks din formue med ro i maven.',
        'og_image' => '/assets/images/share.webp',

        'twitter_title' => 'EquiLoomPRO — Automatiseret investering',
        'twitter_description' => 'AI-assisterede porteføljer og automatiseret opsparing, så du kan opbygge formue med selvtillid.',

        // About
        'about_desc_content' => 'Mød EquiLoomPRO — et team i København af investorer og AI-eksperter, der bygger en præcis og lynhurtig investeringsplatform, så du kan opbygge formue trygt.',
        'about_keywords' => 'om EquiLoomPRO, virksomhed, AI-investeringsteam, investeringsplatform, København',

        // Contact
        'contact_desc_content' => 'Spørgsmål eller brug for sparring? Kontakt EquiLoomPRO — vores eksperter hjælper dig med at træffe sikre, strategiske investeringsbeslutninger.',
        'contact_keywords' => 'kontakt EquiLoomPRO, support, hjælp, investeringsspørgsmål, København',

        // Terms
        'terms_desc_content' => 'Læs vilkår og betingelser for brug af EquiLoomPROs website og tjenester, inkl. krav, begrænsninger og juridiske meddelelser.',
        'terms_keywords' => 'brugsbetingelser, vilkår og betingelser, EquiLoomPRO, juridisk, Danmark',

        // Privacy
        'privacy_desc_content' => 'Sådan indsamler, bruger og beskytter EquiLoomPRO dine personoplysninger, dine rettigheder og vores forpligtelse til privatliv og sikkerhed.',
        'privacy_keywords' => 'privatlivspolitik, databeskyttelse, GDPR, personoplysninger, EquiLoomPRO',

        // ---------- JSON-LD content ----------
        'jsonld_organization_review_body' => 'EquiLoomPRO leverer en AI-assisteret investeringsplatform, der kombinerer automatiserede porteføljer, intelligent kontanthåndtering og skatteoptimerede funktioner, så kunder i København kan opbygge formue med tillid.',

        // FAQ (bruges på forsiden, hvis page === "index")
        'jsonld_faq_1_question' => 'Hvad er EquiLoomPRO?',
        'jsonld_faq_1_answer' => 'EquiLoomPRO er en AI-assisteret investeringsplatform, der hjælper dig med at opbygge og automatisere diversificerede porteføljer, optimere opsparing og investere med selvtillid.',

        'jsonld_faq_2_question' => 'Hvordan hjælper EquiLoomPRO mig med at investere?',
        'jsonld_faq_2_answer' => 'Vi tilbyder tilpassede eller automatiserede porteføljer, smarte kontantværktøjer og funktioner designet til bedre efter-skat-resultater — så du kan investere uden besvær og stadig beholde kontrollen.',

        'jsonld_faq_3_question' => 'Er EquiLoomPRO tilgængelig i Danmark?',
        'jsonld_faq_3_answer' => 'Ja. EquiLoomPRO understøtter kunder i København og i hele Danmark med en oplevelse tilpasset din region og DKK.',

        'jsonld_faq_4_question' => 'Skal jeg bruge automatisering eller AI?',
        'jsonld_faq_4_answer' => 'Automatisering er valgfrit. Lad platformen håndtere rutinerne, eller byg og justér selv din portefølje, når det passer dig.',

        'jsonld_faq_5_question' => 'Hvordan kommer jeg i gang?',
        'jsonld_faq_5_answer' => 'Opret din profil, vælg eller tilpas en portefølje, og indsæt midler på kontoen. Der er ingen skjulte tilmeldingsgebyrer; partnertjenester kan have egne krav.',

        'jsonld_faq_6_question' => 'Hvordan beskytter EquiLoomPRO mine data?',
        'jsonld_faq_6_answer' => 'Vi anvender robuste tekniske og organisatoriske sikkerhedsforanstaltninger og følger gældende EU/DK-standarder for databeskyttelse (GDPR) for at sikre dine oplysninger.',

        // Header section
        'header_logo_alt' => 'EquiLoomPRO-logo',
        'header_logo_text' => 'EquiLoomPRO',
        'header_burger_alt' => 'Menu',
        'header_cross_alt' => 'Luk',

        // Hero section
        'hero_form_title' => 'Registrér dig nu',
        'hero_form_notice' => '* Ved at klikke accepterer du vores <a href="/dk/privacy" class="form-link">Privatlivspolitik</a> og <a href="/dk/terms" class="form-link">Vilkår & betingelser</a>.',
        'hero_title' => 'Gør formue til din egen.',
        'hero_subtitle' => 'Personligt, automatiseret og ubesværet — investering og opsparing.',
        'hero_stat_nerdwallet' => "Bedste robo-rådgiver, 2019<sup class=\"sup\">1</sup><br>Bedste app til kontanthåndtering, 2020<sup class=\"sup\">1</sup>",
        'hero_stat_investopedia' => "Bedste robo-rådgiver, 2020<sup class=\"sup\">1</sup>",
        'hero_stat_clients' => 'Betroede kunder',
        'hero_stat_funds' => 'Forvaltede midler',
        'hero_stat_appstore' => 'Apple App Store <sup class="sup">2</sup>',
        'hero_stat_playstore' => 'Google Play Store <sup class="sup">2</sup>',

        // Investition section
        'investition_title' => 'At investere er ikke let. Vi får det til at føles sådan.',
        'investition_text' => 'Lad os skræddersy en portefølje til dig — eller byg den selv — og lad vores stærke automatisering få mest muligt ud af dine investeringer, optimere performance og hjælpe med at sænke skatten.',
        'investition_btn_start' => 'Begynd at investere',
        'investition_btn_more' => 'Læs mere',
        'investition_notification_app' => 'EquiLoomPRO',
        'investition_notification_time' => 'nu',
        // $78 → ~540 DKK ⇒ afrundet opad
        'investition_notification_1' => 'Vi har sparet dig for <span>550 DKK</span> i skat.',
        // $250 → ~1,725 DKK ⇒ afrundet opad
        'investition_notification_2' => 'Vi har automatisk investeret dit indskud på <span>1.750 DKK</span>.',

        // Cash section
        'cash_title' => 'Hverdagens kontanter — designet til langsigtet formueopbygning.',
        'cash_text' => 'Vores Cash-konto, tilbudt med regulerede bankpartnere, lader dig automatisere opsparingen, betale regninger, hæve i tusindvis af hæveautomater og investere overskuddet på få sekunder.',
        'cash_btn_start' => 'Begynd at spare op',
        'cash_btn_more' => 'Læs mere',
        'cash_img_phone_alt' => 'Telefon',
        'cash_img_card_alt' => 'Kort',

        // Saving section
        'saving_title' => 'Spar op og investér — mens du slapper af.',
        'saving_text' => 'Fortæl os, hvad du sparer op til, så lægger vi automatisk ekstra til side, så du når dine mål. Fordi vi forbinder alle dine konti, behøver du kun én app for at se din formue vokse.',
        'saving_img_alt' => 'Opsparing',

        // Testimonials section
        'testimonial_title' => 'UDTALELSER',
        'testimonial_1_quote' => 'Det er den <strong>bedste</strong> løsning, jeg har fundet, både til investering, pensionsplanlægning og overblikket over hele min økonomi.',
        'testimonial_1_author' => 'Mads K',
        'testimonial_2_quote' => '<strong>EquiLoomPRO</strong> er det første, der for alvor fik mig til at spare op.',
        'testimonial_2_author' => 'Sofie L',
        'testimonial_3_quote' => 'Det er <strong>automatisk</strong>, og jeg er doven.',
        'testimonial_3_author' => 'Lars N',

        // Trust section
        'trust_title' => 'Over <strong>45.000</strong> mennesker i Danmark bruger allerede EquiLoomPRO til at tjene mere og bekymre sig mindre',
        'trust_btn' => 'Kom i gang',
        'trust_img_alt' => 'Åbent vindue med plante',
        'trust_subtitle' => 'SEEN I',
        'trust_logo_wsj_alt' => 'WSJ',
        'trust_logo_bloomberg_alt' => 'Bloomberg',
        'trust_logo_nyt_alt' => 'The New York Times',
        'trust_logo_reuters_alt' => 'Reuters',
        'trust_logo_cnbc_alt' => 'CNBC',

        // Footer section
        'footer_logo_alt' => 'EquiLoomPRO-logo',
        'footer_logo_text' => 'EquiLoomPRO',
        'footer_legal_note_1' => 'Udtalelserne er givet af kunder hos EquiLoomPRO Advisers og EquiLoomPRO Brokerage. Der gives ingen garanti for, at andre kunder opnår tilsvarende erfaringer eller resultater.',
        'footer_legal_note_2' => 'Nerdwallet og Investopedia (”Anbefalerne”) kan modtage kompensation for at henvise potentielle kunder til EquiLoomPRO Advisers, LLC via annoncer på deres websites. Parterne er ikke associerede ud over denne aftale. Anbefaleres vurderinger er redaktionelle og ikke garanterede. Betaling påvirker ikke placering eller rating. Overvej gebyrer, funktioner og metodologi før dit valg.',
        'footer_legal_note_3' => 'Apple App Store- og Google Play-bedømmelser er baseret på brugeranmeldelser fra februar 2014 (Apple) og december 2015 (Google) til og med juni <span class="currentYear"></span>. Bedømmelserne samles af Apple Inc. og Google LLC, der modtager kompensation for at hoste vores app.',
        'footer_legal_note_4' => 'Ved at bruge dette website forstår du, at informationen kun er vejledende, og at du accepterer vores <a href="/dk/terms" class="legal-link">Vilkår</a> og <a href="/dk/privacy" class="legal-link">Privatlivspolitik</a>.',
        'footer_legal_note_5' => 'EquiLoomPRO Advisers benytter kilder anset for pålidelige, herunder kunder og tredjeparter, men kan ikke garantere fuld nøjagtighed. Intet her er et tilbud, en anbefaling eller en opfordring til at købe/sælge værdipapirer. EquiLoomPRO Advisers eller tilknyttede giver ikke skatterådgivning — tal med din egen skatterådgiver.',
        'footer_legal_note_6' => 'Vi samarbejder i Danmark med regulerede bank- og betalingspartnere for at tilbyde konto- og kortfunktioner. Banktjenester leveres af tredjepart underlagt identitetskontrol og gældende lokal regulering.',
        'footer_legal_note_7' => 'Kontofunktioner til kontanter tilbydes via regulerede mæglere og bankpartnere og er adskilt fra investeringskonti. Investeringsforvaltning og rådgivning leveres af EquiLoomPRO Advisers eller tilknyttede enheder. Udbuddet kan variere efter jurisdiktion.',
        'footer_legal_note_8' => 'Effekten af tabsrealisering til skatteoptimering afhænger af hele din skatte- og investeringsprofil, inkl. handler uden for EquiLoomPRO og investeringstype/ejertid. Strategien kan øge antallet af handler, skabe gevinster, ”wash sales” og højere omkostninger/markedsimpact. Uudnyttede tab kan i visse tilfælde fremføres efter gældende ret.',
        'footer_legal_note_9' => 'Al investering indebærer risiko, inkl. mulig tab af investeret kapital, og historisk afkast er ingen garanti for fremtidigt afkast. Historiske og forventede afkast samt sandsynlighedsprognoser er vejledende og kan afvige fra faktisk performance.',
        'footer_legal_copy' => 'EquiLoomPRO, EquiLoomPRO Advisers og EquiLoomPRO Brokerage er helejede datterselskaber af EquiLoomPRO Corporation. <br><br> © <span class="currentYear"></span> EquiLoomPRO Corporation. Alle rettigheder forbeholdes.',

        // About -----------------------------------------------
        'about_title' => 'Om os',
        'about_text' => 'Hos <span class="brand-name">EquiLoomPRO</span> er vi et hold af erfarne investorer og AI-eksperter, der bygger en førsteklasses investeringsplatform kendt for præcision og hastighed.',
        'about_content_title' => 'Kernen er et mangfoldigt, passioneret globalt team forenet i missionen om at forme fremtidens investering.',
        'about_content_text_1' => 'Vi vil forandre investeringslandskabet ved at udnytte kunstig intelligens. Med kombinationen af investorindsigt og banebrydende teknologi leverer vi en platform, der excellerer i nøjagtighed, fart og lønsomhed.',
        'about_content_text_2' => 'Vores globale team bringer forskellige perspektiver og innoverer løbende for at indarbejde de nyeste tendenser inden for AI og finans. Samspillet mellem menneskelig ekspertise og maskinintelligens giver en transformativ investeringsoplevelse.',
        'about_content_img_alt' => 'EquiLoomPRO-teamet',
        'period' => [
            [
                'date' => 'april <script>document.write(new Date().getFullYear() - 3)</script>',
                'title' => 'Fødslen af en vision',
                'description' => 'EquiLoomPRO blev grundlagt med en ambitiøs vision om at revolutionere investering ved hjælp af AI.',
            ],
            [
                'date' => 'juli <script>document.write(new Date().getFullYear() - 3)</script>',
                'title' => 'Vækst og udvikling',
                'description' => 'Vi rejste 3.000.000 DKK i finansiering til at drive platformudvikling og udvide teamet.',
            ],
            [
                'date' => 'november <script>document.write(new Date().getFullYear() - 3)</script>',
                'title' => 'Beta-fase',
                'description' => 'Beta-versionen af EquiLoomPRO blev lanceret for at indsamle brugerfeedback og forfine teknologien.',
            ],
            [
                'date' => 'juni <script>document.write(new Date().getFullYear() - 2)</script>',
                'title' => 'Global lancering',
                'description' => 'EquiLoomPRO gik globalt og bragte avanceret investeringsteknologi til brugere verden over — en vigtig milepæl.',
            ],
        ],
        'investment_title' => 'Gentænk din investeringsstrategi',
        'investment_text' => 'Oplev fremtiden for kapitalforvaltning med EquiLoomPRO. Vores innovative mix af AI og dyb dataanalyse giver enestående kapaciteter og hjælper investorer med at navigere markederne med uovertruffen præcision.',
        'investment_btn' => 'Kom i gang',

        // Contact
        'contact_title' => 'Kontakt os',
        'contact_text' => 'Skriv til os for rådgivning eller svar på dine spørgsmål — vores eksperter hjælper dig med trygge og strategiske beslutninger.',
        'contact_form_enable_js' => 'Aktivér venligst JavaScript i din browser for at udfylde formularen.',
        'contact_label_name' => 'Navn',
        'contact_label_email' => 'E-mail',
        'contact_label_message' => 'Kommentar eller besked',
        'contact_submit' => 'Send',
        'contact_form_agreement' => ' * Ved at klikke accepterer du <a href="/dk/privacy" class="form-link">Privatlivspolitikken</a> og <a href="/dk/terms" class="form-link">Vilkår & betingelser</a>.',
        'contact_form_success' => 'Formularen er sendt!',

        // Privacy Policy
        'privacy_title' => 'Privatlivspolitik',
        'privacy_updated' => '<b>Senest opdateret:</b> juli <script>document.write(new Date().getFullYear() - 1)</script>',

        'privacy_1_title' => '1. Introduktion',
        'privacy_1_text' => '
<p>Denne Privatlivspolitik for EquiLoomPRO ("vi", "os", "vores") beskriver, hvordan vi behandler personoplysninger, når du bruger vores tjenester ("Tjenester") og website <a href="/dk/">EquiLoomPRO</a> ("Website"). Beskyttelse af dit privatliv og dine data er vores prioritet.</p>
<p>Vores Tjenester og Website kan linke til tredjeparts-sider. Vi er ikke ansvarlige for deres praksis; gennemlæs deres politikker før brug.</p>
<p>Vi behandler alle indsamlede data fortroligt og anvender solide tekniske og organisatoriske foranstaltninger til at beskytte Personoplysninger mod uautoriseret adgang, tab eller videregivelse.</p>
<p>Når du bruger vores Website, kan du dele personlige oplysninger (f.eks. navn, e-mail, telefon). Data kan bruges til identitetsverifikation, support, opfyldelse af forpligtelser eller — med samtykke — til at sende opdateringer. Du kan administrere præferencer eller framelde kommunikation.</p>
',

        'privacy_2_title' => '2. Databehandling og brug',
        'privacy_2_1_title' => '2.1. Generelt',
        'privacy_2_1_text' => '
<p>Vi indsamler data om besøgende ("Besøgende"), brugere ("Brugere") og partnere ("Partnere"). Personoplysninger kan omfatte IP-adresser, navne, kontaktdata og relationsoplysninger i henhold til databeskyttelsesloven.</p>
',

        'privacy_2_2_title' => '2.2. Indsamling',
        'privacy_2_2_text' => '
<p>Ved adgang til vores Website accepterer du indsamling af data (fx via cookies, IP-adresser eller formularer). Er du uenig, bør du undlade at bruge websitet.</p>
',

        'privacy_2_3_title' => '2.3. Formål',
        'privacy_2_3_text' => '
<p>Vi behandler Personoplysninger for at forbedre Tjenester, personalisere oplevelsen, yde support og overholde juridiske krav. Formål og retsgrundlag:</p>
<table>
    <tbody>
        <tr><td>Kontooprettelse</td><td>Samtykke; kontraktopfyldelse</td></tr>
        <tr><td>Levering af tjenester</td><td>Kontraktopfyldelse</td></tr>
        <tr><td>Support og henvendelser</td><td>Legitim interesse</td></tr>
        <tr><td>Marketing</td><td>Samtykke</td></tr>
        <tr><td>Forbedring af tjenester</td><td>Legitim interesse</td></tr>
    </tbody>
</table>
',

        'privacy_2_4_title' => '2.4. Deling af data',
        'privacy_2_4_text' => '
<p>Vi kan dele data med betroede leverandører og Partnere, med sikring af GDPR-overholdelse for Brugere i Danmark og EU.</p>
',

        'privacy_3_title' => '3. Partnere',
        'privacy_3_text' => '
<p>Vi behandler Partnerdata på baggrund af samtykke eller legitim interesse og med sikker håndtering i henhold til gældende lovgivning.</p>
',

        'privacy_4_title' => '4. Sikkerhed',
        'privacy_4_text' => '
<p>Vi implementerer tekniske og organisatoriske sikkerhedsforanstaltninger. Tredjeparter, vi deler data med, er kontraktuelt forpligtet til tilsvarende standarder. Intet system er 100 % sikkert; Brugere accepterer denne risiko.</p>
',

        'privacy_5_title' => '5. Cookies',
        'privacy_5_text' => '
<p>Se vores <a href="/dk/cookie">Cookiepolitik</a> for detaljer om cookies og sporingsteknologier.</p>
',

        'privacy_6_title' => '6. Tredjepartslinks',
        'privacy_6_text' => '
<p>Vores Website kan henvise til eksterne sider. Vi er ikke ansvarlige for deres privatlivspraksis; læs deres politikker før deling af data.</p>
',

        'privacy_7_title' => '7. Opbevaring af data',
        'privacy_7_text' => '
<p>Vi opbevarer Personoplysninger kun så længe, det er nødvendigt. Ved lukning af konto slettes data i overensstemmelse med gældende lov.</p>
',

        'privacy_8_title' => '8. Dine rettigheder',
        'privacy_8_text' => '
<p>Du har ret til indsigt, berigtigelse, sletning, begrænsning, dataportabilitet, til at gøre indsigelse og til at trække samtykke tilbage. Kontakt os for at udøve dine rettigheder.</p>
',

        'privacy_9_title' => '9. Markedsføring',
        'privacy_9_text' => '
<p>Vi kan bruge dine data til markedsføring med dit samtykke. Du kan til enhver tid tilbagekalde samtykket via e-mail.</p>
',

        'privacy_10_title' => '10. Accept af politikken',
        'privacy_10_text' => '
<p>Ved brug af vores Website eller Tjenester accepterer du denne politik. Vi kan opdatere den; fortsat brug betragtes som accept.</p>
',

        'privacy_11_title' => '11. Juridisk videregivelse',
        'privacy_11_text' => '
<p>Vi kan videregive Personoplysninger, hvis det kræves ved lov, eller for at beskytte vores rettigheder.</p>
',

        'privacy_12_title' => '12. Kontakt',
        'privacy_12_text' => '
<p>Vedr. privatliv kontakt vores databeskyttelsesrådgiver på <a href="mailto:support@zevriocapiture.org">support@zevriocapiture.org</a>.</p>
',

        // Terms of Use
        'terms_title' => 'Vilkår og betingelser',
        'terms_updated' => '<b>Senest opdateret:</b> juli <script>document.write(new Date().getFullYear() - 1)</script>',

        'terms_1_title' => '1. Introduktion',
        'terms_1_text' => '
<p>Velkommen til EquiLoomPROs website ("Website"), drevet af EquiLoomPRO ("vi", "os", "vores"). Ved brug af Website eller tjenester ("Tjenester") accepterer du disse Vilkår og vores Privatlivspolitik. Kontakt: <a href="mailto:support@zevriocapiture.org">support@zevriocapiture.org</a>.</p>
<p>Vilkårene kan opdateres uden varsel. Fortsat brug anses som accept. Hvis du ikke er enig, må du ikke bruge Website eller Tjenester.</p>
',

        'terms_2_title' => '2. Ingen investeringsrådgivning',
        'terms_2_text' => '
<p>Websitet giver ikke personlig finansiel eller investeringsrådgivning. Oplysningerne er generelle og tager ikke højde for dine mål, økonomi eller behov. Søg uafhængig rådgivning før investeringsbeslutninger.</p>
',

        'terms_3_title' => '3. Tjenester',
        'terms_3_text' => '
<p>Ikke alle Tjenester leveres af os. Henvisning til tredjepartstjenester, -sites eller -produkter er ikke en anbefaling. Vi er ikke ansvarlige for tredjeparts indhold eller tjenester.</p>
',

        'terms_4_title' => '4. Omfang og ændringer',
        'terms_4_text' => '
<p>Disse Vilkår udgør hele aftalen mellem dig og os og erstatter tidligere aftaler. Vi kan ændre Vilkårene; fortsat brug udgør accept.</p>
',

        'terms_5_title' => '5. Berettigelse',
        'terms_5_text' => '
<p>Tjenesterne er for personer på 18 år eller derover, som kan indgå juridisk bindende aftaler. Mindreårige må ikke bruge Website eller Tjenester.</p>
',

        'terms_6_title' => '6. Beskrivelse af Tjenester',
        'terms_6_text' => '
<p><b>Abonnementstjenester:</b> Efter registrering kan du få adgang til gratis eller betalte ydelser, inkl. indhold fra os eller tredjeparter. Dette er ikke investeringsrådgivning, og vi garanterer ikke nøjagtighed.</p>
<p><b>Tredjepartstjenester:</b> Tredjeparts produkter eller tjenester kan tilbydes. Vi er ikke ansvarlige for deres nøjagtighed eller tilgængelighed.</p>
<p><b>Generelt:</b> Korrekte registreringsdata er påkrævet. Vi kan afvise ufuldstændige eller svigagtige oplysninger og er ikke ansvarlige for serviceafbrydelser.</p>
',

        'terms_7_title' => '7. Ejendomsrettigheder',
        'terms_7_text' => '
<p>Website og indhold er beskyttet af ophavsret, varemærker og andre rettigheder. Uautoriseret kopiering, distribution eller scraping er forbudt.</p>
',

        'terms_8_title' => '8. Fortrolige oplysninger',
        'terms_8_text' => '
<p>Fortrolige oplysninger forbliver beskyttet i et år efter ophør, undtagen offentligt tilgængelige informationer eller oplysninger modtaget uden begrænsning.</p>
',

        'terms_9_title' => '9. Links og framing',
        'terms_9_text' => '
<p>Linkning, framing eller reference til vores Website uden tilladelse er forbudt. Du hæfter for skader, der måtte opstå.</p>
',

        'terms_10_title' => '10. Ansvarsfraskrivelse',
        'terms_10_text' => '
<p>Tjenester og indhold leveres "som de er" uden garantier. Vi er ikke ansvarlige for fejl, afbrydelser eller manglende adgang.</p>
',

        'terms_11_title' => '11. Ansvarsbegrænsning',
        // Tilpasset skala — maks. ansvar lig depositum 1.750 DKK
        'terms_11_text' => '
<p>Vi er ikke ansvarlige for skader, herunder tab af profit eller data. Vores maksimale ansvar er 1.750 DKK, hvor loven tillader det.</p>
',

        'terms_12_title' => '12. Skadesløshed',
        'terms_12_text' => '
<p>Du accepterer at holde os skadesløse for krav, der opstår som følge af din brug af Websitet, brud på Vilkårene eller krænkelse af andres rettigheder.</p>
',

        'terms_13_title' => '13. Tredjepartswebsites',
        'terms_13_text' => '
<p>Vi er ikke ansvarlige for tredjepartswebsites eller -ressourcer, der linkes fra vores Website, ej heller for deres indhold eller politikker.</p>
',

        'terms_14_title' => '14. Databeskyttelse',
        'terms_14_text' => '
<p>Vi overholder GDPR og dansk databeskyttelseslov. Vi vedligeholder sikkerhedsforanstaltninger, indhenter nødvendige samtykker og hjælper med registreredes rettigheder. Brud på datasikkerheden meddeles uden unødig forsinkelse.</p>
',

        'terms_15_title' => '15. Lovvalg',
        'terms_15_text' => '
<p>Disse Vilkår er underlagt dansk ret. Tvister afgøres ved voldgift i København efter gældende regler.</p>
',

        'terms_16_title' => '16. Kontakt',
        'terms_16_text' => '
<p>Har du spørgsmål, så kontakt os på <a href="mailto:support@zevriocapiture.org">support@zevriocapiture.org</a>.</p>
',
    ],
    'nl' => [
        'language_iso' => 'nl',
        'brand_name_api' => 'EquiLoomPRO AI',
        'country_name' => 'Nederland',
        'locale' => 'nl_NL',
        'locale_lang' => 'nl-NL',
        'language_name' => 'Nederlands',
        'city' => 'Amsterdam',
        'country_code' => 'NL',
        'geo_position' => '52.377956, 4.897070',
        'jsonld_organization_name' => 'EquiLoomPRO',
        'jsonld_organization_review_rating' => '4.96',
        'jsonld_organization_review_author' => 'EquiLoomPRO gebruiker',
        'jsonld_software_categories' => 'Cryptocurrency beleggingsinstrument',
        // origineel 190 USD -> lokaal EUR, округление вверх
        'jsonld_software_price' => '180',
        'jsonld_software_price_currency' => 'EUR',

        'home' => 'Home',
        'about' => 'Over ons',
        'contact' => 'Contact',
        'privacy' => 'Privacybeleid',
        'terms' => 'Algemene voorwaarden',

        // Home (index)
        'title' => 'EquiLoomPRO — Geautomatiseerd beleggen & geldbeheer',
        'meta_description' => 'Maak vermogen echt van jou met EquiLoomPRO. AI-gestuurde portefeuilles, automatisch sparen en fiscaal efficiënte functies helpen je met vertrouwen te beleggen en je geld te laten groeien.',
        'meta_keywords' => 'EquiLoomPRO, geautomatiseerd beleggen, AI beleggen, portefeuillebeheer, cashrekening, sparen, fiscaal efficiënt, Nederland, Amsterdam',

        // Open Graph / Twitter (globaal)
        'og_title' => 'EquiLoomPRO — AI-gedreven beleggingsplatform',
        'og_description' => 'Automatische portefeuilles, slim cashbeheer en moeiteloos beleggen. Start met EquiLoomPRO en laat je vermogen groeien met vertrouwen.',
        'og_image' => '/assets/images/share.webp',

        'twitter_title' => 'EquiLoomPRO — Geautomatiseerd beleggen',
        'twitter_description' => 'AI-gestuurde portefeuilles en automatisch sparen om je vermogen met vertrouwen te laten groeien.',

        // About (meta)
        'about_desc_content' => 'Maak kennis met EquiLoomPRO — een Amsterdams team van beleggers en AI-experts dat een snel en nauwkeurig beleggingsplatform bouwt om met vertrouwen vermogen op te bouwen.',
        'about_keywords' => 'over EquiLoomPRO, bedrijf, AI beleggingsteam, beleggingsplatform, Amsterdam',

        // Contact (meta)
        'contact_desc_content' => 'Vragen of advies nodig? Neem contact op met EquiLoomPRO — onze experts helpen je bij zelfverzekerde en strategische beleggingsbeslissingen.',
        'contact_keywords' => 'contact EquiLoomPRO, support, hulp, beleggingsvragen, Amsterdam',

        // Terms (meta)
        'terms_desc_content' => 'Lees de Algemene voorwaarden voor het gebruik van de website en diensten van EquiLoomPRO, inclusief geschiktheid, beperkingen en juridische kennisgevingen.',
        'terms_keywords' => 'gebruiksvoorwaarden, algemene voorwaarden, EquiLoomPRO, juridisch, Nederland',

        // Privacy (meta)
        'privacy_desc_content' => 'Hoe EquiLoomPRO persoonsgegevens verzamelt, gebruikt en beschermt, jouw rechten en onze inzet voor privacy en beveiliging.',
        'privacy_keywords' => 'privacybeleid, gegevensbescherming, AVG, persoonsgegevens, EquiLoomPRO',

        // ---------- JSON-LD content ----------
        'jsonld_organization_review_body' => 'EquiLoomPRO levert een AI-gestuurd beleggingsplatform dat automatische portefeuilles, slim cashbeheer en fiscaal efficiënte functies combineert, zodat klanten in Amsterdam hun vermogen met vertrouwen kunnen laten groeien.',

        // FAQ (op homepagina)
        'jsonld_faq_1_question' => 'Wat is EquiLoomPRO?',
        'jsonld_faq_1_answer' => 'EquiLoomPRO is een AI-gestuurd beleggingsplatform dat je helpt gespreide portefeuilles te bouwen en te automatiseren, je spaargeld te optimaliseren en met vertrouwen te beleggen.',

        'jsonld_faq_2_question' => 'Hoe helpt EquiLoomPRO mij met beleggen?',
        'jsonld_faq_2_answer' => 'We bieden aanpasbare of automatische portefeuilles, slimme cashtools en functies die zijn ontworpen om je netto-rendement te verbeteren — zo beleg je moeiteloos en blijf je in control.',

        'jsonld_faq_3_question' => 'Is EquiLoomPRO beschikbaar in Nederland?',
        'jsonld_faq_3_answer' => 'Ja. EquiLoomPRO ondersteunt klanten in Amsterdam en in heel Nederland, met een ervaring afgestemd op jouw regio en valuta.',

        'jsonld_faq_4_question' => 'Moet ik automatisering of AI gebruiken?',
        'jsonld_faq_4_answer' => 'Automatisering is optioneel. Laat het platform routine taken uitvoeren of bouw en pas je portefeuille zelf aan wanneer jij dat wilt.',

        'jsonld_faq_5_question' => 'Hoe begin ik?',
        'jsonld_faq_5_answer' => 'Maak je profiel aan, kies of personaliseer een portefeuille en voorzie je account van saldo. Er zijn geen verborgen aanmeldkosten; partners kunnen eigen vereisten hebben.',

        'jsonld_faq_6_question' => 'Hoe beschermt EquiLoomPRO mijn gegevens?',
        'jsonld_faq_6_answer' => 'We passen robuuste technische en organisatorische maatregelen toe en volgen de Europese AVG-normen om jouw informatie te beschermen.',

        // Header
        'header_logo_alt' => 'EquiLoomPRO logo',
        'header_logo_text' => 'EquiLoomPRO',
        'header_burger_alt' => 'Menu',
        'header_cross_alt' => 'Sluiten',

        // Hero
        'hero_form_title' => 'Registreer nu',
        'hero_form_notice' => '* Door op de knop te klikken ga je akkoord met ons <a href="/nl/privacy" class="form-link">Privacybeleid</a> en onze <a href="/nl/terms" class="form-link">Algemene voorwaarden</a>.',
        'hero_title' => 'Maak vermogen echt van jou.',
        'hero_subtitle' => 'Persoonlijk. Geautomatiseerd. Moeiteloos beleggen en sparen.',
        'hero_stat_nerdwallet' => "Beste robo-adviseur, 2019<sup class=\"sup\">1</sup><br>Beste app voor geldbeheer, 2020<sup class=\"sup\">1</sup>",
        'hero_stat_investopedia' => "Beste robo-adviseur, 2020<sup class=\"sup\">1</sup>",
        'hero_stat_clients' => 'Vertrouwde klanten',
        'hero_stat_funds' => 'Beheerd vermogen',
        'hero_stat_appstore' => 'Apple App Store <sup class="sup">2</sup>',
        'hero_stat_playstore' => 'Google Play Store <sup class="sup">2</sup>',

        // Investition
        'investition_title' => 'Beleggen is niet eenvoudig. Wij laten het zo aanvoelen.',
        'investition_text' => 'Laat ons een portefeuille op maat maken — of stel er zelf een samen — en onze krachtige automatisering haalt het meeste uit je beleggingen, optimaliseert prestaties en helpt je belastingdruk te verlagen.',
        'investition_btn_start' => 'Begin met beleggen',
        'investition_btn_more' => 'Meer informatie',
        'investition_notification_app' => 'EquiLoomPRO',
        'investition_notification_time' => 'nu',
        // $78.11 ≈ €73 → округление вверх
        'investition_notification_1' => 'We hebben je <span>€75</span> aan belastingen bespaard.',
        // $250 ≈ €235 → округление вверх
        'investition_notification_2' => 'We hebben automatisch je storting van <span>€240</span> belegd.',

        // Cash
        'cash_title' => 'Dagelijks geld, ontworpen voor lange-termijn vermogensopbouw.',
        'cash_text' => 'Onze Cash-rekening, aangeboden met gereguleerde bankpartners, laat je automatisch sparen, rekeningen betalen, pinnen bij duizenden geldautomaten en je overschot in seconden beleggen om je toekomst te blijven opbouwen.',
        'cash_btn_start' => 'Begin met sparen',
        'cash_btn_more' => 'Meer informatie',
        'cash_img_phone_alt' => 'Telefoon',
        'cash_img_card_alt' => 'Kaart',

        // Saving
        'saving_title' => 'Sparen en beleggen — terwijl jij ontspant.',
        'saving_text' => 'Vertel waar je voor spaart, dan zetten wij automatisch extra geld opzij om je doelen te halen. Omdat we met al je rekeningen koppelen, heb je slechts één app nodig om je vermogen te zien groeien.',
        'saving_img_alt' => 'Sparen',

        // Testimonials
        'testimonial_title' => 'ERVARINGEN',
        'testimonial_1_quote' => 'Het is de <strong>beste</strong> oplossing voor zowel beleggen, pensioenplanning als het totaaloverzicht van mijn financiën.',
        'testimonial_1_author' => 'Jeroen V',
        'testimonial_2_quote' => '<strong>EquiLoomPRO</strong> is het eerste in mijn leven dat mij echt motiveerde om te sparen.',
        'testimonial_2_author' => 'Sanne K',
        'testimonial_3_quote' => 'Het is <strong>automatisch</strong>, en ik ben lui.',
        'testimonial_3_author' => 'Bram D',

        // Trust
        'trust_title' => 'Meer dan <strong>120.000</strong> mensen in Nederland gebruiken EquiLoomPRO al om meer te verdienen en zich minder zorgen te maken',
        'trust_btn' => 'Aan de slag',
        'trust_img_alt' => 'Open raam met plant',
        'trust_subtitle' => 'IN DE MEDIA',
        'trust_logo_wsj_alt' => 'WSJ',
        'trust_logo_bloomberg_alt' => 'Bloomberg',
        'trust_logo_nyt_alt' => 'The New York Times',
        'trust_logo_reuters_alt' => 'Reuters',
        'trust_logo_cnbc_alt' => 'CNBC',

        // Footer
        'footer_logo_alt' => 'EquiLoomPRO logo',
        'footer_logo_text' => 'EquiLoomPRO',
        'footer_legal_note_1' => 'Getuigenissen zijn gegeven door klanten van zowel EquiLoomPRO Advisers als EquiLoomPRO Brokerage. Er is geen garantie dat klanten soortgelijke ervaringen of succes zullen hebben.',
        'footer_legal_note_2' => 'Nerdwallet en Investopedia (de “Endorsers”) ontvangen een financiële vergoeding voor het doorverwijzen van potentiële cliënten naar EquiLoomPRO Advisers, LLC (“EquiLoomPRO Advisers”) via advertenties op hun websites. De Endorsers en EquiLoomPRO Advisers zijn niet met elkaar geassocieerd en hebben geen formele relatie buiten deze afspraak om. De meningen van Nerdwallet zijn van henzelf. Hun beoordelingen worden bepaald door hun redactieteam en zijn gebaseerd op informatie die zij betrouwbaar achten, maar waarvoor geen garantie kan worden gegeven. Vergoeding beïnvloedt de productplaatsing of beoordeling niet. Overweeg kosten, functies en methode van een aanbieder voordat je beslist.',
        'footer_legal_note_3' => 'Apple App Store- en Google Play Store-beoordelingen zijn gebaseerd op gebruikersbeoordelingen van februari 2014 (Apple) en december 2015 (Google) t/m juni <span class="currentYear"></span>. Beoordelingen samengesteld door Apple, Inc. en Google, Inc., die een vergoeding ontvangen voor het hosten van onze app.',
        'footer_legal_note_4' => 'Door deze website te gebruiken, begrijp je dat de getoonde informatie enkel ter informatie wordt verstrekt en ga je akkoord met onze <a href="/nl/terms" class="legal-link">Gebruiksvoorwaarden</a> en ons <a href="/nl/privacy" class="legal-link">Privacybeleid</a>.',
        'footer_legal_note_5' => 'EquiLoomPRO Advisers vertrouwt op informatie uit verschillende bronnen die als betrouwbaar worden beschouwd, waaronder cliënten en derde partijen, maar kan de juistheid of volledigheid daarvan niet garanderen. Niets op deze site mag worden opgevat als een aanbod, aanbeveling of verzoek om enig effect te kopen of te verkopen. Daarnaast verstrekt EquiLoomPRO Advisers of haar gelieerde ondernemingen geen fiscaal advies; beleggers wordt aangeraden hun eigen belastingadviseur te raadplegen.',
        'footer_legal_note_6' => 'Wij werken samen met gereguleerde banken en betaaldienstverleners in Nederland om cash- en kaartfunctionaliteiten te bieden. Bankdiensten worden geleverd door onze partners en zijn onderworpen aan identiteitscontrole en toepasselijke lokale regelgeving.',
        'footer_legal_note_7' => 'Cash-rekeningdiensten worden aangeboden via gereguleerde brokers en bankpartners en staan los van beleggingsrekeningen. Beleggingsbeheer- en adviesdiensten worden geleverd door EquiLoomPRO Advisers of gelieerde entiteiten. Producten en diensten kunnen per rechtsgebied verschillen.',
        'footer_legal_note_8' => 'De effectiviteit van een verliescompensatiestrategie om de belastingdruk te verlagen hangt af van het totale fiscale en beleggingsprofiel van de cliënt, inclusief aankopen en verkopen in rekeningen buiten EquiLoomPRO en het type belegging (bijv. belast of onbelast) of de houdperiode (kort of lang). Verliesoogst kan tot meer transacties leiden. Er is een kans dat transacties voor verliesoogst kapitaalwinsten en “wash sales” veroorzaken en onderhevig zijn aan hogere transactiekosten en markteffecten. Bovendien kan verliesoogst verliezen opleveren die mogelijk niet worden gecompenseerd door voldoende winsten in de rekening en kan dit worden beperkt door toepasselijke fiscale regels. Het benutten van geoogste verliezen hangt af van de realisatie van kapitaalwinsten in dezelfde of een toekomstige periode en kan onderhevig zijn aan beperkingen volgens de toepasselijke wetgeving. Niet-benutte verliezen kunnen doorgaans worden doorgeschoven om toekomstige kapitaalwinsten te compenseren, indien van toepassing.',
        'footer_legal_note_9' => 'Beleggen brengt risico’s met zich mee, inclusief mogelijke verlies van het ingelegde geld, en resultaten uit het verleden bieden geen garantie voor de toekomst. Historische rendementen, verwachte rendementen en waarschijnlijkheidsprojecties worden uitsluitend voor informatieve en illustratieve doeleinden verstrekt en zijn mogelijk geen afspiegeling van toekomstige prestaties.',
        'footer_legal_copy' => 'EquiLoomPRO, EquiLoomPRO Advisers en EquiLoomPRO Brokerage zijn volledige dochterondernemingen van EquiLoomPRO Corporation. <br><br> © <span class="currentYear"></span> EquiLoomPRO Corporation. Alle rechten voorbehouden.',

        // About -----------------------------------------------
        'about_title' => 'Over ons',
        'about_text' => 'Bij <span class="brand-name">EquiLoomPRO</span> vormen ervaren beleggers en AI-experts één team om een toonaangevend beleggingsplatform te bouwen, bekend om zijn precisie en snelheid.',
        'about_content_title' => 'Onze kern is een divers, gepassioneerd wereldwijd team met één missie: de toekomst van beleggen heruitvinden.',
        'about_content_text_1' => 'Wij transformeren het beleggingslandschap met de kracht van kunstmatige intelligentie. Door expertise van beleggers te combineren met geavanceerde technologie leveren we een platform dat uitblinkt in nauwkeurigheid, snelheid en rendement.',
        'about_content_text_2' => 'Ons wereldwijde team brengt verschillende perspectieven samen en innoveert continu om de nieuwste AI- en financiële trends te integreren. De synergie tussen menselijke expertise en machine-intelligentie drijft een werkelijk vernieuwende beleving.',
        'about_content_img_alt' => 'Team van EquiLoomPRO',
        'period' => [
            [
                'date' => 'April <script>document.write(new Date().getFullYear() - 3)</script>',
                'title' => 'Geboorte van een visie',
                'description' => 'EquiLoomPRO werd opgericht met de ambitieuze visie om beleggen te revolutioneren met kunstmatige intelligentie.',
            ],
            [
                'date' => 'Juli <script>document.write(new Date().getFullYear() - 3)</script>',
                'title' => 'Groei en ontwikkeling',
                // oorspronkelijk £3 miljoen -> lokaal EUR, округление вверх
                'description' => 'We haalden €4 miljoen aan financiering op om de platformontwikkeling en teamuitbreiding te versnellen.',
            ],
            [
                'date' => 'November <script>document.write(new Date().getFullYear() - 3)</script>',
                'title' => 'Bètatestfase',
                'description' => 'De bètaversie van EquiLoomPRO werd gelanceerd om gebruikersfeedback te verzamelen en onze technologie te verfijnen.',
            ],
            [
                'date' => 'Juni <script>document.write(new Date().getFullYear() - 2)</script>',
                'title' => 'Wereldwijde lancering',
                'description' => 'EquiLoomPRO ging wereldwijd live en bracht geavanceerde beleggingstechnologie naar gebruikers overal ter wereld.',
            ],
        ],
        'investment_title' => 'Revolutioneer je beleggingsaanpak',
        'investment_text' => 'Ervaar de toekomst van vermogensopbouw met EquiLoomPRO. Onze innovatieve mix van AI en uitgebreide data-analyse levert uitzonderlijke beleggingsmogelijkheden, zodat beleggers met ongeëvenaarde precisie door marktdynamiek navigeren.',
        'investment_btn' => 'Aan de slag',

        // Contact
        'contact_title' => 'Neem contact op',
        'contact_text' => 'Stel je vraag of vraag om advies; ons expertteam helpt je om zelfverzekerde en strategische beleggingsbeslissingen te nemen.',
        'contact_form_enable_js' => 'Schakel JavaScript in je browser in om dit formulier te kunnen verzenden.',
        'contact_label_name' => 'Naam',
        'contact_label_email' => 'E-mail',
        'contact_label_message' => 'Opmerking of bericht',
        'contact_submit' => 'Versturen',
        'contact_form_agreement' => ' * Door op de knop te klikken ga je akkoord met het <a href="/nl/privacy" class="form-link">Privacybeleid</a> en de <a href="/nl/terms" class="form-link">Algemene voorwaarden</a>.',
        'contact_form_success' => 'Formulier succesvol verzonden!',

        // Privacy Policy
        'privacy_title' => 'Privacybeleid',
        'privacy_updated' => '<b>Laatst bijgewerkt:</b> juli <script>document.write(new Date().getFullYear() - 1)</script>',

        'privacy_1_title' => '1. Introductie',
        'privacy_1_text' => '
<p>Dit Privacybeleid van EquiLoomPRO ("wij", "ons" of "onze") beschrijft hoe wij persoonsgegevens beheren wanneer je onze diensten ("Diensten") en website <a href="/nl">EquiLoomPRO</a> ("Website") gebruikt. Het beschermen van je privacy en gegevens heeft onze hoogste prioriteit.</p>
<p>Onze Diensten en Website kunnen links bevatten naar websites van derden. Wij zijn niet verantwoordelijk voor hun privacypraktijken; bekijk hun beleid voordat je ermee in zee gaat.</p>
<p>Alle verzamelde gegevens behandelen wij als vertrouwelijk en wij hanteren robuuste technische en organisatorische maatregelen om Persoonsgegevens te beschermen tegen ongeoorloofde toegang, verlies of openbaarmaking.</p>
<p>Wanneer je onze Website gebruikt, kun je persoonlijke informatie verstrekken (bijv. naam, e-mail, telefoonnummer). Deze gegevens kunnen worden gebruikt om identiteit te verifiëren, ondersteuning te bieden, verplichtingen na te komen of — met jouw toestemming — updates te verzenden. Je kunt voorkeuren beheren of je afmelden voor communicatie.</p>
',

        'privacy_2_title' => '2. Gegevensverzameling en gebruik',
        'privacy_2_1_title' => '2.1. Algemeen',
        'privacy_2_1_text' => '
<p>We verzamelen gegevens van bezoekers van de Website ("Bezoekers"), gebruikers ("Gebruikers") en partners ("Partners"). Persoonsgegevens omvatten o.a. IP-adressen, namen, contactgegevens en relatie-informatie conform de wetgeving inzake gegevensbescherming.</p>
',

        'privacy_2_2_title' => '2.2. Verzameling',
        'privacy_2_2_text' => '
<p>Door onze Website te bezoeken, ga je akkoord met gegevensverzameling (bijv. via cookies, IP-adressen of formulieren). Als je het hiermee niet eens bent, maak dan geen gebruik van de Website.</p>
',

        'privacy_2_3_title' => '2.3. Doel',
        'privacy_2_3_text' => '
<p>We verwerken Persoonsgegevens om onze Diensten te verbeteren, ervaringen te personaliseren, ondersteuning te bieden en te voldoen aan wettelijke verplichtingen. Doeleinden en rechtsgronden omvatten:</p>
<table>
    <tbody>
        <tr><td>Accountregistratie</td><td>Toestemming; uitvoering van overeenkomst</td></tr>
        <tr><td>Levering van Diensten</td><td>Uitvoering van overeenkomst</td></tr>
        <tr><td>Ondersteuning en vragen</td><td>Gerechtvaardigde belangen</td></tr>
        <tr><td>Marketing</td><td>Toestemming</td></tr>
        <tr><td>Verbetering van Diensten</td><td>Gerechtvaardigde belangen</td></tr>
    </tbody>
</table>
',

        'privacy_2_4_title' => '2.4. Gegevensdeling',
        'privacy_2_4_text' => '
<p>We kunnen gegevens delen met vertrouwde leveranciers en partners en zorgen voor AVG-conformiteit voor Gebruikers in Amsterdam en de EU.</p>
',

        'privacy_3_title' => '3. Partners',
        'privacy_3_text' => '
<p>We verwerken Partnergegevens met toestemming of op basis van gerechtvaardigde belangen, met veilige verwerking en naleving van toepasselijke wetgeving.</p>
',

        'privacy_4_title' => '4. Beveiliging',
        'privacy_4_text' => '
<p>We implementeren technische en organisatorische waarborgen om Persoonsgegevens te beschermen. Derden met wie wij gegevens delen zijn contractueel verplicht gelijkwaardige standaarden te handhaven. Hoewel we naar veiligheid streven, is geen enkel systeem volledig immuun voor inbreuken; gebruikers aanvaarden dit risico.</p>
',

        'privacy_5_title' => '5. Cookies',
        'privacy_5_text' => '
<p>Zie ons <a href="/nl/cookie">Cookiebeleid</a> voor details over cookies en trackingtechnologieën.</p>
',

        'privacy_6_title' => '6. Links van derden',
        'privacy_6_text' => '
<p>Onze Website kan koppelingen bevatten naar externe sites. Wij zijn niet verantwoordelijk voor hun privacypraktijken; controleer hun beleid voordat je gegevens deelt.</p>
',

        'privacy_7_title' => '7. Bewaartermijnen',
        'privacy_7_text' => '
<p>Wij bewaren Persoonsgegevens slechts zolang dat noodzakelijk is. Na beëindiging van een account worden gegevens verwijderd conform toepasselijke wetgeving.</p>
',

        'privacy_8_title' => '8. Jouw rechten',
        'privacy_8_text' => '
<p>Je hebt rechten om je Persoonsgegevens in te zien, te rectificeren, te wissen, de verwerking te beperken of over te dragen, bezwaar te maken tegen verwerking of je toestemming in te trekken. Neem contact met ons op om deze rechten uit te oefenen.</p>
',

        'privacy_9_title' => '9. Marketing',
        'privacy_9_text' => '
<p>Met jouw toestemming kunnen wij je gegevens gebruiken voor marketing. Je kunt je toestemming intrekken door ons te e-mailen.</p>
',

        'privacy_10_title' => '10. Acceptatie van het beleid',
        'privacy_10_text' => '
<p>Het gebruik van onze Website of Diensten impliceert akkoord met dit beleid. We kunnen dit beleid bijwerken; voortgezet gebruik geldt als acceptatie.</p>
',

        'privacy_11_title' => '11. Wettelijke openbaarmaking',
        'privacy_11_text' => '
<p>Wij kunnen Persoonsgegevens openbaar maken indien wettelijk vereist of om onze rechten te beschermen.</p>
',

        'privacy_12_title' => '12. Contact',
        'privacy_12_text' => '
<p>Voor privacyvragen kun je terecht bij onze Data Protection Officer via <a href="mailto:support@zevriocapiture.org">support@zevriocapiture.org</a>.</p>
',

        // Terms of Use
        'terms_title' => 'Gebruiksvoorwaarden',
        'terms_updated' => '<b>Laatst bijgewerkt:</b> juli <script>document.write(new Date().getFullYear() - 1)</script>',

        'terms_1_title' => '1. Introductie',
        'terms_1_text' => '
<p>Welkom op de website van EquiLoomPRO ("Website"), beheerd door EquiLoomPRO ("wij", "ons", "onze"). Door onze Website of diensten ("Diensten") te gebruiken, ga je akkoord met deze Gebruiksvoorwaarden ("Voorwaarden") en ons Privacybeleid. Contact: <a href="mailto:support@zevriocapiture.org">support@zevriocapiture.org</a>.</p>
<p>Deze Voorwaarden kunnen worden bijgewerkt zonder voorafgaande kennisgeving. Voortgezet gebruik van de Website of Diensten betekent dat je wijzigingen accepteert. Als je het er niet mee eens bent, ben je niet gemachtigd de Website of Diensten te gebruiken.</p>
',

        'terms_2_title' => '2. Geen beleggingsadvies',
        'terms_2_text' => '
<p>Onze Website biedt geen persoonlijk financieel of beleggingsadvies. Informatie is algemeen en houdt geen rekening met jouw specifieke doelstellingen, financiële situatie of behoeften. Raadpleeg een onafhankelijke adviseur voordat je beleggingsbeslissingen neemt.</p>
',

        'terms_3_title' => '3. Diensten',
        'terms_3_text' => '
<p>Niet alle Diensten worden door ons geleverd. Diensten, websites of producten van derden waarnaar op onze Website wordt gelinkt, worden niet door ons onderschreven. Wij zijn niet aansprakelijk voor inhoud of diensten van derden.</p>
',

        'terms_4_title' => '4. Reikwijdte en wijzigingen',
        'terms_4_text' => '
<p>Deze Voorwaarden vormen de volledige overeenkomst tussen jou en ons en vervangen eerdere afspraken. Wij kunnen Voorwaarden naar eigen inzicht wijzigen; voortgezet gebruik geldt als acceptatie.</p>
',

        'terms_5_title' => '5. Geschiktheid',
        'terms_5_text' => '
<p>Diensten zijn bedoeld voor personen van 18 jaar of ouder die rechtsgeldig overeenkomsten kunnen aangaan. Minderjarigen mogen de Website of Diensten niet gebruiken.</p>
',

        'terms_6_title' => '6. Omschrijving van Diensten',
        'terms_6_text' => '
<p><b>Abonnementsdiensten:</b> Na registratie kun je toegang krijgen tot gratis of betaalde Abonnementsdiensten, inclusief content van ons of van derden. Dit is geen beleggingsadvies, en wij zijn niet aansprakelijk voor de juistheid ervan.</p>
<p><b>Diensten van derden:</b> Producten of diensten van derden kunnen worden aangeboden. Wij zijn niet verantwoordelijk voor hun juistheid of voor eventuele onmogelijkheid om er toegang toe te krijgen.</p>
<p><b>Algemeen:</b> Nauwkeurige registratiegegevens zijn vereist. We kunnen onvolledige of frauduleuze gegevens afwijzen en zijn niet aansprakelijk voor onderbrekingen.</p>
',

        'terms_7_title' => '7. Eigendomsrechten',
        'terms_7_text' => '
<p>De Website en de inhoud ervan zijn beschermd door auteursrechten, handelsmerken en andere rechten. Ongeautoriseerde reproductie, herverdeling of scraping is verboden.</p>
',

        'terms_8_title' => '8. Vertrouwelijke informatie',
        'terms_8_text' => '
<p>Vertrouwelijke informatie blijft beschermd tot één jaar na beëindiging, exclusief publiek beschikbare informatie of informatie die zonder beperkingen is ontvangen.</p>
',

        'terms_9_title' => '9. Hyperlinken en framen',
        'terms_9_text' => '
<p>Zonder toestemming is hyperlinken, framen of verwijzen naar onze Website niet toegestaan. Je bent aansprakelijk voor schade die door dergelijke acties ontstaat.</p>
',

        'terms_10_title' => '10. Vrijwaring van garanties',
        'terms_10_text' => '
<p>Diensten en inhoud worden geleverd "zoals ze zijn", zonder garanties. Wij zijn niet aansprakelijk voor fouten, onderbrekingen of onmogelijkheid om de Website of Diensten te gebruiken.</p>
',

        'terms_11_title' => '11. Aansprakelijkheidsbeperking',
        // afgestemd op lokale valuta, округление вверх
        'terms_11_text' => '
<p>Wij zijn niet aansprakelijk voor enige schade, waaronder winst- of dataverlies. Onze maximale aansprakelijkheid bedraagt €240, voor zover wettelijk toegestaan.</p>
',

        'terms_12_title' => '12. Schadeloosstelling',
        'terms_12_text' => '
<p>Je vrijwaart ons voor claims die voortkomen uit jouw gebruik van de Website, schending van deze Voorwaarden of inbreuk op rechten van anderen.</p>
',

        'terms_13_title' => '13. Websites van derden',
        'terms_13_text' => '
<p>Wij zijn niet verantwoordelijk voor websites of bronnen van derden waarnaar op onze Website wordt verwezen, noch voor hun inhoud of beleid.</p>
',

        'terms_14_title' => '14. Gegevensbescherming',
        'terms_14_text' => '
<p>Wij voldoen aan de AVG en toepasselijke Nederlandse privacywetgeving. We onderhouden passende beveiligingsmaatregelen, verkrijgen vereiste toestemmingen en ondersteunen verzoeken van betrokkenen. Bij een datalek informeren we tijdig.</p>
',

        'terms_15_title' => '15. Toepasselijk recht',
        'terms_15_text' => '
<p>Op deze Voorwaarden is Nederlands recht van toepassing. Geschillen worden beslecht via arbitrage in Amsterdam volgens de NAI-regels.</p>
',

        'terms_16_title' => '16. Contact',
        'terms_16_text' => '
<p>Vragen? Neem contact op via <a href="mailto:support@zevriocapiture.org">support@zevriocapiture.org</a>.</p>
',
    ],
    'se' => [
        'language_iso' => 'sv',
        'country_name' => 'Sweden',
        'locale' => 'sv_SE',
        'locale_lang' => 'sv-SE',
        'language_name' => 'Svenska',
        'city' => 'Stockholm',
        'country_code' => 'SE',
        'geo_position' => '59.3293, 18.0686',
        'jsonld_organization_name' => 'EquiLoomPRO',
        'jsonld_organization_review_rating' => '4.96',
        'jsonld_organization_review_author' => 'EquiLoomPRO Användare',
        'jsonld_software_categories' => 'Investeringsverktyg för kryptovalutor',
        'jsonld_software_price' => '2100',
        'jsonld_software_price_currency' => 'SEK',
        'brand_name_api' => 'EquLum App AI',

        'home' => 'Hem',
        'about' => 'Om oss',
        'contact' => 'Kontakta oss',
        'privacy' => 'Integritetspolicy',
        'terms' => 'Användarvillkor',

        // Home (index)
        'title' => 'EquiLoomPRO — Automatiserad investering & kassahantering',
        'meta_description' => 'Gör förmögenhet till din egen med EquiLoomPRO. AI-assisterade portföljer, automatiskt sparande och skatteeffektiva funktioner som hjälper dig investera tryggt och växa dina pengar.',
        'meta_keywords' => 'EquiLoomPRO, automatiserad investering, AI-investering, portföljhantering, kassakonto, sparande, skatteeffektivt, Sverige, Stockholm',

        // Open Graph / Twitter
        'og_title' => 'EquiLoomPRO — AI-drivna investeringar',
        'og_description' => 'Automatiserade portföljer, smart cash och enkel investering. Börja med EquiLoomPRO och väx din förmögenhet med självförtroende.',
        'og_image' => '/assets/images/share.webp',

        'twitter_title' => 'EquiLoomPRO — Automatiserad investering',
        'twitter_description' => 'AI-assisterade portföljer och automatiskt sparande för att hjälpa dig växa din förmögenhet.',

        // About
        'about_desc_content' => 'Möt EquiLoomPRO — ett Stockholmsbaserat team av investerare och AI-experter som bygger en högprecisionsplattform för investeringar som hjälper dig växa din förmögenhet tryggt.',
        'about_keywords' => 'om EquiLoomPRO, företag, AI-investeringsteam, investeringsplattform, Stockholm',

        // Contact
        'contact_desc_content' => 'Frågor eller vägledning? Kontakta EquiLoomPRO — våra experter är redo att hjälpa dig fatta trygga och strategiska investeringsbeslut.',
        'contact_keywords' => 'kontakta EquiLoomPRO, support, hjälp, investeringsfrågor, Stockholm',

        // Terms
        'terms_desc_content' => 'Läs användarvillkoren för EquiLoomPRO: berättigande, begränsningar och juridiska meddelanden.',
        'terms_keywords' => 'användarvillkor, EquiLoomPRO, juridik, Sverige',

        // Privacy
        'privacy_desc_content' => 'Hur EquiLoomPRO samlar in, använder och skyddar dina personuppgifter, dina rättigheter och vårt åtagande för integritet och säkerhet.',
        'privacy_keywords' => 'integritetspolicy, dataskydd, GDPR, personuppgifter, EquiLoomPRO',

        // ---------- JSON-LD content ----------
        'jsonld_organization_review_body' => 'EquiLoomPRO levererar en AI-assisterad investeringsplattform som kombinerar automatiserade portföljer, smart kassahantering och skatteeffektiva funktioner för att hjälpa kunder i Stockholm att växa sin förmögenhet tryggt.',

        // FAQ
        'jsonld_faq_1_question' => 'Vad är EquiLoomPRO?',
        'jsonld_faq_1_answer' => 'EquiLoomPRO är en AI-assisterad investeringsplattform som hjälper dig bygga och automatisera diversifierade portföljer, optimera sparande och investera tryggt.',

        'jsonld_faq_2_question' => 'Hur hjälper EquiLoomPRO mig att investera?',
        'jsonld_faq_2_answer' => 'Vi erbjuder anpassade eller automatiserade portföljer, smarta kassaverktyg och funktioner utformade för att förbättra skatteeffektiviteten — så att du kan investera enkelt och ändå ha kontroll.',

        'jsonld_faq_3_question' => 'Är EquiLoomPRO tillgängligt i Sverige?',
        'jsonld_faq_3_answer' => 'Ja. EquiLoomPRO stöder kunder i Stockholm och över hela Sverige, med upplevelser anpassade efter din lokalitet och valuta.',

        'jsonld_faq_4_question' => 'Måste jag använda automatisering eller AI?',
        'jsonld_faq_4_answer' => 'Automatisering är valfri. Du kan låta plattformen hantera rutinuppgifter eller bygga och justera din egen portfölj när du vill.',

        'jsonld_faq_5_question' => 'Hur börjar jag?',
        'jsonld_faq_5_answer' => 'Skapa din profil, välj eller anpassa en portfölj och sätt in pengar på ditt konto. Det finns inga dolda registreringsavgifter; partner-tjänster kan ha egna krav.',

        'jsonld_faq_6_question' => 'Hur skyddar EquiLoomPRO mina data?',
        'jsonld_faq_6_answer' => 'Vi tillämpar robusta tekniska och organisatoriska säkerhetsåtgärder och följer GDPR samt svensk lagstiftning för att skydda din information.',

        // Header
        'header_logo_alt' => 'EquiLoomPRO Logo',
        'header_logo_text' => 'EquiLoomPRO',
        'header_burger_alt' => 'Meny',
        'header_cross_alt' => 'Stäng',

        // Hero
        'hero_form_title' => 'Registrera dig nu',
        'hero_form_notice' => '* Genom att klicka på knappen accepterar du <a href="/se/privacy" class="form-link">Integritetspolicyn</a> och <a href="/se/terms" class="form-link">Användarvillkoren</a>.',
        'hero_title' => 'Gör förmögenhet till din egen.',
        'hero_subtitle' => 'Personlig, automatiserad, enkel investering och sparande.',
        'hero_stat_nerdwallet' => "Bästa Robo-rådgivare, 2019<sup class=\"sup\">1</sup><br>Bästa Kassahanteringsapp, 2020<sup class=\"sup\">1</sup>",
        'hero_stat_investopedia' => "Bästa Robo-rådgivare, 2020<sup class=\"sup\">1</sup>",
        'hero_stat_clients' => 'Förtroende från kunder',
        'hero_stat_funds' => 'I kundmedel',
        'hero_stat_appstore' => 'Apple App Store <sup class="sup">2</sup>',
        'hero_stat_playstore' => 'Google Play Store <sup class="sup">2</sup>',

        // Investition
        'investition_title' => 'Att investera är inte lätt. Vi får det att kännas så.',
        'investition_text' => 'Låt oss anpassa en portfölj åt dig eller bygg den själv, och vår kraftfulla automatisering gör det mesta av dina investeringar, optimerar din avkastning och hjälper dig sänka skatten.',
        'investition_btn_start' => 'Börja investera',
        'investition_btn_more' => 'Läs mer',
        'investition_notification_app' => 'EquiLoomPRO',
        'investition_notification_time' => 'nu',
        'investition_notification_1' => 'Vi sparade <span>860 SEK</span> på dina skatter.',
        'investition_notification_2' => 'Vi investerade automatiskt din insättning på <span>2800 SEK</span>.',

        // Cash
        'cash_title' => 'Vardagskassa, utformad för att bygga långsiktig förmögenhet.',
        'cash_text' => 'Vårt kassakonto, erbjudet via reglerade bankpartners, låter dig automatisera sparande, betala räkningar, ta ut från tusentals bankomater och investera ditt överskott på sekunder.',
        'cash_btn_start' => 'Börja spara',
        'cash_btn_more' => 'Läs mer',
        'cash_img_phone_alt' => 'Telefon',
        'cash_img_card_alt' => 'Kort',

        // Saving
        'saving_title' => 'Spara och investera. Medan du kopplar av.',
        'saving_text' => 'Berätta vad du sparar till, så lägger vi automatiskt undan extra pengar för att nå ditt mål. Eftersom vi kopplar ihop alla dina konton behöver du bara en app för att se din förmögenhet växa.',
        'saving_img_alt' => 'Sparande',

        // Testimonials
        'testimonial_title' => 'TESTIMONIAL',
        'testimonial_1_quote' => 'Det är den <strong>bästa</strong> resursen för både investeringar, pensionshantering och att se hela min ekonomiska bild.',
        'testimonial_1_author' => 'Erik S',
        'testimonial_2_quote' => '<strong>EquiLoomPRO</strong> är det första i mitt liv som verkligen motiverade mig att spara pengar.',
        'testimonial_2_author' => 'Anna L',
        'testimonial_3_quote' => 'Det är <strong>automatiskt</strong>, och jag är lat.',
        'testimonial_3_author' => 'Johan K',

        // Trust
        'trust_title' => 'Över <strong>120 000</strong> människor i Sverige använder redan EquiLoomPRO för att tjäna mer och oroa sig mindre',
        'trust_btn' => 'Kom igång',
        'trust_img_alt' => 'Öppet fönster med växt',
        'trust_subtitle' => 'SOM NÄMNDES I',
        'trust_logo_wsj_alt' => 'WSJ',
        'trust_logo_bloomberg_alt' => 'Bloomberg',
        'trust_logo_nyt_alt' => 'The New York Times',
        'trust_logo_reuters_alt' => 'Reuters',
        'trust_logo_cnbc_alt' => 'CNBC',

        // Footer
        'footer_logo_alt' => 'EquiLoomPRO Logo',
        'footer_logo_text' => 'EquiLoomPRO',
        'footer_legal_note_1' => 'Vittnesmålen gavs av kunder till både EquiLoomPRO Advisers och EquiLoomPRO Brokerage. Det finns ingen garanti för att kunder får liknande erfarenheter eller framgångar.',
        'footer_legal_note_2' => 'Nerdwallet och Investopedia (”Endorsers”) får ekonomisk ersättning för att hänvisa potentiella kunder till EquiLoomPRO Advisers, LLC via annonser på deras webbplatser. Endorsers och EquiLoomPRO Advisers är inte associerade med varandra utöver detta arrangemang. Nerdwallets åsikter är deras egna. Deras betyg baseras på redaktionell analys och tillgänglig information men kan inte garanteras. Ersättning påverkar inte produktplacering eller betyg.',
        'footer_legal_note_3' => 'Apple App Store och Google Play Store-betyg är baserade på användaromdömen från februari 2014 (Apple) respektive december 2015 (Google) till juni <span class="currentYear"></span>. Betygen sammanställs av Apple, Inc. och Google, Inc., som får ersättning för att tillhandahålla vår app.',
        'footer_legal_note_4' => 'Genom att använda denna webbplats förstår du att informationen endast ges i informationssyfte och du accepterar våra <a href="/se/terms" class="legal-link">Användarvillkor</a> och <a href="/se/privacy" class="legal-link">Integritetspolicy</a>.',
        'footer_legal_note_5' => 'EquiLoomPRO Advisers baserar sig på information från olika källor som anses tillförlitliga, inklusive kunder och tredje part, men kan inte garantera fullständig noggrannhet. Ingenting här ska tolkas som ett erbjudande, en rekommendation eller en uppmaning att köpa eller sälja någon värdepapper. EquiLoomPRO Advisers eller dess dotterbolag ger inte skatterådgivning. Investerare uppmanas att rådgöra med sina egna skatterådgivare.',
        'footer_legal_note_6' => 'Vi samarbetar med reglerade banker och betalningsleverantörer i Sverige för att tillhandahålla kassaoch kortfunktioner. Banktjänster ges av tredje parter och är föremål för identitetskontroll och gällande lokala regler.',
        'footer_legal_note_7' => 'Kassakonton erbjuds via reglerade mäklare och bankpartners och är separata från investeringskonton. Investeringsförvaltning och rådgivning tillhandahålls av EquiLoomPRO Advisers eller anslutna enheter. Produkter och tjänster kan variera beroende på jurisdiktion.',
        'footer_legal_note_8' => 'Effektiviteten i strategin för skatteoptimering (Tax-Loss Harvesting) beror på hela din skattemässiga och ekonomiska situation, inklusive transaktioner utanför EquiLoomPRO. Strategin kan leda till fler affärer, potentiella kapitalvinster och ökade transaktionskostnader. Förluster som genereras kanske inte kan utnyttjas fullt ut och regleras av gällande skattelagstiftning.',
        'footer_legal_note_9' => 'Alla investeringar innebär risk, inklusive risken att förlora investerat kapital. Historisk avkastning garanterar inte framtida resultat. Förväntade avkastningar och sannolikhetsprognoser är endast för illustrativa syften.',
        'footer_legal_copy' => 'EquiLoomPRO, EquiLoomPRO Advisers och EquiLoomPRO Brokerage är helägda dotterbolag till EquiLoomPRO Corporation. <br><br> © <span class="currentYear"></span> EquiLoomPRO Corporation. Alla rättigheter förbehållna.',

        // About
        'about_title' => 'Om oss',
        'about_text' => 'På <span class="brand-name">EquiLoomPRO</span> är vi ett team av erfarna investerare och AI-experter som bygger en toppmodern investeringsplattform med fokus på precision och hastighet.',
        'about_content_title' => 'I vår kärna finns ett passionerat globalt team förenat av målet att omforma framtidens investeringar.',
        'about_content_text_1' => 'Vi är dedikerade till att transformera investeringslandskapet genom att använda artificiell intelligens. Genom att kombinera investerarinsikter med modern teknik levererar vi en plattform med hög noggrannhet, snabbhet och lönsamhet.',
        'about_content_text_2' => 'Vårt globala team bidrar med mångsidiga perspektiv och integrerar kontinuerligt de senaste AI- och finansinnovationerna. Synergin mellan mänsklig expertis och maskininlärning driver vår vision.',
        'about_content_img_alt' => 'EquiLoomPRO-teamet',
        'period' => [
            [
                'date' => 'April <script>document.write(new Date().getFullYear() - 3)</script>',
                'title' => 'Visionens födelse',
                'description' => 'EquiLoomPRO grundades med en djärv vision att revolutionera investeringar med artificiell intelligens.',
            ],
            [
                'date' => 'Juli <script>document.write(new Date().getFullYear() - 3)</script>',
                'title' => 'Tillväxt och utveckling',
                'description' => 'Vi tog in 30 miljoner SEK i finansiering, vilket drev plattformsutveckling och teamexpansion.',
            ],
            [
                'date' => 'November <script>document.write(new Date().getFullYear() - 3)</script>',
                'title' => 'Beta-testfas',
                'description' => 'Beta-versionen av EquiLoomPRO lanserades, användarfeedback samlades in och teknologin förfinades.',
            ],
            [
                'date' => 'Juni <script>document.write(new Date().getFullYear() - 2)</script>',
                'title' => 'Global lansering',
                'description' => 'EquiLoomPRO lanserades globalt och tog vår avancerade investeringsteknik till användare världen över.',
            ],
        ],
        'investment_title' => 'Revolutionera ditt investeringssätt',
        'investment_text' => 'Upplev framtiden för kapitalinvesteringar med EquiLoomPRO. Vår innovativa kombination av AI och dataanalys levererar exceptionella investeringsmöjligheter.',
        'investment_btn' => 'Kom igång',

        // Contact
        'contact_title' => 'Kontakta oss',
        'contact_text' => 'Hör av dig för vägledning eller frågor så hjälper vårt expertteam dig fatta trygga beslut.',
        'contact_form_enable_js' => 'Vänligen aktivera JavaScript i din webbläsare för att fylla i formuläret.',
        'contact_label_name' => 'Namn',
        'contact_label_email' => 'E-post',
        'contact_label_message' => 'Kommentar eller meddelande',
        'contact_submit' => 'Skicka',
        'contact_form_agreement' => '* Genom att klicka på knappen accepterar du <a href="/se/privacy" class="form-link">Integritetspolicyn</a> och <a href="/se/terms" class="form-link">Villkoren</a>.',
        'contact_form_success' => 'Formuläret har skickats!',

        // Privacy
        'privacy_title' => 'Integritetspolicy',
        'privacy_updated' => '<b>Senast uppdaterad:</b> Juli <script>document.write(new Date().getFullYear() - 1)</script>',
        'privacy_1_title' => '1. Introduktion',
        'privacy_1_text' => '<p>Denna Integritetspolicy beskriver hur vi samlar in, använder och skyddar dina uppgifter. Vi följer GDPR och svensk lagstiftning.</p>',
        'privacy_2_title' => '2. Datainsamling och användning',
        'privacy_2_1_title' => '2.1. Allmänt',
        'privacy_2_1_text' => '<p>Vi samlar in uppgifter från besökare, användare och partners. Personuppgifter omfattar bl.a. IP-adresser, namn och kontaktinformation.</p>',
        'privacy_2_2_title' => '2.2. Insamling',
        'privacy_2_2_text' => '<p>Genom att använda webbplatsen godkänner du insamling via cookies, IP-adress och formulär.</p>',
        'privacy_2_3_title' => '2.3. Syfte',
        'privacy_2_3_text' => '<p>Vi behandlar uppgifter för att förbättra tjänster, personalisera upplevelser, ge support och följa lagkrav.</p>',
        'privacy_2_4_title' => '2.4. Delning av data',
        'privacy_2_4_text' => '<p>Vi delar endast uppgifter med betrodda partners och enligt GDPR.</p>',
        'privacy_3_title' => '3. Partners',
        'privacy_3_text' => '<p>Vi hanterar partnerdata säkert och i enlighet med lag.</p>',
        'privacy_4_title' => '4. Säkerhet',
        'privacy_4_text' => '<p>Vi tillämpar tekniska och organisatoriska skyddsåtgärder. Ingen metod är dock helt säker.</p>',
        'privacy_5_title' => '5. Cookies',
        'privacy_5_text' => '<p>Se vår <a href="/se/cookie">Cookiepolicy</a> för detaljer.</p>',
        'privacy_6_title' => '6. Tredjepartslänkar',
        'privacy_6_text' => '<p>Vi ansvarar inte för tredjepartswebbplatser som vi länkar till.</p>',
        'privacy_7_title' => '7. Lagring av data',
        'privacy_7_text' => '<p>Vi sparar data endast så länge det krävs. Vid avslutat konto raderas data enligt lag.</p>',
        'privacy_8_title' => '8. Dina rättigheter',
        'privacy_8_text' => '<p>Du har rätt att få tillgång till, rätta, radera, begränsa eller flytta dina personuppgifter.</p>',
        'privacy_9_title' => '9. Marknadsföring',
        'privacy_9_text' => '<p>Vi använder dina uppgifter för marknadsföring endast med ditt samtycke.</p>',
        'privacy_10_title' => '10. Godkännande',
        'privacy_10_text' => '<p>Genom att använda webbplatsen godkänner du denna policy.</p>',
        'privacy_11_title' => '11. Juridisk utlämning',
        'privacy_11_text' => '<p>Vi kan lämna ut data om det krävs enligt lag.</p>',
        'privacy_12_title' => '12. Kontakt',
        'privacy_12_text' => '<p>Kontakta vårt dataskyddsombud på <a href="mailto:support@zevriocapiture.org">support@zevriocapiture.org</a>.</p>',

        // Terms
        'terms_title' => 'Användarvillkor',
        'terms_updated' => '<b>Senast uppdaterad:</b> Juli <script>document.write(new Date().getFullYear() - 1)</script>',
        'terms_1_title' => '1. Introduktion',
        'terms_1_text' => '<p>Genom att använda vår webbplats accepterar du dessa villkor. Kontakta oss vid frågor.</p>',
        'terms_2_title' => '2. Ingen investeringsrådgivning',
        'terms_2_text' => '<p>Informationen är generell och utgör inte personlig rådgivning.</p>',
        'terms_3_title' => '3. Tjänster',
        'terms_3_text' => '<p>Vi ansvarar inte för tredjepartstjänster som länkas via webbplatsen.</p>',
        'terms_4_title' => '4. Ändringar',
        'terms_4_text' => '<p>Villkoren kan uppdateras. Fortsatt användning innebär godkännande.</p>',
        'terms_5_title' => '5. Behörighet',
        'terms_5_text' => '<p>Tjänster är endast för personer över 18 år.</p>',
        'terms_6_title' => '6. Beskrivning av tjänster',
        'terms_6_text' => '<p>Vi erbjuder abonnemangstjänster och tredjepartstjänster. Noggrann registreringsdata krävs.</p>',
        'terms_7_title' => '7. Immateriella rättigheter',
        'terms_7_text' => '<p>Webbplatsens innehåll skyddas av upphovsrätt och varumärken.</p>',
        'terms_8_title' => '8. Konfidentiell information',
        'terms_8_text' => '<p>Konfidentiell information skyddas i minst ett år efter avslut.</p>',
        'terms_9_title' => '9. Länkar',
        'terms_9_text' => '<p>Du får inte länka eller rama in webbplatsen utan tillstånd.</p>',
        'terms_10_title' => '10. Ansvarsfriskrivning',
        'terms_10_text' => '<p>Tjänsterna tillhandahålls i befintligt skick utan garantier.</p>',
        'terms_11_title' => '11. Ansvarsbegränsning',
        'terms_11_text' => '<p>Vi ansvarar inte för förluster. Maximalt ansvar är 2800 SEK.</p>',
        'terms_12_title' => '12. Skadeersättning',
        'terms_12_text' => '<p>Du ersätter oss för krav som uppstår genom din användning.</p>',
        'terms_13_title' => '13. Tredjepartswebbplatser',
        'terms_13_text' => '<p>Vi ansvarar inte för tredjepartsinnehåll.</p>',
        'terms_14_title' => '14. Dataskydd',
        'terms_14_text' => '<p>Vi följer GDPR och svensk lag, samt informerar om dataintrång.</p>',
        'terms_15_title' => '15. Tillämplig lag',
        'terms_15_text' => '<p>Dessa villkor regleras av svensk lag. Tvister avgörs i Stockholm.</p>',
        'terms_16_title' => '16. Kontakt',
        'terms_16_text' => '<p>Vid frågor kontakta <a href="mailto:support@zevriocapiture.org">support@zevriocapiture.org</a>.</p>',
    ],
    'no' => [
        // Locale / Geo
        'language_iso' => 'no',
        'country_name' => 'Norge',
        'locale' => 'nb_NO',
        'locale_lang' => 'nb-NO',
        'language_name' => 'Norsk (bokmål)',
        'city' => 'Oslo',
        'country_code' => 'NO',
        'geo_position' => '59.913869, 10.752245',

        // JSON-LD / Brand
        'jsonld_organization_name' => 'EquiLoomPRO',
        'jsonld_organization_review_rating' => '4.96',
        'jsonld_organization_review_author' => 'EquiLoomPRO-bruker',
        'jsonld_software_categories' => 'Verktøy for investering i kryptovaluta',
        // 152 GBP -> ca. 2053 NOK (avrundet opp)
        'jsonld_software_price' => '2053',
        'jsonld_software_price_currency' => 'NOK',
        'brand_name_api' => 'EquLum App AI',

        // Nav
        'home' => 'Hjem',
        'about' => 'Om oss',
        'contact' => 'Kontakt oss',
        'privacy' => 'Personvernerklæring',
        'terms' => 'Vilkår og betingelser',

        // Home (index)
        'title' => 'EquiLoomPRO — Automatisert sparing og investering',
        'meta_description' => 'Gjør formuen til din egen med EquiLoomPRO. AI-assisterte porteføljer, automatisert sparing og skatteffektive funksjoner for trygg investering og vekst.',
        'meta_keywords' => 'EquiLoomPRO, automatisert investering, AI-investering, porteføljeforvaltning, kontanter, sparing, skattefordel, Norge, Oslo',

        // Open Graph / Twitter (globalt)
        'og_title' => 'EquiLoomPRO — AI-drevet investeringsplattform',
        'og_description' => 'Automatiserte porteføljer, smart kontantstyring og enkel investering. Start med EquiLoomPRO og bygg formuen med trygghet.',
        'og_image' => '/assets/images/share.webp',

        'twitter_title' => 'EquiLoomPRO — Automatisert investering',
        'twitter_description' => 'AI-assisterte porteføljer og automatisk sparing som hjelper deg å bygge formue trygt.',

        // About (meta)
        'about_desc_content' => 'Møt EquiLoomPRO — et Oslo-basert team av investorer og AI-eksperter som bygger en presis og lynrask investeringsplattform for trygg formuesbygging.',
        'about_keywords' => 'om EquiLoomPRO, selskap, AI-investeringsteam, investeringsplattform, Oslo',

        // Contact (meta)
        'contact_desc_content' => 'Spørsmål eller behov for veiledning? Kontakt EquiLoomPRO — våre eksperter hjelper deg å ta trygge og strategiske investeringsvalg.',
        'contact_keywords' => 'kontakt EquiLoomPRO, support, hjelp, investeringsspørsmål, Oslo',

        // Terms (meta)
        'terms_desc_content' => 'Les vilkårene for bruk av EquiLoomPROs nettside og tjenester, inkludert kvalifikasjon, begrensninger og juridiske merknader.',
        'terms_keywords' => 'bruksvilkår, vilkår og betingelser, EquiLoomPRO, juridisk, Norge',

        // Privacy (meta)
        'privacy_desc_content' => 'Hvordan EquiLoomPRO samler inn, bruker og beskytter personopplysninger, dine rettigheter og vårt fokus på personvern og sikkerhet.',
        'privacy_keywords' => 'personvern, personopplysninger, GDPR, datasikkerhet, EquiLoomPRO',

        // ---------- JSON-LD review body ----------
        'jsonld_organization_review_body' => 'EquiLoomPRO leverer en AI-assistert investeringsplattform som kombinerer automatiserte porteføljer, smart kontanthåndtering og skatteffektive funksjoner for å hjelpe kunder i Oslo og hele Norge å bygge formue trygt.',

        // FAQ (for forsiden når page === "index")
        'jsonld_faq_1_question' => 'Hva er EquiLoomPRO?',
        'jsonld_faq_1_answer' => 'EquiLoomPRO er en AI-assistert investeringsplattform som hjelper deg å bygge og automatisere diversifiserte porteføljer, optimalisere sparing og investere med trygghet.',

        'jsonld_faq_2_question' => 'Hvordan hjelper EquiLoomPRO meg å investere?',
        'jsonld_faq_2_answer' => 'Vi tilbyr tilpassbare eller automatiserte porteføljer, smarte kontantverktøy og funksjoner som kan forbedre etter-skatt-utfall — slik at du kan investere enkelt og samtidig beholde kontrollen.',

        'jsonld_faq_3_question' => 'Er EquiLoomPRO tilgjengelig i Norge?',
        'jsonld_faq_3_answer' => 'Ja. EquiLoomPRO støtter kunder i Oslo og over hele Norge, med opplevelser tilpasset din lokale kontekst og valuta.',

        'jsonld_faq_4_question' => 'Må jeg bruke automasjon eller AI?',
        'jsonld_faq_4_answer' => 'Automatisering er valgfritt. La plattformen håndtere rutiner, eller bygg og juster din egen portefølje når du vil.',

        'jsonld_faq_5_question' => 'Hvordan kommer jeg i gang?',
        'jsonld_faq_5_answer' => 'Opprett profilen din, velg eller tilpass en portefølje og sett inn penger. Ingen skjulte registreringsgebyrer; partnertjenester kan ha egne krav.',

        'jsonld_faq_6_question' => 'Hvordan beskytter EquiLoomPRO dataene mine?',
        'jsonld_faq_6_answer' => 'Vi bruker robuste tekniske og organisatoriske sikkerhetstiltak og følger gjeldende EU/EØS-standarder for databeskyttelse for å sikre opplysningene dine.',

        // Header
        'header_logo_alt' => 'EquiLoomPRO-logo',
        'header_logo_text' => 'EquiLoomPRO',
        'header_burger_alt' => 'Meny',
        'header_cross_alt' => 'Lukk',

        // Hero
        'hero_form_title' => 'Registrer deg nå',
        'hero_form_notice' => '* Ved å klikke godtar du <a href="/no/privacy" class="form-link">Personvernerklæringen</a> og <a href="/no/terms" class="form-link">Vilkår og betingelser</a>.',
        'hero_title' => 'Gjør formuen til din.',
        'hero_subtitle' => 'Personlig. Automatisert. Enkelt — sparing og investering.',
        'hero_stat_nerdwallet' => "Beste robo-rådgiver, 2019<sup class=\"sup\">1</sup><br>Beste kontanthåndteringsapp, 2020<sup class=\"sup\">1</sup>",
        'hero_stat_investopedia' => "Beste robo-rådgiver, 2020<sup class=\"sup\">1</sup>",
        'hero_stat_clients' => 'Fornøyde kunder',
        'hero_stat_funds' => 'I kundemidler',
        'hero_stat_appstore' => 'Apple App Store <sup class="sup">2</sup>',
        'hero_stat_playstore' => 'Google Play <sup class="sup">2</sup>',

        // Investition (Investering)
        'investition_title' => 'Å investere er ikke lett. Vi får det til å føles sånn.',
        'investition_text' => 'La oss skreddersy en portefølje for deg — eller bygg selv — og vår kraftige automasjon får mest mulig ut av investeringene, optimaliserer ytelsen og kan redusere skatten.',
        'investition_btn_start' => 'Begynn å investere',
        'investition_btn_more' => 'Les mer',
        'investition_notification_app' => 'EquiLoomPRO',
        'investition_notification_time' => 'nå',
        // £62.50 -> ~ NOK 844 (avrundet opp)
        'investition_notification_1' => 'Vi sparte deg <span>kr 844</span> i skatt.',
        // £200 -> ~ NOK 2700 (avrundet opp)
        'investition_notification_2' => 'Vi investerte automatisk ditt innskudd på <span>kr 2 700</span>.',

        // Cash
        'cash_title' => 'Hverdagskontoen som bygger langsiktig formue.',
        'cash_text' => 'Kontotjenesten vår, levert med regulerte bankpartnere, lar deg automatisere sparing, betale regninger, ta ut i minibanker og investere overskudd på sekunder.',
        'cash_btn_start' => 'Start sparingen',
        'cash_btn_more' => 'Les mer',
        'cash_img_phone_alt' => 'Telefon',
        'cash_img_card_alt' => 'Kort',

        // Saving
        'saving_title' => 'Sparing og investering — mens du slapper av.',
        'saving_text' => 'Fortell hva du sparer til, så setter vi automatisk av ekstra midler for å nå målene. Siden vi kobler til alle kontoene dine, holder det med én app for å se formuen vokse.',
        'saving_img_alt' => 'Sparing',

        // Testimonials
        'testimonial_title' => 'TILBAKEMELDING',
        'testimonial_1_quote' => 'Dette er den <strong>beste</strong> ressursen for både investering, pensjon og full oversikt over økonomien min.',
        'testimonial_1_author' => 'Ola S',
        'testimonial_2_quote' => '<strong>EquiLoomPRO</strong> var det første som faktisk motiverte meg til å spare.',
        'testimonial_2_author' => 'Amalie R',
        'testimonial_3_quote' => 'Det er <strong>automatisk</strong>, og jeg er lat.',
        'testimonial_3_author' => 'Georg L',

        // Trust
        'trust_title' => 'Over <strong>120 000</strong> mennesker i Norge bruker allerede EquiLoomPRO for å tjene mer og bekymre seg mindre',
        'trust_btn' => 'Kom i gang',
        'trust_img_alt' => 'Åpent vindu med plante',
        'trust_subtitle' => 'SITERT I',
        'trust_logo_wsj_alt' => 'WSJ',
        'trust_logo_bloomberg_alt' => 'Bloomberg',
        'trust_logo_nyt_alt' => 'The New York Times',
        'trust_logo_reuters_alt' => 'Reuters',
        'trust_logo_cnbc_alt' => 'CNBC',

        // Footer
        'footer_logo_alt' => 'EquiLoomPRO-logo',
        'footer_logo_text' => 'EquiLoomPRO',
        'footer_legal_note_1' => 'Uttalelsene er gitt av kunder hos både EquiLoomPRO Advisers og EquiLoomPRO Brokerage. Det finnes ingen garanti for like erfaringer eller resultater.',
        'footer_legal_note_2' => 'Nerdwallet og Investopedia (”anbefalerne”) mottar kompensasjon for å henvise potensielle kunder til EquiLoomPRO Advisers, LLC via annonser på sine nettsteder. Partene er ikke formelt tilknyttet utover dette. Nerdwallets meninger er deres egne og baseres på kilder de anser som pålitelige.',
        'footer_legal_note_3' => 'App-vurderinger i Apple App Store og Google Play er basert på brukeranmeldelser fra februar 2014 (Apple) og desember 2015 (Google) til juni <span class="currentYear"></span>.',
        'footer_legal_note_4' => 'Ved å bruke dette nettstedet forstår du at informasjonen kun er veiledende og du aksepterer våre <a href="/no/terms" class="legal-link">Bruksvilkår</a> og <a href="/no/privacy" class="legal-link">Personvernerklæring</a>.',
        'footer_legal_note_5' => 'EquiLoomPRO Advisers baserer seg på kilder som anses pålitelige, men kan ikke garantere full nøyaktighet. Ingenting her er et tilbud eller en oppfordring til å kjøpe/selge verdipapirer. Vi gir ikke skatteråd — kontakt egen skatterådgiver.',
        'footer_legal_note_6' => 'Vi samarbeider med regulerte banker og betalingsleverandører i Norge for å levere konto- og kortfunksjoner. Banktjenester leveres av tredjepart og er underlagt legitimasjonskontroll og lokale regler.',
        'footer_legal_note_7' => 'Konto for kontanter tilbys via regulerte meglere og bankpartnere og er adskilt fra investeringskontoer. Forvaltning og rådgivning leveres av EquiLoomPRO Advisers eller tilknyttede enheter. Tilbud kan variere per jurisdiksjon.',
        'footer_legal_note_8' => 'Effekten av skattetilpasning (Tax-Loss Harvesting) avhenger av hele din økonomi, også utenfor EquiLoomPRO. Strategien kan gi flere handler, kapitalgevinster og høyere kostnader. Tap kan være begrenset av gjeldende skatteregler.',
        'footer_legal_note_9' => 'All investering innebærer risiko, inkludert mulig tap av investert kapital. Historisk avkastning garanterer ikke fremtidig avkastning.',
        'footer_legal_copy' => 'EquiLoomPRO, EquiLoomPRO Advisers og EquiLoomPRO Brokerage er heleide datterselskaper av EquiLoomPRO Corporation. <br><br> © <span class="currentYear"></span> EquiLoomPRO Corporation. Alle rettigheter forbeholdt.',

        // About (sideinnhold)
        'about_title' => 'Om oss',
        'about_text' => 'I <span class="brand-name">EquiLoomPRO</span> forenes erfarne investorer og AI-spesialister for å bygge en investeringsplattform i toppklasse — kjent for presisjon og hastighet.',
        'about_content_title' => 'Kjernen vår er et mangfoldig, engasjert globalt team med mål om å forme fremtidens investeringer.',
        'about_content_text_1' => 'Vi omformer investeringslandskapet ved å kombinere ekspertinnsikt med moderne AI. Resultatet er en plattform med høy nøyaktighet, fart og lønnsomhet.',
        'about_content_text_2' => 'Teamet vårt henter inn ulike perspektiver og innoverer kontinuerlig for å integrere de nyeste trendene innen AI og finans.',
        'about_content_img_alt' => 'Teamet i EquiLoomPRO',
        'period' => [
            [
                'date' => 'April <script>document.write(new Date().getFullYear() - 3)</script>',
                'title' => 'En visjon blir født',
                'description' => 'EquiLoomPRO ble etablert med en ambisiøs visjon om å revolusjonere investeringer ved hjelp av kunstig intelligens.',
            ],
            [
                'date' => 'Juli <script>document.write(new Date().getFullYear() - 3)</script>',
                'title' => 'Vekst og utvikling',
                // tilsvarende nivå i NOK (avrundet opp)
                'description' => 'Vi hentet inn 35 millioner NOK i finansiering, som drev plattformutvikling og teambygging.',
            ],
            [
                'date' => 'November <script>document.write(new Date().getFullYear() - 3)</script>',
                'title' => 'Beta-testfase',
                'description' => 'Beta-versjonen ble lansert, vi samlet innsikt fra brukere og finpusset teknologien.',
            ],
            [
                'date' => 'Juni <script>document.write(new Date().getFullYear() - 2)</script>',
                'title' => 'Global lansering',
                'description' => 'EquiLoomPRO ble lansert globalt og brakte vår avanserte investeringsteknologi til brukere verden over.',
            ],
        ],
        'investment_title' => 'Revolusjoner måten du investerer på',
        'investment_text' => 'Opplev fremtidens kapitalforvaltning med EquiLoomPRO. En nyskapende kombinasjon av AI og omfattende dataanalyse gir deg presise verktøy for krevende markeder.',
        'investment_btn' => 'Kom i gang',

        // Contact (sideinnhold)
        'contact_title' => 'Kontakt oss',
        'contact_text' => 'Ta kontakt for veiledning eller svar — vårt ekspertteam hjelper deg å ta trygge, strategiske beslutninger.',
        'contact_form_enable_js' => 'Vennligst aktiver JavaScript i nettleseren for å fullføre skjemaet.',
        'contact_label_name' => 'Navn',
        'contact_label_email' => 'E-post',
        'contact_label_message' => 'Kommentar eller melding',
        'contact_submit' => 'Send inn',
        'contact_form_agreement' => '* Ved å klikke godtar du <a href="/no/privacy" class="form-link">Personvernerklæringen</a> og <a href="/no/terms" class="form-link">Vilkår &amp; betingelser</a>.',
        'contact_form_success' => 'Skjema sendt!',

        // Privacy Policy (sideinnhold)
        'privacy_title' => 'Personvernerklæring',
        'privacy_updated' => '<b>Sist oppdatert:</b> juli <script>document.write(new Date().getFullYear() - 1)</script>',

        'privacy_1_title' => '1. Introduksjon',
        'privacy_1_text' => '
<p>Denne personvernerklæringen for EquiLoomPRO («vi», «oss», «vår») beskriver hvordan vi behandler personopplysninger når du bruker våre tjenester («Tjenestene») og nettstedet <a href="/no/">EquiLoomPRO</a> («Nettstedet»). Å beskytte ditt personvern er en prioritet.</p>
<p>Tjenestene og Nettstedet kan lenke til tredjepartsnettsteder. Les deres retningslinjer før bruk; vi er ikke ansvarlig for deres praksis.</p>
<p>Alle innsamlede data behandles konfidensielt. Vi benytter sterke tekniske og organisatoriske tiltak for å beskytte personopplysninger mot uautorisert tilgang, tap eller utlevering.</p>
<p>Når du bruker Nettstedet, kan du oppgi personopplysninger (f.eks. navn, e-post, telefon). Disse kan brukes til identitetsbekreftelse, support, oppfyllelse av avtaler eller utsendelse av oppdateringer med ditt samtykke. Du kan administrere varsler eller reservere deg.</p>
',

        'privacy_2_title' => '2. Datainnsamling og bruk',
        'privacy_2_1_title' => '2.1. Generelt',
        'privacy_2_1_text' => '
<p>Vi samler inn data fra besøkende («Besøkende»), brukere («Brukere») og partnere («Partnere»). Personopplysninger omfatter IP-adresser, navn, kontaktopplysninger og relasjonsdata i tråd med personvernlovgivning.</p>
',

        'privacy_2_2_title' => '2.2. Innsamling',
        'privacy_2_2_text' => '
<p>Ved å bruke Nettstedet samtykker du til innsamling via f.eks. informasjonskapsler, IP-adresse og skjemaer. Dersom du ikke samtykker, ikke bruk Nettstedet.</p>
',

        'privacy_2_3_title' => '2.3. Formål',
        'privacy_2_3_text' => '
<p>Vi behandler personopplysninger for å forbedre Tjenestene, personalisere opplevelsen, gi support og oppfylle lovkrav. Formål og rettsgrunnlag inkluderer:</p>
<table>
    <tbody>
        <tr><td>Kontoopprettelse</td><td>Samtykke; Avtaleoppfyllelse</td></tr>
        <tr><td>Levering av tjenester</td><td>Avtaleoppfyllelse</td></tr>
        <tr><td>Support og henvendelser</td><td>Berettiget interesse</td></tr>
        <tr><td>Markedsføring</td><td>Samtykke</td></tr>
        <tr><td>Tjenesteforbedring</td><td>Berettiget interesse</td></tr>
    </tbody>
</table>
',

        'privacy_2_4_title' => '2.4. Deling av data',
        'privacy_2_4_text' => '
<p>Vi kan dele data med betrodde leverandører og partnere, med GDPR-overholdelse for brukere i Norge og EØS.</p>
',

        'privacy_3_title' => '3. Partnere',
        'privacy_3_text' => '
<p>Partnerdata behandles med samtykke eller berettiget interesse, med sikker håndtering i tråd med gjeldende regelverk.</p>
',

        'privacy_4_title' => '4. Sikkerhet',
        'privacy_4_text' => '
<p>Vi implementerer tekniske og organisatoriske sikringstiltak. Ingen metode er 100 % sikker, og Brukere aksepterer gjenværende risiko.</p>
',

        'privacy_5_title' => '5. Informasjonskapsler',
        'privacy_5_text' => '
<p>Se vår <a href="/no/cookie">Cookie-policy</a> for detaljer om informasjonskapsler og sporingsteknologier.</p>
',

        'privacy_6_title' => '6. Tredjepartslenker',
        'privacy_6_text' => '
<p>Nettstedet kan inneholde lenker til eksterne sider. Vi er ikke ansvarlig for deres praksis — les deres retningslinjer.</p>
',

        'privacy_7_title' => '7. Lagring',
        'privacy_7_text' => '
<p>Vi lagrer personopplysninger kun så lenge det er nødvendig. Ved avslutning av konto slettes data i samsvar med gjeldende lover.</p>
',

        'privacy_8_title' => '8. Dine rettigheter',
        'privacy_8_text' => '
<p>Du kan be om innsyn, retting, sletting, begrensning, dataportabilitet, samt protestere mot behandling eller trekke samtykke. Kontakt oss for å utøve disse rettighetene.</p>
',

        'privacy_9_title' => '9. Markedsføring',
        'privacy_9_text' => '
<p>Vi bruker kun data til markedsføring med ditt samtykke. Du kan når som helst trekke samtykket tilbake via e-post.</p>
',

        'privacy_10_title' => '10. Aksept',
        'privacy_10_text' => '
<p>Bruk av Nettstedet eller Tjenestene innebærer aksept av denne erklæringen. Vi kan oppdatere den; fortsatt bruk betyr at du aksepterer endringene.</p>
',

        'privacy_11_title' => '11. Juridisk utlevering',
        'privacy_11_text' => '
<p>Vi kan utlevere personopplysninger dersom det kreves ved lov eller for å ivareta våre rettigheter.</p>
',

        'privacy_12_title' => '12. Kontakt',
        'privacy_12_text' => '
<p>For personvernhenvendelser, kontakt vårt personvernombud på <a href="mailto:support@zevriocapiture.org">support@zevriocapiture.org</a>.</p>
',

        // Terms of Use (sideinnhold)
        'terms_title' => 'Bruksvilkår',
        'terms_updated' => '<b>Sist oppdatert:</b> juli <script>document.write(new Date().getFullYear() - 1)</script>',

        'terms_1_title' => '1. Introduksjon',
        'terms_1_text' => '
<p>Velkommen til nettstedet til EquiLoomPRO («Nettstedet»), drevet av EquiLoomPRO («vi», «oss», «vår»). Ved å bruke Nettstedet eller tjenestene («Tjenestene») godtar du disse Bruksvilkårene («Vilkårene») og vår Personvernerklæring. Kontakt: <a href="mailto:support@zevriocapiture.org">support@zevriocapiture.org</a>.</p>
<p>Vilkårene kan oppdateres uten varsel. Fortsatt bruk innebærer aksept. Dersom du ikke godtar, kan du ikke bruke Nettstedet eller Tjenestene.</p>
',

        'terms_2_title' => '2. Ingen investeringsrådgivning',
        'terms_2_text' => '
<p>Nettstedet tilbyr ikke personlig finans- eller investeringsrådgivning. Informasjonen er generell og tar ikke hensyn til dine mål eller situasjon. Søk uavhengig rådgivning før investeringsbeslutninger.</p>
',

        'terms_3_title' => '3. Tjenester',
        'terms_3_text' => '
<p>Ikke alle Tjenester leveres av oss. Tredjepartstjenester, nettsteder eller produkter som lenkes er ikke anbefalinger. Vi er ikke ansvarlig for innhold eller tjenester levert av tredjeparter.</p>
',

        'terms_4_title' => '4. Omfang og endringer',
        'terms_4_text' => '
<p>Disse Vilkårene utgjør hele avtalen mellom deg og oss. Vi kan endre Vilkårene etter eget skjønn; videre bruk betyr aksept.</p>
',

        'terms_5_title' => '5. Kvalifikasjon',
        'terms_5_text' => '
<p>Tjenestene er for personer over 18 år som kan inngå bindende avtaler. Mindreårige kan ikke bruke Nettstedet eller Tjenestene.</p>
',

        'terms_6_title' => '6. Beskrivelse av tjenester',
        'terms_6_text' => '
<p><b>Abonnementstjenester:</b> Etter registrering kan du få tilgang (gratis eller betalt) til innhold levert av oss eller tredjeparter. Dette er ikke investeringsråd, og vi garanterer ikke nøyaktighet.</p>
<p><b>Tredjepartstjenester:</b> Produkter eller tjenester fra tredjeparter kan tilbys. Vi er ikke ansvarlig for deres nøyaktighet eller tilgjengelighet.</p>
<p><b>Generelt:</b> Korrekte registreringsdata kreves. Vi kan avvise ufullstendige eller svikaktige data og er ikke ansvarlig for avbrudd.</p>
',

        'terms_7_title' => '7. Immaterielle rettigheter',
        'terms_7_text' => '
<p>Nettstedet og innholdet er beskyttet av opphavsrett, varemerker og andre rettigheter. Uautorisert kopiering, videreformidling eller scraping er forbudt.</p>
',

        'terms_8_title' => '8. Konfidensiell informasjon',
        'terms_8_text' => '
<p>Konfidensiell informasjon beskyttes i ett år etter opphør, med unntak for offentlig tilgjengelig informasjon eller data mottatt uten begrensninger.</p>
',

        'terms_9_title' => '9. Lenking og innramming',
        'terms_9_text' => '
<p>Lenking, innramming eller referering til Nettstedet uten tillatelse er forbudt. Du kan holdes ansvarlig for skade som følge av slike handlinger.</p>
',

        'terms_10_title' => '10. Ansvarsfraskrivelse',
        'terms_10_text' => '
<p>Tjenester og innhold leveres «som de er» uten garantier. Vi er ikke ansvarlig for feil, avbrudd eller manglende tilgang.</p>
',

        'terms_11_title' => '11. Ansvarsbegrensning',
        // £200 -> ~ NOK 2700 (avrundet opp)
        'terms_11_text' => '
<p>Vi er ikke ansvarlig for indirekte tap, herunder tapt fortjeneste eller data. Vårt maksimale ansvar er kr 2 700 der loven tillater det.</p>
',

        'terms_12_title' => '12. Skadesløshet',
        'terms_12_text' => '
<p>Du holder oss skadesløse for krav som oppstår fra din bruk av Nettstedet, brudd på Vilkårene eller krenkelse av andres rettigheter.</p>
',

        'terms_13_title' => '13. Tredjepartsnettsteder',
        'terms_13_text' => '
<p>Vi er ikke ansvarlig for tredjepartsnettsteder eller ressurser som er lenket fra Nettstedet, heller ikke deres innhold eller retningslinjer.</p>
',

        'terms_14_title' => '14. Databeskyttelse',
        'terms_14_text' => '
<p>Vi følger GDPR og norsk rett. Vi opprettholder sikkerhetstiltak, innhenter samtykker og bistår ved innsynskrav. Ved databrudd varsler vi uten ugrunnet opphold.</p>
',

        'terms_15_title' => '15. Lovvalg og verneting',
        'terms_15_text' => '
<p>Disse Vilkårene reguleres av norsk rett. Tvister avgjøres ved domstolene i Oslo.</p>
',

        'terms_16_title' => '16. Kontakt',
        'terms_16_text' => '
<p>Spørsmål? Kontakt oss på <a href="mailto:support@zevriocapiture.org">support@zevriocapiture.org</a>.</p>
',
    ],
    'ch-de' => [
        // Locale / Geo
        'language_iso' => 'de',
        'country_name' => 'Schweiz',
        'locale' => 'de_CH',
        'locale_lang' => 'de-CH',
        'language_name' => 'Deutsch (Schweiz)',
        'city' => 'Zürich',
        'country_code' => 'CH',
        'geo_position' => '47.3769, 8.5417',

        // JSON-LD / Brand
        'jsonld_organization_name' => 'EquiLoomPRO',
        'jsonld_organization_review_rating' => '4.96',
        'jsonld_organization_review_author' => 'EquiLoomPRO Nutzer',
        'jsonld_software_categories' => 'Tool für Kryptowährungs-Investitionen',
        // 152 GBP -> ca. CHF 183 (aufgerundet)
        'jsonld_software_price' => '183',
        'jsonld_software_price_currency' => 'CHF',
        'brand_name_api' => 'EquLum App AI',

        // Navigation
        'home' => 'Startseite',
        'about' => 'Über uns',
        'contact' => 'Kontakt',
        'privacy' => 'Datenschutzerklärung',
        'terms' => 'Nutzungsbedingungen',

        // Home (index)
        'title' => 'EquiLoomPRO — Automatisiertes Investieren & Cash-Management',
        'meta_description' => 'Mach dein Vermögen zu deinem mit EquiLoomPRO. KI-gestützte Portfolios, automatisches Sparen und steuereffiziente Funktionen für sicheres Investieren und Wachstum.',
        'meta_keywords' => 'EquiLoomPRO, automatisiertes Investieren, KI, Portfolio-Management, Cash-Konto, Sparen, steuereffizient, Schweiz, Zürich',

        // Open Graph / Twitter (global)
        'og_title' => 'EquiLoomPRO — KI-gestützte Investitionsplattform',
        'og_description' => 'Automatisierte Portfolios, smartes Cash und müheloses Investieren. Starte mit EquiLoomPRO und wachse mit Zuversicht.',
        'og_image' => '/assets/images/share.webp',

        'twitter_title' => 'EquiLoomPRO — Automatisiertes Investieren',
        'twitter_description' => 'KI-gestützte Portfolios und automatisches Sparen für deinen Vermögensaufbau.',

        // About (meta)
        'about_desc_content' => 'Lerne EquiLoomPRO kennen — ein Team aus Zürich mit Investoren und KI-Expert:innen, das eine präzise und schnelle Investitionsplattform baut, damit du Vermögen selbstbewusst aufbaust.',
        'about_keywords' => 'über EquiLoomPRO, Unternehmen, KI-Investment-Team, Investitionsplattform, Zürich',

        // Contact (meta)
        'contact_desc_content' => 'Fragen oder Bedarf an Guidance? Kontaktiere EquiLoomPRO — unsere Expert:innen helfen dir, informierte, strategische Anlageentscheidungen zu treffen.',
        'contact_keywords' => 'Kontakt EquiLoomPRO, Support, Hilfe, Investmentfragen, Zürich',

        // Terms (meta)
        'terms_desc_content' => 'Lies die Nutzungsbedingungen für die Website und Dienste von EquiLoomPRO, inkl. Teilnahmevoraussetzungen, Beschränkungen und rechtlichen Hinweisen.',
        'terms_keywords' => 'Nutzungsbedingungen, Terms of Use, EquiLoomPRO, Rechtliches, Schweiz',

        // Privacy (meta)
        'privacy_desc_content' => 'Wie EquiLoomPRO deine Personendaten sammelt, nutzt und schützt, deine Rechte und unser Engagement für Privatsphäre und Sicherheit.',
        'privacy_keywords' => 'Datenschutzerklärung, Datenschutz, DSG, GDPR, Personendaten, EquiLoomPRO',

        // ---------- JSON-LD content ----------
        'jsonld_organization_review_body' => 'EquiLoomPRO bietet eine KI-gestützte Investitionsplattform, die automatisierte Portfolios, smartes Cash-Management und steuereffiziente Funktionen kombiniert, um Kundinnen und Kunden in Zürich und in der ganzen Schweiz beim Vermögensaufbau zu unterstützen.',

        // FAQ (für die Startseite, wenn page === "index")
        'jsonld_faq_1_question' => 'Was ist EquiLoomPRO?',
        'jsonld_faq_1_answer' => 'EquiLoomPRO ist eine KI-gestützte Investitionsplattform, mit der du diversifizierte Portfolios aufbauen und automatisieren, Sparen optimieren und mit Zuversicht investieren kannst.',

        'jsonld_faq_2_question' => 'Wie hilft mir EquiLoomPRO beim Investieren?',
        'jsonld_faq_2_answer' => 'Wir bieten anpassbare oder automatisierte Portfolios, smarte Cash-Tools und Funktionen, die Nachsteuer-Ergebnisse verbessern sollen — so investierst du mühelos und behältst die Kontrolle.',

        'jsonld_faq_3_question' => 'Ist EquiLoomPRO in der Schweiz verfügbar?',
        'jsonld_faq_3_answer' => 'Ja. EquiLoomPRO unterstützt Kund:innen in Zürich und in der ganzen Schweiz, mit Erlebnissen passend zu deinem Ort und deiner Währung.',

        'jsonld_faq_4_question' => 'Muss ich Automatisierung oder KI verwenden?',
        'jsonld_faq_4_answer' => 'Automatisierung ist optional. Lass die Plattform Routinen übernehmen oder baue und justiere dein Portfolio jederzeit selbst.',

        'jsonld_faq_5_question' => 'Wie starte ich?',
        'jsonld_faq_5_answer' => 'Erstelle dein Profil, wähle oder personalisiere ein Portfolio und zahle ein. Es gibt keine versteckten Anmeldegebühren; Partnertools können eigene Anforderungen haben.',

        'jsonld_faq_6_question' => 'Wie schützt EquiLoomPRO meine Daten?',
        'jsonld_faq_6_answer' => 'Wir setzen starke technische und organisatorische Massnahmen ein und halten die geltenden Datenschutzstandards in der Schweiz (revDSG) und der EU (GDPR) ein.',

        // Header section
        'header_logo_alt' => 'EquiLoomPRO Logo',
        'header_logo_text' => 'EquiLoomPRO',
        'header_burger_alt' => 'Menü',
        'header_cross_alt' => 'Schliessen',

        // Hero section
        'hero_form_title' => 'Jetzt registrieren',
        'hero_form_notice' => '* Mit dem Klick stimmst du unserer <a href="/ch-de/privacy" class="form-link">Datenschutzerklärung</a> und den <a href="/ch-de/terms" class="form-link">Nutzungsbedingungen</a> zu.',
        'hero_title' => 'Mach dein Vermögen zu deinem.',
        'hero_subtitle' => 'Persönlich. Automatisiert. Mühelos — Investieren & Sparen.',
        'hero_stat_nerdwallet' => "Bester Robo-Advisor, 2019<sup class=\"sup\">1</sup><br>Beste Cash-App, 2020<sup class=\"sup\">1</sup>",
        'hero_stat_investopedia' => "Bester Robo-Advisor, 2020<sup class=\"sup\">1</sup>",
        'hero_stat_clients' => 'Vertrauensvolle Kund:innen',
        'hero_stat_funds' => 'Verwaltete Kundengelder',
        'hero_stat_appstore' => 'Apple App Store <sup class=\"sup\">2</sup>',
        'hero_stat_playstore' => 'Google Play <sup class=\"sup\">2</sup>',

        // Investition section
        'investition_title' => 'Investieren ist nicht einfach. Wir lassen es sich so anfühlen.',
        'investition_text' => 'Lass uns ein Portfolio nur für dich zusammenstellen — oder baue es selbst. Unsere starke Automatisierung holt mehr aus deinen Anlagen heraus, optimiert die Performance und kann deine Steuern senken.',
        'investition_btn_start' => 'Jetzt investieren',
        'investition_btn_more' => 'Mehr erfahren',
        'investition_notification_app' => 'EquiLoomPRO',
        'investition_notification_time' => 'soeben',
        // £62.50 ≈ CHF 75 (aufgerundet)
        'investition_notification_1' => 'Wir haben dir <span>CHF 75</span> an Steuern gespart.',
        // £200 ≈ CHF 240 (aufgerundet)
        'investition_notification_2' => 'Wir haben deine Einzahlung von <span>CHF 240</span> automatisch investiert.',

        // Cash section
        'cash_title' => 'Alltags-Cash, gemacht für langfristigen Vermögensaufbau.',
        'cash_text' => 'Unser Cash-Konto, angeboten mit regulierten Bankpartnern, lässt dich automatisch sparen, Rechnungen bezahlen, an Tausenden Bancomaten beziehen und Überschüsse in Sekunden investieren.',
        'cash_btn_start' => 'Mit dem Sparen starten',
        'cash_btn_more' => 'Mehr erfahren',
        'cash_img_phone_alt' => 'Telefon',
        'cash_img_card_alt' => 'Karte',

        // Saving section
        'saving_title' => 'Sparen und investieren — während du entspannst.',
        'saving_text' => 'Sag uns, wofür du sparst, und wir legen automatisch Geld beiseite, um deine Ziele zu erreichen. Da wir alle deine Konten verbinden, reicht eine App, um dein Vermögen wachsen zu sehen.',
        'saving_img_alt' => 'Sparen',

        // Testimonials section
        'testimonial_title' => 'STIMMEN',
        'testimonial_1_quote' => 'Es ist die einzig wahre <strong>beste</strong> Ressource für Investieren, Vorsorge und den kompletten Überblick über meine Finanzen.',
        'testimonial_1_author' => 'Lukas S',
        'testimonial_2_quote' => '<strong>EquiLoomPRO</strong> war das Erste, das mich wirklich zum Sparen motiviert hat.',
        'testimonial_2_author' => 'Mia R',
        'testimonial_3_quote' => 'Es ist <strong>automatisch</strong>, und ich bin bequem.',
        'testimonial_3_author' => 'Georg L',

        // Trust section
        'trust_title' => 'Über <strong>120’000</strong> Menschen in der Schweiz nutzen bereits EquiLoomPRO, um mehr zu verdienen und weniger zu grübeln',
        'trust_btn' => 'Jetzt starten',
        'trust_img_alt' => 'Offenes Fenster mit Pflanze',
        'trust_subtitle' => 'BEKANNT AUS',
        'trust_logo_wsj_alt' => 'WSJ',
        'trust_logo_bloomberg_alt' => 'Bloomberg',
        'trust_logo_nyt_alt' => 'The New York Times',
        'trust_logo_reuters_alt' => 'Reuters',
        'trust_logo_cnbc_alt' => 'CNBC',

        // Footer section
        'footer_logo_alt' => 'EquiLoomPRO Logo',
        'footer_logo_text' => 'EquiLoomPRO',
        'footer_legal_note_1' => 'Testimonials stammen von Kund:innen von EquiLoomPRO Advisers und EquiLoomPRO Brokerage. Es gibt keine Garantie für ähnliche Erfahrungen oder Erfolge.',
        'footer_legal_note_2' => 'Nerdwallet und Investopedia (die „Empfehlenden“) erhalten finanzielle Vergütung für Verweise an EquiLoomPRO Advisers, LLC über Anzeigen auf ihren Websites. Es besteht keine weitergehende Beziehung. Bewertungen beruhen auf deren eigener Redaktion.',
        'footer_legal_note_3' => 'Bewertungen im Apple App Store und bei Google Play basieren auf Nutzerbewertungen von Februar 2014 (Apple) bzw. Dezember 2015 (Google) bis Juni <span class="currentYear"></span>.',
        'footer_legal_note_4' => 'Mit der Nutzung dieser Website erkennst du an, dass die Informationen nur zu Informationszwecken bereitgestellt werden, und stimmst unseren <a href="/ch-de/terms" class="legal-link">Nutzungsbedingungen</a> und unserer <a href="/ch-de/privacy" class="legal-link">Datenschutzerklärung</a> zu.',
        'footer_legal_note_5' => 'EquiLoomPRO Advisers stützt sich auf Quellen, die als zuverlässig gelten, kann aber keine Vollständigkeit garantieren. Nichts stellt ein Angebot oder eine Empfehlung dar. Wir bieten keine Steuerberatung — wende dich an deine Steuerberatung.',
        'footer_legal_note_6' => 'Wir arbeiten in der Schweiz mit regulierten Banken und Zahlungsdienstleistern zusammen, um Cash- und Kartenfunktionen zu ermöglichen. Bankdienstleistungen werden von Drittparteien erbracht und unterliegen Identitätsprüfung und lokalen Vorschriften.',
        'footer_legal_note_7' => 'Cash-Kontodienste werden über regulierte Broker und Bankpartner angeboten und sind von Investmentkonten getrennt. Vermögensverwaltung und Beratung werden von EquiLoomPRO Advisers oder verbundenen Einheiten erbracht. Angebote können je nach Rechtsraum variieren.',
        'footer_legal_note_8' => 'Die Wirksamkeit von Tax-Loss-Harvesting hängt von deinem gesamten Steuer- und Anlageprofil ab, einschliesslich Transaktionen ausserhalb von EquiLoomPRO. Die Strategie kann zu mehr Trades, möglichen Kapitalgewinnen, höheren Kosten und Beschränkungen durch geltendes Steuerrecht führen.',
        'footer_legal_note_9' => 'Alle Anlagen bergen Risiken, einschliesslich des möglichen Verlusts des eingesetzten Kapitals. Vergangene Renditen sind keine Garantie für zukünftige Ergebnisse.',
        'footer_legal_copy' => 'EquiLoomPRO, EquiLoomPRO Advisers und EquiLoomPRO Brokerage sind hundertprozentige Tochtergesellschaften der EquiLoomPRO Corporation. <br><br> © <span class="currentYear"></span> EquiLoomPRO Corporation. Alle Rechte vorbehalten.',

        // About -----------------------------------------------
        'about_title' => 'Über uns',
        'about_text' => 'Bei <span class="brand-name">EquiLoomPRO</span> vereinen wir erfahrene Investor:innen und KI-Expert:innen, um eine erstklassige Investitionsplattform zu bauen — bekannt für Präzision und Geschwindigkeit.',
        'about_content_title' => 'Im Kern stehen ein vielfältiges, engagiertes Team und die Mission, die Zukunft des Investierens neu zu gestalten.',
        'about_content_text_1' => 'Wir transformieren das Investment-Ökosystem mit künstlicher Intelligenz. Durch die Verbindung aus Expertise und Technologie liefern wir eine Plattform mit hoher Genauigkeit, Tempo und Profitabilität.',
        'about_content_text_2' => 'Unser globales Team bringt unterschiedliche Perspektiven ein und integriert fortlaufend die neuesten Trends aus KI und Finanzwelt.',
        'about_content_img_alt' => 'EquiLoomPRO Team',
        'period' => [
            [
                'date' => 'April <script>document.write(new Date().getFullYear() - 3)</script>',
                'title' => 'Geburt einer Vision',
                'description' => 'EquiLoomPRO wurde mit dem Ziel gegründet, Investieren mit KI zu revolutionieren.',
            ],
            [
                'date' => 'Juli <script>document.write(new Date().getFullYear() - 3)</script>',
                'title' => 'Wachstum & Aufbau',
                // £3 Mio. ≈ CHF 3.6 Mio. (aufgerundet)
                'description' => 'Wir haben CHF 3,6 Mio. Finanzierung aufgenommen — für Plattformentwicklung und Teamausbau.',
            ],
            [
                'date' => 'November <script>document.write(new Date().getFullYear() - 3)</script>',
                'title' => 'Beta-Testphase',
                'description' => 'Start der Beta-Version, Nutzerfeedback gesammelt und unsere Technologie verfeinert.',
            ],
            [
                'date' => 'Juni <script>document.write(new Date().getFullYear() - 2)</script>',
                'title' => 'Globaler Launch',
                'description' => 'EquiLoomPRO ist global gestartet und bringt fortschrittliche Investmenttechnologie zu Nutzer:innen weltweit.',
            ],
        ],
        'investment_title' => 'Revolutioniere deinen Investmentansatz',
        'investment_text' => 'Erlebe die Zukunft des Asset-Investings mit EquiLoomPRO. Die Kombination aus KI und umfassender Datenanalyse liefert präzise Fähigkeiten für herausfordernde Märkte.',
        'investment_btn' => 'Jetzt starten',

        // Contact
        'contact_title' => 'Kontakt',
        'contact_text' => 'Melde dich für Guidance oder Antworten — unser Expert:innenteam hilft dir bei sicheren, strategischen Entscheidungen.',
        'contact_form_enable_js' => 'Bitte aktiviere JavaScript in deinem Browser, um das Formular abzuschliessen.',
        'contact_label_name' => 'Name',
        'contact_label_email' => 'E-Mail',
        'contact_label_message' => 'Kommentar oder Nachricht',
        'contact_submit' => 'Absenden',
        'contact_form_agreement' => '* Mit dem Klick stimmst du unserer <a href="/ch-de/privacy" class="form-link">Datenschutzerklärung</a> und den <a href="/ch-de/terms" class="form-link">Nutzungsbedingungen</a> zu.',
        'contact_form_success' => 'Formular erfolgreich übermittelt!',

        // Privacy Policy
        'privacy_title' => 'Datenschutzerklärung',
        'privacy_updated' => '<b>Zuletzt aktualisiert:</b> Juli <script>document.write(new Date().getFullYear() - 1)</script>',

        'privacy_1_title' => '1. Einleitung',
        'privacy_1_text' => '
<p>Diese Datenschutzerklärung von EquiLoomPRO („wir“, „uns“) beschreibt, wie wir Personendaten verarbeiten, wenn du unsere Dienste („Dienste“) und die Website <a href="/ch-de/">EquiLoomPRO</a> („Website“) nutzt. Der Schutz deiner Privatsphäre hat Priorität.</p>
<p>Unsere Dienste und die Website können auf Drittseiten verlinken. Bitte prüfe deren Richtlinien; wir sind nicht für deren Praktiken verantwortlich.</p>
<p>Alle erhobenen Daten werden vertraulich behandelt. Wir setzen robuste technische und organisatorische Massnahmen ein, um Personendaten vor unbefugtem Zugriff, Verlust oder Offenlegung zu schützen.</p>
<p>Wenn du die Website nutzt, kannst du Personendaten (z. B. Name, E-Mail, Telefonnummer) angeben. Diese nutzen wir zur Identitätsprüfung, für Support, Vertragserfüllung oder Mitteilungen mit deinem Einverständnis. Benachrichtigungen kannst du verwalten oder abbestellen.</p>
',

        'privacy_2_title' => '2. Datenerhebung und Nutzung',
        'privacy_2_1_title' => '2.1. Allgemeines',
        'privacy_2_1_text' => '
<p>Wir erheben Daten von Besucher:innen („Besuchende“), Nutzer:innen („Nutzende“) und Partnern („Partner“). Personendaten umfassen IP-Adressen, Namen, Kontaktdaten und Beziehungsinformationen gemäss Datenschutzrecht.</p>
',

        'privacy_2_2_title' => '2.2. Erhebung',
        'privacy_2_2_text' => '
<p>Mit dem Zugriff auf die Website stimmst du der Erhebung via Cookies, IP-Adresse oder Formulare zu. Wenn du nicht einverstanden bist, nutze die Website nicht.</p>
',

        'privacy_2_3_title' => '2.3. Zwecke',
        'privacy_2_3_text' => '
<p>Wir verarbeiten Personendaten zur Verbesserung der Dienste, Personalisierung, für Support und zur Einhaltung rechtlicher Pflichten. Zwecke und Rechtsgrundlagen umfassen:</p>
<table>
    <tbody>
        <tr><td>Registrierung</td><td>Einwilligung; Vertragserfüllung</td></tr>
        <tr><td>Bereitstellung der Dienste</td><td>Vertragserfüllung</td></tr>
        <tr><td>Support & Anfragen</td><td>Berechtigtes Interesse</td></tr>
        <tr><td>Marketing</td><td>Einwilligung</td></tr>
        <tr><td>Service-Verbesserung</td><td>Berechtigtes Interesse</td></tr>
    </tbody>
</table>
',

        'privacy_2_4_title' => '2.4. Weitergabe von Daten',
        'privacy_2_4_text' => '
<p>Wir können Daten mit vertrauenswürdigen Anbietern und Partnern teilen und beachten für Nutzende in der Schweiz (revDSG) und der EU (GDPR) die geltenden Vorgaben.</p>
',

        'privacy_3_title' => '3. Partner',
        'privacy_3_text' => '
<p>Wir verarbeiten Partnerdaten mit Einwilligung oder berechtigtem Interesse, mit sicherer Handhabung gemäss Datenschutzrecht.</p>
',

        'privacy_4_title' => '4. Sicherheit',
        'privacy_4_text' => '
<p>Wir implementieren technische und organisatorische Sicherheitsmassnahmen. Kein System ist absolut sicher; ein Restrisiko bleibt.</p>
',

        'privacy_5_title' => '5. Cookies',
        'privacy_5_text' => '
<p>Details findest du in unserer <a href="/ch-de/cookie">Cookie-Richtlinie</a>.</p>
',

        'privacy_6_title' => '6. Links zu Dritten',
        'privacy_6_text' => '
<p>Unsere Website kann externe Links enthalten. Wir sind nicht für deren Datenschutzpraktiken verantwortlich.</p>
',

        'privacy_7_title' => '7. Aufbewahrung',
        'privacy_7_text' => '
<p>Wir bewahren Personendaten nur so lange auf, wie nötig. Bei Account-Beendigung werden Daten gemäss geltendem Recht gelöscht.</p>
',

        'privacy_8_title' => '8. Deine Rechte',
        'privacy_8_text' => '
<p>Du hast Rechte auf Auskunft, Berichtigung, Löschung, Einschränkung, Datenübertragbarkeit, Widerspruch sowie Widerruf der Einwilligung. Kontaktiere uns zur Ausübung.</p>
',

        'privacy_9_title' => '9. Marketing',
        'privacy_9_text' => '
<p>Wir nutzen Daten zu Marketingzwecken nur mit deiner Einwilligung. Du kannst sie jederzeit per E-Mail widerrufen.</p>
',

        'privacy_10_title' => '10. Geltung',
        'privacy_10_text' => '
<p>Durch Nutzung unserer Website oder Dienste akzeptierst du diese Erklärung. Aktualisierungen können erfolgen; die weitere Nutzung gilt als Zustimmung.</p>
',

        'privacy_11_title' => '11. Rechtliche Offenlegung',
        'privacy_11_text' => '
<p>Wir können Personendaten offenlegen, wenn dies gesetzlich erforderlich ist oder zur Wahrung unserer Rechte notwendig ist.</p>
',

        'privacy_12_title' => '12. Kontakt',
        'privacy_12_text' => '
<p>Für Datenschutzfragen: <a href="mailto:support@zevriocapiture.org">support@zevriocapiture.org</a>.</p>
',

        // Terms of Use
        'terms_title' => 'Nutzungsbedingungen',
        'terms_updated' => '<b>Zuletzt aktualisiert:</b> Juli <script>document.write(new Date().getFullYear() - 1)</script>',

        'terms_1_title' => '1. Einleitung',
        'terms_1_text' => '
<p>Willkommen auf der Website von EquiLoomPRO („Website“), betrieben von EquiLoomPRO („wir“, „uns“). Mit der Nutzung der Website oder unserer Dienste („Dienste“) akzeptierst du diese Nutzungsbedingungen („Bedingungen“) sowie unsere Datenschutzerklärung. Kontakt: <a href="mailto:support@zevriocapiture.org">support@zevriocapiture.org</a>.</p>
<p>Wir können die Bedingungen ohne Vorankündigung anpassen. Die weitere Nutzung gilt als Zustimmung. Wenn du nicht einverstanden bist, nutze Website oder Dienste nicht.</p>
',

        'terms_2_title' => '2. Keine Anlageberatung',
        'terms_2_text' => '
<p>Die Website bietet keine persönliche Finanz- oder Anlageberatung. Informationen sind allgemein und berücksichtigen nicht deine Ziele oder Situation. Hole unabhängigen Rat vor Anlageentscheiden ein.</p>
',

        'terms_3_title' => '3. Dienste',
        'terms_3_text' => '
<p>Nicht alle Dienste werden von uns erbracht. Verlinkte Drittservices, Websites oder Produkte sind keine Empfehlung. Wir haften nicht für Inhalte oder Leistungen Dritter.</p>
',

        'terms_4_title' => '4. Umfang und Änderungen',
        'terms_4_text' => '
<p>Diese Bedingungen bilden die gesamte Vereinbarung zwischen dir und uns. Wir können sie nach eigenem Ermessen ändern; weitere Nutzung bedeutet Zustimmung.</p>
',

        'terms_5_title' => '5. Teilnahmevoraussetzungen',
        'terms_5_text' => '
<p>Die Dienste richten sich an Personen ab 18 Jahren, die rechtsverbindliche Verträge schliessen können. Minderjährige dürfen Website oder Dienste nicht nutzen.</p>
',

        'terms_6_title' => '6. Leistungsbeschreibung',
        'terms_6_text' => '
<p><b>Abonnementdienste:</b> Nach Registrierung erhältst du Zugriff (gratis oder bezahlt) auf Inhalte von uns oder Dritten. Dies ist keine Anlageberatung, und wir garantieren keine Richtigkeit.</p>
<p><b>Dienste Dritter:</b> Produkte oder Services von Dritten können angeboten werden. Wir sind nicht verantwortlich für deren Genauigkeit oder Verfügbarkeit.</p>
<p><b>Allgemein:</b> Korrekte Registrierungsdaten sind erforderlich. Unvollständige oder irreführende Angaben können abgelehnt werden. Für Unterbrüche haften wir nicht.</p>
',

        'terms_7_title' => '7. Schutzrechte',
        'terms_7_text' => '
<p>Website und Inhalte sind urheber- und markenrechtlich geschützt. Unbefugtes Kopieren, Weiterverbreiten oder Scraping ist untersagt.</p>
',

        'terms_8_title' => '8. Vertrauliche Informationen',
        'terms_8_text' => '
<p>Vertrauliche Informationen bleiben bis ein Jahr nach Beendigung geschützt; ausgenommen sind öffentlich zugängliche oder ohne Beschränkung erhaltene Informationen.</p>
',

        'terms_9_title' => '9. Verlinkung & Framing',
        'terms_9_text' => '
<p>Verlinkung, Framing oder Referenzierung der Website ohne Erlaubnis ist untersagt. Schäden daraus können geltend gemacht werden.</p>
',

        'terms_10_title' => '10. Haftungsausschluss',
        'terms_10_text' => '
<p>Dienste und Inhalte werden „wie gesehen“ bereitgestellt, ohne Gewähr. Wir haften nicht für Fehler, Unterbrüche oder fehlende Verfügbarkeit.</p>
',

        'terms_11_title' => '11. Haftungsbeschränkung',
        // £200 ≈ CHF 240 (aufgerundet)
        'terms_11_text' => '
<p>Für indirekte Schäden, entgangenen Gewinn oder Datenverlust haften wir nicht. Unsere maximale Haftung beträgt CHF 240, soweit gesetzlich zulässig.</p>
',

        'terms_12_title' => '12. Freistellung',
        'terms_12_text' => '
<p>Du stellst uns von Ansprüchen frei, die aus deiner Nutzung der Website, einem Verstoss gegen diese Bedingungen oder der Verletzung von Rechten Dritter entstehen.</p>
',

        'terms_13_title' => '13. Websites Dritter',
        'terms_13_text' => '
<p>Für verlinkte Websites oder Ressourcen Dritter übernehmen wir keine Verantwortung — weder für Inhalte noch für Richtlinien.</p>
',

        'terms_14_title' => '14. Datenschutz',
        'terms_14_text' => '
<p>Wir beachten das revidierte Schweizer Datenschutzgesetz (revDSG) und die EU-DSGVO. Wir unterhalten Sicherheitsmassnahmen, holen Einwilligungen ein und unterstützen bei Betroffenenbegehren. Bei Datenschutzvorfällen informieren wir zeitnah.</p>
',

        'terms_15_title' => '15. Anwendbares Recht',
        'terms_15_text' => '
<p>Diese Bedingungen unterliegen schweizerischem Recht. Ausschliesslicher Gerichtsstand ist Zürich.</p>
',

        'terms_16_title' => '16. Kontakt',
        'terms_16_text' => '
<p>Fragen? Schreib uns an <a href="mailto:support@zevriocapiture.org">support@zevriocapiture.org</a>.</p>
',
    ],
    'ch-fr' => [
        'language_iso' => 'fr',
        'country_name' => 'Suisse',
        'locale' => 'fr_CH',
        'locale_lang' => 'fr-CH',
        'language_name' => 'Français',
        'city' => 'Genève',
        'country_code' => 'CH',
        'geo_position' => '46.204391, 6.143158',
        'jsonld_organization_name' => 'EquiLoomPRO',
        'jsonld_organization_review_rating' => '4.96',
        'jsonld_organization_review_author' => 'Utilisateur EquiLoomPRO',
        'jsonld_software_categories' => 'Outil d’investissement en cryptomonnaies',
        // conversion locale & arrondi en CHF
        'jsonld_software_price' => '230',
        'jsonld_software_price_currency' => 'CHF',
        'brand_name_api' => 'EquLum App AI',

        'home' => 'Accueil',
        'about' => 'À propos',
        'contact' => 'Contact',
        'privacy' => 'Politique de confidentialité',
        'terms' => 'Conditions générales',

        // Home (index)
        'title' => 'EquiLoomPRO — Investissement automatisé & gestion de trésorerie',
        'meta_description' => 'Faites de votre patrimoine une force avec EquiLoomPRO. Portefeuilles assistés par IA, épargne automatisée et fonctionnalités fiscales pour investir en toute confiance en Suisse.',
        'meta_keywords' => 'EquiLoomPRO, investissement automatisé, IA, gestion de portefeuille, compte cash, épargne, optimisation fiscale, Suisse, Genève',

        // Open Graph / Twitter (global pour toutes les pages)
        'og_title' => 'EquiLoomPRO — Plateforme d’investissement pilotée par l’IA',
        'og_description' => 'Portefeuilles automatisés, trésorerie intelligente et investissement sans effort. Commencez avec EquiLoomPRO et développez votre patrimoine en confiance.',
        'og_image' => '/assets/images/share.webp',

        'twitter_title' => 'EquiLoomPRO — Investissement automatisé',
        'twitter_description' => 'Portefeuilles assistés par IA et épargne automatisée pour faire croître votre patrimoine en Suisse.',

        // About (SEO)
        'about_desc_content' => 'Découvrez EquiLoomPRO — une équipe basée à Genève d’investisseurs et d’experts IA, qui construit une plateforme d’investissement ultra-précise et rapide pour vous aider à développer votre patrimoine en toute sérénité.',
        'about_keywords' => 'à propos EquiLoomPRO, équipe IA investissement, plateforme d’investissement, Genève',

        // Contact (SEO)
        'contact_desc_content' => 'Des questions ou besoin d’un avis ? Contactez EquiLoomPRO — nos spécialistes sont là pour vous aider à prendre des décisions d’investissement éclairées et sereines.',
        'contact_keywords' => 'contacter EquiLoomPRO, support, aide, questions investissement, Genève',

        // Terms (SEO)
        'terms_desc_content' => 'Lisez les Conditions générales d’utilisation de EquiLoomPRO pour le site et les services : éligibilité, limitations et mentions légales.',
        'terms_keywords' => 'conditions d’utilisation, CGU, EquiLoomPRO, légal, Suisse',

        // Privacy (SEO)
        'privacy_desc_content' => 'Comment EquiLoomPRO collecte, utilise et protège vos données personnelles, vos droits, et notre engagement en matière de confidentialité et de sécurité.',
        'privacy_keywords' => 'politique de confidentialité, protection des données, RGPD, LPD, données personnelles, EquiLoomPRO',

        // ---------- JSON-LD content ----------
        'jsonld_organization_review_body' => 'EquiLoomPRO propose une plateforme d’investissement assistée par IA combinant portefeuilles automatisés, gestion intelligente de la trésorerie et optimisation fiscale pour aider les clients en Suisse à développer leur patrimoine en toute confiance.',

        // FAQ (utilisées sur la page d’accueil si page === "index")
        'jsonld_faq_1_question' => 'Qu’est-ce que EquiLoomPRO ?',
        'jsonld_faq_1_answer' => 'EquiLoomPRO est une plateforme d’investissement assistée par IA qui vous aide à créer et automatiser des portefeuilles diversifiés, optimiser votre épargne et investir en toute confiance.',

        'jsonld_faq_2_question' => 'Comment EquiLoomPRO m’aide-t-il à investir ?',
        'jsonld_faq_2_answer' => 'Nous proposons des portefeuilles personnalisables ou automatisés, des outils de trésorerie intelligents et des fonctionnalités conçues pour améliorer vos résultats nets après impôts — pour investir sans effort tout en gardant la maîtrise.',

        'jsonld_faq_3_question' => 'EquiLoomPRO est-il disponible en Suisse ?',
        'jsonld_faq_3_answer' => 'Oui. EquiLoomPRO accompagne des clients à Genève et dans toute la Suisse, avec une expérience adaptée à votre région et à votre devise (CHF).',

        'jsonld_faq_4_question' => 'Dois-je utiliser l’automatisation ou l’IA ?',
        'jsonld_faq_4_answer' => 'L’automatisation est optionnelle. Laissez la plateforme gérer les tâches répétitives ou constituez et ajustez votre propre portefeuille quand vous le souhaitez.',

        'jsonld_faq_5_question' => 'Comment démarrer ?',
        'jsonld_faq_5_answer' => 'Créez votre profil, choisissez ou personnalisez un portefeuille et alimentez votre compte. Aucun frais caché d’inscription ; les services partenaires peuvent avoir leurs propres conditions.',

        'jsonld_faq_6_question' => 'Comment EquiLoomPRO protège-t-il mes données ?',
        'jsonld_faq_6_answer' => 'Nous appliquons des mesures de sécurité techniques et organisationnelles robustes et suivons les normes suisses et européennes de protection des données pour protéger vos informations.',

        // Header
        'header_logo_alt' => 'Logo EquiLoomPRO',
        'header_logo_text' => 'EquiLoomPRO',
        'header_burger_alt' => 'Menu',
        'header_cross_alt' => 'Fermer',

        // Hero
        'hero_form_title' => 'Inscrivez-vous maintenant',
        'hero_form_notice' => '* En cliquant sur le bouton, vous acceptez la <a href="/ch-fr/privacy" class="form-link">Politique de confidentialité</a> et les <a href="/ch-fr/terms" class="form-link">Conditions générales</a>.',
        'hero_title' => 'Faites de votre patrimoine une force.',
        'hero_subtitle' => 'Investissement et épargne personnalisés, automatisés et sans effort.',
        'hero_stat_nerdwallet' => "Meilleur robo-conseiller, 2019<sup class=\"sup\">1</sup><br>Meilleure app de trésorerie, 2020<sup class=\"sup\">1</sup>",
        'hero_stat_investopedia' => "Meilleur robo-conseiller, 2020<sup class=\"sup\">1</sup>",
        'hero_stat_clients' => 'Clients de confiance',
        'hero_stat_funds' => 'Fonds sous gestion',
        'hero_stat_appstore' => 'Apple App Store <sup class="sup">2</sup>',
        'hero_stat_playstore' => 'Google Play Store <sup class="sup">2</sup>',

        // Investition
        'investition_title' => 'Investir n’est pas simple. Nous le rendons facile.',
        'investition_text' => 'Laissez-nous créer un portefeuille sur mesure pour vous ou composez-le vous-même ; notre automatisation puissante optimisera vos investissements, améliorera la performance et pourra aider à réduire vos impôts.',
        'investition_btn_start' => 'Commencer à investir',
        'investition_btn_more' => 'En savoir plus',
        'investition_notification_app' => 'EquiLoomPRO',
        'investition_notification_time' => 'maintenant',
        'investition_notification_1' => 'Nous vous avons fait économiser <span>CHF 75</span> d’impôts.',
        'investition_notification_2' => 'Nous avons investi automatiquement votre dépôt de <span>CHF 230</span>.',

        // Cash
        'cash_title' => 'Une trésorerie du quotidien, pensée pour le long terme.',
        'cash_text' => 'Notre compte Cash, proposé avec des partenaires bancaires réglementés, vous aide à automatiser l’épargne, payer vos factures, retirer à des milliers de bancomats et investir votre surplus en quelques secondes.',
        'cash_btn_start' => 'Commencer à épargner',
        'cash_btn_more' => 'En savoir plus',
        'cash_img_phone_alt' => 'Téléphone',
        'cash_img_card_alt' => 'Carte',

        // Saving
        'saving_title' => 'Épargner et investir. Pendant que vous vous détendez.',
        'saving_text' => 'Dites-nous votre objectif d’épargne et nous mettrons automatiquement de côté l’excédent pour l’atteindre. Relié à tous vos comptes, une seule app suffit pour suivre la progression de votre patrimoine.',
        'saving_img_alt' => 'Épargne',

        // Testimonials
        'testimonial_title' => 'TÉMOIGNAGES',
        'testimonial_1_quote' => 'C’est la <strong>meilleure</strong> ressource pour investir, préparer ma retraite et voir l’ensemble de mes finances.',
        'testimonial_1_author' => 'Pierre M',
        'testimonial_2_quote' => '<strong>EquiLoomPRO</strong> est la première solution qui m’a vraiment motivée à épargner.',
        'testimonial_2_author' => 'Sophie L',
        'testimonial_3_quote' => 'C’est <strong>automatique</strong>, et moi je suis plutôt paresseux.',
        'testimonial_3_author' => 'Laurent D',

        // Trust
        'trust_title' => 'Plus de <strong>120’000</strong> personnes partout en Suisse utilisent déjà EquiLoomPRO pour gagner plus et se tracasser moins',
        'trust_btn' => 'Commencer',
        'trust_img_alt' => 'Fenêtre ouverte avec plante',
        'trust_subtitle' => 'VU DANS',
        'trust_logo_wsj_alt' => 'WSJ',
        'trust_logo_bloomberg_alt' => 'Bloomberg',
        'trust_logo_nyt_alt' => 'The New York Times',
        'trust_logo_reuters_alt' => 'Reuters',
        'trust_logo_cnbc_alt' => 'CNBC',

        // Footer
        'footer_logo_alt' => 'Logo EquiLoomPRO',
        'footer_logo_text' => 'EquiLoomPRO',
        'footer_legal_note_1' => 'Les témoignages ont été fournis par des clients de EquiLoomPRO Advisers et EquiLoomPRO Brokerage. Aucune garantie que d’autres clients obtiendront des résultats similaires.',
        'footer_legal_note_2' => 'Nerdwallet et Investopedia (les « Référents ») perçoivent une rémunération pour recommander des clients potentiels à EquiLoomPRO Advisers via des publicités sur leurs sites. Les Référents et EquiLoomPRO Advisers ne sont pas affiliés autrement.',
        'footer_legal_note_3' => 'Les notes de l’Apple App Store et de Google Play sont basées sur les évaluations des utilisateurs de février 2014 (Apple) et décembre 2015 (Google) jusqu’en juin <span class="currentYear"></span>. Notes compilées par Apple, Inc. et Google, Inc., qui sont rémunérés pour héberger notre app.',
        'footer_legal_note_4' => 'En utilisant ce site, vous comprenez que les informations présentées le sont à titre informatif et vous acceptez nos <a href="/ch-fr/terms" class="legal-link">Conditions d’utilisation</a> et notre <a href="/ch-fr/privacy" class="legal-link">Politique de confidentialité</a>.',
        'footer_legal_note_5' => 'EquiLoomPRO Advisers s’appuie sur des sources jugées fiables, y compris des clients et des tiers, sans garantie d’exactitude ou d’exhaustivité. Rien ici ne constitue une offre ou une recommandation d’acheter ou vendre un titre. EquiLoomPRO n’offre pas de conseil fiscal ; consultez votre conseiller.',
        'footer_legal_note_6' => 'Nous collaborons avec des prestataires bancaires et de paiement réglementés en Suisse pour proposer les fonctionnalités cash et carte. Les services bancaires sont fournis par des partenaires tiers, sous réserve de vérification d’identité et des lois locales applicables.',
        'footer_legal_note_7' => 'Le compte Cash est proposé via des courtiers et partenaires bancaires réglementés et est distinct des comptes d’investissement. Les services de gestion ou de conseil en investissement sont fournis par EquiLoomPRO Advisers ou entités affiliées. L’offre peut varier selon la juridiction.',
        'footer_legal_note_8' => 'L’efficacité d’une stratégie de récolte de pertes fiscales dépend du profil fiscal et d’investissement global du client, y compris les opérations hors de EquiLoomPRO et la nature des placements. Elle peut générer davantage de transactions et des coûts. L’utilisation des pertes est soumise aux lois fiscales applicables.',
        'footer_legal_note_9' => 'Tout investissement comporte des risques, y compris la perte possible du capital investi. Les rendements historiques et projections sont fournis à titre informatif et ne préjugent pas des performances futures.',
        'footer_legal_copy' => 'EquiLoomPRO, EquiLoomPRO Advisers et EquiLoomPRO Brokerage sont des filiales détenues à 100 % de EquiLoomPRO Corporation. <br><br> © <span class="currentYear"></span> EquiLoomPRO Corporation. Tous droits réservés.',

        // About -----------------------------------------------
        'about_title' => 'À propos',
        'about_text' => 'Chez <span class="brand-name">EquiLoomPRO</span>, nous sommes une équipe d’investisseurs confirmés et d’experts en IA, réunis pour construire une plateforme d’investissement de premier plan, réputée pour sa précision et sa rapidité.',
        'about_content_title' => 'Au cœur : une équipe mondiale passionnée et diverse, unie par la mission de réinventer l’investissement.',
        'about_content_text_1' => 'Nous transformons l’investissement grâce à l’intelligence artificielle. En combinant l’expertise d’investisseurs et une technologie de pointe, nous offrons une plateforme qui excelle en précision, vitesse et efficacité.',
        'about_content_text_2' => 'Notre équipe internationale apporte des perspectives variées et innove en continu pour intégrer les dernières avancées de l’IA et de la finance. L’alliance de l’expertise humaine et de l’intelligence machine rend l’expérience d’investissement réellement transformative.',
        'about_content_img_alt' => 'Équipe EquiLoomPRO',
        'period' => [
            [
                'date' => 'Avril <script>document.write(new Date().getFullYear() - 3)</script>',
                'title' => 'Naissance d’une vision',
                'description' => 'EquiLoomPRO est fondée avec l’ambition de révolutionner l’investissement grâce à l’IA.',
            ],
            [
                'date' => 'Juillet <script>document.write(new Date().getFullYear() - 3)</script>',
                'title' => 'Croissance et développement',
                'description' => 'Levée de CHF 3’000’000 pour accélérer le développement de la plateforme et renforcer l’équipe.',
            ],
            [
                'date' => 'Novembre <script>document.write(new Date().getFullYear() - 3)</script>',
                'title' => 'Phase bêta',
                'description' => 'Lancement de la bêta de EquiLoomPRO, collecte des retours utilisateurs et affinement de la technologie.',
            ],
            [
                'date' => 'Juin <script>document.write(new Date().getFullYear() - 2)</script>',
                'title' => 'Lancement global',
                'description' => 'EquiLoomPRO se déploie dans le monde entier, marquant une étape clé pour l’investissement nouvelle génération.',
            ],
        ],
        'investment_title' => 'Réinventez votre façon d’investir',
        'investment_text' => 'Découvrez l’avenir de l’investissement d’actifs avec EquiLoomPRO. Notre alliance d’IA et d’analytique de données avancée offre des capacités d’investissement exceptionnelles pour naviguer les marchés avec une précision inégalée.',
        'investment_btn' => 'Commencer',

        // Contact
        'contact_title' => 'Contactez-nous',
        'contact_text' => 'Écrivez-nous pour obtenir des réponses ou un accompagnement ; notre équipe vous aidera à prendre des décisions d’investissement stratégiques et sereines.',
        'contact_form_enable_js' => 'Veuillez activer JavaScript dans votre navigateur pour remplir ce formulaire.',
        'contact_label_name' => 'Nom',
        'contact_label_email' => 'E-mail',
        'contact_label_message' => 'Commentaire ou message',
        'contact_submit' => 'Envoyer',
        'contact_form_agreement' => ' * En cliquant sur le bouton, vous acceptez la <a href="/ch-fr/privacy" class="form-link">Politique de confidentialité</a> et les <a href="/ch-fr/terms" class="form-link">Conditions générales</a>.',
        'contact_form_success' => 'Formulaire envoyé avec succès !',

        // Privacy Policy
        'privacy_title' => 'Politique de confidentialité',
        'privacy_updated' => '<b>Dernière mise à jour :</b> juillet <script>document.write(new Date().getFullYear() - 1)</script>',

        'privacy_1_title' => '1. Introduction',
        'privacy_1_text' => '
<p>La présente Politique de confidentialité de EquiLoomPRO (« nous », « notre », « nos ») décrit la manière dont nous traitons les données personnelles lorsque vous utilisez nos services (« Services ») et notre site web <a href="/ch-fr/">EquiLoomPRO</a> (« Site »). Protéger votre vie privée et vos données est une priorité.</p>
<p>Nos Services et notre Site peuvent contenir des liens vers des sites tiers. Nous ne sommes pas responsables de leurs pratiques ; veuillez consulter leurs politiques avant toute interaction.</p>
<p>Nous traitons toutes les données collectées de manière confidentielle et mettons en œuvre des mesures techniques et organisationnelles robustes pour protéger les données personnelles contre l’accès non autorisé, la perte ou la divulgation.</p>
<p>En utilisant notre Site, vous pouvez fournir des informations personnelles (p. ex. nom, e-mail, numéro de téléphone). Ces données peuvent servir à vérifier votre identité, offrir un support, remplir nos obligations ou envoyer des informations avec votre consentement. Vous pouvez gérer vos préférences de notification ou vous désinscrire.</p>
',

        'privacy_2_title' => '2. Collecte et utilisation des données',
        'privacy_2_1_title' => '2.1. Généralités',
        'privacy_2_1_text' => '
<p>Nous collectons des données sur les visiteurs du Site (« Visiteurs »), les utilisateurs (« Utilisateurs ») et les partenaires (« Partenaires »). Les données personnelles incluent adresses IP, noms, coordonnées et informations de relation conformément aux lois sur la protection des données.</p>
',

        'privacy_2_2_title' => '2.2. Collecte',
        'privacy_2_2_text' => '
<p>En accédant à notre Site, vous consentez à la collecte de données (p. ex. via cookies, adresses IP ou formulaires). Si vous êtes en désaccord, veuillez ne pas utiliser le Site.</p>
',

        'privacy_2_3_title' => '2.3. Finalités',
        'privacy_2_3_text' => '
<p>Nous traitons les données personnelles pour améliorer nos Services, personnaliser l’expérience, fournir une assistance et respecter nos obligations légales. Exemples de finalités et bases légales :</p>
<table>
    <tbody>
        <tr><td>Création de compte</td><td>Consentement ; Exécution du contrat</td></tr>
        <tr><td>Fourniture des Services</td><td>Exécution du contrat</td></tr>
        <tr><td>Support et demandes</td><td>Intérêts légitimes</td></tr>
        <tr><td>Marketing</td><td>Consentement</td></tr>
        <tr><td>Amélioration du Service</td><td>Intérêts légitimes</td></tr>
    </tbody>
</table>
',

        'privacy_2_4_title' => '2.4. Partage des données',
        'privacy_2_4_text' => '
<p>Nous pouvons partager des données avec des fournisseurs et partenaires de confiance, en veillant au respect du RGPD/LPD pour les Utilisateurs à Genève, en Suisse et dans l’UE.</p>
',

        'privacy_3_title' => '3. Partenaires',
        'privacy_3_text' => '
<p>Nous traitons les données des Partenaires avec consentement ou pour des intérêts légitimes, en assurant une gestion sécurisée et conforme aux lois de protection des données.</p>
',

        'privacy_4_title' => '4. Sécurité',
        'privacy_4_text' => '
<p>Nous appliquons des mesures techniques et organisationnelles pour protéger les données personnelles. Les tiers avec lesquels nous partageons des données sont contractuellement tenus de maintenir des standards équivalents. Aucun système n’étant infaillible, les Utilisateurs acceptent ce risque.</p>
',

        'privacy_5_title' => '5. Cookies',
        'privacy_5_text' => '
<p>Consultez notre <a href="/ch-fr/cookie">Politique relative aux cookies</a> pour les détails sur les cookies et technologies de suivi.</p>
',

        'privacy_6_title' => '6. Liens vers des tiers',
        'privacy_6_text' => '
<p>Notre Site peut contenir des liens externes. Nous ne sommes pas responsables de leurs pratiques ; veuillez consulter leurs politiques avant de partager des données.</p>
',

        'privacy_7_title' => '7. Conservation des données',
        'privacy_7_text' => '
<p>Nous conservons les données personnelles uniquement le temps nécessaire. À la fermeture du compte, les données sont supprimées conformément aux lois applicables.</p>
',

        'privacy_8_title' => '8. Vos droits',
        'privacy_8_text' => '
<p>Vous disposez de droits d’accès, de rectification, d’effacement, de restriction ou de portabilité, d’opposition au traitement ou de retrait du consentement. Contactez-nous pour exercer ces droits.</p>
',

        'privacy_9_title' => '9. Marketing',
        'privacy_9_text' => '
<p>Nous pouvons utiliser vos données à des fins marketing avec votre consentement. Vous pouvez retirer votre consentement en nous écrivant.</p>
',

        'privacy_10_title' => '10. Acceptation de la politique',
        'privacy_10_text' => '
<p>L’utilisation de notre Site ou de nos Services vaut acceptation de cette Politique. Nous pouvons la mettre à jour ; la poursuite de l’utilisation vaut acceptation.</p>
',

        'privacy_11_title' => '11. Divulgation légale',
        'privacy_11_text' => '
<p>Nous pouvons divulguer des données personnelles si la loi l’exige ou pour protéger nos droits.</p>
',

        'privacy_12_title' => '12. Contact',
        'privacy_12_text' => '
<p>Pour toute question relative à la confidentialité, contactez notre DPO à <a href="mailto:support@zevriocapiture.org">support@zevriocapiture.org</a>.</p>
',

        // Terms of Use
        'terms_title' => 'Conditions d’utilisation',
        'terms_updated' => '<b>Dernière mise à jour :</b> juillet <script>document.write(new Date().getFullYear() - 1)</script>',

        'terms_1_title' => '1. Introduction',
        'terms_1_text' => '
<p>Bienvenue sur le site web de EquiLoomPRO (« Site ») exploité par EquiLoomPRO (« nous », « notre », « nos »). En utilisant notre Site ou nos services (« Services »), vous acceptez ces Conditions d’utilisation (« Conditions ») et notre Politique de confidentialité. Contact : <a href="mailto:support@zevriocapiture.org">support@zevriocapiture.org</a>.</p>
<p>Nous pouvons mettre à jour ces Conditions sans préavis. La poursuite d’utilisation du Site ou des Services vaut acceptation des modifications. Si vous n’êtes pas d’accord, n’utilisez pas le Site ou les Services.</p>
',

        'terms_2_title' => '2. Absence de conseil en investissement',
        'terms_2_text' => '
<p>Notre Site ne fournit pas de conseil financier ou d’investissement personnalisé. Les informations sont générales et ne tiennent pas compte de vos objectifs, de votre situation financière ou de vos besoins. Consultez un conseiller financier indépendant avant toute décision d’investissement.</p>
',

        'terms_3_title' => '3. Services',
        'terms_3_text' => '
<p>Tous les Services ne sont pas fournis par nous. Les services, sites ou produits tiers référencés ne constituent pas une approbation. Nous déclinons toute responsabilité quant à leur contenu ou fonctionnement.</p>
',

        'terms_4_title' => '4. Portée et modification',
        'terms_4_text' => '
<p>Ces Conditions constituent l’intégralité de l’accord entre vous et nous et remplacent tout accord antérieur. Nous pouvons les modifier à notre discrétion ; votre utilisation continue vaut acceptation.</p>
',

        'terms_5_title' => '5. Admissibilité',
        'terms_5_text' => '
<p>Les Services s’adressent aux personnes de 18 ans et plus capables de conclure des contrats juridiquement contraignants. Les mineurs ne sont pas autorisés à utiliser le Site ou les Services.</p>
',

        'terms_6_title' => '6. Description des Services',
        'terms_6_text' => '
<p><b>Services par abonnement :</b> Après inscription, vous pouvez accéder à des Services par abonnement (gratuits ou payants), y compris du contenu fourni par nous ou des tiers. Ce n’est pas un conseil d’investissement et nous n’en garantissons pas l’exactitude.</p>
<p><b>Services tiers :</b> Des produits ou services de tiers peuvent être proposés. Nous ne sommes pas responsables de leur exactitude ni de votre incapacité à y accéder.</p>
<p><b>Général :</b> Des données d’inscription exactes sont requises. Nous pouvons refuser toute donnée incomplète ou frauduleuse et ne sommes pas responsables des interruptions de service.</p>
',

        'terms_7_title' => '7. Droits de propriété',
        'terms_7_text' => '
<p>Le Site et ses contenus sont protégés par le droit d’auteur, les marques et autres droits. Toute reproduction, redistribution ou extraction automatisée non autorisée est interdite.</p>
',

        'terms_8_title' => '8. Informations confidentielles',
        'terms_8_text' => '
<p>Les informations confidentielles sont protégées pendant un an après la fin de la relation, sauf si elles sont publiques ou reçues sans restriction.</p>
',

        'terms_9_title' => '9. Liens et cadrage',
        'terms_9_text' => '
<p>Le lien, le cadrage ou la référence à notre Site sans autorisation sont interdits. Vous êtes responsable des dommages causés par de telles actions.</p>
',

        'terms_10_title' => '10. Avertissement',
        'terms_10_text' => '
<p>Les Services et contenus sont fournis « en l’état » sans garantie. Nous ne sommes pas responsables des erreurs, interruptions ou impossibilités d’utiliser le Site ou les Services.</p>
',

        'terms_11_title' => '11. Limitation de responsabilité',
        // plafond adapté et arrondi en CHF
        'terms_11_text' => '
<p>Nous déclinons toute responsabilité pour tout dommage, y compris la perte de profits ou de données. Notre responsabilité maximale est limitée à CHF 260, dans la mesure permise par la loi.</p>
',

        'terms_12_title' => '12. Indemnisation',
        'terms_12_text' => '
<p>Vous acceptez de nous indemniser contre toute réclamation liée à votre utilisation du Site, à la violation des présentes Conditions ou à l’atteinte aux droits de tiers.</p>
',

        'terms_13_title' => '13. Sites tiers',
        'terms_13_text' => '
<p>Nous ne sommes pas responsables des sites ou ressources tiers liés, ni de leur contenu ou de leurs politiques.</p>
',

        'terms_14_title' => '14. Protection des données',
        'terms_14_text' => '
<p>Nous respectons le RGPD et la LPD suisse. Nous maintenons des mesures de sécurité, recueillons les consentements requis et aidons à l’exercice des droits des personnes. En cas de violation de données, nous notifions rapidement conformément aux lois applicables.</p>
',

        'terms_15_title' => '15. Droit applicable',
        'terms_15_text' => '
<p>Ces Conditions sont régies par le droit suisse. Tout litige sera tranché par arbitrage à Genève conformément au règlement de la CCI.</p>
',

        'terms_16_title' => '16. Contact',
        'terms_16_text' => '
<p>Pour toute question, contactez-nous à <a href="mailto:support@zevriocapiture.org">support@zevriocapiture.org</a>.</p>
',
    ],
    'at' => [
        // Locale / Geo
        'language_iso' => 'de',
        'country_name' => 'Österreich',
        'locale' => 'de_AT',
        'locale_lang' => 'de-AT',
        'language_name' => 'Deutsch (Österreich)',
        'city' => 'Wien',
        'country_code' => 'AT',
        'geo_position' => '48.208174, 16.373819',

        // JSON-LD / Brand
        'jsonld_organization_name' => 'EquiLoomPRO',
        'jsonld_organization_review_rating' => '4.96',
        'jsonld_organization_review_author' => 'EquiLoomPRO Nutzer/in',
        'jsonld_software_categories' => 'Kryptowährungs-Investment-Tool',
        // Preis für AT in EUR – aufgerundet
        'jsonld_software_price' => '190',
        'jsonld_software_price_currency' => 'EUR',
        'brand_name_api' => 'EquLum App AI',

        // Navigation
        'home' => 'Startseite',
        'about' => 'Über uns',
        'contact' => 'Kontakt',
        'privacy' => 'Datenschutzerklärung',
        'terms' => 'Allgemeine Geschäftsbedingungen',

        // Home (index) — Meta
        'title' => 'EquiLoomPRO — Automatisiertes Investieren & Cash-Management',
        'meta_description' => 'Mach Vermögen zu deinem – mit EquiLoomPRO. KI-gestützte Portfolios, automatisches Sparen und steueroptimierte Features für sicheres Investieren in Österreich.',
        'meta_keywords' => 'EquiLoomPRO, automatisiertes Investieren, KI, Portfolio, Cash-Konto, Sparen, Steuern, Österreich, Wien',

        // Open Graph / Twitter (global)
        'og_title' => 'EquiLoomPRO — KI-gestützte Investmentplattform',
        'og_description' => 'Automatisierte Portfolios, smartes Cash und müheloses Investieren. Starte mit EquiLoomPRO und baue Vermögen mit Vertrauen auf.',
        'og_image' => '/assets/images/share.webp',

        'twitter_title' => 'EquiLoomPRO — Automatisiertes Investieren',
        'twitter_description' => 'KI-gestützte Portfolios und automatisches Sparen – wachse mit Selbstvertrauen.',

        // About (meta snippets)
        'about_desc_content' => 'Lerne EquiLoomPRO kennen — ein in Wien ansässiges Team aus Investor:innen und KI-Expert:innen, das eine präzise, schnelle Investmentplattform für selbstbewusstes Vermögenswachstum baut.',
        'about_keywords' => 'Über EquiLoomPRO, Team, KI-Investing, Investmentplattform, Wien',

        // Contact (meta snippets)
        'contact_desc_content' => 'Fragen oder Orientierung? Kontaktiere EquiLoomPRO — unsere Expert:innen helfen dir, fundierte, strategische Investmententscheidungen zu treffen.',
        'contact_keywords' => 'Kontakt EquiLoomPRO, Support, Hilfe, Investmentfragen, Wien',

        // Terms (meta snippets)
        'terms_desc_content' => 'Lies die Allgemeinen Geschäftsbedingungen für die Nutzung der Website und Services von EquiLoomPRO – Voraussetzungen, Einschränkungen und rechtliche Hinweise.',
        'terms_keywords' => 'Nutzungsbedingungen, AGB, EquiLoomPRO, Recht, Österreich',

        // Privacy (meta snippets)
        'privacy_desc_content' => 'Wie EquiLoomPRO deine personenbezogenen Daten erhebt, nutzt und schützt – deine Rechte und unser Engagement für Datenschutz & Sicherheit.',
        'privacy_keywords' => 'Datenschutzerklärung, Datenschutz, DSGVO, personenbezogene Daten, EquiLoomPRO',

        // ---------- JSON-LD Review Body ----------
        'jsonld_organization_review_body' => 'EquiLoomPRO bietet eine KI-gestützte Investmentplattform, die automatisierte Portfolios, smartes Cash-Management und steueroptimierte Funktionen kombiniert, um Kund:innen in Wien und ganz Österreich beim Vermögensaufbau zu unterstützen.',

        // ---------- FAQ (für Startseite, page === "index") ----------
        'jsonld_faq_1_question' => 'Was ist EquiLoomPRO?',
        'jsonld_faq_1_answer' => 'EquiLoomPRO ist eine KI-gestützte Investmentplattform, mit der du diversifizierte Portfolios aufbauen und automatisieren, Ersparnisse optimieren und mit Zuversicht investieren kannst.',

        'jsonld_faq_2_question' => 'Wie hilft mir EquiLoomPRO beim Investieren?',
        'jsonld_faq_2_answer' => 'Wir bieten anpassbare oder automatisierte Portfolios, smarte Cash-Tools und Funktionen zur Verbesserung der Nettorendite nach Steuern – so investierst du mühelos und behältst zugleich die Kontrolle.',

        'jsonld_faq_3_question' => 'Ist EquiLoomPRO in Österreich verfügbar?',
        'jsonld_faq_3_answer' => 'Ja. EquiLoomPRO unterstützt Kund:innen in Wien und in ganz Österreich – mit lokaler Erfahrung und Euro-Währung.',

        'jsonld_faq_4_question' => 'Muss ich Automatisierung oder KI nutzen?',
        'jsonld_faq_4_answer' => 'Automatisierung ist optional. Lass Routinen von der Plattform erledigen oder stelle dein Portfolio selbst zusammen – jederzeit anpassbar.',

        'jsonld_faq_5_question' => 'Wie starte ich?',
        'jsonld_faq_5_answer' => 'Erstelle dein Profil, wähle oder personalisiere ein Portfolio und zahle ein. Es gibt keine versteckten Anmeldegebühren; Partnerdienste können eigene Voraussetzungen haben.',

        'jsonld_faq_6_question' => 'Wie schützt EquiLoomPRO meine Daten?',
        'jsonld_faq_6_answer' => 'Wir setzen starke technische und organisatorische Maßnahmen ein und halten anwendbare EU/AT-Datenschutzstandards (DSGVO) ein, um deine Informationen zu schützen.',

        // ---------- Header ----------
        'header_logo_alt' => 'EquiLoomPRO Logo',
        'header_logo_text' => 'EquiLoomPRO',
        'header_burger_alt' => 'Menü',
        'header_cross_alt' => 'Schließen',

        // ---------- Hero ----------
        'hero_form_title' => 'Jetzt registrieren',
        'hero_form_notice' => '* Mit Klick auf den Button stimmst du unserer <a href="/at/privacy" class="form-link">Datenschutzerklärung</a> und den <a href="/at/terms" class="form-link">AGB</a> zu.',
        'hero_title' => 'Mach Vermögen zu deinem.',
        'hero_subtitle' => 'Personalisiertes, automatisiertes und müheloses Investieren & Sparen.',
        'hero_stat_nerdwallet' => "Bester Robo-Advisor, 2019<sup class=\"sup\">1</sup><br>Beste Cash-Management-App, 2020<sup class=\"sup\">1</sup>",
        'hero_stat_investopedia' => "Bester Robo-Advisor, 2020<sup class=\"sup\">1</sup>",
        'hero_stat_clients' => 'Vertrauensvolle Kund:innen',
        'hero_stat_funds' => 'An Kundengeldern',
        'hero_stat_appstore' => 'Apple App Store <sup class="sup">2</sup>',
        'hero_stat_playstore' => 'Google Play Store <sup class="sup">2</sup>',

        // ---------- Investition ----------
        'investition_title' => 'Investieren ist nicht leicht. Wir lassen es so wirken.',
        'investition_text' => 'Lass dir ein Portfolio maßschneidern – oder baue es selbst. Unsere starke Automatisierung holt mehr aus deinen Anlagen heraus, optimiert die Performance und hilft, Steuern zu senken.',
        'investition_btn_start' => 'Jetzt investieren',
        'investition_btn_more' => 'Mehr erfahren',
        'investition_notification_app' => 'EquiLoomPRO',
        'investition_notification_time' => 'jetzt',
        // AT Beträge in EUR – aufgerundet
        'investition_notification_1' => 'Wir haben dir <span>€75</span> an Steuern gespart.',
        'investition_notification_2' => 'Wir haben deine Einzahlung von <span>€240</span> automatisch investiert.',

        // ---------- Cash ----------
        'cash_title' => 'Alltagsgeld, gemacht für langfristigen Vermögensaufbau.',
        'cash_text' => 'Unser Cash-Konto – angeboten mit regulierten Banking-Partnern – automatisiert dein Sparen, bezahlt Rechnungen, hebt an tausenden Bankomaten ab und investiert überschüssiges Guthaben in Sekunden.',
        'cash_btn_start' => 'Jetzt sparen',
        'cash_btn_more' => 'Mehr erfahren',
        'cash_img_phone_alt' => 'Telefon',
        'cash_img_card_alt' => 'Karte',

        // ---------- Saving ----------
        'saving_title' => 'Sparen und investieren. Während du entspannst.',
        'saving_text' => 'Sag uns, wofür du sparst – wir legen automatisch extra Geld zurück, um deine Ziele zu erreichen. Da wir all deine Konten verknüpfen, brauchst du nur eine App, um dein Vermögen wachsen zu sehen.',
        'saving_img_alt' => 'Sparen',

        // ---------- Testimonials ----------
        'testimonial_title' => 'ERFAHRUNGSBERICHTE',
        'testimonial_1_quote' => 'Es ist die <strong>beste</strong> Ressource für Investieren, Ruhestandsplanung und einen Überblick über meine gesamte Finanzlage.',
        'testimonial_1_author' => 'Lukas M',
        'testimonial_2_quote' => '<strong>EquiLoomPRO</strong> ist das Erste, was mich wirklich motiviert hat, Geld zu sparen.',
        'testimonial_2_author' => 'Anna S',
        'testimonial_3_quote' => 'Es ist <strong>automatisch</strong>, und ich bin bequem.',
        'testimonial_3_author' => 'Stefan H',

        // ---------- Trust ----------
        'trust_title' => 'Über <strong>120.000</strong> Menschen in Österreich nutzen bereits EquiLoomPRO, um mehr zu verdienen und sich weniger Sorgen zu machen',
        'trust_btn' => 'Jetzt starten',
        'trust_img_alt' => 'Offenes Fenster mit Pflanze',
        'trust_subtitle' => 'BEKANNT AUS',
        'trust_logo_wsj_alt' => 'WSJ',
        'trust_logo_bloomberg_alt' => 'Bloomberg',
        'trust_logo_nyt_alt' => 'The New York Times',
        'trust_logo_reuters_alt' => 'Reuters',
        'trust_logo_cnbc_alt' => 'CNBC',

        // ---------- Footer ----------
        'footer_logo_alt' => 'EquiLoomPRO Logo',
        'footer_logo_text' => 'EquiLoomPRO',
        'footer_legal_note_1' => 'Erfahrungsberichte stammen von Kund:innen von EquiLoomPRO Advisers und EquiLoomPRO Brokerage. Keine Garantie für ähnliche Erfahrungen oder Erfolge.',
        'footer_legal_note_2' => 'Nerdwallet und Investopedia (die „Endorser“) erhalten finanzielle Vergütung für die Empfehlung potenzieller Kund:innen an EquiLoomPRO Advisers. Es besteht keine weitere Beziehung. Bewertungen sind redaktionell unabhängig.',
        'footer_legal_note_3' => 'App-Store-Bewertungen basieren auf Nutzerfeedback (Februar 2014 – Juni <span class="currentYear"></span>). Zusammengetragen von Apple Inc. und Google Inc., die Vergütung für das Hosting unserer App erhalten.',
        'footer_legal_note_4' => 'Mit der Nutzung dieser Website erklärst du dich mit unseren <a href="/at/terms" class="legal-link">AGB</a> und der <a href="/at/privacy" class="legal-link">Datenschutzerklärung</a> einverstanden.',
        'footer_legal_note_5' => 'EquiLoomPRO Advisers bezieht Informationen aus als zuverlässig erachteten Quellen (Kund:innen und Dritte), übernimmt aber keine Garantie für Vollständigkeit. Keine Anlageberatung oder Steuerberatung.',
        'footer_legal_note_6' => 'Wir arbeiten mit regulierten Bank- und Zahlungsdienstleistern in Österreich und der EU zusammen. Dienste unterliegen Identitätsprüfung und geltenden Vorschriften.',
        'footer_legal_note_7' => 'Cash-Konten werden über regulierte Broker und Banken angeboten und sind getrennt von Investmentkonten. Anlageberatung wird durch EquiLoomPRO Advisers oder Partner erbracht.',
        'footer_legal_note_8' => 'Die Wirksamkeit von steuerlichen Verlustverrechnungen hängt vom individuellen Steuerprofil ab. Es können zusätzliche Transaktionskosten und Risiken entstehen.',
        'footer_legal_note_9' => 'Alle Anlagen sind mit Risiken verbunden, einschließlich möglicher Verluste. Vergangene Ergebnisse garantieren keine zukünftige Performance.',

        'footer_legal_copy' => 'EquiLoomPRO, EquiLoomPRO Advisers und EquiLoomPRO Brokerage sind Tochtergesellschaften der EquiLoomPRO Corporation.<br><br> © <span class="currentYear"></span> EquiLoomPRO Corporation. Alle Rechte vorbehalten.',

        // ---------- About ----------
        'about_title' => 'Über uns',
        'about_text' => 'Bei <span class="brand-name">EquiLoomPRO</span> sind wir ein Team aus erfahrenen Investor:innen und KI-Expert:innen, das eine führende Investmentplattform mit Präzision und Schnelligkeit entwickelt.',
        'about_content_title' => 'Im Kern stehen Menschen: ein vielfältiges, leidenschaftliches Team mit der Mission, die Zukunft des Investierens neu zu gestalten.',
        'about_content_text_1' => 'Wir wollen die Investmentlandschaft transformieren, indem wir die Kraft der künstlichen Intelligenz nutzen. Durch die Kombination von menschlichem Fachwissen und Technologie schaffen wir eine Plattform, die sich durch Genauigkeit, Geschwindigkeit und Rentabilität auszeichnet.',
        'about_content_text_2' => 'Unser globales Team bringt vielfältige Perspektiven ein und integriert kontinuierlich neue Trends aus KI und Finanzwesen. Wir glauben an die Synergie von Menschen und Maschinen für ein einzigartiges Investment-Erlebnis.',
        'about_content_img_alt' => 'EquiLoomPRO Team Österreich',

        'period' => [
            [
                'date' => 'April <script>document.write(new Date().getFullYear() - 3)</script>',
                'title' => 'Geburt einer Vision',
                'description' => 'EquiLoomPRO wurde mit der Vision gegründet, Investieren durch KI zu revolutionieren.',
            ],
            [
                'date' => 'Juli <script>document.write(new Date().getFullYear() - 3)</script>',
                'title' => 'Wachstum und Entwicklung',
                'description' => 'Wir haben €3 Mio. an Finanzierung erhalten, um die Plattform zu entwickeln und das Team in Wien auszubauen.',
            ],
            [
                'date' => 'November <script>document.write(new Date().getFullYear() - 3)</script>',
                'title' => 'Beta-Testphase',
                'description' => 'Die Beta-Version von EquiLoomPRO wurde gestartet, um Feedback zu sammeln und die Technologie zu optimieren.',
            ],
            [
                'date' => 'Juni <script>document.write(new Date().getFullYear() - 2)</script>',
                'title' => 'Globaler Launch',
                'description' => 'EquiLoomPRO ging weltweit an den Start und brachte modernste Investment-Technologie nach Österreich und darüber hinaus.',
            ],
        ],
        'investment_title' => 'Revolutioniere deinen Investmentansatz',
        'investment_text' => 'Erlebe die Zukunft der Geldanlage mit EquiLoomPRO. Unser innovativer Mix aus KI und Datenanalyse ermöglicht es Investor:innen, Märkte mit Präzision und Klarheit zu navigieren.',
        'investment_btn' => 'Jetzt starten',

        // ---------- Contact ----------
        'contact_title' => 'Kontaktiere uns',
        'contact_text' => 'Melde dich bei uns für Fragen oder Beratung. Unser Expert:innenteam hilft dir, sichere und strategische Entscheidungen zu treffen.',
        'contact_form_enable_js' => 'Bitte aktiviere JavaScript in deinem Browser, um dieses Formular auszufüllen.',
        'contact_label_name' => 'Name',
        'contact_label_email' => 'E-Mail',
        'contact_label_message' => 'Nachricht',
        'contact_submit' => 'Absenden',
        'contact_form_agreement' => '* Mit Klick auf den Button stimmst du unserer <a href="/at/privacy" class="form-link">Datenschutzerklärung</a> und den <a href="/at/terms" class="form-link">AGB</a> zu.',
        'contact_form_success' => 'Formular erfolgreich übermittelt!',

        // ---------- Privacy ----------
        'privacy_title' => 'Datenschutzerklärung',
        'privacy_updated' => '<b>Zuletzt aktualisiert:</b> Juli <script>document.write(new Date().getFullYear() - 1)</script>',

        'privacy_1_title' => '1. Einleitung',
        'privacy_1_text' => '
<p>Diese Datenschutzerklärung von EquiLoomPRO ("wir", "uns") beschreibt, wie wir personenbezogene Daten erheben, nutzen und schützen, wenn du unsere Services ("Services") und unsere Website <a href="/at/">EquiLoomPRO</a> ("Website") verwendest. Der Schutz deiner Daten hat für uns oberste Priorität.</p>
<p>Unsere Services und Website können Links zu Drittanbietern enthalten. Für deren Datenschutzpraktiken übernehmen wir keine Verantwortung – bitte prüfe deren Richtlinien.</p>
<p>Alle Daten werden vertraulich behandelt und durch technische sowie organisatorische Maßnahmen gemäß DSGVO und österreichischem Recht geschützt.</p>
<p>Bei der Nutzung unserer Website kannst du Angaben wie Name, E-Mail oder Telefonnummer machen. Diese Informationen dienen der Identitätsprüfung, Support, Vertragserfüllung oder Kommunikation. Du kannst deine Benachrichtigungseinstellungen jederzeit ändern oder abbestellen.</p>
',

        'privacy_2_title' => '2. Datenerhebung und Nutzung',
        'privacy_2_1_title' => '2.1 Allgemein',
        'privacy_2_1_text' => '
<p>Wir erheben Daten von Besucher:innen ("Besucher"), Nutzer:innen ("Nutzer") und Partnern ("Partner"). Dazu gehören IP-Adressen, Kontaktdaten und Vertragsinformationen gemäß geltendem Datenschutzrecht.</p>
',

        'privacy_2_2_title' => '2.2 Erhebung',
        'privacy_2_2_text' => '
<p>Mit dem Zugriff auf unsere Website erklärst du dich mit der Erhebung von Daten (z. B. Cookies, IP-Adressen, Formulareingaben) einverstanden. Wenn du nicht zustimmst, verwende die Website bitte nicht.</p>
',

        'privacy_2_3_title' => '2.3 Zweck',
        'privacy_2_3_text' => '
<p>Wir verarbeiten Daten zur Verbesserung unserer Services, Personalisierung, Support und Erfüllung rechtlicher Verpflichtungen. Rechtsgrundlagen sind:</p>
<table>
  <tbody>
    <tr><td>Registrierung</td><td>Einwilligung; Vertragserfüllung</td></tr>
    <tr><td>Servicebereitstellung</td><td>Vertragserfüllung</td></tr>
    <tr><td>Kundensupport</td><td>Berechtigtes Interesse</td></tr>
    <tr><td>Marketing</td><td>Einwilligung</td></tr>
    <tr><td>Optimierung</td><td>Berechtigtes Interesse</td></tr>
  </tbody>
</table>
',

        'privacy_2_4_title' => '2.4 Datenweitergabe',
        'privacy_2_4_text' => '
<p>Wir teilen Daten nur mit vertrauenswürdigen Partnern und Dienstleistern und stellen die DSGVO-Konformität sicher. Datenübertragungen außerhalb der EU/Österreich erfolgen nur mit angemessenem Schutz.</p>
',

        'privacy_3_title' => '3. Partner',
        'privacy_3_text' => '
<p>Daten von Partnern verarbeiten wir nur mit deren Einwilligung oder auf Grundlage berechtigter Interessen. Dabei achten wir auf Sicherheit und gesetzliche Vorgaben.</p>
',

        'privacy_4_title' => '4. Sicherheit',
        'privacy_4_text' => '
<p>Wir setzen moderne Sicherheitsmaßnahmen ein, um Daten vor Verlust, Missbrauch oder unbefugtem Zugriff zu schützen. Dennoch kann kein System absolute Sicherheit garantieren.</p>
',

        'privacy_5_title' => '5. Cookies',
        'privacy_5_text' => '
<p>Details findest du in unserer <a href="/at/cookie">Cookie-Richtlinie</a>. Dort erklären wir, wie Cookies und Tracking-Technologien genutzt werden.</p>
',

        'privacy_6_title' => '6. Externe Links',
        'privacy_6_text' => '
<p>Unsere Website kann externe Links enthalten. Wir übernehmen keine Verantwortung für deren Datenschutzpraktiken.</p>
',

        'privacy_7_title' => '7. Speicherdauer',
        'privacy_7_text' => '
<p>Wir speichern personenbezogene Daten nur solange wie nötig. Nach Kündigung des Accounts löschen wir die Daten gemäß den gesetzlichen Fristen in Österreich.</p>
',

        'privacy_8_title' => '8. Deine Rechte',
        'privacy_8_text' => '
<p>Du hast Rechte auf Auskunft, Berichtigung, Löschung, Einschränkung, Datenübertragbarkeit sowie Widerspruch. Wende dich dazu jederzeit an uns.</p>
',

        'privacy_9_title' => '9. Marketing',
        'privacy_9_text' => '
<p>Mit deiner Einwilligung nutzen wir deine Daten für Marketingzwecke. Du kannst diese Einwilligung jederzeit widerrufen.</p>
',

        'privacy_10_title' => '10. Zustimmung',
        'privacy_10_text' => '
<p>Durch Nutzung unserer Website und Services stimmst du dieser Datenschutzerklärung zu. Änderungen werden veröffentlicht, fortgesetzte Nutzung gilt als Zustimmung.</p>
',

        'privacy_11_title' => '11. Rechtliche Offenlegung',
        'privacy_11_text' => '
<p>Wir können Daten offenlegen, wenn dies gesetzlich vorgeschrieben ist oder unsere Rechte geschützt werden müssen.</p>
',

        'privacy_12_title' => '12. Kontakt',
        'privacy_12_text' => '
<p>Für Datenschutzanfragen kontaktiere unseren Datenschutzbeauftragten: <a href="mailto:support@zevriocapiture.org">support@zevriocapiture.org</a></p>
',

        // ---------- Terms ----------
        'terms_title' => 'Allgemeine Geschäftsbedingungen',
        'terms_updated' => '<b>Zuletzt aktualisiert:</b> Juli <script>document.write(new Date().getFullYear() - 1)</script>',

        'terms_1_title' => '1. Einleitung',
        'terms_1_text' => '
<p>Willkommen auf der Website von EquiLoomPRO ("Website"). Mit der Nutzung unserer Website und Services ("Services") akzeptierst du diese AGB und unsere Datenschutzerklärung.</p>
<p>Wir können diese Bedingungen jederzeit ändern. Mit der weiteren Nutzung erklärst du dich einverstanden.</p>
',

        'terms_2_title' => '2. Keine Anlageberatung',
        'terms_2_text' => '
<p>Die Inhalte stellen keine persönliche Finanz- oder Anlageberatung dar. Bitte konsultiere unabhängige Berater, bevor du Investitionsentscheidungen triffst.</p>
',

        'terms_3_title' => '3. Services',
        'terms_3_text' => '
<p>Nicht alle Services werden direkt von uns angeboten. Für Drittanbieter übernehmen wir keine Haftung.</p>
',

        'terms_4_title' => '4. Änderungen',
        'terms_4_text' => '
<p>Wir behalten uns das Recht vor, diese AGB zu ändern. Fortgesetzte Nutzung gilt als Zustimmung.</p>
',

        'terms_5_title' => '5. Teilnahmeberechtigung',
        'terms_5_text' => '
<p>Unsere Services sind nur für Personen ab 18 Jahren mit Geschäftsfähigkeit verfügbar.</p>
',

        'terms_6_title' => '6. Beschreibung der Services',
        'terms_6_text' => '
<p><b>Abonnement:</b> Registrierung ermöglicht Zugriff auf kostenlose oder kostenpflichtige Services. Keine individuelle Beratung.</p>
<p><b>Drittanbieter:</b> Wir haften nicht für Inhalte oder Verfügbarkeit von Drittservices.</p>
<p><b>Allgemein:</b> Du musst korrekte Daten angeben. Unvollständige oder falsche Angaben können zur Ablehnung führen.</p>
',

        'terms_7_title' => '7. Rechte',
        'terms_7_text' => '
<p>Website und Inhalte sind urheberrechtlich geschützt. Unerlaubte Vervielfältigung oder Weitergabe ist verboten.</p>
',

        'terms_8_title' => '8. Vertraulichkeit',
        'terms_8_text' => '
<p>Vertrauliche Informationen bleiben auch nach Vertragsende für ein Jahr geschützt.</p>
',

        'terms_9_title' => '9. Verlinkungen',
        'terms_9_text' => '
<p>Hyperlinks oder Framing unserer Website ohne Zustimmung sind untersagt.</p>
',

        'terms_10_title' => '10. Haftungsausschluss',
        'terms_10_text' => '
<p>Services und Inhalte werden "wie besehen" bereitgestellt. Keine Garantie für Vollständigkeit oder Fehlerfreiheit.</p>
',

        'terms_11_title' => '11. Haftungsbeschränkung',
        'terms_11_text' => '
<p>Wir haften nicht für indirekte Schäden. Unsere maximale Haftung beträgt €240, soweit gesetzlich zulässig.</p>
',

        'terms_12_title' => '12. Freistellung',
        'terms_12_text' => '
<p>Du stellst uns von Ansprüchen Dritter frei, die durch deine Nutzung der Website entstehen.</p>
',

        'terms_13_title' => '13. Drittwebseiten',
        'terms_13_text' => '
<p>Wir sind nicht verantwortlich für externe Websites oder deren Inhalte.</p>
',

        'terms_14_title' => '14. Datenschutz',
        'terms_14_text' => '
<p>Wir halten die DSGVO und österreichische Datenschutzgesetze ein. Sicherheitsmaßnahmen sind implementiert. Datenpannen melden wir gemäß Gesetz.</p>
',

        'terms_15_title' => '15. Anwendbares Recht',
        'terms_15_text' => '
<p>Diese AGB unterliegen dem österreichischen Recht. Gerichtsstand ist Wien.</p>
',

        'terms_16_title' => '16. Kontakt',
        'terms_16_text' => '
<p>Fragen? Kontaktiere uns unter <a href="mailto:support@zevriocapiture.org">support@zevriocapiture.org</a>.</p>
',
    ],
    'it' => [
        'language_iso' => 'it',
        'country_name' => 'Italia',
        'locale' => 'it_IT',
        'locale_lang' => 'it-IT',
        'language_name' => 'Italiano',
        'city' => 'Roma',
        'country_code' => 'IT',
        'geo_position' => '41.902782, 12.496366', // Roma

        'jsonld_organization_name' => 'EquiLoomPRO',
        'jsonld_organization_review_rating' => '4.96',
        'jsonld_organization_review_author' => 'Utente EquiLoomPRO',
        'jsonld_software_categories' => 'Strumento di investimento in criptovalute',
        'jsonld_software_price' => '170',
        'jsonld_software_price_currency' => 'EUR',
        'brand_name_api' => 'EquLum App AI',

        'home' => 'Home',
        'about' => 'Chi siamo',
        'contact' => 'Contatti',
        'privacy' => 'Privacy',
        'terms' => 'Termini e Condizioni',

        // Home (index)
        'title' => 'EquiLoomPRO — Investimenti Automatici & Gestione della Liquidità',
        'meta_description' => 'Rendi la ricchezza davvero tua con EquiLoomPRO. Portafogli assistiti dall’AI, risparmio automatico e funzioni fiscali efficienti per investire con fiducia.',
        'meta_keywords' => 'EquiLoomPRO, investimenti automatici, AI investing, gestione portafoglio, conto cash, risparmio, efficienza fiscale, Italia, Roma',

        // Open Graph / Twitter (globali)
        'og_title' => 'EquiLoomPRO — Piattaforma di Investimento con AI',
        'og_description' => 'Portafogli automatici, liquidità intelligente e investimenti senza sforzo. Inizia con EquiLoomPRO e fai crescere il tuo patrimonio con fiducia.',
        'og_image' => '/assets/images/share.webp',

        'twitter_title' => 'EquiLoomPRO — Investimenti Automatici',
        'twitter_description' => 'Portafogli assistiti dall’AI e risparmio automatico per far crescere la tua ricchezza con fiducia.',

        // About (SEO desc)
        'about_desc_content' => 'Scopri EquiLoomPRO — team con base a Roma di investitori ed esperti di AI che costruisce una piattaforma di investimento ad alta precisione e velocità.',
        'about_keywords' => 'chi è EquiLoomPRO, azienda, team AI investing, piattaforma di investimento, Roma',

        // Contact (SEO desc)
        'contact_desc_content' => 'Domande o bisogno di orientamento? Contatta EquiLoomPRO — i nostri esperti ti aiutano a prendere decisioni d’investimento sicure e strategiche.',
        'contact_keywords' => 'contatti EquiLoomPRO, supporto, aiuto, domande su investimenti, Roma',

        // Terms (SEO)
        'terms_desc_content' => 'Leggi i Termini e Condizioni d’uso del sito e dei servizi di EquiLoomPRO: requisiti, limitazioni e avvertenze legali.',
        'terms_keywords' => 'termini d’uso, termini e condizioni, EquiLoomPRO, legale, Italia',

        // Privacy (SEO)
        'privacy_desc_content' => 'Come EquiLoomPRO raccoglie, usa e protegge i tuoi dati personali, i tuoi diritti e il nostro impegno per privacy e sicurezza.',
        'privacy_keywords' => 'privacy policy, protezione dati, GDPR, dati personali, EquiLoomPRO',

        // ---------- JSON-LD content ----------
        'jsonld_organization_review_body' => 'EquiLoomPRO offre una piattaforma d’investimento assistita dall’AI che combina portafogli automatizzati, gestione smart della liquidità e funzioni fiscalmente efficienti per aiutare i clienti a Roma a far crescere il patrimonio con fiducia.',

        // FAQ (per la home se page === "index")
        'jsonld_faq_1_question' => 'Che cos’è EquiLoomPRO?',
        'jsonld_faq_1_answer' => 'EquiLoomPRO è una piattaforma d’investimento assistita dall’AI che ti aiuta a costruire e automatizzare portafogli diversificati, ottimizzare il risparmio e investire con fiducia.',

        'jsonld_faq_2_question' => 'In che modo EquiLoomPRO mi aiuta a investire?',
        'jsonld_faq_2_answer' => 'Offriamo portafogli personalizzabili o automatici, strumenti di liquidità intelligente e funzioni pensate per migliorare il risultato dopo le imposte — così investi senza sforzo restando sempre in controllo.',

        'jsonld_faq_3_question' => 'EquiLoomPRO è disponibile in Italia?',
        'jsonld_faq_3_answer' => 'Sì. EquiLoomPRO supporta clienti a Roma, Milano, Firenze e in tutta Italia, con esperienza, lingua e valuta locali.',

        'jsonld_faq_4_question' => 'Devo per forza usare automazione o AI?',
        'jsonld_faq_4_answer' => 'L’automazione è facoltativa. Puoi lasciare che la piattaforma gestisca le attività ricorrenti oppure costruire e regolare il tuo portafoglio quando vuoi.',

        'jsonld_faq_5_question' => 'Come si inizia?',
        'jsonld_faq_5_answer' => 'Crea il profilo, scegli o personalizza un portafoglio e versa i fondi. Nessuna commissione nascosta di registrazione; i servizi partner possono avere requisiti propri.',

        'jsonld_faq_6_question' => 'Come proteggete i miei dati?',
        'jsonld_faq_6_answer' => 'Applichiamo robuste misure tecniche e organizzative e rispettiamo gli standard UE/italiani di protezione dei dati per salvaguardare le tue informazioni.',

        // Header
        'header_logo_alt' => 'Logo EquiLoomPRO',
        'header_logo_text' => 'EquiLoomPRO',
        'header_burger_alt' => 'Menu',
        'header_cross_alt' => 'Chiudi',

        // Hero
        'hero_form_title' => 'Registrati ora',
        'hero_form_notice' => '* Facendo clic accetti la <a href="/it/privacy" class="form-link">Privacy Policy</a> e i <a href="/it/terms" class="form-link">Termini & Condizioni</a>.',
        'hero_title' => 'Rendi la ricchezza davvero tua.',
        'hero_subtitle' => 'Investimenti e risparmio personalizzati, automatici, senza sforzo.',
        'hero_stat_nerdwallet' => "Miglior Robo-advisor, 2019<sup class=\"sup\">1</sup><br>Miglior App di Gestione Liquidità, 2020<sup class=\"sup\">1</sup>",
        'hero_stat_investopedia' => "Miglior Robo-advisor, 2020<sup class=\"sup\">1</sup>",
        'hero_stat_clients' => 'Clienti soddisfatti',
        'hero_stat_funds' => 'Fondi dei clienti',
        'hero_stat_appstore' => 'Apple App Store <sup class="sup">2</sup>',
        'hero_stat_playstore' => 'Google Play Store <sup class="sup">2</sup>',

        // Investition section
        'investition_title' => 'Investire non è semplice. Noi lo facciamo sembrare tale.',
        'investition_text' => 'Lascia che personalizziamo un portafoglio per te o costruiscilo da solo; la nostra potente automazione massimizzerà i tuoi investimenti, ottimizzando la performance e aiutandoti a ridurre le imposte.',
        'investition_btn_start' => 'Inizia a investire',
        'investition_btn_more' => 'Scopri di più',
        'investition_notification_app' => 'EquiLoomPRO',
        'investition_notification_time' => 'ora',
        'investition_notification_1' => 'Ti abbiamo fatto risparmiare <span>€62,50</span> di tasse.',
        'investition_notification_2' => 'Abbiamo investito automaticamente il tuo versamento di <span>€200</span>.',

        // Cash section
        'cash_title' => 'Liquidità quotidiana, progettata per costruire ricchezza a lungo termine.',
        'cash_text' => 'Il conto Cash, offerto con partner bancari regolamentati, ti permette di automatizzare il risparmio, pagare bollette, prelevare in migliaia di ATM e investire l’eccedenza in pochi secondi.',
        'cash_btn_start' => 'Inizia a risparmiare',
        'cash_btn_more' => 'Scopri di più',
        'cash_img_phone_alt' => 'Telefono',
        'cash_img_card_alt' => 'Carta',

        // Saving section
        'saving_title' => 'Risparmi e investi. Mentre ti rilassi.',
        'saving_text' => 'Dicci per cosa stai risparmiando e metteremo da parte in automatico la liquidità extra per raggiungere i tuoi obiettivi. Poiché colleghiamo tutti i tuoi conti, ti basta un’unica app per vedere crescere il patrimonio.',
        'saving_img_alt' => 'Risparmio',

        // Testimonials
        'testimonial_title' => 'TESTIMONIANZA',
        'testimonial_1_quote' => 'È la risorsa <strong>migliore</strong> che ho trovato per investire, gestire la pensione e vedere il mio quadro finanziario.',
        'testimonial_1_author' => 'Lorenzo S',
        'testimonial_2_quote' => '<strong>EquiLoomPRO</strong> è la prima cosa che mi ha davvero motivato a risparmiare.',
        'testimonial_2_author' => 'Giulia R',
        'testimonial_3_quote' => 'È <strong>automatico</strong>, e io sono pigro.',
        'testimonial_3_author' => 'Giorgio L',

        // Trust
        'trust_title' => 'Oltre <strong>120.000</strong> persone in tutta Italia usano già EquiLoomPRO per guadagnare di più e preoccuparsi di meno',
        'trust_btn' => 'Inizia ora',
        'trust_img_alt' => 'Finestra aperta con pianta',
        'trust_subtitle' => 'MENZIONATO DA',
        'trust_logo_wsj_alt' => 'WSJ',
        'trust_logo_bloomberg_alt' => 'Bloomberg',
        'trust_logo_nyt_alt' => 'The New York Times',
        'trust_logo_reuters_alt' => 'Reuters',
        'trust_logo_cnbc_alt' => 'CNBC',

        // Footer
        'footer_logo_alt' => 'Logo EquiLoomPRO',
        'footer_logo_text' => 'EquiLoomPRO',
        'footer_legal_note_1' => 'Le testimonianze sono state fornite da clienti di EquiLoomPRO Advisers e EquiLoomPRO Brokerage. Non è garantito che altri clienti ottengano esperienze o risultati simili.',
        'footer_legal_note_2' => 'Nerdwallet e Investopedia (gli “Endorser”) ricevono un compenso per indirizzare potenziali clienti a EquiLoomPRO Advisers, LLC tramite annunci sui loro siti. Gli Endorser e EquiLoomPRO Advisers sono indipendenti e non hanno relazioni ulteriori.',
        'footer_legal_note_3' => 'Le valutazioni su Apple App Store e Google Play Store si basano sui voti degli utenti da febbraio 2014 (Apple) e dicembre 2015 (Google) fino a giugno <span class="currentYear"></span>. Le valutazioni sono elaborate da Apple, Inc. e Google, Inc.',
        'footer_legal_note_4' => 'Usando questo sito, accetti che le informazioni fornite hanno finalità informative e accetti i nostri <a href="/it/terms" class="legal-link">Termini d’uso</a> e la <a href="/it/privacy" class="legal-link">Privacy Policy</a>.',
        'footer_legal_note_5' => 'EquiLoomPRO Advisers si basa su fonti ritenute affidabili, incluse quelle dei clienti e di terze parti, ma non può garantirne completezza o accuratezza. Nulla va inteso come offerta o sollecitazione all’acquisto o vendita di strumenti finanziari. EquiLoomPRO non fornisce consulenza fiscale.',
        'footer_legal_note_6' => 'Collaboriamo con fornitori di servizi bancari e di pagamento regolamentati nell’UE/Italia per offrire funzionalità di conto e carta. I servizi bancari sono erogati da partner terzi, soggetti a verifica d’identità e normative locali.',
        'footer_legal_note_7' => 'Il conto Cash è offerto tramite broker e partner bancari regolamentati ed è separato dai conti d’investimento. I servizi di gestione e consulenza sono forniti da EquiLoomPRO Advisers o entità affiliate. Prodotti e servizi variano per giurisdizione.',
        'footer_legal_note_8' => 'L’efficacia del Tax-Loss Harvesting nel ridurre l’imposta dipende dal profilo fiscale e d’investimento complessivo del cliente. La strategia può generare più operazioni e, in certi casi, plusvalenze o wash sale, nonché costi di transazione. Le perdite possono non essere sempre compensate e sono soggette alle norme fiscali applicabili.',
        'footer_legal_note_9' => 'Gli investimenti comportano rischi, inclusa la possibile perdita del capitale. Rendimenti storici, attesi e proiezioni sono illustrativi e potrebbero non riflettere la performance futura.',
        'footer_legal_copy' => 'EquiLoomPRO, EquiLoomPRO Advisers e EquiLoomPRO Brokerage sono controllate al 100% da EquiLoomPRO Corporation. <br><br> © <span class="currentYear"></span> EquiLoomPRO Corporation. Tutti i diritti riservati.',

        // About -----------------------------------------------
        'about_title' => 'Chi siamo',
        'about_text' => 'In <span class="brand-name">EquiLoomPRO</span> siamo un team di investitori esperti ed esperti di AI che costruisce una piattaforma di investimento di livello top, nota per precisione e velocità.',
        'about_content_title' => 'Un team globale, appassionato e diversificato con la missione di ridisegnare il futuro degli investimenti.',
        'about_content_text_1' => 'Sfruttiamo la potenza dell’intelligenza artificiale unita all’esperienza degli investitori per offrire una piattaforma che eccelle in accuratezza, rapidità e redditività.',
        'about_content_text_2' => 'Il nostro team internazionale porta prospettive diverse, innovando costantemente per integrare le tendenze più recenti di AI e finanza. L’unione tra competenza umana e intelligenza delle macchine crea un’esperienza d’investimento trasformativa.',
        'about_content_img_alt' => 'Team EquiLoomPRO',
        'period' => [
            [
                'date' => 'Aprile <script>document.write(new Date().getFullYear() - 3)</script>',
                'title' => 'Nasce una visione',
                'description' => 'EquiLoomPRO è stata fondata con l’obiettivo di rivoluzionare gli investimenti tramite l’AI.',
            ],
            [
                'date' => 'Luglio <script>document.write(new Date().getFullYear() - 3)</script>',
                'title' => 'Crescita e sviluppo',
                'description' => 'Abbiamo raccolto €3 milioni per accelerare lo sviluppo della piattaforma e ampliare il team.',
            ],
            [
                'date' => 'Novembre <script>document.write(new Date().getFullYear() - 3)</script>',
                'title' => 'Fase beta',
                'description' => 'Lanciata la beta di EquiLoomPRO, raccogliendo feedback e perfezionando la tecnologia.',
            ],
            [
                'date' => 'Giugno <script>document.write(new Date().getFullYear() - 2)</script>',
                'title' => 'Lancio globale',
                'description' => 'EquiLoomPRO debutta a livello globale, portando la nostra tecnologia d’investimento avanzata agli utenti di tutto il mondo.',
            ],
        ],
        'investment_title' => 'Rivoluziona il tuo modo di investire',
        'investment_text' => 'Sperimenta il futuro degli investimenti con EquiLoomPRO. La nostra combinazione di AI e analisi dati offre capacità eccezionali per affrontare i mercati con precisione.',
        'investment_btn' => 'Inizia',

        // Contact
        'contact_title' => 'Contattaci',
        'contact_text' => 'Scrivici per assistenza o domande: il nostro team ti aiuterà a prendere decisioni d’investimento strategiche e consapevoli.',
        'contact_form_enable_js' => 'Abilita JavaScript nel browser per completare il modulo.',
        'contact_label_name' => 'Nome',
        'contact_label_email' => 'Email',
        'contact_label_message' => 'Commento o messaggio',
        'contact_submit' => 'Invia',
        'contact_form_agreement' => ' * Facendo clic accetti la <a href="/it/privacy" class="form-link">Privacy Policy</a> e i <a href="/it/terms" class="form-link">Termini &amp; Condizioni</a>.',
        'contact_form_success' => 'Modulo inviato con successo!',

        // Privacy Policy --------------------------------------
        'privacy_title' => 'Privacy Policy',
        'privacy_updated' => '<b>Ultimo aggiornamento:</b> Luglio <script>document.write(new Date().getFullYear() - 1)</script>',

        'privacy_1_title' => '1. Introduzione',
        'privacy_1_text' => '
<p>La presente Privacy Policy di EquiLoomPRO ("noi") descrive come gestiamo i dati personali quando utilizzi i nostri servizi ("Servizi") e il sito web <a href="/it/">EquiLoomPRO</a> ("Sito"). Proteggere la tua privacy è la nostra priorità.</p>
<p>I nostri Servizi e il Sito possono rimandare a siti terzi. Non siamo responsabili delle loro pratiche: ti invitiamo a leggere le rispettive informative.</p>
<p>Trattiamo i dati come confidenziali, adottando misure tecniche e organizzative adeguate per proteggerli da accessi non autorizzati, perdita o divulgazione.</p>
<p>Durante l’uso del Sito potresti fornirci dati (es. nome, email, numero di telefono). Usiamo tali dati per verifiche, assistenza, adempimenti contrattuali e, con il tuo consenso, per aggiornamenti e comunicazioni. Puoi gestire le preferenze o rinunciare in qualsiasi momento.</p>
',

        'privacy_2_title' => '2. Raccolta e uso dei dati',
        'privacy_2_1_title' => '2.1. Generale',
        'privacy_2_1_text' => '
<p>Raccogliamo dati dei visitatori del Sito ("Visitatori"), degli utenti registrati ("Utenti") e dei partner ("Partner"). I dati personali possono includere indirizzo IP, nome, recapiti, informazioni sul rapporto contrattuale, conformemente alle leggi applicabili.</p>
',

        'privacy_2_2_title' => '2.2. Modalità di raccolta',
        'privacy_2_2_text' => '
<p>Accedendo al Sito acconsenti alla raccolta dei dati (ad es. tramite cookie, indirizzi IP o moduli). Se non sei d’accordo, ti preghiamo di non utilizzare il Sito.</p>
',

        'privacy_2_3_title' => '2.3. Finalità e basi giuridiche',
        'privacy_2_3_text' => '
<p>Trattiamo i dati personali per migliorare i Servizi, personalizzare l’esperienza, fornire supporto e adempiere obblighi legali. Finalità e basi giuridiche includono:</p>
<table>
    <tbody>
        <tr><td>Registrazione account</td><td>Consenso; Esecuzione del contratto</td></tr>
        <tr><td>Erogazione Servizi</td><td>Esecuzione del contratto</td></tr>
        <tr><td>Supporto e richieste</td><td>Interesse legittimo</td></tr>
        <tr><td>Marketing</td><td>Consenso</td></tr>
        <tr><td>Miglioramento dei Servizi</td><td>Interesse legittimo</td></tr>
    </tbody>
</table>
',

        'privacy_2_4_title' => '2.4. Condivisione dei dati',
        'privacy_2_4_text' => '
<p>Possiamo condividere dati con fornitori e partner affidabili. Per gli utenti nell’UE/Italia garantiamo trasferimenti conformi al GDPR e alle norme applicabili.</p>
',

        'privacy_3_title' => '3. Partner',
        'privacy_3_text' => '
<p>Trattiamo i dati dei Partner con consenso o per interessi legittimi, assicurando sicurezza e conformità normativa.</p>
',

        'privacy_4_title' => '4. Sicurezza',
        'privacy_4_text' => '
<p>Applichiamo misure tecniche e organizzative per proteggere i dati personali. I terzi con cui condividiamo dati sono vincolati a standard equivalenti. Nessun sistema è però immune da violazioni; usando i Servizi accetti tale rischio residuo.</p>
',

        'privacy_5_title' => '5. Cookie',
        'privacy_5_text' => '
<p>Consulta la nostra <a href="/it/cookie">Cookie Policy</a> per dettagli su cookie e tecnologie di tracciamento.</p>
',

        'privacy_6_title' => '6. Link di terze parti',
        'privacy_6_text' => '
<p>Il Sito può contenere link esterni. Non rispondiamo delle loro pratiche privacy: ti invitiamo a leggere le rispettive policy prima di fornire dati.</p>
',

        'privacy_7_title' => '7. Conservazione dei dati',
        'privacy_7_text' => '
<p>Conserviamo i dati personali per il tempo necessario alle finalità indicate. Alla chiusura dell’account, i dati sono cancellati secondo legge, salvo obblighi di conservazione.</p>
',

        'privacy_8_title' => '8. I tuoi diritti',
        'privacy_8_text' => '
<p>Hai diritto di accesso, rettifica, cancellazione, limitazione, portabilità, opposizione al trattamento e revoca del consenso. Contattaci per esercitarli.</p>
',

        'privacy_9_title' => '9. Marketing',
        'privacy_9_text' => '
<p>Possiamo usare i tuoi dati per marketing solo con il tuo consenso. Puoi revocarlo scrivendoci.</p>
',

        'privacy_10_title' => '10. Accettazione della Policy',
        'privacy_10_text' => '
<p>Usare il Sito o i Servizi implica l’accettazione della presente Policy. Potremo aggiornarla; l’uso continuato comporta accettazione delle modifiche.</p>
',

        'privacy_11_title' => '11. Divulgazioni legali',
        'privacy_11_text' => '
<p>Potremmo divulgare dati se richiesto dalla legge o per proteggere i nostri diritti.</p>
',

        'privacy_12_title' => '12. Contatti',
        'privacy_12_text' => '
<p>Per questioni privacy scrivi al nostro Data Protection Officer: <a href="mailto:support@zevriocapiture.org">support@zevriocapiture.org</a>.</p>
',

        // Terms of Use -----------------------------------------------
        'terms_title' => 'Termini di utilizzo',
        'terms_updated' => '<b>Ultimo aggiornamento:</b> Luglio <script>document.write(new Date().getFullYear() - 1)</script>',

        'terms_1_title' => '1. Introduzione',
        'terms_1_text' => '
<p>Benvenuto sul sito di EquiLoomPRO ("Sito"), gestito da EquiLoomPRO ("noi"). Usando il Sito o i nostri servizi ("Servizi") accetti i presenti Termini e la nostra <a href="/it/privacy" class="legal-link">Privacy Policy</a>. Contatti: <a href="mailto:support@zevriocapiture.org">support@zevriocapiture.org</a>.</p>
<p>Assistenza per i clienti in Italia: Roma (sede), Milano e Firenze (operativo).</p>
<p>Ci riserviamo di aggiornare i Termini senza preavviso. Continuando a usare il Sito accetti automaticamente le modifiche.</p>
',

        'terms_2_title' => '2. Nessuna consulenza d’investimento',
        'terms_2_text' => '
<p>I contenuti sono informativi e non costituiscono consulenza finanziaria, legale o fiscale personalizzata. Rivolgiti a un consulente indipendente prima di investire.</p>
',

        'terms_3_title' => '3. Servizi',
        'terms_3_text' => '
<p>Alcuni Servizi sono forniti da terzi. Link o riferimenti a siti esterni non implicano approvazione. Non siamo responsabili dei contenuti o servizi di terzi.</p>
',

        'terms_4_title' => '4. Ambito e modifiche',
        'terms_4_text' => '
<p>Questi Termini costituiscono l’accordo completo tra te e noi. Possiamo modificare, sospendere o interrompere funzioni del Sito a nostra discrezione. L’uso continuato equivale ad accettazione.</p>
',

        'terms_5_title' => '5. Idoneità',
        'terms_5_text' => '
<p>I Servizi sono destinati a maggiorenni (18+) in grado di stipulare contratti secondo la legge italiana. I minori non sono autorizzati.</p>
',

        'terms_6_title' => '6. Descrizione dei Servizi',
        'terms_6_text' => '
<p><b>Servizi in abbonamento:</b> Contenuti gratuiti o a pagamento dopo la registrazione, inclusi dati e strumenti educativi. Non sono consulenza personalizzata né ne garantiamo l’accuratezza.</p>
<p><b>Servizi di terzi:</b> Prodotti/servizi di terzi possono essere offerti. Si applicano i termini dei fornitori terzi.</p>
<p><b>Generale:</b> I dati di registrazione devono essere veritieri. Possiamo rifiutare registrazioni incomplete o fraudolente; non rispondiamo di interruzioni del servizio.</p>
',

        'terms_7_title' => '7. Diritti di proprietà',
        'terms_7_text' => '
<p>Contenuti, codice e marchi del Sito appartengono a EquiLoomPRO o a licenzianti. Vietata riproduzione o uso non autorizzato.</p>
',

        'terms_8_title' => '8. Informazioni riservate',
        'terms_8_text' => '
<p>Le informazioni confidenziali sono protette per un anno dopo la cessazione del rapporto, salvo siano pubbliche o ottenute senza restrizioni.</p>
',

        'terms_9_title' => '9. Collegamenti e framing',
        'terms_9_text' => '
<p>Vietato creare link, frame o mirror al Sito senza autorizzazione scritta. L’uso non autorizzato può comportare responsabilità.</p>
',

        'terms_10_title' => '10. Esclusione di garanzie',
        'terms_10_text' => '
<p>Servizi e contenuti sono forniti "così come sono", senza garanzie. Non garantiamo funzionamento continuo o privo di errori.</p>
',

        'terms_11_title' => '11. Limitazione di responsabilità',
        'terms_11_text' => '
<p>Nei limiti di legge, non rispondiamo di danni indiretti o perdita di profitti. La responsabilità totale non supererà €200.</p>
',

        'terms_12_title' => '12. Manleva',
        'terms_12_text' => '
<p>Ti impegni a manlevare EquiLoomPRO e partner da pretese derivanti dall’uso del Sito o dalla violazione dei Termini.</p>
',

        'terms_13_title' => '13. Siti di terzi',
        'terms_13_text' => '
<p>I collegamenti a siti di terzi sono per comodità. Non siamo responsabili di contenuti, sicurezza o privacy di tali siti.</p>
',

        'terms_14_title' => '14. Protezione dei dati',
        'terms_14_text' => '
<p>Gestiamo i dati personali secondo GDPR e norme italiane. Vedi <a href="/it/privacy" class="legal-link">Privacy Policy</a>. In caso di violazioni significative informeremo gli utenti come previsto.</p>
',

        'terms_15_title' => '15. Legge applicabile e risoluzione delle controversie',
        'terms_15_text' => '
<p>I Termini sono regolati dalla legge italiana. Le controversie saranno risolte tramite arbitrato a Roma, in italiano.</p>
',

        'terms_16_title' => '16. Contatti',
        'terms_16_text' => '
<p>Per domande sui Termini: <a href="mailto:support@zevriocapiture.org">support@zevriocapiture.org</a> — <a href="/it/terms">/it/terms</a>.</p>
',
    ],

    'ca' => [
        'language_iso' => 'en',
        'country_name' => 'Canada',
        'locale' => 'en_CA',
        'locale_lang' => 'en-CA',
        'language_name' => 'English (Canada)',
        'city' => 'Toronto',
        'country_code' => 'CA',
        'geo_position' => '43.653226, -79.383184',
        'jsonld_organization_name' => 'EquiLoomPRO',
        'jsonld_organization_review_rating' => '4.96',
        'jsonld_organization_review_author' => 'EquiLoomPRO User',
        'jsonld_software_categories' => 'Cryptocurrency Investment Tool',
        // original 190 USD -> approx ×1.35 to CAD, rounded up
        'jsonld_software_price' => '257',
        'jsonld_software_price_currency' => 'CAD',
        'brand_name_api' => 'EquLum App AI',

        'home' => 'Home',
        'about' => 'About Us',
        'contact' => 'Contact Us',
        'privacy' => 'Privacy Policy',
        'terms' => 'Terms and Conditions',

        // Home (index)
        'title' => 'EquiLoomPRO — Automated Investing & Cash Management',
        'meta_description' => 'Make wealth your own with EquiLoomPRO. AI-assisted portfolios, automated savings, and tax-efficient features to help you invest confidently and grow your money.',
        'meta_keywords' => 'EquiLoomPRO, automated investing, AI investing, portfolio management, cash account, savings, tax efficient, Canada, Toronto',

        // Open Graph / Twitter (global)
        'og_title' => 'EquiLoomPRO — AI-Powered Investing Platform',
        'og_description' => 'Automated portfolios, smart cash, and effortless investing. Start with EquiLoomPRO and grow your wealth with confidence.',
        'og_image' => '/assets/images/share.webp',

        'twitter_title' => 'EquiLoomPRO — Automated Investing',
        'twitter_description' => 'AI-assisted portfolios and automated savings to help you grow wealth with confidence.',

        // About (metas)
        'about_desc_content' => 'Meet EquiLoomPRO — a Toronto-based team of investors and AI experts building a high-precision, high-speed investment platform that helps you grow wealth confidently.',
        'about_keywords' => 'about EquiLoomPRO, company, AI investing team, investment platform, Toronto, Canada',

        // Contact (metas)
        'contact_desc_content' => 'Questions or guidance? Contact EquiLoomPRO — our experts are ready to help you make confident, strategic investment decisions.',
        'contact_keywords' => 'contact EquiLoomPRO, support, help, investing questions, Toronto, Canada',

        // Terms (metas)
        'terms_desc_content' => 'Read the Terms and Conditions for using EquiLoomPRO’s website and services, including eligibility, limitations, and legal notices.',
        'terms_keywords' => 'terms of use, terms and conditions, EquiLoomPRO, legal, Canada',

        // Privacy (metas)
        'privacy_desc_content' => 'How EquiLoomPRO collects, uses, and protects your personal data, your rights, and our commitment to privacy and security.',
        'privacy_keywords' => 'privacy policy, data protection, PIPEDA, personal data, EquiLoomPRO, Canada',

        // ---------- JSON-LD content ----------
        'jsonld_organization_review_body' => 'EquiLoomPRO delivers an AI-assisted investing platform that combines automated portfolios, smart cash management, and tax-efficient features to help clients in Toronto grow wealth with confidence.',

        // FAQ (used on homepage if page === "index")
        'jsonld_faq_1_question' => 'What is EquiLoomPRO?',
        'jsonld_faq_1_answer' => 'EquiLoomPRO is an AI-assisted investing platform that helps you build and automate diversified portfolios, optimize savings, and invest with confidence.',

        'jsonld_faq_2_question' => 'How does EquiLoomPRO help me invest?',
        'jsonld_faq_2_answer' => 'We offer customizable or automated portfolios, smart cash tools, and features designed to improve after-tax outcomes — so you can invest effortlessly while staying in control.',

        'jsonld_faq_3_question' => 'Is EquiLoomPRO available in Canada?',
        'jsonld_faq_3_answer' => 'Yes. EquiLoomPRO supports clients in Toronto and across Canada, with experiences tailored to your locale and currency (CAD).',

        'jsonld_faq_4_question' => 'Do I need to use automation or AI?',
        'jsonld_faq_4_answer' => 'Automation is optional. You can let the platform handle routine tasks or build and adjust your own portfolio whenever you like.',

        'jsonld_faq_5_question' => 'How do I get started?',
        'jsonld_faq_5_answer' => 'Create your profile, choose or customize a portfolio, and fund your account. There are no hidden sign-up fees; partner services may have their own requirements.',

        'jsonld_faq_6_question' => 'How does EquiLoomPRO protect my data?',
        'jsonld_faq_6_answer' => 'We apply robust technical and organizational security measures and follow applicable Canadian privacy standards (e.g., PIPEDA) to safeguard your information.',

        // Header section
        'header_logo_alt' => 'EquiLoomPRO Logo',
        'header_logo_text' => 'EquiLoomPRO',
        'header_burger_alt' => 'Menu',
        'header_cross_alt' => 'Close',

        // Hero section
        'hero_form_title' => 'Register now',
        'hero_form_notice' => '* By clicking the button you agree and accept the <a href="/ca/privacy" class="form-link">Privacy Policy</a> and <a href="/ca/terms" class="form-link">Terms &amp; Conditions</a>.',
        'hero_title' => 'Make wealth your own.',
        'hero_subtitle' => 'Personalized, Automated, Effortless Investing and Savings.',
        'hero_stat_nerdwallet' => "Best Robo-advisor, 2019<sup class=\"sup\">1</sup><br>Best Cash Management App, 2020<sup class=\"sup\">1</sup>",
        'hero_stat_investopedia' => "Best Robo-advisor, 2020<sup class=\"sup\">1</sup>",
        'hero_stat_clients' => 'Trusted clients',
        'hero_stat_funds' => 'In client funds',
        'hero_stat_appstore' => 'Apple App Store <sup class=\"sup\">2</sup>',
        'hero_stat_playstore' => 'Google Play Store <sup class=\"sup\">2</sup>',

        // Investition section
        'investition_title' => 'Investing isn’t easy. We just make it feel that way.',
        'investition_text' => 'Let us customize a portfolio just for you or build it yourself, and our powerful automation will make the most of your investments, optimizing your performance and helping lower your taxes.',
        'investition_btn_start' => 'Start investing',
        'investition_btn_more' => 'Learn more',
        'investition_notification_app' => 'EquiLoomPRO',
        'investition_notification_time' => 'now',
        // $78.11 USD -> ~C$106 (rounded up)
        'investition_notification_1' => 'We saved you <span>C$106</span> on your taxes.',
        // $250 USD -> ~C$338 (rounded up)
        'investition_notification_2' => 'We automatically invested your <span>C$338</span> deposit.',

        // Cash section
        'cash_title' => 'Everyday cash, designed to build long-term wealth.',
        'cash_text' => 'Our Cash account, offered with regulated banking partners, lets you automate your savings, pay bills, withdraw from thousands of ATMs, and invest your extra cash in seconds to keep building your future.',
        'cash_btn_start' => 'Start saving',
        'cash_btn_more' => 'Learn more',
        'cash_img_phone_alt' => 'Phone',
        'cash_img_card_alt' => 'Card',

        // Saving section
        'saving_title' => 'Saving and investing. All while you’re relaxing.',
        'saving_text' => 'Tell us what you’re saving for, and we’ll automatically set aside extra cash to hit your goals. And since we connect with all your accounts, you only need one app to watch your wealth grow.',
        'saving_img_alt' => 'Saving',

        // Testimonials section
        'testimonial_title' => 'TESTIMONIAL',
        'testimonial_1_quote' => 'It\'s the single <strong>best</strong> resource for both investing, managing retirement and seeing my entire financial picture.',
        'testimonial_1_author' => 'Oliver S',
        'testimonial_2_quote' => '<strong>EquiLoomPRO</strong> is the first thing in my life that actually motivated me to save money.',
        'testimonial_2_author' => 'Amelia R',
        'testimonial_3_quote' => 'It’s <strong>automatic</strong>, and I’m lazy.',
        'testimonial_3_author' => 'George L',

        // Trust section
        'trust_title' => 'Over <strong>120,000</strong> people across Canada are already using EquiLoomPRO to earn more and worry less',
        'trust_btn' => 'Get started',
        'trust_img_alt' => 'Open window with plant',
        'trust_subtitle' => 'AS FEATURED IN',
        'trust_logo_wsj_alt' => 'WSJ',
        'trust_logo_bloomberg_alt' => 'Bloomberg',
        'trust_logo_nyt_alt' => 'The New York Times',
        'trust_logo_reuters_alt' => 'Reuters',
        'trust_logo_cnbc_alt' => 'CNBC',

        // Footer section
        'footer_logo_alt' => 'EquiLoomPRO Logo',
        'footer_logo_text' => 'EquiLoomPRO',
        'footer_legal_note_1' => 'Testimonials were given by clients of both EquiLoomPRO Advisers and EquiLoomPRO Brokerage. There is no guarantee that clients will have similar experiences or success.',
        'footer_legal_note_2' => 'Nerdwallet and Investopedia (the “Endorsers”) receive cash compensation for referring potential clients to EquiLoomPRO Advisers, LLC (“EquiLoomPRO Advisers”) via advertisements placed on their respective websites. The Endorsers and EquiLoomPRO Advisers are not associated with one another and have no formal relationship outside of this arrangement. Nerdwallet’s opinions are their own. Their ratings are determined by their editorial team and rely on information they consider reliable, but cannot guarantee. Compensation does not influence product placement or rating. Consider a provider’s fees, features, and methodology before making a decision.',
        'footer_legal_note_3' => 'Apple App Store and Google Play Store ratings are based on user ratings from February 2014 (Apple) and December 2015 (Google) through June <span class="currentYear"></span>. Ratings compiled by Apple, Inc., and Google, Inc., who receive compensation for hosting our app.',
        'footer_legal_note_4' => 'By using this website, you understand the information being presented is provided for informational purposes only and agree to our <a href="/ca/terms" class="legal-link">Terms of Use</a> and <a href="/ca/privacy" class="legal-link">Privacy Policy</a>.',
        'footer_legal_note_5' => 'EquiLoomPRO Advisers relies on information from various sources believed to be reliable, including clients and third parties, but cannot guarantee the accuracy or completeness of that information. Nothing herein should be construed as an offer, recommendation, or solicitation to buy or sell any security. Additionally, EquiLoomPRO Advisers or its affiliates do not provide tax advice and investors are encouraged to consult with their personal tax advisors.',
        // localized to Canada
        'footer_legal_note_6' => 'We partner with regulated banking and payment providers in Canada to bring you cash and card features. Banking services are provided by our third-party partners subject to identity verification and applicable local regulations.',
        'footer_legal_note_7' => 'Cash account services are offered via regulated brokers and banking partners and are separate from investing accounts. Investment management and advisory services are provided by EquiLoomPRO Advisers or affiliated entities. Products and services vary by jurisdiction.',
        'footer_legal_note_8' => 'The effectiveness of the Tax-Loss Harvesting strategy to reduce the tax liability of the client will depend on the client’s entire tax and investment profile, including purchases and dispositions in accounts outside of EquiLoomPRO and type of investments (e.g., taxable or nontaxable) or holding period (e.g., short-term or long-term). Tax loss harvesting may generate a higher number of trades due to attempts to capture losses. There is a chance that trading attributed to tax loss harvesting may create capital gains and wash sales and could be subject to higher transaction costs and market impacts. In addition, tax loss harvesting strategies may produce losses, which may not be offset by sufficient gains in the account and may be limited by applicable tax rules. Utilisation of harvested losses depends on recognition of capital gains in the same or a future tax period and may be subject to limitations under applicable tax laws. Losses harvested through the strategy that are not utilised in the tax period when recognised may generally be carried forward to offset future capital gains, if any.',
        'footer_legal_note_9' => 'All investing involves risk, including the possible loss of money you invest, and past performance does not guarantee future performance. Historical returns, expected returns, and probability projections are provided for informational and illustrative purposes, and may not reflect actual future performance.',
        'footer_legal_copy' => 'EquiLoomPRO, EquiLoomPRO Advisers and EquiLoomPRO Brokerage are wholly owned subsidiaries of EquiLoomPRO Corporation. <br><br> © <span class="currentYear"></span> EquiLoomPRO Corporation. All rights reserved.',

        // About -----------------------------------------------
        'about_title' => 'About',
        'about_text' => 'At <span class="brand-name">EquiLoomPRO</span>, we’re a team of experienced investors and AI experts united to build a top-tier investment platform, renowned for its precision and rapid performance.',
        'about_content_title' => 'Our core is a diverse, passionate global team united by a mission to reshape the future of investing.',
        'about_content_text_1' => 'We’re dedicated to transforming the investment landscape by leveraging the power of artificial intelligence. By combining expert investor insights with cutting-edge technology, we deliver an investment platform that excels in accuracy, speed, and profitability.',
        'about_content_text_2' => 'Our global team brings diverse perspectives, continuously innovating to incorporate the latest AI and financial trends into our platform. We’re driven by the synergy of human expertise and machine intelligence to provide a transformative investment experience.',
        'about_content_img_alt' => 'About EquiLoomPRO team',
        'period' => [
            [
                'date' => 'April <script>document.write(new Date().getFullYear() - 3)</script>',
                'title' => 'Birth of a Vision',
                'description' => 'EquiLoomPRO was established with a bold vision to revolutionise investing through artificial intelligence.',
            ],
            [
                'date' => 'July <script>document.write(new Date().getFullYear() - 3)</script>',
                'title' => 'Growth and Development',
                // localized comment retained
                'description' => 'We raised £3 million in funding, driving platform development and team expansion.',
            ],
            [
                'date' => 'November <script>document.write(new Date().getFullYear() - 3)</script>',
                'title' => 'Beta Testing Phase',
                'description' => 'The beta version of EquiLoomPRO was launched, gathering user feedback and refining our technology.',
            ],
            [
                'date' => 'June <script>document.write(new Date().getFullYear() - 2)</script>',
                'title' => 'Global Launch',
                'description' => 'EquiLoomPRO debuted globally, bringing our advanced investment technology to users worldwide, marking a key milestone in revolutionising the investment sector.',
            ],
        ],
        'investment_title' => 'Revolutionise Your Investment Approach',
        'investment_text' => 'Experience the future of asset investing with EquiLoomPRO. Our innovative blend of AI and comprehensive data analytics delivers exceptional investment capabilities, enabling investors to navigate market challenges with unmatched precision.',
        'investment_btn' => 'Get started',

        // Contact
        'contact_title' => 'Contact us',
        'contact_text' => 'Reach out to us for guidance or answers to your questions, and our expert team will help you make confident, strategic investment decisions.',
        'contact_form_enable_js' => 'Please enable JavaScript in your browser to complete this form.',
        'contact_label_name' => 'Name',
        'contact_label_email' => 'Email',
        'contact_label_message' => 'Comment or Message',
        'contact_submit' => 'Submit',
        'contact_form_agreement' => ' * By clicking the button you agree and accept the <a href="/ca/privacy" class="form-link">Privacy Policy</a> and <a href="/ca/terms" class="form-link">Terms &amp; Conditions</a>.',
        'contact_form_success' => 'Form submitted successfully!',

        // Privacy Policy
        'privacy_title' => 'Privacy Policy',
        'privacy_updated' => '<b>Last updated:</b> July <script>document.write(new Date().getFullYear() - 1)</script>',

        'privacy_1_title' => '1. Introduction',
        'privacy_1_text' => '
<p>This Privacy Policy of EquiLoomPRO ("we," "us," or "our") details how we manage personal data when you use our services ("Services") and website <a href="/ca/">EquiLoomPRO</a> ("Website"). Safeguarding your privacy and data is our priority.</p>
<p>Our Services and Website may link to third-party sites. We are not responsible for their privacy practices, so please review their policies before engaging.</p>
<p>We treat all collected data as confidential, employing robust technical and organizational measures to protect Personal Data from unauthorized access, loss, or disclosure.</p>
<p>When using our Website, you may provide personal information (e.g., name, email, phone number). This data may be used to verify identity, offer support, fulfill obligations, or send updates with your consent. You can manage notification preferences or opt out of communications.</p>
',

        'privacy_2_title' => '2. Data Collection and Use',
        'privacy_2_1_title' => '2.1. General',
        'privacy_2_1_text' => '
<p>We collect data from Website visitors ("Visitors"), users ("Users"), and partners ("Partners"). Personal Data includes IP addresses, names, contact details, and relationship information, as per data protection laws.</p>
',

        'privacy_2_2_title' => '2.2. Collection',
        'privacy_2_2_text' => '
<p>By accessing our Website, you consent to data collection (e.g., via cookies, IP addresses, or forms). If you disagree, please refrain from using the Website.</p>
',

        'privacy_2_3_title' => '2.3. Purpose',
        'privacy_2_3_text' => '
<p>We process Personal Data to improve our Services, personalize experiences, provide support, and comply with legal obligations. Purposes and legal bases include:</p>
<table>
    <tbody>
        <tr><td>Account registration</td><td>Consent; Contract performance</td></tr>
        <tr><td>Service provision</td><td>Contract performance</td></tr>
        <tr><td>Support and queries</td><td>Legitimate interests</td></tr>
        <tr><td>Marketing</td><td>Consent</td></tr>
        <tr><td>Service improvement</td><td>Legitimate interests</td></tr>
    </tbody>
</table>
',

        'privacy_2_4_title' => '2.4. Data Sharing',
        'privacy_2_4_text' => '
<p>We may share data with trusted vendors and partners, ensuring compliance with Canadian privacy laws (e.g., PIPEDA). Cross-border transfers occur only with appropriate safeguards.</p>
',

        'privacy_3_title' => '3. Partners',
        'privacy_3_text' => '
<p>We process Partner data with consent or for legitimate interests, ensuring secure handling and compliance with applicable data protection laws.</p>
',

        'privacy_4_title' => '4. Security',
        'privacy_4_text' => '
<p>We implement technical and organizational safeguards to protect Personal Data. Third parties we share data with are contractually obligated to maintain equivalent standards. While we strive for security, no system is fully immune to breaches, and Users accept this risk.</p>
',

        'privacy_5_title' => '5. Cookies',
        'privacy_5_text' => '
<p>See our <a href="/ca/cookie">Cookie Policy</a> for details on cookies and tracking technologies.</p>
',

        'privacy_6_title' => '6. Third-Party Links',
        'privacy_6_text' => '
<p>Our Website may link to external sites. We are not responsible for their privacy practices, so review their policies before sharing data.</p>
',

        'privacy_7_title' => '7. Data Retention',
        'privacy_7_text' => '
<p>We retain Personal Data only as long as necessary. Upon account termination, data is deleted in accordance with applicable laws.</p>
',

        'privacy_8_title' => '8. Your Rights',
        'privacy_8_text' => '
<p>You have rights to access, rectify, erase, restrict, or port your Personal Data, object to processing, or withdraw consent. Contact us to exercise these rights.</p>
',

        'privacy_9_title' => '9. Marketing',
        'privacy_9_text' => '
<p>We may use your data for marketing with your consent. You can withdraw consent by emailing us.</p>
',

        'privacy_10_title' => '10. Policy Acceptance',
        'privacy_10_text' => '
<p>Using our Website or Services implies agreement with this Policy. We may update it, and continued use signifies acceptance.</p>
',

        'privacy_11_title' => '11. Legal Disclosure',
        'privacy_11_text' => '
<p>We may disclose Personal Data if legally required or to protect our rights.</p>
',

        'privacy_12_title' => '12. Contact',
        'privacy_12_text' => '
<p>For privacy concerns, contact our Data Protection Officer at <a href="mailto:support@zevriocapiture.org">support@zevriocapiture.org</a>.</p>
',

        // Terms of Use
        'terms_title' => 'Terms of Use',
        'terms_updated' => '<b>Last updated:</b> July <script>document.write(new Date().getFullYear() - 1)</script>',

        'terms_1_title' => '1. Introduction',
        'terms_1_text' => '
<p>Welcome to the EquiLoomPRO website ("Website"), operated by EquiLoomPRO ("we," "us," "our"). By using our Website or services ("Services"), you agree to these Terms and Conditions ("Terms") and our Privacy Policy. Contact us at <a href="mailto:support@zevriocapiture.org">support@zevriocapiture.org</a>.</p>
<p>These Terms may be updated without notice. Continued use of the Website or Services implies acceptance of changes. If you disagree, you are not authorized to use the Website or Services.</p>
',

        'terms_2_title' => '2. No Investment Advice',
        'terms_2_text' => '
<p>Our Website does not offer personal financial or investment advice. Information provided is general and does not account for your specific objectives, financial situation, or needs. Consult an independent financial adviser before making investment decisions.</p>
',

        'terms_3_title' => '3. Services',
        'terms_3_text' => '
<p>Not all Services are provided by us. Third-party services, websites, or products linked on our Website are not endorsed by us. We are not liable for third-party content or services.</p>
',

        'terms_4_title' => '4. Scope and Modification',
        'terms_4_text' => '
<p>These Terms constitute the entire agreement between you and us, superseding prior agreements. We may modify Terms at our discretion, and continued use signifies acceptance.</p>
',

        'terms_5_title' => '5. Eligibility',
        'terms_5_text' => '
<p>Services are for individuals aged 18+ who can enter legally binding contracts. Minors are not permitted to use the Website or Services.</p>
',

        'terms_6_title' => '6. Description of Services',
        'terms_6_text' => '
<p><b>Subscription Services:</b> Upon registration, you may access Subscription Services (free or paid), including content from us or third-party providers. This is not investment advice, and we are not liable for its accuracy.</p>
<p><b>Third-Party Services:</b> Products or services from third parties may be offered. We are not responsible for their accuracy or your inability to access them.</p>
<p><b>General:</b> Accurate registration data is required. We may reject incomplete or fraudulent data and are not liable for service interruptions.</p>
',

        'terms_7_title' => '7. Proprietary Rights',
        'terms_7_text' => '
<p>The Website and its content are protected by copyrights, trademarks, and other rights. Unauthorized reproduction, redistribution, or scraping is prohibited.</p>
',

        'terms_8_title' => '8. Confidential Information',
        'terms_8_text' => '
<p>Confidential information is protected for one year post-termination, excluding publicly available data or information received without restrictions.</p>
',

        'terms_9_title' => '9. Hyperlinking and Framing',
        'terms_9_text' => '
<p>Hyperlinking, framing, or referencing our Website without permission is prohibited. You are liable for damages caused by such actions.</p>
',

        'terms_10_title' => '10. Disclaimer',
        'terms_10_text' => '
<p>Services and content are provided "as-is" without warranties. We are not liable for errors, interruptions, or inability to use the Website or Services.</p>
',

        'terms_11_title' => '11. Limitation of Liability',
        // liability aligned with example deposit conversion to CAD
        'terms_11_text' => '
<p>We are not liable for any damages, including loss of profits or data. Our maximum liability is C$338, where permitted by law.</p>
',

        'terms_12_title' => '12. Indemnification',
        'terms_12_text' => '
<p>You agree to indemnify us against claims arising from your use of the Website, breach of Terms, or violation of rights.</p>
',

        'terms_13_title' => '13. Third-Party Websites',
        'terms_13_text' => '
<p>We are not responsible for third-party websites or resources linked on our Website, nor their content or policies.</p>
',

        'terms_14_title' => '14. Data Protection',
        'terms_14_text' => '
<p>We comply with PIPEDA and other applicable Canadian privacy laws. We maintain security measures, obtain consents, and assist with data subject rights requests. We notify of data breaches promptly in accordance with applicable law.</p>
',

        'terms_15_title' => '15. Governing Law',
        'terms_15_text' => '
<p>These Terms are governed by the laws of the Province of Ontario and the federal laws of Canada applicable therein. Disputes will be resolved through arbitration in Toronto under the ADR Institute of Canada (ADRIC) rules.</p>
',

        'terms_16_title' => '16. Contact',
        'terms_16_text' => '
<p>For questions, contact us at <a href="mailto:support@zevriocapiture.org">support@zevriocapiture.org</a>.</p>
',
    ],
    'jp' => [
        'language_iso' => 'ja',
        'country_name' => 'Japan',
        'locale' => 'ja_JP',
        'locale_lang' => 'ja-JP',
        'language_name' => '日本語',
        'city' => '東京',
        'country_code' => 'JP',
        'geo_position' => '35.6895, 139.6917',
        'jsonld_organization_name' => 'EquiLoomPRO',
        'jsonld_organization_review_rating' => '4.96',
        'jsonld_organization_review_author' => 'EquiLoomPRO ユーザー',
        'jsonld_software_categories' => '暗号資産投資ツール',
        // 元の $190 → 日本円に換算して約 ¥30,000（四捨五入して上に）
        'jsonld_software_price' => '30000',
        'jsonld_software_price_currency' => 'JPY',
        'brand_name_api' => 'Zevcap アプリAI',

        'home' => 'ホーム',
        'about' => '会社概要',
        'contact' => 'お問い合わせ',
        'privacy' => 'プライバシーポリシー',
        'terms' => '利用規約',

        // Home (index)
        'title' => 'EquiLoomPRO — 自動投資 & キャッシュマネジメント',
        'meta_description' => 'EquiLoomPROで資産形成を自分のものに。AIポートフォリオ、自動貯蓄、節税機能で、自信を持って資産を増やしましょう。',
        'meta_keywords' => 'EquiLoomPRO, 自動投資, AI投資, ポートフォリオ管理, キャッシュ口座, 貯蓄, 節税, 日本, 東京',

        // Open Graph / Twitter
        'og_title' => 'EquiLoomPRO — AI搭載の投資プラットフォーム',
        'og_description' => '自動ポートフォリオ、スマートキャッシュ、手間いらずの投資。EquiLoomPROで安心して資産を増やしましょう。',
        'og_image' => '/assets/images/share.webp',

        'twitter_title' => 'EquiLoomPRO — 自動投資',
        'twitter_description' => 'AIによるポートフォリオと自動貯蓄で、自信を持って資産形成を。',

        // About
        'about_desc_content' => 'EquiLoomPROは東京を拠点とする投資家とAI専門家のチームで、高速かつ精密な投資プラットフォームを開発しています。',
        'about_keywords' => 'EquiLoomPRO 会社概要, AI投資チーム, 投資プラットフォーム, 東京',

        // Contact
        'contact_desc_content' => 'ご質問やご相談はEquiLoomPROまで。私たちの専門家が、安心して戦略的な投資判断ができるようサポートします。',
        'contact_keywords' => 'EquiLoomPRO お問い合わせ, サポート, 投資相談, 東京',

        // Terms
        'terms_desc_content' => 'EquiLoomPROのウェブサイトおよびサービス利用に関する利用規約をご確認ください（対象、制限、法的事項など）。',
        'terms_keywords' => '利用規約, EquiLoomPRO, 法的事項, 日本',

        // Privacy
        'privacy_desc_content' => 'EquiLoomPROがどのように個人情報を収集・利用・保護するか、またお客様の権利とプライバシーへの取り組みについて。',
        'privacy_keywords' => 'プライバシーポリシー, データ保護, 個人情報, EquiLoomPRO',

        // ---------- JSON-LD content ----------
        'jsonld_organization_review_body' => 'EquiLoomPROは、自動ポートフォリオ、スマートキャッシュ管理、節税機能を備えたAI投資プラットフォームを提供し、東京のお客様が安心して資産を増やせるようサポートします。',

        // FAQ
        'jsonld_faq_1_question' => 'EquiLoomPROとは何ですか？',
        'jsonld_faq_1_answer' => 'EquiLoomPROはAIを活用した投資プラットフォームで、多様なポートフォリオの構築・自動化、貯蓄の最適化を支援します。',

        'jsonld_faq_2_question' => 'どのように投資をサポートしますか？',
        'jsonld_faq_2_answer' => 'カスタマイズ可能なポートフォリオ、自動投資、スマートキャッシュツールを提供し、効率的な資産形成を実現します。',

        'jsonld_faq_3_question' => '日本で利用できますか？',
        'jsonld_faq_3_answer' => 'はい。EquiLoomPROは東京をはじめ、日本全国のお客様に対応しています。',

        'jsonld_faq_4_question' => 'AIや自動化を必ず使う必要がありますか？',
        'jsonld_faq_4_answer' => 'いいえ。自動化はオプションです。プラットフォームに任せることも、自分で調整することも可能です。',

        'jsonld_faq_5_question' => '始めるにはどうすれば良いですか？',
        'jsonld_faq_5_answer' => 'プロフィールを作成し、ポートフォリオを選択またはカスタマイズし、口座に入金してください。隠れた手数料はありません。',

        'jsonld_faq_6_question' => 'データはどのように保護されますか？',
        'jsonld_faq_6_answer' => '最新のセキュリティ対策を実施し、日本の個人情報保護法や国際基準に従って情報を保護しています。',

        // Header
        'header_logo_alt' => 'EquiLoomPRO ロゴ',
        'header_logo_text' => 'EquiLoomPRO',
        'header_burger_alt' => 'メニュー',
        'header_cross_alt' => '閉じる',

        // Hero section
        'hero_form_title' => '今すぐ登録',
        'hero_form_notice' => '* ボタンをクリックすることで、<a href="/jp/privacy" class="form-link">プライバシーポリシー</a>および<a href="/jp/terms" class="form-link">利用規約</a>に同意したものとみなされます。',
        'hero_title' => 'あなたの富を、あなたのものに。',
        'hero_subtitle' => 'パーソナライズ、自動化、手間いらずの投資と貯蓄。',
        'hero_stat_nerdwallet' => "最優秀ロボアドバイザー 2019<sup class=\"sup\">1</sup><br>最優秀キャッシュ管理アプリ 2020<sup class=\"sup\">1</sup>",
        'hero_stat_investopedia' => "最優秀ロボアドバイザー 2020<sup class=\"sup\">1</sup>",
        'hero_stat_clients' => '信頼されている利用者',
        'hero_stat_funds' => '預かり資産総額',
        'hero_stat_appstore' => 'Apple App Store <sup class=\"sup\">2</sup>',
        'hero_stat_playstore' => 'Google Play Store <sup class=\"sup\">2</sup>',

        // Investition section
        'investition_title' => '投資は簡単ではありません。私たちはそれを簡単に感じさせます。',
        'investition_text' => 'あなた専用にポートフォリオをカスタマイズするか、自分で構築してください。強力な自動化が投資の成果を最大化し、パフォーマンスを最適化し、税負担を軽減します。',
        'investition_btn_start' => '投資を始める',
        'investition_btn_more' => '詳細を見る',
        'investition_notification_app' => 'EquiLoomPRO',
        'investition_notification_time' => '今',
        // $78 ≈ ¥11,800 → 切り上げ ¥12,000
        'investition_notification_1' => 'あなたの税金を<span>¥12,000</span>節約しました。',
        // $250 ≈ ¥37,800 → 切り上げ ¥38,000
        'investition_notification_2' => '<span>¥38,000</span>の入金を自動的に投資しました。',

        // Cash section
        'cash_title' => '日常のお金を、長期的な資産形成のためにデザイン。',
        'cash_text' => '当社のキャッシュ口座は、規制された銀行パートナーと提携して提供され、貯蓄の自動化、請求の支払い、全国のATMからの引き出し、余剰資金の即時投資を可能にします。',
        'cash_btn_start' => '貯蓄を始める',
        'cash_btn_more' => '詳細を見る',
        'cash_img_phone_alt' => 'スマートフォン',
        'cash_img_card_alt' => 'カード',

        // Saving section
        'saving_title' => '貯蓄と投資。あなたがくつろいでいる間に。',
        'saving_text' => '目標を設定してください。私たちは自動的に資金を積み立て、目標達成をサポートします。すべての口座を連携できるので、1つのアプリで資産の成長を確認できます。',
        'saving_img_alt' => '貯蓄',

        // Testimonials section
        'testimonial_title' => 'お客様の声',
        'testimonial_1_quote' => '投資、退職資金の管理、そして私の財務状況全体を確認するための<strong>最高の</strong>リソースです。',
        'testimonial_1_author' => '佐藤 翔太',
        'testimonial_2_quote' => '<strong>EquiLoomPRO</strong> は、実際に私に貯蓄のやる気を与えてくれた初めてのサービスです。',
        'testimonial_2_author' => '高橋 美咲',
        'testimonial_3_quote' => 'すべて<strong>自動</strong>だから、私は楽ができます。',
        'testimonial_3_author' => '田中 健一',

        // Trust section
        'trust_title' => '日本全国で<strong>120,000人以上</strong>がEquiLoomPROを利用して、安心して資産を増やしています',
        'trust_btn' => '今すぐ始める',
        'trust_img_alt' => '窓辺の観葉植物',
        'trust_subtitle' => '掲載実績',
        'trust_logo_wsj_alt' => 'WSJ',
        'trust_logo_bloomberg_alt' => 'ブルームバーグ',
        'trust_logo_nyt_alt' => 'ニューヨーク・タイムズ',
        'trust_logo_reuters_alt' => 'ロイター',
        'trust_logo_cnbc_alt' => 'CNBC',

        // Footer section
        'footer_logo_alt' => 'EquiLoomPRO ロゴ',
        'footer_logo_text' => 'EquiLoomPRO',
        'footer_legal_note_1' => 'お客様の声は、ゼブリオ・キャピチュア・アドバイザーズおよびゼブリオ・キャピチュア・ブローカレッジのクライアントから提供されたものです。すべてのクライアントが同様の経験や成功を収める保証はありません。',
        'footer_legal_note_2' => 'NerdwalletおよびInvestopedia（以下「推奨者」）は、各自のウェブサイトに掲載された広告を通じて、ゼブリオ・キャピチュア・アドバイザーズ合同会社（以下「ゼブリオ・キャピチュア・アドバイザーズ」）に潜在顧客を紹介することで現金報酬を受け取っています。推奨者とゼブリオ・キャピチュア・アドバイザーズは互いに提携しておらず、この契約以外の正式な関係はありません。Nerdwalletの意見は独自のものであり、その評価は編集チームが信頼できると考える情報に基づいていますが、正確性を保証するものではありません。報酬は製品の配置や評価に影響を与えません。投資決定を行う前に、提供者の手数料、機能、方法論を検討してください。',
        'footer_legal_note_3' => 'Apple App StoreおよびGoogle Play Storeの評価は、2014年2月（Apple）および2015年12月（Google）から<span class="currentYear"></span>年6月までのユーザー評価に基づいています。評価は、アプリをホストすることで報酬を受け取るApple Inc.およびGoogle Inc.によって収集されています。',
        'footer_legal_note_4' => '本ウェブサイトを利用することで、提供される情報は情報提供のみを目的としていることを理解し、<a href="/jp/terms" class="legal-link">利用規約</a>および<a href="/jp/privacy" class="legal-link">プライバシーポリシー</a>に同意するものとします。',
        'footer_legal_note_5' => 'ゼブリオ・キャピチュア・アドバイザーズは、クライアントや第三者を含むさまざまな情報源からの情報を信頼していますが、その情報の正確性や完全性を保証することはできません。本内容は、証券の購入、売却、または勧誘の申し出、推奨とみなされるべきではありません。また、ゼブリオ・キャピチュア・アドバイザーズまたはその関連会社は税務に関するアドバイスを提供せず、投資家は自身の税務アドバイザーに相談することをお勧めします。',
        'footer_legal_note_6' => '当社は、日本で規制された銀行および決済プロバイダーと提携し、現金およびカード機能を提供しています。銀行サービスは、身元確認および適用される地域の規制に基づき、第三者のパートナーによって提供されます。',
        'footer_legal_note_7' => '現金口座サービスは、規制されたブローカーおよび銀行パートナーを通じて提供され、投資口座とは別です。投資管理およびアドバイザリーサービスは、ゼブリオ・キャピチュア・アドバイザーズまたは関連団体によって提供されます。製品およびサービスは管轄区域によって異なります。',
        'footer_legal_note_8' => '税務損失収穫戦略の効果は、クライアントの全体的な税務および投資プロファイル（ゼブリオ・キャピチュア以外の口座での購入および売却、投資の種類（例：課税対象または非課税）、または保有期間（例：短期または長期）など）に依存します。税務損失収穫は、損失を捕捉しようとする試みにより、取引回数が増加する可能性があります。税務損失収穫による取引がキャピタルゲインやウォッシュセールを生み出し、取引コストや市場への影響が高くなる可能性があります。また、税務損失収穫戦略は損失を生み出す可能性があり、口座内の十分な利益で相殺されない場合や、適用される税法により制限される場合があります。収穫された損失の活用は、同じまたは将来の課税期間でのキャピタルゲインの認識に依存し、適用される税法による制限を受ける場合があります。認識された税務期間で活用されなかった損失は、通常、将来のキャピタルゲインを相殺するために繰り越される可能性があります。',
        'footer_legal_note_9' => 'すべての投資にはリスクが伴い、投資した資金の損失の可能性も含まれます。過去の実績は将来の成果を保証するものではありません。過去のリターン、期待リターン、確率予測は、情報提供および説明のために提供されており、実際の将来のパフォーマンスを反映しない場合があります。',
        'footer_legal_copy' => 'ゼブリオ・キャピチュア、ゼブリオ・キャピチュア・アドバイザーズ、ゼブリオ・キャピチュア・ブローカレッジは、ゼブリオ・キャピチュア株式会社の完全子会社です。<br><br> © <span class="currentYear"></span> ゼブリオ・キャピチュア株式会社。全著作権所有。',
        // ---------- About ----------
        'about_title' => '会社概要',
        'about_text' => '<span class="brand-name">EquiLoomPRO</span> は、経験豊富な投資家とAI専門家のチームであり、精度とスピードに優れた投資プラットフォームを構築しています。',
        'about_content_title' => '私たちの中心には、多様で情熱的なチームがあり、投資の未来を再定義する使命に取り組んでいます。',
        'about_content_text_1' => '私たちは人工知能の力を活用して投資の世界を変革しています。投資家の知見と先端技術を融合させ、正確さ・速さ・収益性を兼ね備えた投資体験を提供します。',
        'about_content_text_2' => 'グローバルなチームが多様な視点を持ち寄り、常に最新のAIと金融トレンドを取り入れています。人間の専門知識と機械の知能のシナジーが、ユニークな投資体験を可能にします。',
        'about_content_img_alt' => 'EquiLoomPRO チーム 日本',

        'period' => [
            [
                'date' => '<script>document.write(new Date().getFullYear() - 3)</script>年4月',
                'title' => 'ビジョンの誕生',
                'description' => 'EquiLoomPRO は、AIによって投資を革新するというビジョンのもと設立されました。',
            ],
            [
                'date' => '<script>document.write(new Date().getFullYear() - 3)</script>年7月',
                'title' => '成長と発展',
                'description' => '私たちは東京での開発とチーム拡大のために、3億円の資金を調達しました。',
            ],
            [
                'date' => '<script>document.write(new Date().getFullYear() - 3)</script>年11月',
                'title' => 'ベータテスト開始',
                'description' => 'EquiLoomPRO のベータ版をリリースし、利用者のフィードバックを集めて技術を改善しました。',
            ],
            [
                'date' => '<script>document.write(new Date().getFullYear() - 2)</script>年6月',
                'title' => 'グローバルローンチ',
                'description' => 'EquiLoomPRO は世界中で正式に公開され、日本市場にも最先端の投資テクノロジーを提供しました。',
            ],
        ],
        'investment_title' => '投資アプローチを革新する',
        'investment_text' => 'EquiLoomPRO で未来の資産運用を体験してください。革新的なAIとデータ分析により、投資家は精度と明確さを持って市場をナビゲートできます。',
        'investment_btn' => '今すぐ始める',

        // ---------- Contact ----------
        'contact_title' => 'お問い合わせ',
        'contact_text' => 'ご質問やご相談はお気軽にお問い合わせください。専門チームが、安心で戦略的な投資判断をお手伝いします。',
        'contact_form_enable_js' => 'このフォームを送信するには、ブラウザでJavaScriptを有効にしてください。',
        'contact_label_name' => 'お名前',
        'contact_label_email' => 'メールアドレス',
        'contact_label_message' => 'メッセージ',
        'contact_submit' => '送信',
        'contact_form_agreement' => '* ボタンをクリックすることで、<a href="/jp/privacy" class="form-link">プライバシーポリシー</a>および<a href="/jp/terms" class="form-link">利用規約</a>に同意したものとみなされます。',
        'contact_form_success' => '送信が完了しました！',
        // ---------- Privacy Policy ----------
        'privacy_title' => 'プライバシーポリシー',
        'privacy_updated' => '<b>最終更新日:</b> <script>document.write(new Date().getFullYear() - 1)</script>年7月',

        'privacy_1_title' => '1. はじめに',
        'privacy_1_text' => '
<p>EquiLoomPRO（以下「当社」）は、当社のサービス（「サービス」）およびウェブサイト <a href="/jp">EquiLoomPRO</a>（「本サイト」）をご利用いただく際に収集する個人データの取り扱いについて説明します。プライバシーの保護は当社の最優先事項です。</p>
<p>本サイトには第三者サイトへのリンクが含まれる場合がありますが、それらのプライバシー慣行については責任を負いません。必ず各サイトのポリシーをご確認ください。</p>
<p>当社は、収集したすべてのデータを機密情報として取り扱い、技術的および組織的なセキュリティ対策を講じ、無断アクセスや漏洩を防ぎます。</p>
<p>ユーザーは名前、メールアドレス、電話番号などの情報を提供することがあります。これらの情報は本人確認、サポート提供、契約の履行、または同意を得た上での更新情報配信に利用されます。</p>
',

        'privacy_2_title' => '2. データの収集と利用',
        'privacy_2_1_title' => '2.1. 一般',
        'privacy_2_1_text' => '
<p>当社は訪問者（「訪問者」）、利用者（「ユーザー」）、パートナー（「パートナー」）からデータを収集します。個人データには、IPアドレス、氏名、連絡先、利用関係に関する情報が含まれます。</p>
',

        'privacy_2_2_title' => '2.2. 収集方法',
        'privacy_2_2_text' => '
<p>本サイトを利用することにより、クッキー、IPアドレス、フォーム入力を通じてデータが収集されることに同意したものとみなされます。これに同意されない場合は、ご利用をお控えください。</p>
',

        'privacy_2_3_title' => '2.3. 利用目的',
        'privacy_2_3_text' => '
<p>当社は個人データを以下の目的で処理します。</p>
<table>
    <tbody>
        <tr><td>アカウント登録</td><td>同意・契約履行</td></tr>
        <tr><td>サービス提供</td><td>契約履行</td></tr>
        <tr><td>サポート対応</td><td>正当な利益</td></tr>
        <tr><td>マーケティング</td><td>同意</td></tr>
        <tr><td>サービス改善</td><td>正当な利益</td></tr>
    </tbody>
</table>
',

        'privacy_2_4_title' => '2.4. データの共有',
        'privacy_2_4_text' => '
<p>当社は信頼できるベンダーやパートナーとデータを共有することがあります。日本の個人情報保護法および適用される国際基準に準拠します。</p>
',

        'privacy_3_title' => '3. パートナー',
        'privacy_3_text' => '
<p>パートナーからのデータは、同意または正当な利益に基づき処理され、安全に取り扱われます。</p>
',

        'privacy_4_title' => '4. セキュリティ',
        'privacy_4_text' => '
<p>当社は、技術的および組織的な保護策を講じて個人データを保護します。ただし、完全にリスクを排除することはできず、ユーザーはこのリスクを理解した上で利用するものとします。</p>
',

        'privacy_5_title' => '5. クッキー',
        'privacy_5_text' => '
<p>詳細は <a href="/jp/cookie">クッキーポリシー</a> をご参照ください。</p>
',

        'privacy_6_title' => '6. 外部リンク',
        'privacy_6_text' => '
<p>本サイトには外部リンクが含まれる場合があります。当社はそのプライバシー慣行について責任を負いません。</p>
',

        'privacy_7_title' => '7. データの保存期間',
        'privacy_7_text' => '
<p>当社は必要な期間のみ個人データを保存します。アカウント解約後は、関連する法律に基づき削除されます。</p>
',

        'privacy_8_title' => '8. ユーザーの権利',
        'privacy_8_text' => '
<p>ユーザーは自身の個人データにアクセスし、修正、削除、処理制限、データ移植、または処理への異議を申し立てる権利を有します。</p>
',

        'privacy_9_title' => '9. マーケティング',
        'privacy_9_text' => '
<p>当社はユーザーの同意を得た上でマーケティングにデータを利用する場合があります。同意はいつでも撤回可能です。</p>
',

        'privacy_10_title' => '10. ポリシーの承諾',
        'privacy_10_text' => '
<p>本サイトやサービスの利用は、本ポリシーへの同意を意味します。当社は予告なく本ポリシーを更新する場合があり、継続利用は変更の承諾を意味します。</p>
',

        'privacy_11_title' => '11. 法的開示',
        'privacy_11_text' => '
<p>法令に基づき必要な場合、または当社の権利保護のため、個人データを開示することがあります。</p>
',

        'privacy_12_title' => '12. お問い合わせ',
        'privacy_12_text' => '
<p>プライバシーに関するお問い合わせは <a href="mailto:support@zevriocapiture.org">support@zevriocapiture.org</a> までご連絡ください。</p>
',

        // ---------- Terms of Use ----------
        'terms_title' => '利用規約',
        'terms_updated' => '<b>最終更新日:</b> <script>document.write(new Date().getFullYear() - 1)</script>年7月',

        'terms_1_title' => '1. はじめに',
        'terms_1_text' => '
<p>EquiLoomPRO（以下「当社」）が運営する本サイトおよびサービスをご利用いただくにあたり、本利用規約（「規約」）に同意いただく必要があります。</p>
<p>規約は随時変更されることがあります。継続的に利用することで変更に同意したものとみなされます。</p>
',

        'terms_2_title' => '2. 投資助言について',
        'terms_2_text' => '
<p>当社は個別の投資助言を行いません。本サイトに記載されている情報は一般的なものであり、投資判断は各自の責任で行ってください。</p>
',

        'terms_3_title' => '3. サービス',
        'terms_3_text' => '
<p>本サイトには第三者サービスやリンクが含まれる場合があります。当社はそれらの正確性や提供について責任を負いません。</p>
',

        'terms_4_title' => '4. 規約の範囲と変更',
        'terms_4_text' => '
<p>本規約は利用者と当社との間の完全な合意を構成します。当社は裁量で規約を変更でき、利用継続は変更の承諾を意味します。</p>
',

        'terms_5_title' => '5. 利用資格',
        'terms_5_text' => '
<p>本サービスは18歳以上の個人に限定されます。未成年者は利用できません。</p>
',

        'terms_6_title' => '6. サービスの説明',
        'terms_6_text' => '
<p><b>サブスクリプションサービス:</b> 登録後、当社または第三者から提供される有料/無料のサービスを利用できます。投資助言ではなく、正確性について責任を負いません。</p>
<p><b>第三者サービス:</b> 本サイト上で提供される商品やサービスについて、当社は責任を負いません。</p>
',

        'terms_7_title' => '7. 知的財産権',
        'terms_7_text' => '
<p>本サイトおよびそのコンテンツは著作権法等によって保護されています。無断複製・転載は禁止されています。</p>
',

        'terms_8_title' => '8. 機密保持',
        'terms_8_text' => '
<p>終了後1年間、秘密情報は保護されます。ただし公知の情報や制限なく入手した情報は除きます。</p>
',

        'terms_9_title' => '9. リンクおよびフレーミング',
        'terms_9_text' => '
<p>当社の許可なくリンクやフレーミングを行うことは禁止されています。</p>
',

        'terms_10_title' => '10. 免責事項',
        'terms_10_text' => '
<p>本サービスは現状有姿で提供され、いかなる保証も行いません。当社はエラーや中断に責任を負いません。</p>
',

        'terms_11_title' => '11. 責任の制限',
        'terms_11_text' => '
<p>当社は損害賠償責任を負いません。最大責任額は ¥38,000 とします。</p>
',

        'terms_12_title' => '12. 補償',
        'terms_12_text' => '
<p>利用者は、本サービス利用に関連して発生する請求や損害から当社を補償することに同意します。</p>
',

        'terms_13_title' => '13. 第三者サイト',
        'terms_13_text' => '
<p>当社は第三者サイトやそのコンテンツについて責任を負いません。</p>
',

        'terms_14_title' => '14. データ保護',
        'terms_14_text' => '
<p>当社は個人情報保護法および関連法規に準拠し、データ主体の権利に対応します。</p>
',

        'terms_15_title' => '15. 準拠法',
        'terms_15_text' => '
<p>本規約は日本法に準拠し、東京地方裁判所を専属管轄裁判所とします。</p>
',

        'terms_16_title' => '16. お問い合わせ',
        'terms_16_text' => '
<p>本規約に関するお問い合わせは <a href="mailto:support@zevriocapiture.org">support@zevriocapiture.org</a> までお願いします。</p>
',
    ],
    'ph' => [
        'language_iso' => 'en',
        'country_name' => 'Philippines',
        'locale' => 'en_PH',
        'locale_lang' => 'en-PH',
        'language_name' => 'English',
        'city' => 'Quezon City',
        'country_code' => 'PH',
        'geo_position' => '14.6760, 121.0437',

        'jsonld_organization_name' => 'EquiLoomPRO',
        'jsonld_organization_review_rating' => '4.96',
        'jsonld_organization_review_author' => 'EquiLoomPRO User',
        'jsonld_software_categories' => 'Cryptocurrency Investment Tool',
        // 152 GBP → PHP (~×75), rounded up
        'jsonld_software_price' => '11400',
        'jsonld_software_price_currency' => 'PHP',

        'brand_name_api' => 'EquLum App AI',

        'home' => 'Home',
        'about' => 'About Us',
        'contact' => 'Contact Us',
        'privacy' => 'Privacy Policy',
        'terms' => 'Terms and Conditions',

        // Home (index)
        'title' => 'EquiLoomPRO — Automated Investing & Cash Management',
        'meta_description' => 'Make wealth your own with EquiLoomPRO. AI-assisted portfolios, automated savings, and tax-efficient features to help you invest confidently and grow your money in the Philippines.',
        'meta_keywords' => 'EquiLoomPRO, automated investing, AI investing, portfolio management, cash account, savings, tax efficient, Philippines, Metro Manila, Quezon City',

        // Open Graph / Twitter (global)
        'og_title' => 'EquiLoomPRO — AI-Powered Investing Platform',
        'og_description' => 'Automated portfolios, smart cash, and effortless investing. Start with EquiLoomPRO and grow your wealth with confidence in the Philippines.',
        'og_image' => '/assets/images/share.webp',

        'twitter_title' => 'EquiLoomPRO — Automated Investing',
        'twitter_description' => 'AI-assisted portfolios and automated savings to help you grow wealth with confidence.',

        // About
        'about_desc_content' => 'Meet EquiLoomPRO — a Quezon City–based team of investors and AI experts building a high-precision, high-speed investment platform that helps you grow wealth confidently.',
        'about_keywords' => 'about EquiLoomPRO, company, AI investing team, investment platform, Quezon City, Metro Manila',

        // Contact
        'contact_desc_content' => 'Questions or guidance? Contact EquiLoomPRO — our experts are ready to help you make confident, strategic investment decisions across the Philippines.',
        'contact_keywords' => 'contact EquiLoomPRO, support, help, investing questions, Metro Manila',

        // Terms
        'terms_desc_content' => 'Read the Terms and Conditions for using EquiLoomPRO’s website and services in the Philippines, including eligibility, limitations, and legal notices.',
        'terms_keywords' => 'terms of use, terms and conditions, EquiLoomPRO, legal, Philippines',

        // Privacy
        'privacy_desc_content' => 'How EquiLoomPRO collects, uses, and protects your personal data in the Philippines, your rights, and our commitment to privacy and security.',
        'privacy_keywords' => 'privacy policy, data protection, DPA, National Privacy Commission, personal data, EquiLoomPRO',

        // ---------- JSON-LD content ----------
        'jsonld_organization_review_body' => 'EquiLoomPRO delivers an AI-assisted investing platform that combines automated portfolios, smart cash management, and tax-efficient features to help clients in Metro Manila grow wealth with confidence.',

        // FAQ (used on index)
        'jsonld_faq_1_question' => 'What is EquiLoomPRO?',
        'jsonld_faq_1_answer' => 'EquiLoomPRO is an AI-assisted investing platform that helps you build and automate diversified portfolios, optimize savings, and invest with confidence.',

        'jsonld_faq_2_question' => 'How does EquiLoomPRO help me invest?',
        'jsonld_faq_2_answer' => 'We offer customizable or automated portfolios, smart cash tools, and features designed to improve after-tax outcomes — so you can invest effortlessly while staying in control.',

        'jsonld_faq_3_question' => 'Is EquiLoomPRO available in the Philippines?',
        'jsonld_faq_3_answer' => 'Yes. EquiLoomPRO supports clients in Quezon City, Metro Manila, and nationwide, with experiences tailored to your locale and currency (PHP).',

        'jsonld_faq_4_question' => 'Do I need to use automation or AI?',
        'jsonld_faq_4_answer' => 'Automation is optional. You can let the platform handle routine tasks or build and adjust your own portfolio whenever you like.',

        'jsonld_faq_5_question' => 'How do I get started?',
        'jsonld_faq_5_answer' => 'Create your profile, choose or customize a portfolio, and fund your account. There are no hidden sign-up fees; partner services may have their own requirements.',

        'jsonld_faq_6_question' => 'How does EquiLoomPRO protect my data?',
        'jsonld_faq_6_answer' => 'We apply robust technical and organizational security measures and follow applicable Philippine data protection standards under the Data Privacy Act (DPA).',

        // Header section
        'header_logo_alt' => 'EquiLoomPRO Logo',
        'header_logo_text' => 'EquiLoomPRO',
        'header_burger_alt' => 'Menu',
        'header_cross_alt' => 'Close',

        // Hero section
        'hero_form_title' => 'Register now',
        'hero_form_notice' => '* By clicking the button you agree and accept the <a href="/ph/privacy" class="form-link">Privacy Policy</a> and <a href="/ph/terms" class="form-link">Terms & Conditions</a>.',
        'hero_title' => 'Make wealth your own.',
        'hero_subtitle' => 'Personalized, Automated, Effortless Investing and Savings.',
        'hero_stat_nerdwallet' => "Best Robo-advisor, 2019<sup class=\"sup\">1</sup><br>Best Cash Management App, 2020<sup class=\"sup\">1</sup>",
        'hero_stat_investopedia' => "Best Robo-advisor, 2020<sup class=\"sup\">1</sup>",
        'hero_stat_clients' => 'Trusted clients',
        'hero_stat_funds' => 'In client funds',
        'hero_stat_appstore' => 'Apple App Store <sup class="sup">2</sup>',
        'hero_stat_playstore' => 'Google Play Store <sup class="sup">2</sup>',

        // Investition section
        'investition_title' => 'Investing isn’t easy. We just make it feel that way.',
        'investition_text' => 'Let us customize a portfolio just for you or build it yourself, and our powerful automation will make the most of your investments, optimizing your performance and helping lower your taxes.',
        'investition_btn_start' => 'Start investing',
        'investition_btn_more' => 'Learn more',
        'investition_notification_app' => 'EquiLoomPRO',
        'investition_notification_time' => 'now',
        // £62.50 → PHP (×75) = 4,687.5 → ₱4,688 (rounded up)
        'investition_notification_1' => 'We saved you <span>₱4,688</span> on your taxes.',
        // £200 → PHP (×75) = ₱15,000
        'investition_notification_2' => 'We automatically invested your <span>₱15,000</span> deposit.',

        // Cash section
        'cash_title' => 'Everyday cash, designed to build long-term wealth.',
        'cash_text' => 'Our Cash account, offered with regulated banking partners, lets you automate your savings, pay bills, withdraw from thousands of ATMs, and invest your extra cash in seconds to keep building your future.',
        'cash_btn_start' => 'Start saving',
        'cash_btn_more' => 'Learn more',
        'cash_img_phone_alt' => 'Phone',
        'cash_img_card_alt' => 'Card',

        // Saving section
        'saving_title' => 'Saving and investing. All while you’re relaxing.',
        'saving_text' => 'Tell us what you’re saving for, and we’ll automatically set aside extra cash to hit your goals. And since we connect with all your accounts, you only need one app to watch your wealth grow.',
        'saving_img_alt' => 'Saving',

        // Testimonials section
        'testimonial_title' => 'TESTIMONIAL',
        'testimonial_1_quote' => 'It\'s the single <strong>best</strong> resource for both investing, managing retirement, and seeing my entire financial picture.',
        'testimonial_1_author' => 'Miguel D',
        'testimonial_2_quote' => '<strong>EquiLoomPRO</strong> is the first thing in my life that actually motivated me to save money.',
        'testimonial_2_author' => 'Ana Mae R',
        'testimonial_3_quote' => 'It’s <strong>automatic</strong>, and I’m tamad sometimes — so this helps a lot.',
        'testimonial_3_author' => 'Jose Luis G',

        // Trust section
        'trust_title' => 'Over <strong>120,000</strong> people across the Philippines are already using EquiLoomPRO to earn more and worry less',
        'trust_btn' => 'Get started',
        'trust_img_alt' => 'Open window with plant',
        'trust_subtitle' => 'AS FEATURED IN',
        'trust_logo_wsj_alt' => 'WSJ',
        'trust_logo_bloomberg_alt' => 'Bloomberg',
        'trust_logo_nyt_alt' => 'The New York Times',
        'trust_logo_reuters_alt' => 'Reuters',
        'trust_logo_cnbc_alt' => 'CNBC',

        // Footer section
        'footer_logo_alt' => 'EquiLoomPRO Logo',
        'footer_logo_text' => 'EquiLoomPRO',
        'footer_legal_note_1' => 'Testimonials were given by clients of both EquiLoomPRO Advisers and EquiLoomPRO Brokerage. There is no guarantee that clients will have similar experiences or success.',
        'footer_legal_note_2' => 'Nerdwallet and Investopedia (the “Endorsers”) receive cash compensation for referring potential clients to EquiLoomPRO Advisers, LLC (“EquiLoomPRO Advisers”) via advertisements placed on their respective websites. The Endorsers and EquiLoomPRO Advisers are not associated with one another and have no formal relationship outside of this arrangement. Nerdwallet’s opinions are their own. Their ratings are determined by their editorial team and rely on information they consider reliable, but cannot guarantee. Compensation does not influence product placement or rating. Consider a provider’s fees, features, and methodology before making a decision.',
        'footer_legal_note_3' => 'Apple App Store and Google Play Store ratings are based on user ratings from February 2014 (Apple) and December 2015 (Google) through June <span class="currentYear"></span>. Ratings compiled by Apple, Inc., and Google, Inc., who receive compensation for hosting our app.',
        'footer_legal_note_4' => 'By using this website, you understand the information being presented is provided for informational purposes only and agree to our <a href="/ph/terms" class="legal-link">Terms of Use</a> and <a href="/ph/privacy" class="legal-link">Privacy Policy</a>.',
        'footer_legal_note_5' => 'EquiLoomPRO Advisers relies on information from various sources believed to be reliable, including clients and third parties, but cannot guarantee the accuracy or completeness of that information. Nothing herein should be construed as an offer, recommendation, or solicitation to buy or sell any security. Additionally, EquiLoomPRO Advisers or its affiliates do not provide tax advice and investors are encouraged to consult with their personal tax advisors.',
        'footer_legal_note_6' => 'We partner with regulated banking and payment providers in the Philippines to bring you cash and card features. Banking services are provided by our third-party partners subject to identity verification and applicable local regulations.',
        'footer_legal_note_7' => 'Cash account services are offered via regulated brokers and banking partners and are separate from investing accounts. Investment management and advisory services are provided by EquiLoomPRO Advisers or affiliated entities. Products and services vary by jurisdiction.',
        'footer_legal_note_8' => 'The effectiveness of the Tax-Loss Harvesting strategy to reduce the tax liability of the client will depend on the client’s entire tax and investment profile, including purchases and dispositions in accounts outside of EquiLoomPRO and type of investments (e.g., taxable or nontaxable) or holding period (e.g., short-term or long-term). Tax loss harvesting may generate a higher number of trades due to attempts to capture losses. There is a chance that trading attributed to tax loss harvesting may create capital gains and wash sales and could be subject to higher transaction costs and market impacts. In addition, tax loss harvesting strategies may produce losses, which may not be offset by sufficient gains in the account and may be limited by applicable tax rules. Utilisation of harvested losses depends on recognition of capital gains in the same or a future tax period and may be subject to limitations under applicable tax laws. Losses harvested through the strategy that are not utilised in the tax period when recognised may generally be carried forward to offset future capital gains, if any.',
        'footer_legal_note_9' => 'All investing involves risk, including the possible loss of money you invest, and past performance does not guarantee future performance. Historical returns, expected returns, and probability projections are provided for informational and illustrative purposes, and may not reflect actual future performance.',
        'footer_legal_copy' => 'EquiLoomPRO, EquiLoomPRO Advisers and EquiLoomPRO Brokerage are wholly owned subsidiaries of EquiLoomPRO Corporation. <br><br> © <span class="currentYear"></span> EquiLoomPRO Corporation. All rights reserved.',

        // About -----------------------------------------------
        'about_title' => 'About',
        'about_text' => 'At <span class="brand-name">EquiLoomPRO</span>, we’re a team of experienced investors and AI experts united to build a top-tier investment platform, renowned for its precision and rapid performance.',
        'about_content_title' => 'Our core is a diverse, passionate global team united by a mission to reshape the future of investing.',
        'about_content_text_1' => 'We’re dedicated to transforming the investment landscape by leveraging the power of artificial intelligence. By combining expert investor insights with cutting-edge technology, we deliver an investment platform that excels in accuracy, speed, and profitability.',
        'about_content_text_2' => 'Our global team brings diverse perspectives, continuously innovating to incorporate the latest AI and financial trends into our platform. We’re driven by the synergy of human expertise and machine intelligence to provide a transformative investment experience.',
        'about_content_img_alt' => 'About EquiLoomPRO team',
        'period' => [
            [
                'date' => 'April <script>document.write(new Date().getFullYear() - 3)</script>',
                'title' => 'Birth of a Vision',
                'description' => 'EquiLoomPRO was established with a bold vision to revolutionise investing through artificial intelligence.',
            ],
            [
                'date' => 'July <script>document.write(new Date().getFullYear() - 3)</script>',
                'title' => 'Growth and Development',
                'description' => 'We raised ₱225,000,000 in funding, driving platform development and team expansion.',
            ],
            [
                'date' => 'November <script>document.write(new Date().getFullYear() - 3)</script>',
                'title' => 'Beta Testing Phase',
                'description' => 'The beta version of EquiLoomPRO was launched, gathering user feedback and refining our technology.',
            ],
            [
                'date' => 'June <script>document.write(new Date().getFullYear() - 2)</script>',
                'title' => 'Global Launch',
                'description' => 'EquiLoomPRO debuted globally, bringing our advanced investment technology to users worldwide, marking a key milestone in revolutionising the investment sector.',
            ],
        ],
        'investment_title' => 'Revolutionise Your Investment Approach',
        'investment_text' => 'Experience the future of asset investing with EquiLoomPRO. Our innovative blend of AI and comprehensive data analytics delivers exceptional investment capabilities, enabling investors to navigate market challenges with unmatched precision.',
        'investment_btn' => 'Get started',

        // Contact
        'contact_title' => 'Contact us',
        'contact_text' => 'Reach out to us for guidance or answers to your questions, and our expert team will help you make confident, strategic investment decisions.',
        'contact_form_enable_js' => 'Please enable JavaScript in your browser to complete this form.',
        'contact_label_name' => 'Name',
        'contact_label_email' => 'Email',
        'contact_label_message' => 'Comment or Message',
        'contact_submit' => 'Submit',
        'contact_form_agreement' => ' * By clicking the button you agree and accept the <a href="/ph/privacy" class="form-link">Privacy Policy</a> and <a href="/ph/terms" class="form-link">Terms &amp; Conditions</a>.',
        'contact_form_success' => 'Form submitted successfully!',

        // Privacy Policy
        'privacy_title' => 'Privacy Policy',
        'privacy_updated' => '<b>Last updated:</b> July <script>document.write(new Date().getFullYear() - 1)</script>',

        'privacy_1_title' => '1. Introduction',
        'privacy_1_text' => '
<p>This Privacy Policy of EquiLoomPRO ("we," "us," or "our") details how we manage personal data when you use our services ("Services") and website <a href="/ph/">EquiLoomPRO</a> ("Website"). Safeguarding your privacy and data is our priority.</p>
<p>Our Services and Website may link to third-party sites. We are not responsible for their privacy practices, so please review their policies before engaging.</p>
<p>We treat all collected data as confidential, employing robust technical and organizational measures to protect Personal Data from unauthorized access, loss, or disclosure.</p>
<p>When using our Website, you may provide personal information (e.g., name, email, phone number). This data may be used to verify identity, offer support, fulfill obligations, or send updates with your consent. You can manage notification preferences or opt out of communications.</p>
',

        'privacy_2_title' => '2. Data Collection and Use',
        'privacy_2_1_title' => '2.1. General',
        'privacy_2_1_text' => '
<p>We collect data from Website visitors ("Visitors"), users ("Users"), and partners ("Partners"). Personal Data includes IP addresses, names, contact details, and relationship information, as per data protection laws.</p>
',

        'privacy_2_2_title' => '2.2. Collection',
        'privacy_2_2_text' => '
<p>By accessing our Website, you consent to data collection (e.g., via cookies, IP addresses, or forms). If you disagree, please refrain from using the Website.</p>
',

        'privacy_2_3_title' => '2.3. Purpose',
        'privacy_2_3_text' => '
<p>We process Personal Data to improve our Services, personalize experiences, provide support, and comply with legal obligations. Purposes and legal bases include:</p>
<table>
    <tbody>
        <tr><td>Account registration</td><td>Consent; Contract performance</td></tr>
        <tr><td>Service provision</td><td>Contract performance</td></tr>
        <tr><td>Support and queries</td><td>Legitimate interests</td></tr>
        <tr><td>Marketing</td><td>Consent</td></tr>
        <tr><td>Service improvement</td><td>Legitimate interests</td></tr>
    </tbody>
</table>
',

        'privacy_2_4_title' => '2.4. Data Sharing',
        'privacy_2_4_text' => '
<p>We may share data with trusted vendors and partners, ensuring compliance with the Philippine Data Privacy Act (DPA) and applicable regulations.</p>
',

        'privacy_3_title' => '3. Partners',
        'privacy_3_text' => '
<p>We process Partner data with consent or for legitimate interests, ensuring secure handling and compliance with data protection laws.</p>
',

        'privacy_4_title' => '4. Security',
        'privacy_4_text' => '
<p>We implement technical and organizational safeguards to protect Personal Data. Third parties we share data with are contractually obligated to maintain equivalent standards. While we strive for security, no system is fully immune to breaches, and Users accept this risk.</p>
',

        'privacy_5_title' => '5. Cookies',
        'privacy_5_text' => '
<p>See our <a href="/ph/cookie">Cookie Policy</a> for details on cookies and tracking technologies.</p>
',

        'privacy_6_title' => '6. Third-Party Links',
        'privacy_6_text' => '
<p>Our Website may link to external sites. We are not responsible for their privacy practices, so review their policies before sharing data.</p>
',

        'privacy_7_title' => '7. Data Retention',
        'privacy_7_text' => '
<p>We retain Personal Data only as long as necessary. Upon account termination, data is deleted in accordance with applicable laws.</p>
',

        'privacy_8_title' => '8. Your Rights',
        'privacy_8_text' => '
<p>You have rights to access, rectify, erase, restrict, or port your Personal Data, object to processing, or withdraw consent. Contact us to exercise these rights.</p>
',

        'privacy_9_title' => '9. Marketing',
        'privacy_9_text' => '
<p>We may use your data for marketing with your consent. You can withdraw consent by emailing us.</p>
',

        'privacy_10_title' => '10. Policy Acceptance',
        'privacy_10_text' => '
<p>Using our Website or Services implies agreement with this Policy. We may update it, and continued use signifies acceptance.</p>
',

        'privacy_11_title' => '11. Legal Disclosure',
        'privacy_11_text' => '
<p>We may disclose Personal Data if legally required or to protect our rights.</p>
',

        'privacy_12_title' => '12. Contact',
        'privacy_12_text' => '
<p>For privacy concerns, contact our Data Protection Officer at <a href="mailto:support@zevriocapiture.org">support@zevriocapiture.org</a>.</p>
',

        // Terms of Use
        'terms_title' => 'Terms of Use',
        'terms_updated' => '<b>Last updated:</b> July <script>document.write(new Date().getFullYear() - 1)</script>',

        'terms_1_title' => '1. Introduction',
        'terms_1_text' => '
<p>Welcome to the EquiLoomPRO website ("Website"), operated by EquiLoomPRO ("we," "us," "our"). By using our Website or services ("Services"), you agree to these Terms and Conditions ("Terms") and our Privacy Policy. Contact us at <a href="mailto:support@zevriocapiture.org">support@zevriocapiture.org</a>.</p>
<p>These Terms may be updated without notice. Continued use of the Website or Services implies acceptance of changes. If you disagree, you are not authorized to use the Website or Services.</p>
',

        'terms_2_title' => '2. No Investment Advice',
        'terms_2_text' => '
<p>Our Website does not offer personal financial or investment advice. Information provided is general and does not account for your specific objectives, financial situation, or needs. Consult an independent financial adviser before making investment decisions.</p>
',

        'terms_3_title' => '3. Services',
        'terms_3_text' => '
<p>Not all Services are provided by us. Third-party services, websites, or products linked on our Website are not endorsed by us. We are not liable for third-party content or services.</p>
',

        'terms_4_title' => '4. Scope and Modification',
        'terms_4_text' => '
<p>These Terms constitute the entire agreement between you and us, superseding prior agreements. We may modify Terms at our discretion, and continued use signifies acceptance.</p>
',

        'terms_5_title' => '5. Eligibility',
        'terms_5_text' => '
<p>Services are for individuals aged 18+ who can enter legally binding contracts. Minors are not permitted to use the Website or Services.</p>
',

        'terms_6_title' => '6. Description of Services',
        'terms_6_text' => '
<p><b>Subscription Services:</b> Upon registration, you may access Subscription Services (free or paid), including content from us or third-party providers. This is not investment advice, and we are not liable for its accuracy.</p>
<p><b>Third-Party Services:</b> Products or services from third parties may be offered. We are not responsible for their accuracy or your inability to access them.</p>
<p><b>General:</b> Accurate registration data is required. We may reject incomplete or fraudulent data and are not liable for service interruptions.</p>
',

        'terms_7_title' => '7. Proprietary Rights',
        'terms_7_text' => '
<p>The Website and its content are protected by copyrights, trademarks, and other rights. Unauthorized reproduction, redistribution, or scraping is prohibited.</p>
',

        'terms_8_title' => '8. Confidential Information',
        'terms_8_text' => '
<p>Confidential information is protected for one year post-termination, excluding publicly available data or information received without restrictions.</p>
',

        'terms_9_title' => '9. Hyperlinking and Framing',
        'terms_9_text' => '
<p>Hyperlinking, framing, or referencing our Website without permission is prohibited. You are liable for damages caused by such actions.</p>
',

        'terms_10_title' => '10. Disclaimer',
        'terms_10_text' => '
<p>Services and content are provided "as-is" without warranties. We are not liable for errors, interruptions, or inability to use the Website or Services.</p>
',

        'terms_11_title' => '11. Limitation of Liability',
        // Max liability: £200 → PHP (×75) = ₱15,000
        'terms_11_text' => '
<p>We are not liable for any damages, including loss of profits or data. Our maximum liability is ₱15,000, where permitted by law.</p>
',

        'terms_12_title' => '12. Indemnification',
        'terms_12_text' => '
<p>You agree to indemnify us against claims arising from your use of the Website, breach of Terms, or violation of rights.</p>
',

        'terms_13_title' => '13. Third-Party Websites',
        'terms_13_text' => '
<p>We are not responsible for third-party websites or resources linked on our Website, nor their content or policies.</p>
',

        'terms_14_title' => '14. Data Protection',
        'terms_14_text' => '
<p>We comply with the Philippine Data Privacy Act (DPA) and applicable regulations. We maintain security measures, obtain consents, and assist with data subject rights requests. We notify of data breaches promptly as required by law.</p>
',

        'terms_15_title' => '15. Governing Law',
        'terms_15_text' => '
<p>These Terms are governed by the laws of the Philippines. Disputes will be resolved through arbitration in Makati City under PDRCI rules.</p>
',

        'terms_16_title' => '16. Contact',
        'terms_16_text' => '
<p>For questions, contact us at <a href="mailto:support@zevriocapiture.org">support@zevriocapiture.org</a>.</p>
',
    ],
    'th' => [
        'language_iso' => 'en',
        'country_name' => 'Thailand',
        'locale' => 'en_TH',
        'locale_lang' => 'en-TH',
        'language_name' => 'English',
        'city' => 'Bangkok',
        'country_code' => 'TH',
        'geo_position' => '13.7563, 100.5018',

        'jsonld_organization_name' => 'EquiLoomPRO',
        'jsonld_organization_review_rating' => '4.96',
        'jsonld_organization_review_author' => 'EquiLoomPRO User',
        'jsonld_software_categories' => 'Cryptocurrency Investment Tool',
        // localized from original to THB and rounded up
        'jsonld_software_price' => '7200',
        'jsonld_software_price_currency' => 'THB',

        'brand_name_api' => 'EquLum App AI',

        'home' => 'Home',
        'about' => 'About Us',
        'contact' => 'Contact Us',
        'privacy' => 'Privacy Policy',
        'terms' => 'Terms and Conditions',

        // Home (index)
        'title' => 'EquiLoomPRO — Automated Investing & Cash Management',
        'meta_description' => 'Make wealth your own with EquiLoomPRO in Thailand. AI-assisted portfolios, automated savings, and tax-aware features to help you invest confidently and grow your money.',
        'meta_keywords' => 'EquiLoomPRO, automated investing, AI investing, portfolio management, cash account, savings, Thailand, Bangkok',

        // Open Graph / Twitter (global)
        'og_title' => 'EquiLoomPRO — AI-Powered Investing Platform',
        'og_description' => 'Automated portfolios, smart cash, and effortless investing for Thailand. Start with EquiLoomPRO and grow your wealth with confidence.',
        'og_image' => '/assets/images/share.webp',

        'twitter_title' => 'EquiLoomPRO — Automated Investing',
        'twitter_description' => 'AI-assisted portfolios and automated savings to help you grow wealth across Thailand.',

        // About
        'about_desc_content' => 'Meet EquiLoomPRO — a Bangkok-focused team of investors and AI experts building a high-precision, high-speed investment platform that helps you grow wealth confidently.',
        'about_keywords' => 'about EquiLoomPRO, company, AI investing team, investment platform, Bangkok',

        // Contact
        'contact_desc_content' => 'Questions or guidance? Contact EquiLoomPRO — our experts are ready to help you make confident, strategic investment decisions in Thailand.',
        'contact_keywords' => 'contact EquiLoomPRO, support, help, investing questions, Bangkok',

        // Terms
        'terms_desc_content' => 'Read the Terms and Conditions for using EquiLoomPRO’s website and services in Thailand, including eligibility, limitations, and legal notices.',
        'terms_keywords' => 'terms of use, terms and conditions, EquiLoomPRO, legal, Thailand',

        // Privacy
        'privacy_desc_content' => 'How EquiLoomPRO collects, uses, and protects your personal data in Thailand, your rights, and our commitment to privacy and security.',
        'privacy_keywords' => 'privacy policy, data protection, PDPA Thailand, GDPR, personal data, EquiLoomPRO',

        // ---------- JSON-LD content ----------
        'jsonld_organization_review_body' => 'EquiLoomPRO delivers an AI-assisted investing platform that combines automated portfolios, smart cash management, and tax-aware features to help clients in Bangkok and across Thailand grow wealth with confidence.',

        // FAQ (shown on index)
        'jsonld_faq_1_question' => 'What is EquiLoomPRO?',
        'jsonld_faq_1_answer' => 'EquiLoomPRO is an AI-assisted investing platform that helps you build and automate diversified portfolios, optimize savings, and invest with confidence.',

        'jsonld_faq_2_question' => 'How does EquiLoomPRO help me invest?',
        'jsonld_faq_2_answer' => 'We offer customizable or automated portfolios, smart cash tools, and features designed to improve after-tax outcomes — so you can invest effortlessly while staying in control.',

        'jsonld_faq_3_question' => 'Is EquiLoomPRO available in Thailand?',
        'jsonld_faq_3_answer' => 'Yes. EquiLoomPRO supports clients in Bangkok and across Thailand, with experiences tailored to your locale and currency (THB).',

        'jsonld_faq_4_question' => 'Do I need to use automation or AI?',
        'jsonld_faq_4_answer' => 'Automation is optional. You can let the platform handle routine tasks or build and adjust your own portfolio whenever you like.',

        'jsonld_faq_5_question' => 'How do I get started?',
        'jsonld_faq_5_answer' => 'Create your profile, choose or customize a portfolio, and fund your account. There are no hidden sign-up fees; partner services may have their own requirements.',

        'jsonld_faq_6_question' => 'How does EquiLoomPRO protect my data?',
        'jsonld_faq_6_answer' => 'We apply robust technical and organizational security measures and follow applicable Thailand PDPA and international data protection standards to safeguard your information.',

        // Header section
        'header_logo_alt' => 'EquiLoomPRO Logo',
        'header_logo_text' => 'EquiLoomPRO',
        'header_burger_alt' => 'Menu',
        'header_cross_alt' => 'Close',

        // Hero section
        'hero_form_title' => 'Register now',
        'hero_form_notice' => '* By clicking the button you agree and accept the <a href="/th/privacy" class="form-link">Privacy Policy</a> and <a href="/th/terms" class="form-link">Terms & Conditions</a>.',
        'hero_title' => 'Make wealth your own.',
        'hero_subtitle' => 'Personalized, Automated, Effortless Investing and Savings.',

        'hero_stat_nerdwallet' => "Best Robo-advisor, 2019<sup class=\"sup\">1</sup><br>Best Cash Management App, 2020<sup class=\"sup\">1</sup>",
        'hero_stat_investopedia' => "Best Robo-advisor, 2020<sup class=\"sup\">1</sup>",
        'hero_stat_clients' => 'Trusted clients',
        'hero_stat_funds' => 'In client funds',
        'hero_stat_appstore' => 'Apple App Store <sup class=\"sup\">2</sup>',
        'hero_stat_playstore' => 'Google Play Store <sup class=\"sup\">2</sup>',

        // Investition section
        'investition_title' => 'Investing isn’t easy. We just make it feel that way.',
        'investition_text' => 'Let us customize a portfolio just for you or build it yourself, and our powerful automation will make the most of your investments, optimizing your performance and helping lower your taxes.',
        'investition_btn_start' => 'Start investing',
        'investition_btn_more' => 'Learn more',
        'investition_notification_app' => 'EquiLoomPRO',
        'investition_notification_time' => 'now',
        // localized examples to THB, rounded up
        'investition_notification_1' => 'We saved you <span>฿3,000</span> on your taxes.',
        'investition_notification_2' => 'We automatically invested your <span>฿9,500</span> deposit.',

        // Cash section
        'cash_title' => 'Everyday cash, designed to build long-term wealth.',
        'cash_text' => 'Our Cash account, offered with regulated banking partners, lets you automate your savings, pay bills, withdraw from thousands of ATMs across Thailand, and invest your extra cash in seconds to keep building your future.',
        'cash_btn_start' => 'Start saving',
        'cash_btn_more' => 'Learn more',
        'cash_img_phone_alt' => 'Phone',
        'cash_img_card_alt' => 'Card',

        // Saving section
        'saving_title' => 'Saving and investing. All while you’re relaxing.',
        'saving_text' => 'Tell us what you’re saving for, and we’ll automatically set aside extra cash to hit your goals. And since we connect with all your accounts, you only need one app to watch your wealth grow.',
        'saving_img_alt' => 'Saving',

        // Testimonials section
        'testimonial_title' => 'TESTIMONIAL',
        'testimonial_1_quote' => 'It\'s the single <strong>best</strong> resource for both investing, managing retirement and seeing my entire financial picture.',
        'testimonial_1_author' => 'Somchai P',
        'testimonial_2_quote' => '<strong>EquiLoomPRO</strong> is the first thing in my life that actually motivated me to save money.',
        'testimonial_2_author' => 'Anong K',
        'testimonial_3_quote' => 'It’s <strong>automatic</strong>, and I’m lazy.',
        'testimonial_3_author' => 'Niran L',

        // Trust section
        'trust_title' => 'Over <strong>120,000</strong> people across Thailand are already using EquiLoomPRO to earn more and worry less',
        'trust_btn' => 'Get started',
        'trust_img_alt' => 'Open window with plant',
        'trust_subtitle' => 'AS FEATURED IN',
        'trust_logo_wsj_alt' => 'WSJ',
        'trust_logo_bloomberg_alt' => 'Bloomberg',
        'trust_logo_nyt_alt' => 'The New York Times',
        'trust_logo_reuters_alt' => 'Reuters',
        'trust_logo_cnbc_alt' => 'CNBC',

        // Footer section
        'footer_logo_alt' => 'EquiLoomPRO Logo',
        'footer_logo_text' => 'EquiLoomPRO',
        'footer_legal_note_1' => 'Testimonials were given by clients of both EquiLoomPRO Advisers and EquiLoomPRO Brokerage. There is no guarantee that clients will have similar experiences or success.',
        'footer_legal_note_2' => 'Nerdwallet and Investopedia (the “Endorsers”) receive cash compensation for referring potential clients to EquiLoomPRO Advisers via advertisements placed on their respective websites. The Endorsers and EquiLoomPRO Advisers are not associated outside of this arrangement. Consider a provider’s fees, features, and methodology before making a decision.',
        'footer_legal_note_3' => 'Apple App Store and Google Play Store ratings are based on user ratings from February 2014 (Apple) and December 2015 (Google) through June <span class="currentYear"></span>. Ratings compiled by Apple, Inc., and Google, Inc., who receive compensation for hosting our app.',
        'footer_legal_note_4' => 'By using this website, you understand the information being presented is provided for informational purposes only and agree to our <a href="/th/terms" class="legal-link">Terms of Use</a> and <a href="/th/privacy" class="legal-link">Privacy Policy</a>.',
        'footer_legal_note_5' => 'EquiLoomPRO Advisers relies on information from various sources believed to be reliable, including clients and third parties, but cannot guarantee the accuracy or completeness of that information. Nothing herein should be construed as an offer, recommendation, or solicitation to buy or sell any security. Additionally, EquiLoomPRO Advisers or its affiliates do not provide tax advice and investors are encouraged to consult with their personal tax advisors.',
        'footer_legal_note_6' => 'We partner with regulated banking and payment providers in Thailand to bring you cash and card features. Banking services are provided by third-party partners subject to identity verification and applicable local regulations.',
        'footer_legal_note_7' => 'Cash account services are offered via regulated brokers and banking partners and are separate from investing accounts. Investment management and advisory services are provided by EquiLoomPRO Advisers or affiliated entities. Products and services vary by jurisdiction.',
        'footer_legal_note_8' => 'Tax-loss harvesting and other tax-aware features may not be suitable for all investors and depend on your overall tax situation. Such strategies may increase trading and could generate capital gains or wash sales. Utilization of harvested losses depends on recognition of capital gains and may be subject to limitations under applicable Thai tax rules.',
        'footer_legal_note_9' => 'All investing involves risk, including the possible loss of money you invest, and past performance does not guarantee future performance. Historical returns, expected returns, and probability projections are provided for informational and illustrative purposes only.',
        'footer_legal_copy' => 'EquiLoomPRO, EquiLoomPRO Advisers and EquiLoomPRO Brokerage are wholly owned subsidiaries of EquiLoomPRO Corporation. <br><br> © <span class="currentYear"></span> EquiLoomPRO Corporation. All rights reserved.',

        // About -----------------------------------------------
        'about_title' => 'About',
        'about_text' => 'At <span class="brand-name">EquiLoomPRO</span>, we’re a team of experienced investors and AI experts united to build a top-tier investment platform, renowned for its precision and rapid performance.',
        'about_content_title' => 'Our core is a diverse, passionate global team united by a mission to reshape the future of investing.',
        'about_content_text_1' => 'We’re dedicated to transforming the investment landscape by leveraging the power of artificial intelligence. By combining expert investor insights with cutting-edge technology, we deliver an investment platform that excels in accuracy, speed, and profitability.',
        'about_content_text_2' => 'Our global team brings diverse perspectives, continuously innovating to incorporate the latest AI and financial trends into our platform. We’re driven by the synergy of human expertise and machine intelligence to provide a transformative investment experience.',
        'about_content_img_alt' => 'About EquiLoomPRO team',

        'period' => [
            [
                'date' => 'April <script>document.write(new Date().getFullYear() - 3)</script>',
                'title' => 'Birth of a Vision',
                'description' => 'EquiLoomPRO was established with a bold vision to revolutionise investing through artificial intelligence.',
            ],
            [
                'date' => 'July <script>document.write(new Date().getFullYear() - 3)</script>',
                'title' => 'Growth and Development',
                'description' => 'We raised ฿120,000,000 in funding, driving platform development and team expansion.',
            ],
            [
                'date' => 'November <script>document.write(new Date().getFullYear() - 3)</script>',
                'title' => 'Beta Testing Phase',
                'description' => 'The beta version of EquiLoomPRO was launched in Bangkok, gathering user feedback and refining our technology.',
            ],
            [
                'date' => 'June <script>document.write(new Date().getFullYear() - 2)</script>',
                'title' => 'Global Launch',
                'description' => 'EquiLoomPRO debuted globally, bringing our advanced investment technology to users worldwide, including Thailand.',
            ],
        ],

        'investment_title' => 'Revolutionise Your Investment Approach',
        'investment_text' => 'Experience the future of asset investing with EquiLoomPRO. Our innovative blend of AI and comprehensive data analytics delivers exceptional investment capabilities, enabling investors to navigate market challenges with unmatched precision.',
        'investment_btn' => 'Get started',

        // Contact
        'contact_title' => 'Contact us',
        'contact_text' => 'Reach out to us for guidance or answers to your questions, and our expert team will help you make confident, strategic investment decisions.',
        'contact_form_enable_js' => 'Please enable JavaScript in your browser to complete this form.',
        'contact_label_name' => 'Name',
        'contact_label_email' => 'Email',
        'contact_label_message' => 'Comment or Message',
        'contact_submit' => 'Submit',
        'contact_form_agreement' => ' * By clicking the button you agree and accept the <a href="/th/privacy" class="form-link">Privacy Policy</a> and <a href="/th/terms" class="form-link">Terms &amp; Conditions</a>.',
        'contact_form_success' => 'Form submitted successfully!',

        // Privacy Policy
        'privacy_title' => 'Privacy Policy',
        'privacy_updated' => '<b>Last updated:</b> July <script>document.write(new Date().getFullYear() - 1)</script>',

        'privacy_1_title' => '1. Introduction',
        'privacy_1_text' => '
<p>This Privacy Policy of EquiLoomPRO ("we," "us," or "our") explains how we manage personal data when you use our services ("Services") and website <a href="/th/">EquiLoomPRO</a> ("Website") in Thailand. Safeguarding your privacy and data is our priority.</p>
<p>Our Services and Website may link to third-party sites. We are not responsible for their privacy practices, so please review their policies before engaging.</p>
<p>We treat all collected data as confidential, employing robust technical and organizational measures to protect Personal Data from unauthorized access, loss, or disclosure.</p>
<p>When using our Website, you may provide personal information (e.g., name, email, phone number). This data may be used to verify identity, offer support, fulfill obligations, or send updates with your consent. You can manage notification preferences or opt out of communications.</p>
',

        'privacy_2_title' => '2. Data Collection and Use',
        'privacy_2_1_title' => '2.1. General',
        'privacy_2_1_text' => '
<p>We collect data from Website visitors ("Visitors"), users ("Users"), and partners ("Partners"). Personal Data can include IP addresses, names, contact details, and relationship information, as permitted by data protection laws.</p>
',

        'privacy_2_2_title' => '2.2. Collection',
        'privacy_2_2_text' => '
<p>By accessing our Website, you consent to data collection (e.g., via cookies, IP addresses, or forms). If you disagree, please refrain from using the Website.</p>
',

        'privacy_2_3_title' => '2.3. Purpose',
        'privacy_2_3_text' => '
<p>We process Personal Data to improve our Services, personalize experiences, provide support, and comply with legal obligations. Purposes and legal bases include:</p>
<table>
    <tbody>
        <tr><td>Account registration</td><td>Consent; Contract performance</td></tr>
        <tr><td>Service provision</td><td>Contract performance</td></tr>
        <tr><td>Support and queries</td><td>Legitimate interests</td></tr>
        <tr><td>Marketing</td><td>Consent</td></tr>
        <tr><td>Service improvement</td><td>Legitimate interests</td></tr>
    </tbody>
</table>
',

        'privacy_2_4_title' => '2.4. Data Sharing',
        'privacy_2_4_text' => '
<p>We may share data with trusted vendors and partners, ensuring compliance with Thailand’s PDPA and, where applicable, GDPR.</p>
',

        'privacy_3_title' => '3. Partners',
        'privacy_3_text' => '
<p>We process Partner data with consent or for legitimate interests, ensuring secure handling and compliance with data protection laws.</p>
',

        'privacy_4_title' => '4. Security',
        'privacy_4_text' => '
<p>We implement technical and organizational safeguards to protect Personal Data. Third parties we share data with are contractually obligated to maintain equivalent standards. While we strive for security, no system is fully immune to breaches, and Users accept this risk.</p>
',

        'privacy_5_title' => '5. Cookies',
        'privacy_5_text' => '
<p>See our <a href="/th/cookie">Cookie Policy</a> for details on cookies and tracking technologies.</p>
',

        'privacy_6_title' => '6. Third-Party Links',
        'privacy_6_text' => '
<p>Our Website may link to external sites. We are not responsible for their privacy practices, so review their policies before sharing data.</p>
',

        'privacy_7_title' => '7. Data Retention',
        'privacy_7_text' => '
<p>We retain Personal Data only as long as necessary. Upon account termination, data is deleted in accordance with applicable laws.</p>
',

        'privacy_8_title' => '8. Your Rights',
        'privacy_8_text' => '
<p>You may have rights to access, rectify, erase, restrict, or port your Personal Data, object to processing, or withdraw consent, in accordance with PDPA. Contact us to exercise these rights.</p>
',

        'privacy_9_title' => '9. Marketing',
        'privacy_9_text' => '
<p>We may use your data for marketing with your consent. You can withdraw consent by emailing us.</p>
',

        'privacy_10_title' => '10. Policy Acceptance',
        'privacy_10_text' => '
<p>Using our Website or Services implies agreement with this Policy. We may update it, and continued use signifies acceptance.</p>
',

        'privacy_11_title' => '11. Legal Disclosure',
        'privacy_11_text' => '
<p>We may disclose Personal Data if legally required or to protect our rights.</p>
',

        'privacy_12_title' => '12. Contact',
        'privacy_12_text' => '
<p>For privacy concerns, contact our Data Protection Officer at <a href="mailto:support@zevriocapiture.org">support@zevriocapiture.org</a>.</p>
',

        // Terms of Use
        'terms_title' => 'Terms of Use',
        'terms_updated' => '<b>Last updated:</b> July <script>document.write(new Date().getFullYear() - 1)</script>',

        'terms_1_title' => '1. Introduction',
        'terms_1_text' => '
<p>Welcome to the EquiLoomPRO website ("Website"), operated by EquiLoomPRO ("we," "us," "our"). By using our Website or services ("Services") in Thailand, you agree to these Terms and Conditions ("Terms") and our Privacy Policy. Contact us at <a href="mailto:support@zevriocapiture.org">support@zevriocapiture.org</a>.</p>
<p>These Terms may be updated without notice. Continued use of the Website or Services implies acceptance of changes. If you disagree, you are not authorized to use the Website or Services.</p>
',

        'terms_2_title' => '2. No Investment Advice',
        'terms_2_text' => '
<p>Our Website does not offer personal financial or investment advice. Information provided is general and does not account for your specific objectives, financial situation, or needs. Consult an independent financial adviser before making investment decisions.</p>
',

        'terms_3_title' => '3. Services',
        'terms_3_text' => '
<p>Not all Services are provided by us. Third-party services, websites, or products linked on our Website are not endorsed by us. We are not liable for third-party content or services.</p>
',

        'terms_4_title' => '4. Scope and Modification',
        'terms_4_text' => '
<p>These Terms constitute the entire agreement between you and us, superseding prior agreements. We may modify Terms at our discretion, and continued use signifies acceptance.</p>
',

        'terms_5_title' => '5. Eligibility',
        'terms_5_text' => '
<p>Services are for individuals aged 18+ who can enter legally binding contracts. Minors are not permitted to use the Website or Services.</p>
',

        'terms_6_title' => '6. Description of Services',
        'terms_6_text' => '
<p><b>Subscription Services:</b> Upon registration, you may access Subscription Services (free or paid), including content from us or third-party providers. This is not investment advice, and we are not liable for its accuracy.</p>
<p><b>Third-Party Services:</b> Products or services from third parties may be offered. We are not responsible for their accuracy or your inability to access them.</p>
<p><b>General:</b> Accurate registration data is required. We may reject incomplete or fraudulent data and are not liable for service interruptions.</p>
',

        'terms_7_title' => '7. Proprietary Rights',
        'terms_7_text' => '
<p>The Website and its content are protected by copyrights, trademarks, and other rights. Unauthorized reproduction, redistribution, or scraping is prohibited.</p>
',

        'terms_8_title' => '8. Confidential Information',
        'terms_8_text' => '
<p>Confidential information is protected for one year post-termination, excluding publicly available data or information received without restrictions.</p>
',

        'terms_9_title' => '9. Hyperlinking and Framing',
        'terms_9_text' => '
<p>Hyperlinking, framing, or referencing our Website without permission is prohibited. You are liable for damages caused by such actions.</p>
',

        'terms_10_title' => '10. Disclaimer',
        'terms_10_text' => '
<p>Services and content are provided "as-is" without warranties. We are not liable for errors, interruptions, or inability to use the Website or Services.</p>
',

        'terms_11_title' => '11. Limitation of Liability',
        'terms_11_text' => '
<p>We are not liable for any damages, including loss of profits or data. Our maximum liability is ฿10,000, where permitted by law.</p>
',

        'terms_12_title' => '12. Indemnification',
        'terms_12_text' => '
<p>You agree to indemnify us against claims arising from your use of the Website, breach of Terms, or violation of rights.</p>
',

        'terms_13_title' => '13. Third-Party Websites',
        'terms_13_text' => '
<p>We are not responsible for third-party websites or resources linked on our Website, nor their content or policies.</p>
',

        'terms_14_title' => '14. Data Protection',
        'terms_14_text' => '
<p>We comply with Thailand’s Personal Data Protection Act (PDPA) and applicable international data protection standards. We maintain security measures, obtain consents where required, and assist with data subject rights requests. We notify of data breaches as required by law.</p>
',

        'terms_15_title' => '15. Governing Law',
        'terms_15_text' => '
<p>These Terms are governed by the laws of Thailand. Disputes will be resolved through arbitration in Bangkok, Thailand, under commonly accepted institutional rules.</p>
',

        'terms_16_title' => '16. Contact',
        'terms_16_text' => '
<p>For questions, contact us at <a href="mailto:support@zevriocapiture.org">support@zevriocapiture.org</a>.</p>
',
    ],
    'kw' => [
        'language_iso' => 'en',
        'country_name' => 'Kuwait',
        'locale' => 'en_KW',
        'locale_lang' => 'en-KW',
        'language_name' => 'English',
        'city' => 'Kuwait City',
        'country_code' => 'KW',
        'geo_position' => '29.3759, 47.9774',
        'jsonld_organization_name' => 'EquiLoomPRO',
        'jsonld_organization_review_rating' => '4.96',
        'jsonld_organization_review_author' => 'EquiLoomPRO User',
        'jsonld_software_categories' => 'Cryptocurrency Investment Tool',
        // original 190 USD ≈ 58.5 KWD (rounded)
        'jsonld_software_price' => '58.5',
        'jsonld_software_price_currency' => 'KWD',
        'brand_name_api' => 'EquLum App AI',

        'home' => 'Home',
        'about' => 'About Us',
        'contact' => 'Contact Us',
        'privacy' => 'Privacy Policy',
        'terms' => 'Terms and Conditions',

        // Home (index)
        'title' => 'EquiLoomPRO — Automated Investing & Cash Management in Kuwait',
        'meta_description' => 'Make wealth your own with EquiLoomPRO. AI-assisted portfolios, automated savings, and Shariah-compliant, tax-efficient features to help you invest confidently and grow your money in Kuwait.',
        'meta_keywords' => 'EquiLoomPRO, automated investing, AI investing, portfolio management, cash account, savings, tax efficient, Kuwait, Kuwait City',

        // Open Graph / Twitter
        'og_title' => 'EquiLoomPRO — AI-Powered Investing Platform Kuwait',
        'og_description' => 'Automated portfolios, smart cash, and effortless investing. Start with EquiLoomPRO and grow your wealth with confidence in Kuwait.',
        'og_image' => '/assets/images/share.webp',

        'twitter_title' => 'EquiLoomPRO — Automated Investing in Kuwait',
        'twitter_description' => 'AI-assisted portfolios and automated savings to help you grow wealth with confidence in Kuwait.',

        // About
        'about_desc_content' => 'Meet EquiLoomPRO — a Kuwait City–based team of investors and AI experts building a high-precision, high-speed investment platform that helps you grow wealth confidently.',
        'about_keywords' => 'about EquiLoomPRO, company, AI investing team, investment platform, Kuwait City',

        // Contact
        'contact_desc_content' => 'Questions or guidance? Contact EquiLoomPRO — our experts in Kuwait are ready to help you make confident, strategic investment decisions.',
        'contact_keywords' => 'contact EquiLoomPRO, support, help, investing questions, Kuwait',

        // Terms
        'terms_desc_content' => 'Read the Terms and Conditions for using EquiLoomPRO’s website and services, including eligibility, limitations, and legal notices in Kuwait.',
        'terms_keywords' => 'terms of use, terms and conditions, EquiLoomPRO, legal, Kuwait',

        // Privacy
        'privacy_desc_content' => 'How EquiLoomPRO collects, uses, and protects your personal data in Kuwait, your rights, and our commitment to privacy and security.',
        'privacy_keywords' => 'privacy policy, data protection, personal data, EquiLoomPRO, Kuwait',

        // ---------- JSON-LD content ----------
        'jsonld_organization_review_body' => 'EquiLoomPRO delivers an AI-assisted investing platform that combines automated portfolios, smart cash management, and Shariah-compliant, tax-efficient features to help clients in Kuwait grow wealth with confidence.',

        // FAQ
        'jsonld_faq_1_question' => 'What is EquiLoomPRO?',
        'jsonld_faq_1_answer' => 'EquiLoomPRO is an AI-assisted investing platform that helps you build and automate diversified portfolios, optimize savings, and invest with confidence in Kuwait.',

        'jsonld_faq_2_question' => 'How does EquiLoomPRO help me invest?',
        'jsonld_faq_2_answer' => 'We offer customizable or automated portfolios, smart cash tools, and features designed to improve after-tax outcomes — so you can invest effortlessly while staying in control.',

        'jsonld_faq_3_question' => 'Is EquiLoomPRO available in Kuwait?',
        'jsonld_faq_3_answer' => 'Yes. EquiLoomPRO supports clients in Kuwait City and across Kuwait, with experiences tailored to your locale and currency (KWD).',

        'jsonld_faq_4_question' => 'Do I need to use automation or AI?',
        'jsonld_faq_4_answer' => 'Automation is optional. You can let the platform handle routine tasks or build and adjust your own portfolio whenever you like.',

        'jsonld_faq_5_question' => 'How do I get started?',
        'jsonld_faq_5_answer' => 'Create your profile, choose or customize a portfolio, and fund your account in KWD. There are no hidden sign-up fees; partner services may have their own requirements.',

        'jsonld_faq_6_question' => 'How does EquiLoomPRO protect my data?',
        'jsonld_faq_6_answer' => 'We apply robust technical and organizational security measures and follow applicable Kuwait data protection standards to safeguard your information.',

        // Hero section (пример пересчёта валюты)
        'hero_form_title' => 'Register now',
        'hero_form_notice' => '* By clicking the button you agree and accept the <a href="/kw/privacy" class="form-link">Privacy Policy</a> and <a href="/kw/terms" class="form-link">Terms & Conditions</a>.',
        'hero_title' => 'Make wealth your own in Kuwait.',
        'hero_subtitle' => 'Personalized, Automated, Effortless Investing and Savings.',
        'hero_stat_nerdwallet' => "Best Robo-advisor, 2019<sup class=\"sup\">1</sup><br>Best Cash Management App, 2020<sup class=\"sup\">1</sup>",
        'hero_stat_investopedia' => "Best Robo-advisor, 2020<sup class=\"sup\">1</sup>",
        'hero_stat_clients' => 'Trusted clients',
        'hero_stat_funds' => 'In client funds',
        'hero_stat_appstore' => 'Apple App Store <sup class=\"sup\">2</sup>',
        'hero_stat_playstore' => 'Google Play Store <sup class=\"sup\">2</sup>',

        // Investition section
        'investition_title' => 'Investing isn’t easy. We just make it feel that way in Kuwait.',
        'investition_text' => 'Let us customize a portfolio just for you or build it yourself, and our powerful automation will make the most of your investments, optimizing performance and helping reduce your Zakat and tax exposure.',
        'investition_btn_start' => 'Start investing',
        'investition_btn_more' => 'Learn more',
        'investition_notification_app' => 'EquiLoomPRO',
        'investition_notification_time' => 'now',
        // ~62.50 GBP ≈ 23 KWD
        'investition_notification_1' => 'We saved you <span>23 KWD</span> on your taxes.',
        // £200 ≈ 74 KWD
        'investition_notification_2' => 'We automatically invested your <span>74 KWD</span> deposit.',

        // Cash section
        'cash_title' => 'Everyday cash, designed to build long-term wealth in Kuwait.',
        'cash_text' => 'Our Cash account, offered with regulated Kuwaiti banking partners, lets you automate savings, pay bills, withdraw from ATMs across Kuwait, and invest your extra cash in seconds.',
        'cash_btn_start' => 'Start saving',
        'cash_btn_more' => 'Learn more',
        'cash_img_phone_alt' => 'Phone',
        'cash_img_card_alt' => 'Card',

        // Testimonials (замена на арабские имена)
        'testimonial_title' => 'TESTIMONIAL',
        'testimonial_1_quote' => 'It\'s the single <strong>best</strong> resource for both investing, managing retirement and seeing my entire financial picture.',
        'testimonial_1_author' => 'Abdullah A',
        'testimonial_2_quote' => '<strong>EquiLoomPRO</strong> is the first thing in my life that actually motivated me to save money.',
        'testimonial_2_author' => 'Fatimah H',
        'testimonial_3_quote' => 'It’s <strong>automatic</strong>, and I’m lazy.',
        'testimonial_3_author' => 'Yousef M',

        // Trust section
        'trust_title' => 'Over <strong>120,000</strong> people across Kuwait are already using EquiLoomPRO to earn more and worry less',
        'trust_btn' => 'Get started',
        'trust_img_alt' => 'Open window with plant',
        'trust_subtitle' => 'AS FEATURED IN',
        'trust_logo_wsj_alt' => 'WSJ',
        'trust_logo_bloomberg_alt' => 'Bloomberg',
        'trust_logo_nyt_alt' => 'The New York Times',
        'trust_logo_reuters_alt' => 'Reuters',
        'trust_logo_cnbc_alt' => 'CNBC',

        // Footer section
        'footer_logo_alt' => 'EquiLoomPRO Logo',
        'footer_logo_text' => 'EquiLoomPRO',
        'footer_legal_note_1' => 'Testimonials were given by clients of both EquiLoomPRO Advisers and EquiLoomPRO Brokerage. There is no guarantee that clients will have similar experiences or success.',
        'footer_legal_note_2' => 'Nerdwallet and Investopedia (the “Endorsers”) receive cash compensation for referring potential clients to EquiLoomPRO Advisers, LLC (“EquiLoomPRO Advisers”) via advertisements placed on their respective websites. The Endorsers and EquiLoomPRO Advisers are not associated with one another and have no formal relationship outside of this arrangement. Nerdwallet’s opinions are their own. Their ratings are determined by their editorial team and rely on information they consider reliable, but cannot guarantee. Compensation does not influence product placement or rating. Consider a provider’s fees, features, and methodology before making a decision.',
        'footer_legal_note_3' => 'Apple App Store and Google Play Store ratings are based on user ratings from February 2014 (Apple) and December 2015 (Google) through June <span class="currentYear"></span>. Ratings compiled by Apple, Inc., and Google, Inc., who receive compensation for hosting our app.',
        'footer_legal_note_4' => 'By using this website, you understand the information being presented is provided for informational purposes only and agree to our <a href="/kw/terms" class="legal-link">Terms of Use</a> and <a href="/kw/privacy" class="legal-link">Privacy Policy</a>.',
        'footer_legal_note_5' => 'EquiLoomPRO Advisers relies on information from various sources believed to be reliable, including clients and third parties, but cannot guarantee the accuracy or completeness of that information. Nothing herein should be construed as an offer, recommendation, or solicitation to buy or sell any security. Additionally, EquiLoomPRO Advisers or its affiliates do not provide tax advice and investors are encouraged to consult with their personal tax advisors.',
        // Kuwait: нейтральная формулировка про локальных партнёров и правила
        'footer_legal_note_6' => 'We partner with regulated banking and payment providers in Kuwait to bring you cash and card features. Banking services are provided by our third-party partners subject to identity verification and applicable local regulations.',
        // Общая регуляторика без привязки к конкретному регулятору
        'footer_legal_note_7' => 'Cash account services are offered via regulated brokers and banking partners and are separate from investing accounts. Investment management and advisory services are provided by EquiLoomPRO Advisers or affiliated entities. Products and services vary by jurisdiction.',
        'footer_legal_note_8' => 'The effectiveness of the Tax-Loss Harvesting strategy to reduce your tax liability depends on your overall tax and investment profile, including activity in accounts outside of EquiLoomPRO and your investment types and holding periods. Tax loss harvesting may increase trading, could create capital gains and wash sales, and may lead to higher transaction costs and market impacts. Losses may not be fully offset by gains and can be limited by applicable tax rules. Utilization of harvested losses depends on recognizing capital gains in the same or a future tax period and may be subject to limitations under applicable laws. Unused losses may generally be carried forward.',
        'footer_legal_note_9' => 'All investing involves risk, including the possible loss of money you invest, and past performance does not guarantee future performance. Historical returns, expected returns, and probability projections are for informational and illustrative purposes only and may not reflect actual future performance.',

        'footer_legal_copy' => 'EquiLoomPRO, EquiLoomPRO Advisers and EquiLoomPRO Brokerage are wholly owned subsidiaries of EquiLoomPRO Corporation. <br><br> © <span class="currentYear"></span> EquiLoomPRO Corporation. All rights reserved.',

        // About -----------------------------------------------
        'about_title' => 'About',
        'about_text' => 'At <span class="brand-name">EquiLoomPRO</span>, we’re a team of experienced investors and AI experts based in Kuwait City, united to build a top-tier investment platform, renowned for its precision and rapid performance.',
        'about_content_title' => 'Our core is a diverse, passionate team united by a mission to reshape the future of investing in Kuwait.',
        'about_content_text_1' => 'We’re dedicated to transforming the investment landscape by leveraging the power of artificial intelligence. By combining expert investor insights with cutting-edge technology, we deliver an investment platform that excels in accuracy, speed, and profitability.',
        'about_content_text_2' => 'Our team brings diverse perspectives, continuously innovating to incorporate the latest AI and financial trends into our platform. We’re driven by the synergy of human expertise and machine intelligence to provide a transformative investment experience.',
        'about_content_img_alt' => 'About EquiLoomPRO team',
        'period' => [
            [
                'date' => 'April <script>document.write(new Date().getFullYear() - 3)</script>',
                'title' => 'Birth of a Vision',
                'description' => 'EquiLoomPRO was established with a bold vision to revolutionize investing in Kuwait through artificial intelligence.',
            ],
            [
                'date' => 'July <script>document.write(new Date().getFullYear() - 3)</script>',
                'title' => 'Growth and Development',
                // пересчёт инвестиций в KWD (~3 млн GBP ≈ 1.17 млн KWD)
                'description' => 'We raised 1.2 million KWD in funding, driving platform development and team expansion.',
            ],
            [
                'date' => 'November <script>document.write(new Date().getFullYear() - 3)</script>',
                'title' => 'Beta Testing Phase',
                'description' => 'The beta version of EquiLoomPRO was launched in Kuwait, gathering user feedback and refining our technology.',
            ],
            [
                'date' => 'June <script>document.write(new Date().getFullYear() - 2)</script>',
                'title' => 'Global Launch',
                'description' => 'EquiLoomPRO debuted globally, bringing our advanced investment technology to users worldwide, with Kuwait as a key hub.',
            ],
        ],
        'investment_title' => 'Revolutionize Your Investment Approach',
        'investment_text' => 'Experience the future of asset investing with EquiLoomPRO in Kuwait. Our innovative blend of AI and comprehensive data analytics delivers exceptional investment capabilities, enabling investors to navigate market challenges with unmatched precision.',
        'investment_btn' => 'Get started',

        // Saving section
        'saving_title' => 'Saving and investing. All while you’re relaxing in Kuwait.',
        'saving_text' => 'Tell us what you’re saving for, and we’ll automatically set aside extra cash in KWD to hit your goals. Since we connect with all your accounts, you only need one app to watch your wealth grow.',
        'saving_img_alt' => 'Saving',

        // Contact
        'contact_title' => 'Contact us',
        'contact_text' => 'Reach out to us for guidance or answers to your questions, and our expert team in Kuwait will help you make confident, strategic investment decisions.',
        'contact_form_enable_js' => 'Please enable JavaScript in your browser to complete this form.',
        'contact_label_name' => 'Name',
        'contact_label_email' => 'Email',
        'contact_label_message' => 'Comment or Message',
        'contact_submit' => 'Submit',
        'contact_form_agreement' => ' * By clicking the button you agree and accept the <a href="/kw/privacy" class="form-link">Privacy Policy</a> and <a href="/kw/terms" class="form-link">Terms &amp; Conditions</a>.',
        'contact_form_success' => 'Form submitted successfully!',
        // Privacy Policy
        'privacy_title' => 'Privacy Policy',
        'privacy_updated' => '<b>Last updated:</b> July <script>document.write(new Date().getFullYear() - 1)</script>',

        'privacy_1_title' => '1. Introduction',
        'privacy_1_text' => '
<p>This Privacy Policy of EquiLoomPRO ("we," "us," or "our") explains how we handle personal data when you use our services ("Services") and website <a href="/kw/">EquiLoomPRO</a> ("Website"). Protecting your privacy and data is our priority.</p>
<p>Our Services and Website may link to third-party sites. We are not responsible for their privacy practices; please review their policies before engaging.</p>
<p>We treat all collected data as confidential and apply robust technical and organizational measures to protect Personal Data from unauthorized access, loss, or disclosure.</p>
<p>When using our Website, you may provide personal information (e.g., name, email, phone number). We may use this data to verify identity, provide support, fulfill obligations, or send updates with your consent. You can manage notification preferences or opt out of communications.</p>
',

        'privacy_2_title' => '2. Data Collection and Use',
        'privacy_2_1_title' => '2.1. General',
        'privacy_2_1_text' => '
<p>We collect data from Website visitors ("Visitors"), users ("Users"), and partners ("Partners"). Personal Data may include IP addresses, names, contact details, device identifiers, and relationship information, in line with applicable data protection laws in Kuwait and other relevant jurisdictions.</p>
',

        'privacy_2_2_title' => '2.2. Collection',
        'privacy_2_2_text' => '
<p>By accessing our Website, you consent to data collection (e.g., via cookies, IP addresses, analytics, or forms). If you disagree, please refrain from using the Website.</p>
',

        'privacy_2_3_title' => '2.3. Purpose',
        'privacy_2_3_text' => '
<p>We process Personal Data to improve our Services, personalize experiences, provide support, and comply with legal obligations. Purposes and legal bases include:</p>
<table>
    <tbody>
        <tr><td>Account registration</td><td>Consent; Contract performance</td></tr>
        <tr><td>Service provision</td><td>Contract performance</td></tr>
        <tr><td>Support and queries</td><td>Legitimate interests</td></tr>
        <tr><td>Marketing</td><td>Consent</td></tr>
        <tr><td>Service improvement</td><td>Legitimate interests</td></tr>
        <tr><td>Compliance and security</td><td>Legal obligations; Legitimate interests</td></tr>
    </tbody>
</table>
',

        'privacy_2_4_title' => '2.4. Data Sharing',
        'privacy_2_4_text' => '
<p>We may share data with trusted vendors and partners (e.g., hosting, analytics, payment and banking partners) under contracts that require appropriate safeguards. For Users in Kuwait, we comply with applicable local requirements. Where relevant (e.g., if you reside in the EEA/UK), we take measures consistent with GDPR/UK data protection standards, including appropriate transfer mechanisms.</p>
',

        'privacy_3_title' => '3. Partners',
        'privacy_3_text' => '
<p>We process Partner data with consent or for legitimate interests (e.g., onboarding, due diligence, contract management). We ensure secure handling and compliance with applicable data protection laws.</p>
',

        'privacy_4_title' => '4. Security',
        'privacy_4_text' => '
<p>We implement technical and organizational safeguards (access controls, encryption in transit where appropriate, logging and monitoring). Third parties we share data with are contractually obligated to maintain equivalent standards. While we strive for security, no system is fully immune to breaches, and Users accept this risk.</p>
',

        'privacy_5_title' => '5. Cookies',
        'privacy_5_text' => '
<p>See our <a href="/kw/cookie">Cookie Policy</a> for details on cookies and similar tracking technologies, how we use them, and how you can manage your preferences.</p>
',

        'privacy_6_title' => '6. Third-Party Links',
        'privacy_6_text' => '
<p>Our Website may link to external sites. We are not responsible for their privacy practices; please review their policies before sharing data.</p>
',

        'privacy_7_title' => '7. Data Retention',
        'privacy_7_text' => '
<p>We retain Personal Data only as long as necessary for the purposes described in this Policy or as required by law. Upon account termination, data is deleted or anonymized in accordance with applicable laws and our internal retention schedules.</p>
',

        'privacy_8_title' => '8. Your Rights',
        'privacy_8_text' => '
<p>Subject to applicable law, you may have rights to access, rectify, erase, restrict, or port your Personal Data; object to processing; or withdraw consent. To exercise these rights, contact us using the details below. We may need to verify your identity before fulfilling your request.</p>
',

        'privacy_9_title' => '9. Marketing',
        'privacy_9_text' => '
<p>We may use your data for marketing with your consent (e.g., newsletters, product updates). You can withdraw consent at any time using unsubscribe links or by contacting us.</p>
',

        'privacy_10_title' => '10. Policy Acceptance',
        'privacy_10_text' => '
<p>Your use of the Website or Services signifies agreement with this Policy. We may update it from time to time; continued use after changes constitutes acceptance. Material changes will be highlighted on this page.</p>
',

        'privacy_11_title' => '11. Legal Disclosure',
        'privacy_11_text' => '
<p>We may disclose Personal Data if required by law, court order, or competent authorities, or to protect our rights, security, Users, partners, or the public, and to enforce our Terms.</p>
',

        'privacy_12_title' => '12. Contact',
        'privacy_12_text' => '
<p>For privacy concerns or to exercise your rights, contact our Data Protection Officer at <a href="mailto:support@zevriocapiture.org">support@zevriocapiture.org</a>. You may also contact us via the form on our <a href="/kw/contact">Contact</a> page.</p>
',

        // Terms of Use
        'terms_title' => 'Terms of Use',
        'terms_updated' => '<b>Last updated:</b> July <script>document.write(new Date().getFullYear() - 1)</script>',

        'terms_1_title' => '1. Introduction',
        'terms_1_text' => '
<p>Welcome to the EquiLoomPRO website ("Website"), operated by EquiLoomPRO ("we," "us," "our"). By using our Website or services ("Services"), you agree to these Terms and Conditions ("Terms") and our <a href="/kw/privacy">Privacy Policy</a>. Contact us at <a href="mailto:support@zevriocapiture.org">support@zevriocapiture.org</a>.</p>
<p>We may update these Terms from time to time. Continued use of the Website or Services after changes signifies acceptance. If you disagree with these Terms, you are not authorized to use the Website or Services.</p>
',

        'terms_2_title' => '2. No Investment Advice',
        'terms_2_text' => '
<p>Our Website does not provide personal financial, legal, or investment advice. Information is general in nature and does not consider your objectives, financial situation, or needs. You should seek advice from an independent, qualified financial adviser before making investment decisions.</p>
',

        'terms_3_title' => '3. Services',
        'terms_3_text' => '
<p>Some Services may be provided by third parties. Links or references to third-party services, websites, or products do not constitute endorsement. We are not responsible for third-party content, availability, or services.</p>
',

        'terms_4_title' => '4. Scope and Modification',
        'terms_4_text' => '
<p>These Terms constitute the entire agreement between you and us regarding the Website and Services and supersede prior understandings. We may modify the Terms at our discretion. Your continued use after updates constitutes acceptance of the revised Terms.</p>
',

        'terms_5_title' => '5. Eligibility',
        'terms_5_text' => '
<p>The Services are intended for individuals aged 18 or older who can enter into legally binding agreements. By using the Website or Services, you represent that you meet these requirements.</p>
',

        'terms_6_title' => '6. Description of Services',
        'terms_6_text' => '
<p><b>Subscription Services:</b> Upon registration, you may access subscription content or tools (free or paid), including content provided by us or third parties. This content is for informational purposes only and is not investment advice.</p>
<p><b>Third-Party Services:</b> Products or services from third parties may be listed or offered. We do not control their accuracy, availability, or terms and are not responsible for your inability to access them.</p>
<p><b>General:</b> You must provide accurate, complete registration information and keep it updated. We may refuse or cancel registrations that are incomplete, inaccurate, or fraudulent. Service availability may be interrupted for maintenance, upgrades, or other reasons.</p>
',

        'terms_7_title' => '7. Proprietary Rights',
        'terms_7_text' => '
<p>The Website and its content, including text, graphics, logos, software, and trademarks, are protected by intellectual property laws. You may not copy, reproduce, distribute, modify, reverse engineer, scrape, or create derivative works without our prior written consent.</p>
',

        'terms_8_title' => '8. Confidential Information',
        'terms_8_text' => '
<p>Information disclosed by us that is marked or reasonably understood to be confidential must be protected and used solely for the intended purpose. Your confidentiality obligations survive for one (1) year after termination, excluding information that is public, independently developed, or lawfully obtained without restrictions.</p>
',

        'terms_9_title' => '9. Hyperlinking and Framing',
        'terms_9_text' => '
<p>You may not frame, mirror, deep-link, or otherwise reference the Website in a way that implies affiliation or endorsement without our prior written permission. You are responsible for any damages resulting from unauthorized linking or framing.</p>
',

        'terms_10_title' => '10. Disclaimer',
        'terms_10_text' => '
<p>The Website, Services, and all content are provided on an "as is" and "as available" basis without warranties of any kind, express or implied. We do not warrant that the Services will be uninterrupted, error-free, secure, or free of harmful components.</p>
',

        'terms_11_title' => '11. Limitation of Liability',
        'terms_11_text' => '
<p>To the fullest extent permitted by law, we are not liable for any indirect, incidental, special, consequential, exemplary, or punitive damages, or for loss of profits, revenue, data, or goodwill, arising out of or related to your use of the Website or Services, even if advised of the possibility of such damages.</p>
<p>Where liability cannot be excluded, our aggregate liability for all claims relating to the Website or Services shall not exceed <b>78 KWD</b>.</p>
',

        'terms_12_title' => '12. Indemnification',
        'terms_12_text' => '
<p>You agree to indemnify, defend, and hold harmless EquiLoomPRO, its affiliates, and their officers, directors, employees, and agents from and against any claims, liabilities, damages, losses, and expenses (including reasonable legal fees) arising out of or related to your use of the Website or Services, your breach of these Terms, or your violation of any rights of another party.</p>
',

        'terms_13_title' => '13. Third-Party Websites',
        'terms_13_text' => '
<p>The Website may contain links to third-party websites or resources. We do not control and are not responsible for the content, products, services, or policies of third-party websites. Accessing such websites is at your own risk.</p>
',

        'terms_14_title' => '14. Data Protection',
        'terms_14_text' => '
<p>We process personal data in accordance with our <a href="/kw/privacy">Privacy Policy</a>. We implement security measures, obtain necessary consents, and assist with data subject rights requests in accordance with applicable laws. We will notify you of data breaches as required by law.</p>
',

        'terms_15_title' => '15. Governing Law and Dispute Resolution',
        'terms_15_text' => '
<p>These Terms and any dispute or claim arising out of or in connection with them (including non-contractual disputes or claims) shall be governed by and construed in accordance with the laws of the State of Kuwait.</p>
<p>Any dispute shall be finally settled by confidential arbitration in <b>Kuwait City</b> before a single arbitrator, conducted in English, under applicable institutional rules. The seat and venue of arbitration shall be Kuwait City. Judgment on the award may be entered in any court of competent jurisdiction. You and we agree to waive any right to participate in class or representative actions.</p>
',

        'terms_16_title' => '16. Contact',
        'terms_16_text' => '
<p>For questions about these Terms, contact us at <a href="mailto:support@zevriocapiture.org">support@zevriocapiture.org</a> or via the form on our <a href="/kw/contact">Contact</a> page.</p>
',
    ],
    'ae' => [
        'language_iso' => 'en',
        'country_name' => 'United Arab Emirates',
        'locale' => 'en_AE',
        'locale_lang' => 'en-AE',
        'language_name' => 'English',
        'city' => 'Dubai',
        'country_code' => 'AE',
        'geo_position' => '25.2048, 55.2708',
        'jsonld_organization_name' => 'EquiLoomPRO',
        'jsonld_organization_review_rating' => '4.96',
        'jsonld_organization_review_author' => 'EquiLoomPRO User',
        'jsonld_software_categories' => 'Cryptocurrency Investment Tool',
        // original $190 ≈ 699 AED (rounded)
        'jsonld_software_price' => '699',
        'jsonld_software_price_currency' => 'AED',
        'brand_name_api' => 'EquLum App AI',

        'home' => 'Home',
        'about' => 'About Us',
        'contact' => 'Contact Us',
        'privacy' => 'Privacy Policy',
        'terms' => 'Terms and Conditions',

        // Home (index)
        'title' => 'EquiLoomPRO — Automated Investing & Cash Management in the UAE',
        'meta_description' => 'Make wealth your own with EquiLoomPRO. AI-assisted portfolios, automated savings, and tax-efficient features to help you invest confidently and grow your money in Dubai and Abu Dhabi.',
        'meta_keywords' => 'EquiLoomPRO, automated investing, AI investing, portfolio management, cash account, savings, tax efficient, UAE, Dubai, Abu Dhabi',

        // Open Graph / Twitter (global)
        'og_title' => 'EquiLoomPRO — AI-Powered Investing Platform (UAE)',
        'og_description' => 'Automated portfolios, smart cash, and effortless investing. Start with EquiLoomPRO and grow your wealth with confidence in the UAE.',
        'og_image' => '/assets/images/share.webp',

        'twitter_title' => 'EquiLoomPRO — Automated Investing in the UAE',
        'twitter_description' => 'AI-assisted portfolios and automated savings to help you grow wealth with confidence across Dubai and Abu Dhabi.',

        // About (short descriptors for listings)
        'about_desc_content' => 'Meet EquiLoomPRO — a Dubai-based team of investors and AI experts building a high-precision, high-speed investment platform that helps you grow wealth confidently.',
        'about_keywords' => 'about EquiLoomPRO, company, AI investing team, investment platform, Dubai, Abu Dhabi',

        // Contact (short descriptors for listings)
        'contact_desc_content' => 'Questions or guidance? Contact EquiLoomPRO — our UAE team is ready to help you make confident, strategic investment decisions.',
        'contact_keywords' => 'contact EquiLoomPRO, support, help, investing questions, Dubai, Abu Dhabi',

        // Terms / Privacy (short descriptors for listings)
        'terms_desc_content' => 'Read the Terms and Conditions for using EquiLoomPRO’s website and services in the UAE, including eligibility, limitations, and legal notices.',
        'terms_keywords' => 'terms of use, terms and conditions, EquiLoomPRO, legal, UAE',

        'privacy_desc_content' => 'How EquiLoomPRO collects, uses, and protects your personal data in the UAE, your rights, and our commitment to privacy and security.',
        'privacy_keywords' => 'privacy policy, data protection, personal data, EquiLoomPRO, UAE',

        // ---------- JSON-LD content ----------
        'jsonld_organization_review_body' => 'EquiLoomPRO delivers an AI-assisted investing platform that combines automated portfolios, smart cash management, and tax-efficient features to help clients in Dubai and Abu Dhabi grow wealth with confidence.',

        // FAQ (on homepage when page === "index")
        'jsonld_faq_1_question' => 'What is EquiLoomPRO?',
        'jsonld_faq_1_answer' => 'EquiLoomPRO is an AI-assisted investing platform that helps you build and automate diversified portfolios, optimize savings, and invest with confidence in the UAE.',

        'jsonld_faq_2_question' => 'How does EquiLoomPRO help me invest?',
        'jsonld_faq_2_answer' => 'We offer customizable or automated portfolios, smart cash tools, and features designed to improve after-tax outcomes — so you can invest effortlessly while staying in control.',

        'jsonld_faq_3_question' => 'Is EquiLoomPRO available in the UAE?',
        'jsonld_faq_3_answer' => 'Yes. EquiLoomPRO supports clients in Dubai, Abu Dhabi, and across the UAE, with experiences tailored to your locale and currency (AED).',

        'jsonld_faq_4_question' => 'Do I need to use automation or AI?',
        'jsonld_faq_4_answer' => 'Automation is optional. You can let the platform handle routine tasks or build and adjust your own portfolio whenever you like.',

        'jsonld_faq_5_question' => 'How do I get started?',
        'jsonld_faq_5_answer' => 'Create your profile, choose or customize a portfolio, and fund your account in AED. There are no hidden sign-up fees; partner services may have their own requirements.',

        'jsonld_faq_6_question' => 'How does EquiLoomPRO protect my data?',
        'jsonld_faq_6_answer' => 'We apply robust technical and organizational security measures and follow applicable UAE and international data protection standards to safeguard your information.',

        // Header section
        'header_logo_alt' => 'EquiLoomPRO Logo',
        'header_logo_text' => 'EquiLoomPRO',
        'header_burger_alt' => 'Menu',
        'header_cross_alt' => 'Close',

        // Hero section
        'hero_form_title' => 'Register now',
        'hero_form_notice' => '* By clicking the button you agree and accept the <a href="/ae/privacy" class="form-link">Privacy Policy</a> and <a href="/ae/terms" class="form-link">Terms & Conditions</a>.',
        'hero_title' => 'Make wealth your own.',
        'hero_subtitle' => 'Personalized, Automated, Effortless Investing and Savings.',
        'hero_stat_nerdwallet' => "Best Robo-advisor, 2019<sup class=\"sup\">1</sup><br>Best Cash Management App, 2020<sup class=\"sup\">1</sup>",
        'hero_stat_investopedia' => "Best Robo-advisor, 2020<sup class=\"sup\">1</sup>",
        'hero_stat_clients' => 'Trusted clients',
        'hero_stat_funds' => 'In client funds',
        'hero_stat_appstore' => 'Apple App Store <sup class=\"sup\">2</sup>',
        'hero_stat_playstore' => 'Google Play Store <sup class=\"sup\">2</sup>',

        // Investition section
        'investition_title' => 'Investing isn’t easy. We just make it feel that way.',
        'investition_text' => 'Let us customize a portfolio just for you or build it yourself, and our powerful automation will make the most of your investments, optimizing performance and helping lower your taxes.',
        'investition_btn_start' => 'Start investing',
        'investition_btn_more' => 'Learn more',
        'investition_notification_app' => 'EquiLoomPRO',
        'investition_notification_time' => 'now',
        // Example conversions for UAE
        // ~$78.11 saved -> ≈ 287 AED
        'investition_notification_1' => 'We saved you <span>287 AED</span> on your taxes.',
        // ~$250 deposit -> ≈ 920 AED
        'investition_notification_2' => 'We automatically invested your <span>920 AED</span> deposit.',

        // Cash section
        'cash_title' => 'Everyday cash, designed to build long-term wealth in the UAE.',
        'cash_text' => 'Our Cash account, offered with regulated banking partners in the UAE, lets you automate your savings, pay bills, withdraw from ATMs across Dubai and Abu Dhabi, and invest your extra cash in seconds to keep building your future.',
        'cash_btn_start' => 'Start saving',
        'cash_btn_more' => 'Learn more',
        'cash_img_phone_alt' => 'Phone',
        'cash_img_card_alt' => 'Card',

        // Saving section
        'saving_title' => 'Saving and investing. All while you’re relaxing.',
        'saving_text' => 'Tell us what you’re saving for, and we’ll automatically set aside extra cash to hit your goals. Since we connect with all your accounts, you only need one app to watch your wealth grow.',
        'saving_img_alt' => 'Saving',

        // Testimonials section (Arabic names)
        'testimonial_title' => 'TESTIMONIAL',
        'testimonial_1_quote' => 'It\'s the single <strong>best</strong> resource for both investing, managing retirement and seeing my entire financial picture.',
        'testimonial_1_author' => 'Ahmed A',
        'testimonial_2_quote' => '<strong>EquiLoomPRO</strong> is the first thing in my life that actually motivated me to save money.',
        'testimonial_2_author' => 'Fatima H',
        'testimonial_3_quote' => 'It’s <strong>automatic</strong>, and I’m lazy.',
        'testimonial_3_author' => 'Omar K',

        // Trust section
        'trust_title' => 'Over <strong>120,000</strong> people across the UAE are already using EquiLoomPRO to earn more and worry less',
        'trust_btn' => 'Get started',
        'trust_img_alt' => 'Open window with plant',
        'trust_subtitle' => 'AS FEATURED IN',
        'trust_logo_wsj_alt' => 'WSJ',
        'trust_logo_bloomberg_alt' => 'Bloomberg',
        'trust_logo_nyt_alt' => 'The New York Times',
        'trust_logo_reuters_alt' => 'Reuters',
        'trust_logo_cnbc_alt' => 'CNBC',

        // Footer section
        'footer_logo_alt' => 'EquiLoomPRO Logo',
        'footer_logo_text' => 'EquiLoomPRO',
        'footer_legal_note_1' => 'Testimonials were given by clients of both EquiLoomPRO Advisers and EquiLoomPRO Brokerage. There is no guarantee that clients will have similar experiences or success.',
        'footer_legal_note_2' => 'Nerdwallet and Investopedia (the “Endorsers”) receive cash compensation for referring potential clients to EquiLoomPRO Advisers, LLC (“EquiLoomPRO Advisers”) via advertisements placed on their respective websites. The Endorsers and EquiLoomPRO Advisers are not associated with one another and have no formal relationship outside of this arrangement. Nerdwallet’s opinions are their own. Their ratings are determined by their editorial team and rely on information they consider reliable, but cannot guarantee. Compensation does not influence product placement or rating. Consider a provider’s fees, features, and methodology before making a decision.',
        'footer_legal_note_3' => 'Apple App Store and Google Play Store ratings are based on user ratings from February 2014 (Apple) and December 2015 (Google) through June <span class="currentYear"></span>. Ratings compiled by Apple, Inc., and Google, Inc., who receive compensation for hosting our app.',
        'footer_legal_note_4' => 'By using this website, you understand the information being presented is provided for informational purposes only and agree to our <a href="/ae/terms" class="legal-link">Terms of Use</a> and <a href="/ae/privacy" class="legal-link">Privacy Policy</a>.',
        'footer_legal_note_5' => 'EquiLoomPRO Advisers relies on information from various sources believed to be reliable, including clients and third parties, but cannot guarantee the accuracy or completeness of that information. Nothing herein should be construed as an offer, recommendation, or solicitation to buy or sell any security. Additionally, EquiLoomPRO Advisers or its affiliates do not provide tax advice and investors are encouraged to consult with their personal tax advisors.',
        'footer_legal_note_6' => 'We partner with regulated banking and payment providers in the UAE to bring you cash and card features. Banking services are provided by our third-party partners subject to identity verification and applicable UAE regulations.',
        'footer_legal_note_7' => 'Cash account services are offered via regulated brokers and banking partners and are separate from investing accounts. Investment management and advisory services are provided by EquiLoomPRO Advisers or affiliated entities. Products and services vary by jurisdiction.',
        'footer_legal_note_8' => 'The effectiveness of the Tax-Loss Harvesting strategy to reduce the tax liability of the client will depend on the client’s entire tax and investment profile, including purchases and dispositions in accounts outside of EquiLoomPRO and type of investments (e.g., taxable or nontaxable) or holding period (e.g., short-term or long-term). Tax loss harvesting may generate a higher number of trades due to attempts to capture losses. There is a chance that trading attributed to tax loss harvesting may create capital gains and wash sales and could be subject to higher transaction costs and market impacts. In addition, tax loss harvesting strategies may produce losses, which may not be offset by sufficient gains in the account and may be limited by applicable tax rules. Utilisation of harvested losses depends on recognition of capital gains in the same or a future tax period and may be subject to limitations under applicable tax laws. Losses harvested through the strategy that are not utilised in the tax period when recognised may generally be carried forward to offset future capital gains, if any.',
        'footer_legal_note_9' => 'All investing involves risk, including the possible loss of money you invest, and past performance does not guarantee future performance. Historical returns, expected returns, and probability projections are provided for informational and illustrative purposes, and may not reflect actual future performance.',
        'footer_legal_copy' => 'EquiLoomPRO, EquiLoomPRO Advisers and EquiLoomPRO Brokerage are wholly owned subsidiaries of EquiLoomPRO Corporation. <br><br> © <span class="currentYear"></span> EquiLoomPRO Corporation. All rights reserved.',

        // About -----------------------------------------------
        'about_title' => 'About',
        'about_text' => 'At <span class="brand-name">EquiLoomPRO</span>, we’re a team of experienced investors and AI experts based in Dubai and Abu Dhabi, united to build a top-tier investment platform, renowned for its precision and rapid performance.',
        'about_content_title' => 'Our core is a diverse, passionate team united by a mission to reshape the future of investing in the UAE.',
        'about_content_text_1' => 'We’re dedicated to transforming the investment landscape by leveraging the power of artificial intelligence. By combining expert investor insights with cutting-edge technology, we deliver an investment platform that excels in accuracy, speed, and profitability.',
        'about_content_text_2' => 'Our team brings diverse perspectives, continuously innovating to incorporate the latest AI and financial trends into our platform. We’re driven by the synergy of human expertise and machine intelligence to provide a transformative investment experience.',
        'about_content_img_alt' => 'About EquiLoomPRO team',

        'period' => [
            [
                'date' => 'April <script>document.write(new Date().getFullYear() - 3)</script>',
                'title' => 'Birth of a Vision',
                'description' => 'EquiLoomPRO was established with a bold vision to revolutionize investing in the UAE through artificial intelligence.',
            ],
            [
                'date' => 'July <script>document.write(new Date().getFullYear() - 3)</script>',
                'title' => 'Growth and Development',
                // ~3M GBP ≈ 13.9M AED
                'description' => 'We raised 14 million AED in funding, driving platform development and team expansion.',
            ],
            [
                'date' => 'November <script>document.write(new Date().getFullYear() - 3)</script>',
                'title' => 'Beta Testing Phase',
                'description' => 'The beta version of EquiLoomPRO was launched in Dubai, gathering user feedback and refining our technology.',
            ],
            [
                'date' => 'June <script>document.write(new Date().getFullYear() - 2)</script>',
                'title' => 'Global Launch',
                'description' => 'EquiLoomPRO debuted globally, bringing our advanced investment technology to users worldwide, with Dubai and Abu Dhabi as key hubs.',
            ],
        ],

        'investment_title' => 'Revolutionize Your Investment Approach',
        'investment_text' => 'Experience the future of asset investing with EquiLoomPRO in the UAE. Our innovative blend of AI and comprehensive data analytics delivers exceptional investment capabilities, enabling investors to navigate market challenges with unmatched precision.',
        'investment_btn' => 'Get started',

        // Contact
        'contact_title' => 'Contact us',
        'contact_text' => 'Reach out to us for guidance or answers to your questions, and our expert team in the UAE will help you make confident, strategic investment decisions.',
        'contact_form_enable_js' => 'Please enable JavaScript in your browser to complete this form.',
        'contact_label_name' => 'Name',
        'contact_label_email' => 'Email',
        'contact_label_message' => 'Comment or Message',
        'contact_submit' => 'Submit',
        'contact_form_agreement' => ' * By clicking the button you agree and accept the <a href="/ae/privacy" class="form-link">Privacy Policy</a> and <a href="/ae/terms" class="form-link">Terms &amp; Conditions</a>.',
        'contact_form_success' => 'Form submitted successfully!',
        // Privacy Policy
        'privacy_title' => 'Privacy Policy',
        'privacy_updated' => '<b>Last updated:</b> July <script>document.write(new Date().getFullYear() - 1)</script>',

        'privacy_1_title' => '1. Introduction',
        'privacy_1_text' => '
<p>This Privacy Policy of EquiLoomPRO ("we," "us," or "our") explains how we collect, use, and protect your personal data when you use our services ("Services") and website <a href="/ae/">EquiLoomPRO</a> ("Website"). Safeguarding your privacy and data is our priority in Dubai, Abu Dhabi, and across the UAE.</p>
<p>Our Services and Website may link to third-party sites. We are not responsible for their privacy practices, so please review their policies before engaging.</p>
<p>We treat all collected data as confidential, employing robust technical and organizational measures to protect Personal Data from unauthorized access, loss, or disclosure.</p>
<p>When using our Website, you may provide personal information (e.g., name, email, phone number). This data may be used to verify identity, offer support, fulfill obligations, or send updates with your consent. You can manage notification preferences or opt out of communications.</p>
',

        'privacy_2_title' => '2. Data Collection and Use',
        'privacy_2_1_title' => '2.1. General',
        'privacy_2_1_text' => '
<p>We collect data from Website visitors ("Visitors"), users ("Users"), and partners ("Partners"). Personal Data includes IP addresses, names, contact details, and relationship information, in line with UAE data protection standards.</p>
',

        'privacy_2_2_title' => '2.2. Collection',
        'privacy_2_2_text' => '
<p>By accessing our Website, you consent to data collection (e.g., via cookies, IP addresses, or forms). If you disagree, please refrain from using the Website.</p>
',

        'privacy_2_3_title' => '2.3. Purpose',
        'privacy_2_3_text' => '
<p>We process Personal Data to improve our Services, personalize experiences, provide support, and comply with legal obligations. Purposes and legal bases include:</p>
<table>
    <tbody>
        <tr><td>Account registration</td><td>Consent; Contract performance</td></tr>
        <tr><td>Service provision</td><td>Contract performance</td></tr>
        <tr><td>Support and queries</td><td>Legitimate interests</td></tr>
        <tr><td>Marketing</td><td>Consent</td></tr>
        <tr><td>Service improvement</td><td>Legitimate interests</td></tr>
    </tbody>
</table>
',

        'privacy_2_4_title' => '2.4. Data Sharing',
        'privacy_2_4_text' => '
<p>We may share data with trusted vendors and partners in the UAE and abroad, ensuring compliance with UAE federal laws and GDPR where applicable.</p>
',

        'privacy_3_title' => '3. Partners',
        'privacy_3_text' => '
<p>We process Partner data with consent or for legitimate interests, ensuring secure handling and compliance with UAE data protection requirements.</p>
',

        'privacy_4_title' => '4. Security',
        'privacy_4_text' => '
<p>We implement technical and organizational safeguards to protect Personal Data. Third parties we share data with are contractually obligated to maintain equivalent standards. While we strive for security, no system is fully immune to breaches, and Users accept this risk.</p>
',

        'privacy_5_title' => '5. Cookies',
        'privacy_5_text' => '
<p>See our <a href="/ae/cookie">Cookie Policy</a> for details on cookies and tracking technologies used on our Website.</p>
',

        'privacy_6_title' => '6. Third-Party Links',
        'privacy_6_text' => '
<p>Our Website may link to external sites. We are not responsible for their privacy practices, so review their policies before sharing data.</p>
',

        'privacy_7_title' => '7. Data Retention',
        'privacy_7_text' => '
<p>We retain Personal Data only as long as necessary to fulfill our obligations. Upon account termination, data is deleted in accordance with UAE federal laws and international standards.</p>
',

        'privacy_8_title' => '8. Your Rights',
        'privacy_8_text' => '
<p>You have rights to access, rectify, erase, restrict, or port your Personal Data, object to processing, or withdraw consent. UAE residents may also have additional rights under local regulations. Contact us to exercise these rights.</p>
',

        'privacy_9_title' => '9. Marketing',
        'privacy_9_text' => '
<p>We may use your data for marketing with your consent. You can withdraw consent at any time by emailing us at support@zevriocapiture.org.</p>
',

        'privacy_10_title' => '10. Policy Acceptance',
        'privacy_10_text' => '
<p>Using our Website or Services implies agreement with this Policy. We may update it, and continued use signifies acceptance of changes.</p>
',

        'privacy_11_title' => '11. Legal Disclosure',
        'privacy_11_text' => '
<p>We may disclose Personal Data if required under UAE law, international regulations, or to protect our rights and interests.</p>
',

        'privacy_12_title' => '12. Contact',
        'privacy_12_text' => '
<p>For privacy concerns, contact our Data Protection Officer in Dubai at <a href="mailto:support@zevriocapiture.org">support@zevriocapiture.org</a>.</p>
',

        // Terms of Use
        'terms_title' => 'Terms of Use',
        'terms_updated' => '<b>Last updated:</b> July <script>document.write(new Date().getFullYear() - 1)</script>',

        'terms_1_title' => '1. Introduction',
        'terms_1_text' => '
<p>Welcome to the EquiLoomPRO website ("Website"), operated by EquiLoomPRO ("we," "us," "our"). By using our Website or services ("Services"), you agree to these Terms and Conditions ("Terms") and our <a href="/ae/privacy">Privacy Policy</a>. Contact us at <a href="mailto:support@zevriocapiture.org">support@zevriocapiture.org</a>.</p>
<p>We may update these Terms from time to time. Continued use of the Website or Services after changes signifies acceptance. If you disagree with these Terms, you are not authorized to use the Website or Services.</p>
',

        'terms_2_title' => '2. No Investment Advice',
        'terms_2_text' => '
<p>Our Website does not provide personal financial, legal, or investment advice. Information is general in nature and does not consider your objectives, financial situation, or needs. Seek advice from an independent, qualified financial adviser before making investment decisions.</p>
',

        'terms_3_title' => '3. Services',
        'terms_3_text' => '
<p>Some Services may be provided by third parties. Links or references to third-party services, websites, or products do not constitute endorsement. We are not responsible for third-party content, availability, or services.</p>
',

        'terms_4_title' => '4. Scope and Modification',
        'terms_4_text' => '
<p>These Terms constitute the entire agreement between you and us regarding the Website and Services and supersede prior understandings. We may modify the Terms at our discretion. Your continued use after updates constitutes acceptance of the revised Terms.</p>
',

        'terms_5_title' => '5. Eligibility',
        'terms_5_text' => '
<p>The Services are intended for individuals aged 18 or older who can enter into legally binding agreements. By using the Website or Services, you represent that you meet these requirements.</p>
',

        'terms_6_title' => '6. Description of Services',
        'terms_6_text' => '
<p><b>Subscription Services:</b> Upon registration, you may access subscription content or tools (free or paid), including content provided by us or third parties. This content is for informational purposes only and is not investment advice.</p>
<p><b>Third-Party Services:</b> Products or services from third parties may be listed or offered. We do not control their accuracy, availability, or terms and are not responsible for your inability to access them.</p>
<p><b>General:</b> You must provide accurate, complete registration information and keep it updated. We may refuse or cancel registrations that are incomplete, inaccurate, or fraudulent. Service availability may be interrupted for maintenance, upgrades, or other reasons.</p>
',

        'terms_7_title' => '7. Proprietary Rights',
        'terms_7_text' => '
<p>The Website and its content, including text, graphics, logos, software, and trademarks, are protected by intellectual property laws. You may not copy, reproduce, distribute, modify, reverse engineer, scrape, or create derivative works without our prior written consent.</p>
',

        'terms_8_title' => '8. Confidential Information',
        'terms_8_text' => '
<p>Information disclosed by us that is marked or reasonably understood to be confidential must be protected and used solely for the intended purpose. Your confidentiality obligations survive for one (1) year after termination, excluding information that is public, independently developed, or lawfully obtained without restrictions.</p>
',

        'terms_9_title' => '9. Hyperlinking and Framing',
        'terms_9_text' => '
<p>You may not frame, mirror, deep-link, or otherwise reference the Website in a way that implies affiliation or endorsement without our prior written permission. You are responsible for any damages resulting from unauthorized linking or framing.</p>
',

        'terms_10_title' => '10. Disclaimer',
        'terms_10_text' => '
<p>The Website, Services, and all content are provided on an "as is" and "as available" basis without warranties of any kind, express or implied. We do not warrant that the Services will be uninterrupted, error-free, secure, or free of harmful components.</p>
',

        'terms_11_title' => '11. Limitation of Liability',
        'terms_11_text' => '
<p>To the fullest extent permitted by law, we are not liable for any indirect, incidental, special, consequential, exemplary, or punitive damages, or for loss of profits, revenue, data, or goodwill, arising out of or related to your use of the Website or Services, even if advised of the possibility of such damages.</p>
<p>Where liability cannot be excluded, our aggregate liability for all claims relating to the Website or Services shall not exceed <b>935 AED</b>.</p>
',

        'terms_12_title' => '12. Indemnification',
        'terms_12_text' => '
<p>You agree to indemnify, defend, and hold harmless EquiLoomPRO, its affiliates, and their officers, directors, employees, and agents from and against any claims, liabilities, damages, losses, and expenses (including reasonable legal fees) arising out of or related to your use of the Website or Services, your breach of these Terms, or your violation of any rights of another party.</p>
',

        'terms_13_title' => '13. Third-Party Websites',
        'terms_13_text' => '
<p>The Website may contain links to third-party websites or resources. We do not control and are not responsible for the content, products, services, or policies of third-party websites. Accessing such websites is at your own risk.</p>
',

        'terms_14_title' => '14. Data Protection',
        'terms_14_text' => '
<p>We process personal data in accordance with our <a href="/ae/privacy">Privacy Policy</a>. We implement security measures, obtain necessary consents, and assist with data subject rights requests in accordance with applicable laws. We will notify you of data breaches as required by law.</p>
',

        'terms_15_title' => '15. Governing Law and Dispute Resolution',
        'terms_15_text' => '
<p>These Terms and any dispute or claim arising out of or in connection with them (including non-contractual disputes or claims) shall be governed by and construed in accordance with the laws of the United Arab Emirates.</p>
<p>Any dispute shall be finally settled by confidential arbitration in <b>Dubai</b> before a single arbitrator, conducted in English, under applicable institutional rules. The seat and venue of arbitration shall be Dubai, UAE. Judgment on the award may be entered in any court of competent jurisdiction. You and we agree to waive any right to participate in class or representative actions.</p>
',

        'terms_16_title' => '16. Contact',
        'terms_16_text' => '
<p>For questions about these Terms, contact us at <a href="mailto:support@zevriocapiture.org">support@zevriocapiture.org</a> or via the form on our <a href="/ae/contact">Contact</a> page.</p>
',
    ],
    'sa' => [
        'language_iso' => 'ar',
        'country_name' => 'السعودية',
        'locale' => 'ar_SA',
        'locale_lang' => 'ar-SA',
        'language_name' => 'العربية',
        'city' => 'الرياض',
        'country_code' => 'SA',
        'geo_position' => '24.7136, 46.6753',
        'jsonld_organization_name' => 'EquiLoomPRO',
        'jsonld_organization_review_rating' => '4.96',
        'jsonld_organization_review_author' => 'مستخدم EquiLoomPRO',
        'jsonld_software_categories' => 'أداة استثمار في العملات المشفرة',
        'jsonld_software_price' => '950',
        'jsonld_software_price_currency' => 'SAR',
        'brand_name_api' => 'EquLum App AI',
        'home' => 'الرئيسية',
        'about' => 'من نحن',
        'contact' => 'تواصل معنا',
        'privacy' => 'سياسة الخصوصية',
        'terms' => 'الشروط والأحكام',
        'title' => 'EquiLoomPRO — الاستثمار الآلي وإدارة النقد',
        'meta_description' => 'اجعل ثروتك ملكك مع EquiLoomPRO. محافظ مدعومة بالذكاء الاصطناعي، مدخرات آلية وميزات ضريبية فعالة لمساعدتك على الاستثمار بثقة وتنمية أموالك.',
        'meta_keywords' => 'EquiLoomPRO, استثمار آلي, استثمار بالذكاء الاصطناعي, إدارة محفظة, حساب نقدي, مدخرات, فعال ضريبياً, السعودية, الرياض',
        'og_title' => 'EquiLoomPRO — منصة استثمار مدعومة بالذكاء الاصطناعي',
        'og_description' => 'محافظ آلية، نقد ذكي، واستثمار بدون جهد. ابدأ مع EquiLoomPRO ونمِ ثروتك بثقة.',
        'og_image' => '/assets/images/share.webp',
        'twitter_title' => 'EquiLoomPRO — الاستثمار الآلي',
        'twitter_description' => 'محافظ مدعومة بالذكاء الاصطناعي ومدخرات آلية لمساعدتك على تنمية ثروتك بثقة.',
        'about_desc_content' => 'تعرف على EquiLoomPRO — فريق مقرها في الرياض من المستثمرين وخبراء الذكاء الاصطناعي يبنون منصة استثمار عالية الدقة وعالية السرعة تساعدك على تنمية ثروتك بثقة.',
        'about_keywords' => 'عن EquiLoomPRO, الشركة, فريق استثمار بالذكاء الاصطناعي, منصة استثمار, الرياض',
        'contact_desc_content' => 'أسئلة أو إرشاد؟ تواصل مع EquiLoomPRO — خبراؤنا جاهزون لمساعدتك في اتخاذ قرارات استثمارية استراتيجية وواثقة.',
        'contact_keywords' => 'تواصل EquiLoomPRO, الدعم, المساعدة, أسئلة استثمار, الرياض',
        'terms_desc_content' => 'اقرأ الشروط والأحكام لاستخدام موقع EquiLoomPRO وخدماته، بما في ذلك الأهلية والقيود والإشعارات القانونية.',
        'terms_keywords' => 'شروط الاستخدام, الشروط والأحكام, EquiLoomPRO, قانوني, السعودية',
        'privacy_desc_content' => 'كيف يجمع EquiLoomPRO ويستخدم ويحمي بياناتك الشخصية، حقوقك، وتزامنا بالخصوصية والأمان.',
        'privacy_keywords' => 'سياسة الخصوصية, حماية البيانات, نظام حماية البيانات الشخصية, بيانات شخصية, EquiLoomPRO',
        'jsonld_organization_review_body' => 'يقدم EquiLoomPRO منصة استثمار مدعومة بالذكاء الاصطناعي تجمع بين المحافظ الآلية وإدارة النقد الذكية وميزات فعالة ضريبياً لمساعدة العملاء في الرياض على تنمية ثروتهم بثقة.',
        'jsonld_faq_1_question' => 'ما هو EquiLoomPRO؟',
        'jsonld_faq_1_answer' => 'EquiLoomPRO هي منصة استثمار مدعومة بالذكاء الاصطناعي تساعدك على بناء وأتمتة محافظ متنوعة، وتحسين المدخرات والاستثمار بثقة.',
        'jsonld_faq_2_question' => 'كيف يساعدني EquiLoomPRO في الاستثمار؟',
        'jsonld_faq_2_answer' => 'نقدم محافظ قابلة للتخصيص أو آلية، أدوات نقد ذكية وميزات مصممة لتحسين النتائج بعد الضرائب — حتى تتمكن من الاستثمار بدون جهد مع الحفاظ على السيطرة.',
        'jsonld_faq_3_question' => 'هل EquiLoomPRO متاح في السعودية؟',
        'jsonld_faq_3_answer' => 'نعم. يدعم EquiLoomPRO العملاء في الرياض وجميع أنحاء السعودية، مع تجارب مخصصة لموقعك وعملتك.',
        'jsonld_faq_4_question' => 'هل أحتاج إلى استخدام الأتمتة أو الذكاء الاصطناعي؟',
        'jsonld_faq_4_answer' => 'الأتمتة اختيارية. يمكنك السماح للمنصة بإدارة المهام الروتينية أو بناء وتعديل محفظتك الخاصة متى شئت.',
        'jsonld_faq_5_question' => 'كيف أبدأ؟',
        'jsonld_faq_5_answer' => 'أنشئ ملفك الشخصي، اختر أو تخصص محفظة ومول حسابك. لا توجد رسوم تسجيل مخفية؛ قد يكون لخدمات الشركاء متطلباتها الخاصة.',
        'jsonld_faq_6_question' => 'كيف يحمي EquiLoomPRO بياناتي؟',
        'jsonld_faq_6_answer' => 'نطبق إجراءات أمان فنية وتنظيمية قوية ونلتزم بمعايير حماية البيانات السعودية المعمول بها لحماية معلوماتك.',
        'header_logo_alt' => 'شعار EquiLoomPRO',
        'header_logo_text' => 'EquiLoomPRO',
        'header_burger_alt' => 'القائمة',
        'header_cross_alt' => 'إغلاق',
        'hero_form_title' => 'سجل الآن',
        'hero_form_notice' => '* بالنقر على الزر توافق وتقبل <a href="/privacy" class="form-link">سياسة الخصوصية</a> و <a href="/terms" class="form-link">الشروط والأحكام</a>.',
        'hero_title' => 'اجعل ثروتك ملكك.',
        'hero_subtitle' => 'استثمار ومدخرات شخصية، آلية وبدون جهد.',
        'hero_stat_nerdwallet' => "أفضل Robo-advisor، 2019<sup class=\"sup\">1</sup><br>أفضل تطبيق إدارة نقد، 2020<sup class=\"sup\">1</sup>",
        'hero_stat_investopedia' => "أفضل Robo-advisor، 2020<sup class=\"sup\">1</sup>",
        'hero_stat_clients' => 'عملاء موثوق بهم',
        'hero_stat_funds' => 'في أموال العملاء',
        'hero_stat_appstore' => 'Apple App Store <sup class=\"sup\">2</sup>',
        'hero_stat_playstore' => 'Google Play Store <sup class=\"sup\">2</sup>',
        'investition_title' => 'الاستثمار ليس سهلاً. نحن فقط نجعله يبدو كذلك.',
        'investition_text' => 'دعنا نخصص محفظة خصيصاً لك أو ابنها بنفسك، وستقوم أتمتتنا القوية باستغلال استثماراتك إلى أقصى حد، وتحسين أدائك ومساعدتك على خفض ضرائبك.',
        'investition_btn_start' => 'ابدأ الاستثمار',
        'investition_btn_more' => 'تعلم المزيد',
        'investition_notification_app' => 'EquiLoomPRO',
        'investition_notification_time' => 'الآن',
        'investition_notification_1' => 'وفرنا لك <span>950 ر.س</span> على ضرائبك.',
        'investition_notification_2' => 'استثمرنا تلقائياً إيداعك <span>950 ر.س</span>.',
        'cash_title' => 'النقد اليومي، مصمم لبناء ثروة طويلة الأمد.',
        'cash_text' => 'حسابنا النقدي، مقدم مع شركاء مصرفيين منظمين، يتيح لك أتمتة مدخراتك، دفع الفواتير، السحب من آلاف أجهزة الصراف الآلي، واستثمار نقدك الإضافي في ثوانٍ لبناء مستقبلك.',
        'cash_btn_start' => 'ابدأ الادخار',
        'cash_btn_more' => 'تعلم المزيد',
        'cash_img_phone_alt' => 'هاتف',
        'cash_img_card_alt' => 'بطاقة',
        'saving_title' => 'الادخار والاستثمار. كل ذلك بينما أنت مرتاح.',
        'saving_text' => 'أخبرنا بما توفر له، وسنخصص تلقائياً نقداً إضافياً لتحقيق أهدافك. وبما أننا نتصل بجميع حساباتك، تحتاج فقط إلى تطبيق واحد لمشاهدة نمو ثروتك.',
        'saving_img_alt' => 'الادخار',
        'testimonial_title' => 'شهادة',
        'testimonial_1_quote' => 'إنه المصدر <strong>الأفضل</strong> الوحيد لكل من الاستثمار، إدارة التقاعد ورؤية صورة مالي كاملة.',
        'testimonial_1_author' => 'Oliver S',
        'testimonial_2_quote' => '<strong>EquiLoomPRO</strong> هو أول شيء في حياتي يحفزني فعلياً على توفير المال.',
        'testimonial_2_author' => 'Amelia R',
        'testimonial_3_quote' => 'إنه <strong>آلي</strong>، وأنا كسول.',
        'testimonial_3_author' => 'George L',
        'trust_title' => 'أكثر من <strong>120,000</strong> شخص في جميع أنحاء السعودية يستخدمون EquiLoomPRO بالفعل لكسب المزيد والقلق أقل',
        'trust_btn' => 'ابدأ',
        'trust_img_alt' => 'نافذة مفتوحة مع نبات',
        'trust_subtitle' => 'كما ظهر في',
        'trust_logo_wsj_alt' => 'WSJ',
        'trust_logo_bloomberg_alt' => 'Bloomberg',
        'trust_logo_nyt_alt' => 'The New York Times',
        'trust_logo_reuters_alt' => 'Reuters',
        'trust_logo_cnbc_alt' => 'CNBC',
        'footer_logo_alt' => 'شعار EquiLoomPRO',
        'footer_logo_text' => 'EquiLoomPRO',
        'footer_legal_note_1' => 'تم تقديم الشهادات من قبل عملاء كل من EquiLoomPRO Advisers و EquiLoomPRO Brokerage. لا يوجد ضمان بأن العملاء سيحصلون على تجارب أو نجاحات مشابهة.',
        'footer_legal_note_2' => 'يتلقى Nerdwallet و Investopedia (الـ"Endorsers") تعويضاً نقدياً لإحالة عملاء محتملين إلى EquiLoomPRO Advisers, LLC (“EquiLoomPRO Advisers”) عبر إعلانات على مواقعهم. لا يرتبط Endorsers و EquiLoomPRO Advisers ببعضهما ولا توجد علاقة رسمية خارج هذا الترتيب. آراء Nerdwallet خاصة بهم. تقييماتهم تحددها فريقهم التحريري وتعتمد على معلومات يعتبرونها موثوقة، لكن لا يمكنهم ضمانها. لا يؤثر التعويض على وضع المنتج أو التقييم. فكر في رسوم المزود وميزاته ومنهجيته قبل اتخاذ قرار.',
        'footer_legal_note_3' => 'تقييمات Apple App Store و Google Play Store تعتمد على تقييمات المستخدمين من فبراير 2014 (Apple) وديسمبر 2015 (Google) حتى يونيو <span class="currentYear"></span>. التقييمات مجمعة من Apple, Inc. و Google, Inc.، اللذين يتلقيان تعويضاً لاستضافة تطبيقنا.',
        'footer_legal_note_4' => 'باستخدام هذا الموقع، تفهم أن المعلومات المقدمة هي لأغراض معلوماتية فقط وتوافق على <a href="/terms" class="legal-link">شروط الاستخدام</a> و <a href="/privacy" class="legal-link">سياسة الخصوصية</a> الخاصة بنا.',
        'footer_legal_note_5' => 'يعتمد EquiLoomPRO Advisers على معلومات من مصادر مختلفة يُعتقد أنها موثوقة، بما في ذلك العملاء وأطراف ثالثة، لكنه لا يمكنه ضمان دقة أو اكتمال تلك المعلومات. لا يجب تفسير أي شيء هنا كعرض أو توصية أو طلب لشراء أو بيع أي أوراق مالية. بالإضافة إلى ذلك، EquiLoomPRO Advisers أو الشركات التابعة له لا تقدم نصيحة ضريبية ويُشجع المستثمرون على استشارة مستشاريهم الضريبيين الشخصيين.',
        'footer_legal_note_6' => 'نتعاون مع مزودي خدمات مصرفية ودفع منظمين في السعودية لتقديم ميزات النقد والبطاقة لك. الخدمات المصرفية مقدمة من شركائنا الثالثين خاضعة للتحقق من الهوية واللوائح المحلية المعمول بها.',
        'footer_legal_note_7' => 'خدمات حساب النقد مقدمة عبر وسطاء وشركاء مصرفيين منظمين ومنفصلة عن حسابات الاستثمار. إدارة الاستثمارات والخدمات الاستشارية مقدمة من EquiLoomPRO Advisers أو الشركات التابعة. تختلف المنتجات والخدمات حسب الاختصاص.',
        'footer_legal_note_8' => 'تعتمد فعالية استراتيجية حصاد الخسائر الضريبية على تقليل التزام الضريبي للعميل على ملفه الضريبي والاستثماري الكامل، بما في ذلك المشتريات والتصرفات في الحسابات خارج EquiLoomPRO ونوع الاستثمارات (مثل خاضعة للضريبة أو غير خاضعة) أو فترة الاحتفاظ (قصيرة أو طويلة الأجل). قد يولد حصاد الخسائر الضريبية عدداً أكبر من العمليات بسبب محاولات التقاط الخسائر. هناك فرصة أن العمليات المنسوبة إلى حصاد الخسائر الضريبية قد تخلق مكاسب رأسمالية وبيع غسيل وقد تكون خاضعة لتكاليف معاملات أعلى وتأثيرات سوق. بالإضافة إلى ذلك، قد تنتج استراتيجيات حصاد الخسائر الضريبية خسائر، قد لا تُعوض بمكاسب كافية في الحساب وقد تكون محدودة بقواعد ضريبية معمول بها. يعتمد استخدام الخسائر المحصودة على الاعتراف بمكاسب رأسمالية في نفس الفترة الضريبية أو مستقبلية وقد يكون خاضعاً لقيود بموجب القوانين الضريبية المعمول بها. الخسائر المحصودة من خلال الاستراتيجية التي لم تُستخدم في الفترة الضريبية عند الاعتراف بها قد تُحمل عادة لتعويض مكاسب رأسمالية مستقبلية، إن وجدت.',
        'footer_legal_note_9' => 'كل استثمار ينطوي على مخاطر، بما في ذلك الخسارة المحتملة للمال الذي تستثمره، والأداء السابق لا يضمن الأداء المستقبلي. العوائد التاريخية والعوائد المتوقعة وإسقاطات الاحتمالية مقدمة لأغراض معلوماتية وتوضيحية، وقد لا تعكس الأداء المستقبلي الفعلي.',
        'footer_legal_copy' => 'EquiLoomPRO و EquiLoomPRO Advisers و EquiLoomPRO Brokerage هي شركات تابعة مملوكة بالكامل لـ EquiLoomPRO Corporation. <br><br> © <span class="currentYear"></span> EquiLoomPRO Corporation. جميع الحقوق محفوظة.',
        'about_title' => 'من نحن',
        'about_text' => 'في <span class="brand-name">EquiLoomPRO</span>، نحن فريق من المستثمرين ذوي الخبرة وخبراء الذكاء الاصطناعي متحدون لبناء منصة استثمارية من الدرجة الأولى، مشهورة بدقتها وأدائها السريع.',
        'about_content_title' => 'نواةنا هي فريق عالمي متنوع وشغوف متحد بمهمة لإعادة تشكيل مستقبل الاستثمار.',
        'about_content_text_1' => 'نحن ملتزمون بتحويل مشهد الاستثمار من خلال الاستفادة من قوة الذكاء الاصطناعي. من خلال دمج رؤى المستثمرين الخبراء مع التكنولوجيا المتطورة، نقدم منصة استثمارية تتفوق في الدقة والسرعة والربحية.',
        'about_content_text_2' => 'يجلب فريقنا العالمي منظورات متنوعة، ويبتكر باستمرار لدمج أحدث اتجاهات الذكاء الاصطناعي والمالية في منصتنا. نحن مدفوعون بالتآزر بين الخبرة البشرية والذكاء الآلي لتقديم تجربة استثمارية تحولية.',
        'about_content_img_alt' => 'فريق EquiLoomPRO',
        'period' => [
            [
                'date' => 'أبريل <script>document.write(new Date().getFullYear() - 3)</script>',
                'title' => 'ولادة الرؤية',
                'description' => 'أُسست EquiLoomPRO برؤية جريئة لإحداث ثورة في الاستثمار من خلال الذكاء الاصطناعي.',
            ],
            [
                'date' => 'يوليو <script>document.write(new Date().getFullYear() - 3)</script>',
                'title' => 'النمو والتطوير',
                'description' => 'جمعنا 13 مليون ريال سعودي في التمويل، مما دفع تطوير المنصة وتوسيع الفريق.',
            ],
            [
                'date' => 'نوفمبر <script>document.write(new Date().getFullYear() - 3)</script>',
                'title' => 'مرحلة الاختبار التجريبي',
                'description' => 'تم إطلاق النسخة التجريبية من EquiLoomPRO، وجمع تعليقات المستخدمين وتحسين تكنولوجيتنا.',
            ],
            [
                'date' => 'يونيو <script>document.write(new Date().getFullYear() - 2)</script>',
                'title' => 'الإطلاق العالمي',
                'description' => 'ظهرت EquiLoomPRO عالمياً، محضرة تكنولوجيا الاستثمار المتقدمة للمستخدمين في جميع أنحاء العالم، ومميزة كإنجاز رئيسي في ثورة قطاع الاستثمار.',
            ],
        ],
        'investment_title' => 'أحدث ثورة في نهج استثمارك',
        'investment_text' => 'اختبر مستقبل استثمار الأصول مع EquiLoomPRO. مزيجنا الابتكاري من الذكاء الاصطناعي والتحليلات البيانية الشاملة يقدم قدرات استثمارية استثنائية، مما يمكن المستثمرين من التنقل في تحديات السوق بدقة لا مثيل لها.',
        'investment_btn' => 'ابدأ',
        'contact_title' => 'تواصل معنا',
        'contact_text' => 'تواصل معنا للحصول على إرشاد أو إجابات على أسئلتك، وسيساعدك فريقنا الخبير في اتخاذ قرارات استثمارية استراتيجية وواثقة.',
        'contact_form_enable_js' => 'يرجى تفعيل JavaScript في متصفحك لإكمال هذا النموذج.',
        'contact_label_name' => 'الاسم',
        'contact_label_email' => 'البريد الإلكتروني',
        'contact_label_message' => 'تعليق أو رسالة',
        'contact_submit' => 'إرسال',
        'contact_form_agreement' => ' * بالنقر على الزر توافق وتقبل <a href="/privacy" class="form-link">سياسة الخصوصية</a> و <a href="/terms" class="form-link">الشروط والأحكام</a>.',
        'contact_form_success' => 'تم إرسال النموذج بنجاح!',
        'privacy_title' => 'سياسة الخصوصية',
        'privacy_updated' => '<b>آخر تحديث:</b> يوليو <script>document.write(new Date().getFullYear() - 1)</script>',
        'privacy_1_title' => '1. المقدمة',
        'privacy_1_text' => '
<p>توضح سياسة الخصوصية هذه لـEquiLoomPRO ("نحن" أو "لنا" أو "الخاص بنا") كيفية إدارتنا للبيانات الشخصية عند استخدامك خدماتنا ("الخدمات") وموقعنا <a href="/">EquiLoomPRO</a> ("الموقع"). حماية خصوصيتك وبياناتك أولويتنا.</p>
<p>قد ترتبط خدماتنا وموقعنا بمواقع طرف ثالث. نحن غير مسؤولين عن ممارسات خصوصيتهم، لذا يرجى مراجعة سياساتهم قبل التفاعل.</p>
<p>نعامل جميع البيانات المجمعة كسرية، مستخدمين تدابير تقنية وتنظيمية قوية لحماية البيانات الشخصية من الوصول غير المصرح به أو الفقدان أو الكشف.</p>
<p>عند استخدام موقعنا، قد تقدم معلومات شخصية (مثل الاسم، البريد الإلكتروني، رقم الهاتف). قد تستخدم هذه البيانات للتحقق من الهوية، تقديم الدعم، الوفاء بالالتزامات، أو إرسال تحديثات بموافقتك. يمكنك إدارة تفضيلات الإشعارات أو الانسحاب من التواصل.</p>
',
        'privacy_2_title' => '2. جمع البيانات واستخدامها',
        'privacy_2_1_title' => '2.1. عام',
        'privacy_2_1_text' => '
<p>نجمع البيانات من زوار الموقع ("الزوار")، المستخدمين ("المستخدمون")، والشركاء ("الشركاء"). تشمل البيانات الشخصية عناوين IP والأسماء وتفاصيل الاتصال ومعلومات العلاقة، وفقاً لقوانين حماية البيانات.</p>
',
        'privacy_2_2_title' => '2.2. الجمع',
        'privacy_2_2_text' => '
<p>بالوصول إلى موقعنا، توافق على جمع البيانات (مثل عبر ملفات تعريف الارتباط أو عناوين IP أو النماذج). إذا كنت غير موافق، يرجى الامتناع عن استخدام الموقع.</p>
',
        'privacy_2_3_title' => '2.3. الغرض',
        'privacy_2_3_text' => '
<p>نعالج البيانات الشخصية لتحسين خدماتنا، تخصيص التجارب، تقديم الدعم، والامتثال للالتزامات القانونية. الأغراض والأسس القانونية تشمل:</p>
<table>
    <tbody>
        <tr><td>تسجيل الحساب</td><td>الموافقة؛ تنفيذ العقد</td></tr>
        <tr><td>تقديم الخدمة</td><td>تنفيذ العقد</td></tr>
        <tr><td>الدعم والاستفسارات</td><td>المصالح المشروعة</td></tr>
        <tr><td>التسويق</td><td>الموافقة</td></tr>
        <tr><td>تحسين الخدمة</td><td>المصالح المشروعة</td></tr>
    </tbody>
</table>
',
        'privacy_2_4_title' => '2.4. مشاركة البيانات',
        'privacy_2_4_text' => '
<p>قد نشارك البيانات مع بائعين وشركاء موثوقين، مضمونين الامتثال لنظام حماية البيانات الشخصية للمستخدمين في الرياض والسعودية.</p>
',
        'privacy_3_title' => '3. الشركاء',
        'privacy_3_text' => '
<p>نعالج بيانات الشركاء بالموافقة أو لمصالح مشروعة، مضمونين التعامل الآمن والامتثال لقوانين حماية البيانات.</p>
',
        'privacy_4_title' => '4. الأمان',
        'privacy_4_text' => '
<p>نطبق تدابير تقنية وتنظيمية لحماية البيانات الشخصية. الأطراف الثالثة التي نشارك معها البيانات ملزمة تعاقدياً بالحفاظ على معايير مكافئة. بينما نسعى للأمان، لا يوجد نظام محصن تماماً من الاختراقات، ويقبل المستخدمون هذا الخطر.</p>
',
        'privacy_5_title' => '5. ملفات تعريف الارتباط',
        'privacy_5_text' => '
<p>راجع <a href="/cookie">سياسة ملفات تعريف الارتباط</a> للتفاصيل حول ملفات تعريف الارتباط وتقنيات التتبع.</p>
',
        'privacy_6_title' => '6. روابط الطرف الثالث',
        'privacy_6_text' => '
<p>قد يحتوي موقعنا على روابط لمواقع خارجية. نحن غير مسؤولين عن ممارسات خصوصيتهم، لذا راجع سياساتهم قبل مشاركة البيانات.</p>
',
        'privacy_7_title' => '7. الاحتفاظ بالبيانات',
        'privacy_7_text' => '
<p>نحتفظ بالبيانات الشخصية فقط طالما كان ذلك ضرورياً. عند إنهاء الحساب، يتم حذف البيانات وفقاً للقوانين المعمول بها.</p>
',
        'privacy_8_title' => '8. حقوقك',
        'privacy_8_text' => '
<p>لديك حقوق الوصول، التصحيح، الحذف، التقييد، أو نقل بياناتك الشخصية، الاعتراض على المعالجة، أو سحب الموافقة. تواصل معنا لممارسة هذه الحقوق.</p>
',
        'privacy_9_title' => '9. التسويق',
        'privacy_9_text' => '
<p>قد نستخدم بياناتك للتسويق بموافقتك. يمكنك سحب الموافقة بالبريد الإلكتروني.</p>
',
        'privacy_10_title' => '10. قبول السياسة',
        'privacy_10_text' => '
<p>استخدام موقعنا أو الخدمات يعني الموافقة على هذه السياسة. قد نحدثها، ويستمر الاستخدام يعني القبول.</p>
',
        'privacy_11_title' => '11. الكشف القانوني',
        'privacy_11_text' => '
<p>قد نكشف البيانات الشخصية إذا طُلب قانونياً أو لحماية حقوقنا.</p>
',
        'privacy_12_title' => '12. التواصل',
        'privacy_12_text' => '
<p>لأي مخاوف خصوصية، تواصل مع مسؤول حماية البيانات لدينا على <a href="mailto:support@zevriocapiture.org">support@zevriocapiture.org</a>.</p>
',
        'terms_title' => 'الشروط والأحكام',
        'terms_updated' => '<b>آخر تحديث:</b> يوليو <script>document.write(new Date().getFullYear() - 1)</script>',
        'terms_1_title' => '1. المقدمة',
        'terms_1_text' => '
<p>مرحباً بك في موقع EquiLoomPRO ("الموقع")، الذي تديره EquiLoomPRO ("نحن" أو "لنا" أو "الخاص بنا"). باستخدام موقعنا أو خدماتنا ("الخدمات")، توافق على هذه الشروط والأحكام ("الشروط") وسياسة الخصوصية الخاصة بنا. تواصل معنا على <a href="mailto:support@zevriocapiture.org">support@zevriocapiture.org</a>.</p>
<p>قد يتم تحديث هذه الشروط دون إشعار. يعني الاستمرار في استخدام الموقع أو الخدمات قبول التغييرات. إذا كنت غير موافق، فأنت غير مصرح لك باستخدام الموقع أو الخدمات.</p>
',
        'terms_2_title' => '2. عدم تقديم نصيحة استثمارية',
        'terms_2_text' => '
<p>لا يقدم موقعنا نصيحة مالية أو استثمارية شخصية. المعلومات المقدمة عامة ولا تأخذ في الاعتبار أهدافك أو وضعك المالي أو احتياجاتك الخاصة. استشر مستشاراً مالياً مستقلاً قبل اتخاذ قرارات استثمارية.</p>
',
        'terms_3_title' => '3. الخدمات',
        'terms_3_text' => '
<p>لا يتم تقديم جميع الخدمات من قبلنا. الخدمات أو المواقع أو المنتجات التابعة لطرف ثالث المرتبطة على موقعنا غير مصادق عليها من قبلنا. نحن غير مسؤولين عن محتوى أو خدمات الطرف الثالث.</p>
',
        'terms_4_title' => '4. النطاق والتعديل',
        'terms_4_text' => '
<p>تشكل هذه الشروط الاتفاق الكامل بينك وبيننا، وتحل محل الاتفاقات السابقة. يجوز لنا تعديل الشروط حسب تقديرنا، ويعني الاستمرار في الاستخدام قبول الشروط المعدلة.</p>
',
        'terms_5_title' => '5. الأهلية',
        'terms_5_text' => '
<p>الخدمات للأفراد البالغين 18 عاماً فما فوق القادرين على إبرام عقود ملزمة قانونياً. لا يُسمح للقاصرين باستخدام الموقع أو الخدمات.</p>
',
        'terms_6_title' => '6. وصف الخدمات',
        'terms_6_text' => '
<p><b>خدمات الاشتراك:</b> عند التسجيل، يمكنك الوصول إلى خدمات الاشتراك (مجانية أو مدفوعة)، بما في ذلك المحتوى منا أو من مزودي طرف ثالث. هذا ليس نصيحة استثمارية، ونحن غير مسؤولين عن دقته.</p>
<p><b>خدمات الطرف الثالث:</b> قد يُعرض منتجات أو خدمات من طرف ثالث. نحن غير مسؤولين عن دقتها أو عدم قدرتك على الوصول إليها.</p>
<p><b>عام:</b> يتطلب تسجيل بيانات دقيقة. يجوز لنا رفض البيانات غير الكاملة أو المزيفة ونحن غير مسؤولين عن انقطاع الخدمة.</p>
',
        'terms_7_title' => '7. الحقوق الملكية',
        'terms_7_text' => '
<p>الموقع ومحتواه محميان بحقوق النشر والعلامات التجارية وحقوق أخرى. يُحظر النسخ أو إعادة التوزيع أو الكشط غير المصرح به.</p>
',
        'terms_8_title' => '8. المعلومات السرية',
        'terms_8_text' => '
<p>المعلومات السرية محمية لمدة سنة بعد الإنهاء، باستثناء البيانات العامة أو المعلومات المستلمة بدون قيود.</p>
',
        'terms_9_title' => '9. الربط التشعبي والإطار',
        'terms_9_text' => '
<p>يُحظر الربط التشعبي أو الإطار أو الإشارة إلى موقعنا بدون إذن. أنت مسؤول عن الأضرار الناتجة عن مثل هذه الأفعال.</p>
',
        'terms_10_title' => '10. إخلاء المسؤولية',
        'terms_10_text' => '
<p>الخدمات والمحتوى مقدمة "كما هي" بدون ضمانات. نحن غير مسؤولين عن الأخطاء أو الانقطاعات أو عدم القدرة على استخدام الموقع أو الخدمات.</p>
',
        'terms_11_title' => '11. تحديد المسؤولية',
        'terms_11_text' => '
<p>نحن غير مسؤولين عن أي أضرار، بما في ذلك فقدان الأرباح أو البيانات. الحد الأقصى لمسؤوليتنا 950 ريال سعودي، حيث يسمح القانون.</p>
',
        'terms_12_title' => '12. التعويض',
        'terms_12_text' => '
<p>توافق على تعويضنا عن أي مطالبات تنشأ عن استخدامك للموقع أو انتهاك الشروط أو انتهاك الحقوق.</p>
',
        'terms_13_title' => '13. مواقع الطرف الثالث',
        'terms_13_text' => '
<p>نحن غير مسؤولين عن مواقع الطرف الثالث أو الموارد المرتبطة على موقعنا، ولا عن محتواها أو سياساتها.</p>
',
        'terms_14_title' => '14. حماية البيانات',
        'terms_14_text' => '
<p>نلتزم بنظام حماية البيانات الشخصية السعودي. نحافظ على تدابير الأمان، نحصل على الموافقات، ونساعد في طلبات حقوق صاحب البيانات. نخطر بانتهاكات البيانات فوراً.</p>
',
        'terms_15_title' => '15. القانون الحاكم',
        'terms_15_text' => '
<p>تخضع هذه الشروط للقانون السعودي. سيتم حل النزاعات من خلال التحكيم في الرياض وفقاً للقواعد المعمول بها.</p>
',
        'terms_16_title' => '16. التواصل',
        'terms_16_text' => '
<p>للأسئلة، تواصل معنا على <a href="mailto:support@zevriocapiture.org">support@zevriocapiture.org</a>.</p>
',
    ],
    'jo' => [
        'language_iso' => 'ar',
        'country_name' => 'الأردن',
        'locale' => 'ar_JO',
        'locale_lang' => 'ar-JO',
        'language_name' => 'العربية',
        'city' => 'عمان',
        'country_code' => 'JO',
        'geo_position' => '31.9539, 35.9106',
        'jsonld_organization_name' => 'EquiLoomPRO',
        'jsonld_organization_review_rating' => '4.96',
        'jsonld_organization_review_author' => 'مستخدم EquiLoomPRO',
        'jsonld_software_categories' => 'أداة استثمار في العملات المشفرة',
        'jsonld_software_price' => '230',
        'jsonld_software_price_currency' => 'JOD',
        'brand_name_api' => 'EquLum App AI',
        'home' => 'الرئيسية',
        'about' => 'من نحن',
        'contact' => 'تواصل معنا',
        'privacy' => 'سياسة الخصوصية',
        'terms' => 'الشروط والأحكام',
        'title' => 'EquiLoomPRO — الاستثمار الآلي وإدارة النقد',
        'meta_description' => 'اجعل ثروتك ملكك مع EquiLoomPRO. محافظ مدعومة بالذكاء الاصطناعي، مدخرات آلية وميزات ضريبية فعالة لمساعدتك على الاستثمار بثقة وتنمية أموالك.',
        'meta_keywords' => 'EquiLoomPRO, استثمار آلي, استثمار بالذكاء الاصطناعي, إدارة محفظة, حساب نقدي, مدخرات, فعال ضريبياً, الأردن, عمان',
        'og_title' => 'EquiLoomPRO — منصة استثمار مدعومة بالذكاء الاصطناعي',
        'og_description' => 'محافظ آلية، نقد ذكي، واستثمار بدون جهد. ابدأ مع EquiLoomPRO ونمِ ثروتك بثقة.',
        'og_image' => '/assets/images/share.webp',
        'twitter_title' => 'EquiLoomPRO — الاستثمار الآلي',
        'twitter_description' => 'محافظ مدعومة بالذكاء الاصطناعي ومدخرات آلية لمساعدتك على تنمية ثروتك بثقة.',
        'about_desc_content' => 'تعرف على EquiLoomPRO — فريق مقرها في عمان من المستثمرين وخبراء الذكاء الاصطناعي يبنون منصة استثمار عالية الدقة وعالية السرعة تساعدك على تنمية ثروتك بثقة.',
        'about_keywords' => 'عن EquiLoomPRO, الشركة, فريق استثمار بالذكاء الاصطناعي, منصة استثمار, عمان',
        'contact_desc_content' => 'أسئلة أو إرشاد؟ تواصل مع EquiLoomPRO — خبراؤنا جاهزون لمساعدتك في اتخاذ قرارات استثمارية استراتيجية وواثقة.',
        'contact_keywords' => 'تواصل EquiLoomPRO, الدعم, المساعدة, أسئلة استثمار, عمان',
        'terms_desc_content' => 'اقرأ الشروط والأحكام لاستخدام موقع EquiLoomPRO وخدماته، بما في ذلك الأهلية والقيود والإشعارات القانونية.',
        'terms_keywords' => 'شروط الاستخدام, الشروط والأحكام, EquiLoomPRO, قانوني, الأردن',
        'privacy_desc_content' => 'كيف يجمع EquiLoomPRO ويستخدم ويحمي بياناتك الشخصية، حقوقك، وتزامنا بالخصوصية والأمان.',
        'privacy_keywords' => 'سياسة الخصوصية, حماية البيانات, قانون حماية البيانات الشخصية, بيانات شخصية, EquiLoomPRO',
        'jsonld_organization_review_body' => 'يقدم EquiLoomPRO منصة استثمار مدعومة بالذكاء الاصطناعي تجمع بين المحافظ الآلية وإدارة النقد الذكية وميزات فعالة ضريبياً لمساعدة العملاء في عمان على تنمية ثروتهم بثقة.',
        'jsonld_faq_1_question' => 'ما هو EquiLoomPRO؟',
        'jsonld_faq_1_answer' => 'EquiLoomPRO هي منصة استثمار مدعومة بالذكاء الاصطناعي تساعدك على بناء وأتمتة محافظ متنوعة، وتحسين المدخرات والاستثمار بثقة.',
        'jsonld_faq_2_question' => 'كيف يساعدني EquiLoomPRO في الاستثمار؟',
        'jsonld_faq_2_answer' => 'نقدم محافظ قابلة للتخصيص أو آلية، أدوات نقد ذكية وميزات مصممة لتحسين النتائج بعد الضرائب — حتى تتمكن من الاستثمار بدون جهد مع الحفاظ على السيطرة.',
        'jsonld_faq_3_question' => 'هل EquiLoomPRO متاح في الأردن؟',
        'jsonld_faq_3_answer' => 'نعم. يدعم EquiLoomPRO العملاء في عمان وجميع أنحاء الأردن، مع تجارب مخصصة لموقعك وعملتك.',
        'jsonld_faq_4_question' => 'هل أحتاج إلى استخدام الأتمتة أو الذكاء الاصطناعي؟',
        'jsonld_faq_4_answer' => 'الأتمتة اختيارية. يمكنك السماح للمنصة بإدارة المهام الروتينية أو بناء وتعديل محفظتك الخاصة متى شئت.',
        'jsonld_faq_5_question' => 'كيف أبدأ؟',
        'jsonld_faq_5_answer' => 'أنشئ ملفك الشخصي، اختر أو تخصص محفظة ومول حسابك. لا توجد رسوم تسجيل مخفية؛ قد يكون لخدمات الشركاء متطلباتها الخاصة.',
        'jsonld_faq_6_question' => 'كيف يحمي EquiLoomPRO بياناتي؟',
        'jsonld_faq_6_answer' => 'نطبق إجراءات أمان فنية وتنظيمية قوية ونلتزم بمعايير حماية البيانات الأردنية المعمول بها لحماية معلوماتك.',
        'header_logo_alt' => 'شعار EquiLoomPRO',
        'header_logo_text' => 'EquiLoomPRO',
        'header_burger_alt' => 'القائمة',
        'header_cross_alt' => 'إغلاق',
        'hero_form_title' => 'سجل الآن',
        'hero_form_notice' => '* بالنقر على الزر توافق وتقبل <a href="/privacy" class="form-link">سياسة الخصوصية</a> و <a href="/terms" class="form-link">الشروط والأحكام</a>.',
        'hero_title' => 'اجعل ثروتك ملكك.',
        'hero_subtitle' => 'استثمار ومدخرات شخصية، آلية وبدون جهد.',
        'hero_stat_nerdwallet' => "أفضل Robo-advisor، 2019<sup class=\"sup\">1</sup><br>أفضل تطبيق إدارة نقد، 2020<sup class=\"sup\">1</sup>",
        'hero_stat_investopedia' => "أفضل Robo-advisor، 2020<sup class=\"sup\">1</sup>",
        'hero_stat_clients' => 'عملاء موثوق بهم',
        'hero_stat_funds' => 'في أموال العملاء',
        'hero_stat_appstore' => 'Apple App Store <sup class=\"sup\">2</sup>',
        'hero_stat_playstore' => 'Google Play Store <sup class=\"sup\">2</sup>',
        'investition_title' => 'الاستثمار ليس سهلاً. نحن فقط نجعله يبدو كذلك.',
        'investition_text' => 'دعنا نخصص محفظة خصيصاً لك أو ابنها بنفسك، وستقوم أتمتتنا القوية باستغلال استثماراتك إلى أقصى حد، وتحسين أدائك ومساعدتك على خفض ضرائبك.',
        'investition_btn_start' => 'ابدأ الاستثمار',
        'investition_btn_more' => 'تعلم المزيد',
        'investition_notification_app' => 'EquiLoomPRO',
        'investition_notification_time' => 'الآن',
        'investition_notification_1' => 'وفرنا لك <span>230 د.أ</span> على ضرائبك.',
        'investition_notification_2' => 'استثمرنا تلقائياً إيداعك <span>230 د.أ</span>.',
        'cash_title' => 'النقد اليومي، مصمم لبناء ثروة طويلة الأمد.',
        'cash_text' => 'حسابنا النقدي، مقدم مع شركاء مصرفيين منظمين، يتيح لك أتمتة مدخراتك، دفع الفواتير، السحب من آلاف أجهزة الصراف الآلي، واستثمار نقدك الإضافي في ثوانٍ لبناء مستقبلك.',
        'cash_btn_start' => 'ابدأ الادخار',
        'cash_btn_more' => 'تعلم المزيد',
        'cash_img_phone_alt' => 'هاتف',
        'cash_img_card_alt' => 'بطاقة',
        'saving_title' => 'الادخار والاستثمار. كل ذلك بينما أنت مرتاح.',
        'saving_text' => 'أخبرنا بما توفر له، وسنخصص تلقائياً نقداً إضافياً لتحقيق أهدافك. وبما أننا نتصل بجميع حساباتك، تحتاج فقط إلى تطبيق واحد لمشاهدة نمو ثروتك.',
        'saving_img_alt' => 'الادخار',
        'testimonial_title' => 'شهادة',
        'testimonial_1_quote' => 'إنه المصدر <strong>الأفضل</strong> الوحيد لكل من الاستثمار، إدارة التقاعد ورؤية صورة مالي كاملة.',
        'testimonial_1_author' => 'Oliver S',
        'testimonial_2_quote' => '<strong>EquiLoomPRO</strong> هو أول شيء في حياتي يحفزني فعلياً على توفير المال.',
        'testimonial_2_author' => 'Amelia R',
        'testimonial_3_quote' => 'إنه <strong>آلي</strong>، وأنا كسول.',
        'testimonial_3_author' => 'George L',
        'trust_title' => 'أكثر من <strong>120,000</strong> شخص في جميع أنحاء الأردن يستخدمون EquiLoomPRO بالفعل لكسب المزيد والقلق أقل',
        'trust_btn' => 'ابدأ',
        'trust_img_alt' => 'نافذة مفتوحة مع نبات',
        'trust_subtitle' => 'كما ظهر في',
        'trust_logo_wsj_alt' => 'WSJ',
        'trust_logo_bloomberg_alt' => 'Bloomberg',
        'trust_logo_nyt_alt' => 'The New York Times',
        'trust_logo_reuters_alt' => 'Reuters',
        'trust_logo_cnbc_alt' => 'CNBC',
        'footer_logo_alt' => 'شعار EquiLoomPRO',
        'footer_logo_text' => 'EquiLoomPRO',
        'footer_legal_note_1' => 'تم تقديم الشهادات من قبل عملاء كل من EquiLoomPRO Advisers و EquiLoomPRO Brokerage. لا يوجد ضمان بأن العملاء سيحصلون على تجارب أو نجاحات مشابهة.',
        'footer_legal_note_2' => 'يتلقى Nerdwallet و Investopedia (الـ"Endorsers") تعويضاً نقدياً لإحالة عملاء محتملين إلى EquiLoomPRO Advisers, LLC (“EquiLoomPRO Advisers”) عبر إعلانات على مواقعهم. لا يرتبط Endorsers و EquiLoomPRO Advisers ببعضهما ولا توجد علاقة رسمية خارج هذا الترتيب. آراء Nerdwallet خاصة بهم. تقييماتهم تحددها فريقهم التحريري وتعتمد على معلومات يعتبرونها موثوقة، لكن لا يمكنهم ضمانها. لا يؤثر التعويض على وضع المنتج أو التقييم. فكر في رسوم المزود وميزاته ومنهجيته قبل اتخاذ قرار.',
        'footer_legal_note_3' => 'تقييمات Apple App Store و Google Play Store تعتمد على تقييمات المستخدمين من فبراير 2014 (Apple) وديسمبر 2015 (Google) حتى يونيو <span class="currentYear"></span>. التقييمات مجمعة من Apple, Inc. و Google, Inc.، اللذين يتلقيان تعويضاً لاستضافة تطبيقنا.',
        'footer_legal_note_4' => 'باستخدام هذا الموقع، تفهم أن المعلومات المقدمة هي لأغراض معلوماتية فقط وتوافق على <a href="/terms" class="legal-link">شروط الاستخدام</a> و <a href="/privacy" class="legal-link">سياسة الخصوصية</a> الخاصة بنا.',
        'footer_legal_note_5' => 'يعتمد EquiLoomPRO Advisers على معلومات من مصادر مختلفة يُعتقد أنها موثوقة، بما في ذلك العملاء وأطراف ثالثة، لكنه لا يمكنه ضمان دقة أو اكتمال تلك المعلومات. لا يجب تفسير أي شيء هنا كعرض أو توصية أو طلب لشراء أو بيع أي أوراق مالية. بالإضافة إلى ذلك، EquiLoomPRO Advisers أو الشركات التابعة له لا تقدم نصيحة ضريبية ويُشجع المستثمرون على استشارة مستشاريهم الضريبيين الشخصيين.',
        'footer_legal_note_6' => 'نتعاون مع مزودي خدمات مصرفية ودفع منظمين في الأردن لتقديم ميزات النقد والبطاقة لك. الخدمات المصرفية مقدمة من شركائنا الثالثين خاضعة للتحقق من الهوية واللوائح المحلية المعمول بها.',
        'footer_legal_note_7' => 'خدمات حساب النقد مقدمة عبر وسطاء وشركاء مصرفيين منظمين ومنفصلة عن حسابات الاستثمار. إدارة الاستثمارات والخدمات الاستشارية مقدمة من EquiLoomPRO Advisers أو الشركات التابعة. تختلف المنتجات والخدمات حسب الاختصاص.',
        'footer_legal_note_8' => 'تعتمد فعالية استراتيجية حصاد الخسائر الضريبية على تقليل التزام الضريبي للعميل على ملفه الضريبي والاستثماري الكامل، بما في ذلك المشتريات والتصرفات في الحسابات خارج EquiLoomPRO ونوع الاستثمارات (مثل خاضعة للضريبة أو غير خاضعة) أو فترة الاحتفاظ (قصيرة أو طويلة الأجل). قد يولد حصاد الخسائر الضريبية عدداً أكبر من العمليات بسبب محاولات التقاط الخسائر. هناك فرصة أن العمليات المنسوبة إلى حصاد الخسائر الضريبية قد تخلق مكاسب رأسمالية وبيع غسيل وقد تكون خاضعة لتكاليف معاملات أعلى وتأثيرات سوق. بالإضافة إلى ذلك، قد تنتج استراتيجيات حصاد الخسائر الضريبية خسائر، قد لا تُعوض بمكاسب كافية في الحساب وقد تكون محدودة بقواعد ضريبية معمول بها. يعتمد استخدام الخسائر المحصودة على الاعتراف بمكاسب رأسمالية في نفس الفترة الضريبية أو مستقبلية وقد يكون خاضعاً لقيود بموجب القوانين الضريبية المعمول بها. الخسائر المحصودة من خلال الاستراتيجية التي لم تُستخدم في الفترة الضريبية عند الاعتراف بها قد تُحمل عادة لتعويض مكاسب رأسمالية مستقبلية، إن وجدت.',
        'footer_legal_note_9' => 'كل استثمار ينطوي على مخاطر، بما في ذلك الخسارة المحتملة للمال الذي تستثمره، والأداء السابق لا يضمن الأداء المستقبلي. العوائد التاريخية والعوائد المتوقعة وإسقاطات الاحتمالية مقدمة لأغراض معلوماتية وتوضيحية، وقد لا تعكس الأداء المستقبلي الفعلي.',
        'footer_legal_copy' => 'EquiLoomPRO و EquiLoomPRO Advisers و EquiLoomPRO Brokerage هي شركات تابعة مملوكة بالكامل لـ EquiLoomPRO Corporation. <br><br> © <span class="currentYear"></span> EquiLoomPRO Corporation. جميع الحقوق محفوظة.',
        'about_title' => 'من نحن',
        'about_text' => 'في <span class="brand-name">EquiLoomPRO</span>، نحن فريق من المستثمرين ذوي الخبرة وخبراء الذكاء الاصطناعي متحدون لبناء منصة استثمارية من الدرجة الأولى، مشهورة بدقتها وأدائها السريع.',
        'about_content_title' => 'نواةنا هي فريق عالمي متنوع وشغوف متحد بمهمة لإعادة تشكيل مستقبل الاستثمار.',
        'about_content_text_1' => 'نحن ملتزمون بتحويل مشهد الاستثمار من خلال الاستفادة من قوة الذكاء الاصطناعي. من خلال دمج رؤى المستثمرين الخبراء مع التكنولوجيا المتطورة، نقدم منصة استثمارية تتفوق في الدقة والسرعة والربحية.',
        'about_content_text_2' => 'يجلب فريقنا العالمي منظورات متنوعة، ويبتكر باستمرار لدمج أحدث اتجاهات الذكاء الاصطناعي والمالية في منصتنا. نحن مدفوعون بالتآزر بين الخبرة البشرية والذكاء الآلي لتقديم تجربة استثمارية تحولية.',
        'about_content_img_alt' => 'فريق EquiLoomPRO',
        'period' => [
            [
                'date' => 'أبريل <script>document.write(new Date().getFullYear() - 3)</script>',
                'title' => 'ولادة الرؤية',
                'description' => 'أُسست EquiLoomPRO برؤية جريئة لإحداث ثورة في الاستثمار من خلال الذكاء الاصطناعي.',
            ],
            [
                'date' => 'يوليو <script>document.write(new Date().getFullYear() - 3)</script>',
                'title' => 'النمو والتطوير',
                'description' => 'جمعنا 3 ملايين دينار أردني في التمويل، مما دفع تطوير المنصة وتوسيع الفريق.',
            ],
            [
                'date' => 'نوفمبر <script>document.write(new Date().getFullYear() - 3)</script>',
                'title' => 'مرحلة الاختبار التجريبي',
                'description' => 'تم إطلاق النسخة التجريبية من EquiLoomPRO، وجمع تعليقات المستخدمين وتحسين تكنولوجيتنا.',
            ],
            [
                'date' => 'يونيو <script>document.write(new Date().getFullYear() - 2)</script>',
                'title' => 'الإطلاق العالمي',
                'description' => 'ظهرت EquiLoomPRO عالمياً، محضرة تكنولوجيا الاستثمار المتقدمة للمستخدمين في جميع أنحاء العالم، ومميزة كإنجاز رئيسي في ثورة قطاع الاستثمار.',
            ],
        ],
        'investment_title' => 'أحدث ثورة في نهج استثمارك',
        'investment_text' => 'اختبر مستقبل استثمار الأصول مع EquiLoomPRO. مزيجنا الابتكاري من الذكاء الاصطناعي والتحليلات البيانية الشاملة يقدم قدرات استثمارية استثنائية، مما يمكن المستثمرين من التنقل في تحديات السوق بدقة لا مثيل لها.',
        'investment_btn' => 'ابدأ',
        'contact_title' => 'تواصل معنا',
        'contact_text' => 'تواصل معنا للحصول على إرشاد أو إجابات على أسئلتك، وسيساعدك فريقنا الخبير في اتخاذ قرارات استثمارية استراتيجية وواثقة.',
        'contact_form_enable_js' => 'يرجى تفعيل JavaScript في متصفحك لإكمال هذا النموذج.',
        'contact_label_name' => 'الاسم',
        'contact_label_email' => 'البريد الإلكتروني',
        'contact_label_message' => 'تعليق أو رسالة',
        'contact_submit' => 'إرسال',
        'contact_form_agreement' => ' * بالنقر على الزر توافق وتقبل <a href="/privacy" class="form-link">سياسة الخصوصية</a> و <a href="/terms" class="form-link">الشروط والأحكام</a>.',
        'contact_form_success' => 'تم إرسال النموذج بنجاح!',
        'privacy_title' => 'سياسة الخصوصية',
        'privacy_updated' => '<b>آخر تحديث:</b> يوليو <script>document.write(new Date().getFullYear() - 1)</script>',
        'privacy_1_title' => '1. المقدمة',
        'privacy_1_text' => '
<p>توضح سياسة الخصوصية هذه لـEquiLoomPRO ("نحن" أو "لنا" أو "الخاص بنا") كيفية إدارتنا للبيانات الشخصية عند استخدامك خدماتنا ("الخدمات") وموقعنا <a href="/">EquiLoomPRO</a> ("الموقع"). حماية خصوصيتك وبياناتك أولويتنا.</p>
<p>قد ترتبط خدماتنا وموقعنا بمواقع طرف ثالث. نحن غير مسؤولين عن ممارسات خصوصيتهم، لذا يرجى مراجعة سياساتهم قبل التفاعل.</p>
<p>نعامل جميع البيانات المجمعة كسرية، مستخدمين تدابير تقنية وتنظيمية قوية لحماية البيانات الشخصية من الوصول غير المصرح به أو الفقدان أو الكشف.</p>
<p>عند استخدام موقعنا، قد تقدم معلومات شخصية (مثل الاسم، البريد الإلكتروني، رقم الهاتف). قد تستخدم هذه البيانات للتحقق من الهوية، تقديم الدعم، الوفاء بالالتزامات، أو إرسال تحديثات بموافقتك. يمكنك إدارة تفضيلات الإشعارات أو الانسحاب من التواصل.</p>
',
        'privacy_2_title' => '2. جمع البيانات واستخدامها',
        'privacy_2_1_title' => '2.1. عام',
        'privacy_2_1_text' => '
<p>نجمع البيانات من زوار الموقع ("الزوار")، المستخدمين ("المستخدمون")، والشركاء ("الشركاء"). تشمل البيانات الشخصية عناوين IP والأسماء وتفاصيل الاتصال ومعلومات العلاقة، وفقاً لقوانين حماية البيانات.</p>
',
        'privacy_2_2_title' => '2.2. الجمع',
        'privacy_2_2_text' => '
<p>بالوصول إلى موقعنا، توافق على جمع البيانات (مثل عبر ملفات تعريف الارتباط أو عناوين IP أو النماذج). إذا كنت غير موافق، يرجى الامتناع عن استخدام الموقع.</p>
',
        'privacy_2_3_title' => '2.3. الغرض',
        'privacy_2_3_text' => '
<p>نعالج البيانات الشخصية لتحسين خدماتنا، تخصيص التجارب، تقديم الدعم، والامتثال للالتزامات القانونية. الأغراض والأسس القانونية تشمل:</p>
<table>
    <tbody>
        <tr><td>تسجيل الحساب</td><td>الموافقة؛ تنفيذ العقد</td></tr>
        <tr><td>تقديم الخدمة</td><td>تنفيذ العقد</td></tr>
        <tr><td>الدعم والاستفسارات</td><td>المصالح المشروعة</td></tr>
        <tr><td>التسويق</td><td>الموافقة</td></tr>
        <tr><td>تحسين الخدمة</td><td>المصالح المشروعة</td></tr>
    </tbody>
</table>
',
        'privacy_2_4_title' => '2.4. مشاركة البيانات',
        'privacy_2_4_text' => '
<p>قد نشارك البيانات مع بائعين وشركاء موثوقين، مضمونين الامتثال لقانون حماية البيانات الشخصية للمستخدمين في عمان والأردن.</p>
',
        'privacy_3_title' => '3. الشركاء',
        'privacy_3_text' => '
<p>نعالج بيانات الشركاء بالموافقة أو لمصالح مشروعة، مضمونين التعامل الآمن والامتثال لقوانين حماية البيانات.</p>
',
        'privacy_4_title' => '4. الأمان',
        'privacy_4_text' => '
<p>نطبق تدابير تقنية وتنظيمية لحماية البيانات الشخصية. الأطراف الثالثة التي نشارك معها البيانات ملزمة تعاقدياً بالحفاظ على معايير مكافئة. بينما نسعى للأمان، لا يوجد نظام محصن تماماً من الاختراقات، ويقبل المستخدمون هذا الخطر.</p>
',
        'privacy_5_title' => '5. ملفات تعريف الارتباط',
        'privacy_5_text' => '
<p>راجع <a href="/cookie">سياسة ملفات تعريف الارتباط</a> للتفاصيل حول ملفات تعريف الارتباط وتقنيات التتبع.</p>
',
        'privacy_6_title' => '6. روابط الطرف الثالث',
        'privacy_6_text' => '
<p>قد يحتوي موقعنا على روابط لمواقع خارجية. نحن غير مسؤولين عن ممارسات خصوصيتهم، لذا راجع سياساتهم قبل مشاركة البيانات.</p>
',
        'privacy_7_title' => '7. الاحتفاظ بالبيانات',
        'privacy_7_text' => '
<p>نحتفظ بالبيانات الشخصية فقط طالما كان ذلك ضرورياً. عند إنهاء الحساب، يتم حذف البيانات وفقاً للقوانين المعمول بها.</p>
',
        'privacy_8_title' => '8. حقوقك',
        'privacy_8_text' => '
<p>لديك حقوق الوصول، التصحيح، الحذف، التقييد، أو نقل بياناتك الشخصية، الاعتراض على المعالجة، أو سحب الموافقة. تواصل معنا لممارسة هذه الحقوق.</p>
',
        'privacy_9_title' => '9. التسويق',
        'privacy_9_text' => '
<p>قد نستخدم بياناتك للتسويق بموافقتك. يمكنك سحب الموافقة بالبريد الإلكتروني.</p>
',
        'privacy_10_title' => '10. قبول السياسة',
        'privacy_10_text' => '
<p>استخدام موقعنا أو الخدمات يعني الموافقة على هذه السياسة. قد نحدثها، ويستمر الاستخدام يعني القبول.</p>
',
        'privacy_11_title' => '11. الكشف القانوني',
        'privacy_11_text' => '
<p>قد نكشف البيانات الشخصية إذا طُلب قانونياً أو لحماية حقوقنا.</p>
',
        'privacy_12_title' => '12. التواصل',
        'privacy_12_text' => '
<p>لأي مخاوف خصوصية، تواصل مع مسؤول حماية البيانات لدينا على <a href="mailto:support@zevriocapiture.org">support@zevriocapiture.org</a>.</p>
',
        'terms_title' => 'الشروط والأحكام',
        'terms_updated' => '<b>آخر تحديث:</b> يوليو <script>document.write(new Date().getFullYear() - 1)</script>',
        'terms_1_title' => '1. المقدمة',
        'terms_1_text' => '
<p>مرحباً بك في موقع EquiLoomPRO ("الموقع")، الذي تديره EquiLoomPRO ("نحن" أو "لنا" أو "الخاص بنا"). باستخدام موقعنا أو خدماتنا ("الخدمات")، توافق على هذه الشروط والأحكام ("الشروط") وسياسة الخصوصية الخاصة بنا. تواصل معنا على <a href="mailto:support@zevriocapiture.org">support@zevriocapiture.org</a>.</p>
<p>قد يتم تحديث هذه الشروط دون إشعار. يعني الاستمرار في استخدام الموقع أو الخدمات قبول التغييرات. إذا كنت غير موافق، فأنت غير مصرح لك باستخدام الموقع أو الخدمات.</p>
',
        'terms_2_title' => '2. عدم تقديم نصيحة استثمارية',
        'terms_2_text' => '
<p>لا يقدم موقعنا نصيحة مالية أو استثمارية شخصية. المعلومات المقدمة عامة ولا تأخذ في الاعتبار أهدافك أو وضعك المالي أو احتياجاتك الخاصة. استشر مستشاراً مالياً مستقلاً قبل اتخاذ قرارات استثمارية.</p>
',
        'terms_3_title' => '3. الخدمات',
        'terms_3_text' => '
<p>لا يتم تقديم جميع الخدمات من قبلنا. الخدمات أو المواقع أو المنتجات التابعة لطرف ثالث المرتبطة على موقعنا غير مصادق عليها من قبلنا. نحن غير مسؤولين عن محتوى أو خدمات الطرف الثالث.</p>
',
        'terms_4_title' => '4. النطاق والتعديل',
        'terms_4_text' => '
<p>تشكل هذه الشروط الاتفاق الكامل بينك وبيننا، وتحل محل الاتفاقات السابقة. يجوز لنا تعديل الشروط حسب تقديرنا، ويعني الاستمرار في الاستخدام قبول الشروط المعدلة.</p>
',
        'terms_5_title' => '5. الأهلية',
        'terms_5_text' => '
<p>الخدمات للأفراد البالغين 18 عاماً فما فوق القادرين على إبرام عقود ملزمة قانونياً. لا يُسمح للقاصرين باستخدام الموقع أو الخدمات.</p>
',
        'terms_6_title' => '6. وصف الخدمات',
        'terms_6_text' => '
<p><b>خدمات الاشتراك:</b> عند التسجيل، يمكنك الوصول إلى خدمات الاشتراك (مجانية أو مدفوعة)، بما في ذلك المحتوى منا أو من مزودي طرف ثالث. هذا ليس نصيحة استثمارية، ونحن غير مسؤولين عن دقته.</p>
<p><b>خدمات الطرف الثالث:</b> قد يُعرض منتجات أو خدمات من طرف ثالث. نحن غير مسؤولين عن دقتها أو عدم قدرتك على الوصول إليها.</p>
<p><b>عام:</b> يتطلب تسجيل بيانات دقيقة. يجوز لنا رفض البيانات غير الكاملة أو المزيفة ونحن غير مسؤولين عن انقطاع الخدمة.</p>
',
        'terms_7_title' => '7. الحقوق الملكية',
        'terms_7_text' => '
<p>الموقع ومحتواه محميان بحقوق النشر والعلامات التجارية وحقوق أخرى. يُحظر النسخ أو إعادة التوزيع أو الكشط غير المصرح به.</p>
',
        'terms_8_title' => '8. المعلومات السرية',
        'terms_8_text' => '
<p>المعلومات السرية محمية لمدة سنة بعد الإنهاء، باستثناء البيانات العامة أو المعلومات المستلمة بدون قيود.</p>
',
        'terms_9_title' => '9. الربط التشعبي والإطار',
        'terms_9_text' => '
<p>يُحظر الربط التشعبي أو الإطار أو الإشارة إلى موقعنا بدون إذن. أنت مسؤول عن الأضرار الناتجة عن مثل هذه الأفعال.</p>
',
        'terms_10_title' => '10. إخلاء المسؤولية',
        'terms_10_text' => '
<p>الخدمات والمحتوى مقدمة "كما هي" بدون ضمانات. نحن غير مسؤولين عن الأخطاء أو الانقطاعات أو عدم القدرة على استخدام الموقع أو الخدمات.</p>
',
        'terms_11_title' => '11. تحديد المسؤولية',
        'terms_11_text' => '
<p>نحن غير مسؤولين عن أي أضرار، بما في ذلك فقدان الأرباح أو البيانات. الحد الأقصى لمسؤوليتنا 230 دينار أردني، حيث يسمح القانون.</p>
',
        'terms_12_title' => '12. التعويض',
        'terms_12_text' => '
<p>توافق على تعويضنا عن أي مطالبات تنشأ عن استخدامك للموقع أو انتهاك الشروط أو انتهاك الحقوق.</p>
',
        'terms_13_title' => '13. مواقع الطرف الثالث',
        'terms_13_text' => '
<p>نحن غير مسؤولين عن مواقع الطرف الثالث أو الموارد المرتبطة على موقعنا، ولا عن محتواها أو سياساتها.</p>
',
        'terms_14_title' => '14. حماية البيانات',
        'terms_14_text' => '
<p>نلتزم بقانون حماية البيانات الشخصية الأردني. نحافظ على تدابير الأمان، نحصل على الموافقات، ونساعد في طلبات حقوق صاحب البيانات. نخطر بانتهاكات البيانات فوراً.</p>
',
        'terms_15_title' => '15. القانون الحاكم',
        'terms_15_text' => '
<p>تخضع هذه الشروط للقانون الأردني. سيتم حل النزاعات من خلال التحكيم في عمان وفقاً للقواعد المعمول بها.</p>
',
        'terms_16_title' => '16. التواصل',
        'terms_16_text' => '
<p>للأسئلة، تواصل معنا على <a href="mailto:support@zevriocapiture.org">support@zevriocapiture.org</a>.</p>
',
    ],
    'au' => [
        'language_iso' => 'en',
        'country_name' => 'Australia',
        'locale' => 'en_AU',
        'locale_lang' => 'en-AU',
        'language_name' => 'English',
        'city' => 'Sydney',
        'country_code' => 'AU',
        'geo_position' => '-33.8688, 151.2093',
        'jsonld_organization_name' => 'EquiLoomPRO',
        'jsonld_organization_review_rating' => '4.96',
        'jsonld_organization_review_author' => 'EquiLoomPRO User',
        'jsonld_software_categories' => 'Cryptocurrency Investment Tool',
        // original $190 ≈ 289 AUD (rounded)
        'jsonld_software_price' => '289',
        'jsonld_software_price_currency' => 'AUD',
        'brand_name_api' => 'EquLum App AI',

        'home' => 'Home',
        'about' => 'About Us',
        'contact' => 'Contact Us',
        'privacy' => 'Privacy Policy',
        'terms' => 'Terms and Conditions',

        // Home (index)
        'title' => 'EquiLoomPRO — Automated Investing & Cash Management in Australia',
        'meta_description' => 'Make wealth your own with EquiLoomPRO. AI-assisted portfolios, automated savings, and tax-efficient features to help you invest confidently and grow your money across Sydney and Melbourne.',
        'meta_keywords' => 'EquiLoomPRO, automated investing, AI investing, portfolio management, cash account, savings, tax efficient, Australia, Sydney, Melbourne',

        // Open Graph / Twitter (global)
        'og_title' => 'EquiLoomPRO — AI-Powered Investing Platform (Australia)',
        'og_description' => 'Automated portfolios, smart cash, and effortless investing. Start with EquiLoomPRO and grow your wealth with confidence in Australia.',
        'og_image' => '/assets/images/share.webp',

        'twitter_title' => 'EquiLoomPRO — Automated Investing in Australia',
        'twitter_description' => 'AI-assisted portfolios and automated savings to help you grow wealth with confidence in Sydney and Melbourne.',

        // About (short descriptors for listings)
        'about_desc_content' => 'Meet EquiLoomPRO — a Sydney-based team of investors and AI experts building a high-precision, high-speed investment platform that helps you grow wealth confidently.',
        'about_keywords' => 'about EquiLoomPRO, company, AI investing team, investment platform, Sydney, Melbourne',

        // Contact (short descriptors for listings)
        'contact_desc_content' => 'Questions or guidance? Contact EquiLoomPRO — our experts in Australia are ready to help you make confident, strategic investment decisions.',
        'contact_keywords' => 'contact EquiLoomPRO, support, help, investing questions, Sydney, Melbourne',

        // Terms / Privacy (short descriptors for listings)
        'terms_desc_content' => 'Read the Terms and Conditions for using EquiLoomPRO’s website and services in Australia, including eligibility, limitations, and legal notices.',
        'terms_keywords' => 'terms of use, terms and conditions, EquiLoomPRO, legal, Australia',

        'privacy_desc_content' => 'How EquiLoomPRO collects, uses, and protects your personal data in Australia, your rights, and our commitment to privacy and security.',
        'privacy_keywords' => 'privacy policy, data protection, personal data, EquiLoomPRO, Australia',

        // ---------- JSON-LD content ----------
        'jsonld_organization_review_body' => 'EquiLoomPRO delivers an AI-assisted investing platform that combines automated portfolios, smart cash management, and tax-efficient features to help clients in Sydney and Melbourne grow wealth with confidence.',

        // FAQ (on homepage when page === "index")
        'jsonld_faq_1_question' => 'What is EquiLoomPRO?',
        'jsonld_faq_1_answer' => 'EquiLoomPRO is an AI-assisted investing platform that helps you build and automate diversified portfolios, optimize savings, and invest with confidence in Australia.',

        'jsonld_faq_2_question' => 'How does EquiLoomPRO help me invest?',
        'jsonld_faq_2_answer' => 'We offer customizable or automated portfolios, smart cash tools, and features designed to improve after-tax outcomes — so you can invest effortlessly while staying in control.',

        'jsonld_faq_3_question' => 'Is EquiLoomPRO available in Australia?',
        'jsonld_faq_3_answer' => 'Yes. EquiLoomPRO supports clients in Sydney, Melbourne, and across Australia, with experiences tailored to your locale and currency (AUD).',

        'jsonld_faq_4_question' => 'Do I need to use automation or AI?',
        'jsonld_faq_4_answer' => 'Automation is optional. You can let the platform handle routine tasks or build and adjust your own portfolio whenever you like.',

        'jsonld_faq_5_question' => 'How do I get started?',
        'jsonld_faq_5_answer' => 'Create your profile, choose or customize a portfolio, and fund your account in AUD. There are no hidden sign-up fees; partner services may have their own requirements.',

        'jsonld_faq_6_question' => 'How does EquiLoomPRO protect my data?',
        'jsonld_faq_6_answer' => 'We apply robust technical and organizational security measures and follow applicable Australian and international data protection standards to safeguard your information.',

        // Header section
        'header_logo_alt' => 'EquiLoomPRO Logo',
        'header_logo_text' => 'EquiLoomPRO',
        'header_burger_alt' => 'Menu',
        'header_cross_alt' => 'Close',

        // Hero section
        'hero_form_title' => 'Register now',
        'hero_form_notice' => '* By clicking the button you agree and accept the <a href="/au/privacy" class="form-link">Privacy Policy</a> and <a href="/au/terms" class="form-link">Terms & Conditions</a>.',
        'hero_title' => 'Make wealth your own.',
        'hero_subtitle' => 'Personalized, Automated, Effortless Investing and Savings.',
        'hero_stat_nerdwallet' => "Best Robo-advisor, 2019<sup class=\"sup\">1</sup><br>Best Cash Management App, 2020<sup class=\"sup\">1</sup>",
        'hero_stat_investopedia' => "Best Robo-advisor, 2020<sup class=\"sup\">1</sup>",
        'hero_stat_clients' => 'Trusted clients',
        'hero_stat_funds' => 'In client funds',
        'hero_stat_appstore' => 'Apple App Store <sup class=\"sup\">2</sup>',
        'hero_stat_playstore' => 'Google Play Store <sup class=\"sup\">2</sup>',

        // Investition section
        'investition_title' => 'Investing isn’t easy. We just make it feel that way.',
        'investition_text' => 'Let us customize a portfolio just for you or build it yourself, and our powerful automation will make the most of your investments, optimizing performance and helping lower your taxes.',
        'investition_btn_start' => 'Start investing',
        'investition_btn_more' => 'Learn more',
        'investition_notification_app' => 'EquiLoomPRO',
        'investition_notification_time' => 'now',
        // ~$78.11 saved -> ≈ 116 AUD
        'investition_notification_1' => 'We saved you <span>116 AUD</span> on your taxes.',
        // ~$250 deposit -> ≈ 370 AUD
        'investition_notification_2' => 'We automatically invested your <span>370 AUD</span> deposit.',

        // Cash section
        'cash_title' => 'Everyday cash, designed to build long-term wealth in Australia.',
        'cash_text' => 'Our Cash account, offered with regulated banking partners in Australia, lets you automate your savings, pay bills, withdraw from ATMs across Sydney and Melbourne, and invest your extra cash in seconds to keep building your future.',
        'cash_btn_start' => 'Start saving',
        'cash_btn_more' => 'Learn more',
        'cash_img_phone_alt' => 'Phone',
        'cash_img_card_alt' => 'Card',

        // Saving section
        'saving_title' => 'Saving and investing. All while you’re relaxing.',
        'saving_text' => 'Tell us what you’re saving for, and we’ll automatically set aside extra cash to hit your goals. Since we connect with all your accounts, you only need one app to watch your wealth grow.',
        'saving_img_alt' => 'Saving',

        // Testimonials section (Aussie names)
        'testimonial_title' => 'TESTIMONIAL',
        'testimonial_1_quote' => 'It\'s the single <strong>best</strong> resource for both investing, managing retirement and seeing my entire financial picture.',
        'testimonial_1_author' => 'Liam W',
        'testimonial_2_quote' => '<strong>EquiLoomPRO</strong> is the first thing in my life that actually motivated me to save money.',
        'testimonial_2_author' => 'Charlotte B',
        'testimonial_3_quote' => 'It’s <strong>automatic</strong>, and I’m lazy.',
        'testimonial_3_author' => 'Jack M',

        // Trust section
        'trust_title' => 'Over <strong>120,000</strong> people across Australia are already using EquiLoomPRO to earn more and worry less',
        'trust_btn' => 'Get started',
        'trust_img_alt' => 'Open window with plant',
        'trust_subtitle' => 'AS FEATURED IN',
        'trust_logo_wsj_alt' => 'WSJ',
        'trust_logo_bloomberg_alt' => 'Bloomberg',
        'trust_logo_nyt_alt' => 'The New York Times',
        'trust_logo_reuters_alt' => 'Reuters',
        'trust_logo_cnbc_alt' => 'CNBC',

        // Footer section
        'footer_logo_alt' => 'EquiLoomPRO Logo',
        'footer_logo_text' => 'EquiLoomPRO',
        'footer_legal_note_1' => 'Testimonials were given by clients of both EquiLoomPRO Advisers and EquiLoomPRO Brokerage. There is no guarantee that clients will have similar experiences or success.',
        'footer_legal_note_2' => 'Nerdwallet and Investopedia (the “Endorsers”) receive cash compensation for referring potential clients to EquiLoomPRO Advisers, LLC (“EquiLoomPRO Advisers”) via advertisements placed on their respective websites. The Endorsers and EquiLoomPRO Advisers are not associated with one another and have no formal relationship outside of this arrangement. Nerdwallet’s opinions are their own. Their ratings are determined by their editorial team and rely on information they consider reliable, but cannot guarantee. Compensation does not influence product placement or rating. Consider a provider’s fees, features, and methodology before making a decision.',
        'footer_legal_note_3' => 'Apple App Store and Google Play Store ratings are based on user ratings from February 2014 (Apple) and December 2015 (Google) through June <span class="currentYear"></span>. Ratings compiled by Apple, Inc., and Google, Inc., who receive compensation for hosting our app.',
        'footer_legal_note_4' => 'By using this website, you understand the information being presented is provided for informational purposes only and agree to our <a href="/au/terms" class="legal-link">Terms of Use</a> and <a href="/au/privacy" class="legal-link">Privacy Policy</a>.',
        'footer_legal_note_5' => 'EquiLoomPRO Advisers relies on information from various sources believed to be reliable, including clients and third parties, but cannot guarantee the accuracy or completeness of that information. Nothing herein should be construed as an offer, recommendation, or solicitation to buy or sell any security. Additionally, EquiLoomPRO Advisers or its affiliates do not provide tax advice and investors are encouraged to consult with their personal tax advisors.',
        'footer_legal_note_6' => 'We partner with regulated banking and payment providers in Australia to bring you cash and card features. Banking services are provided by our third-party partners subject to identity verification and applicable Australian regulations.',
        'footer_legal_note_7' => 'Cash account services are offered via regulated brokers and banking partners and are separate from investing accounts. Investment management and advisory services are provided by EquiLoomPRO Advisers or affiliated entities. Products and services vary by jurisdiction.',
        'footer_legal_note_8' => 'The effectiveness of the Tax-Loss Harvesting strategy to reduce the client’s tax liability depends on the client’s overall tax and investment profile, including activity in accounts outside of EquiLoomPRO and investment types/holding periods. Tax loss harvesting may increase trading, could create capital gains and wash sales, and may lead to higher transaction costs and market impacts. Losses may not be fully offset by gains and can be limited by applicable tax rules. Use of harvested losses depends on recognizing capital gains in the same or a future tax period and may be subject to legal limitations. Unused losses may generally be carried forward.',
        'footer_legal_note_9' => 'All investing involves risk, including the possible loss of money you invest, and past performance does not guarantee future performance. Historical returns, expected returns, and probability projections are for informational and illustrative purposes only and may not reflect actual future performance.',

        'footer_legal_copy' => 'EquiLoomPRO, EquiLoomPRO Advisers and EquiLoomPRO Brokerage are wholly owned subsidiaries of EquiLoomPRO Corporation. <br><br> © <span class="currentYear"></span> EquiLoomPRO Corporation. All rights reserved.',

        // About -----------------------------------------------
        'about_title' => 'About',
        'about_text' => 'At <span class="brand-name">EquiLoomPRO</span>, we’re a team of experienced investors and AI experts based in Sydney and Melbourne, building a top-tier investment platform known for precision and speed.',
        'about_content_title' => 'Our core is a diverse, passionate team united by a mission to reshape the future of investing in Australia.',
        'about_content_text_1' => 'We’re dedicated to transforming the investment landscape by leveraging the power of artificial intelligence. Combining investor expertise with cutting-edge technology, we deliver a platform that excels in accuracy, speed, and profitability.',
        'about_content_text_2' => 'Our team brings varied perspectives from across Australia and beyond, continually innovating to incorporate the latest AI and finance trends. We harness the synergy of human insight and machine intelligence for a transformative investing experience.',
        'about_content_img_alt' => 'About EquiLoomPRO team',

        'period' => [
            [
                'date' => 'April <script>document.write(new Date().getFullYear() - 3)</script>',
                'title' => 'Birth of a Vision',
                'description' => 'EquiLoomPRO was founded with a bold vision to revolutionise investing in Australia through artificial intelligence.',
            ],
            [
                'date' => 'July <script>document.write(new Date().getFullYear() - 3)</script>',
                'title' => 'Growth and Development',
                // ~£3M ≈ ~AUD 5.8M (rounded)
                'description' => 'We raised 5.8 million AUD in funding, accelerating platform development and team expansion.',
            ],
            [
                'date' => 'November <script>document.write(new Date().getFullYear() - 3)</script>',
                'title' => 'Beta Testing Phase',
                'description' => 'The beta version of EquiLoomPRO launched in Sydney, gathering user feedback and refining our technology.',
            ],
            [
                'date' => 'June <script>document.write(new Date().getFullYear() - 2)</script>',
                'title' => 'Global Launch',
                'description' => 'EquiLoomPRO debuted globally, bringing advanced investment technology to users worldwide, with Australia as a key hub.',
            ],
        ],

        'investment_title' => 'Revolutionise Your Investment Approach',
        'investment_text' => 'Experience the future of asset investing with EquiLoomPRO in Australia. Our blend of AI and rich data analytics delivers outstanding capabilities, helping investors navigate markets with precision.',
        'investment_btn' => 'Get started',

        // Contact
        'contact_title' => 'Contact us',
        'contact_text' => 'Reach out for guidance or answers to your questions — our Australian team will help you make confident, strategic investment decisions.',
        'contact_form_enable_js' => 'Please enable JavaScript in your browser to complete this form.',
        'contact_label_name' => 'Name',
        'contact_label_email' => 'Email',
        'contact_label_message' => 'Comment or Message',
        'contact_submit' => 'Submit',
        'contact_form_agreement' => ' * By clicking the button you agree and accept the <a href="/au/privacy" class="form-link">Privacy Policy</a> and <a href="/au/terms" class="form-link">Terms &amp; Conditions</a>.',
        'contact_form_success' => 'Form submitted successfully!',
        // Privacy Policy
        'privacy_title' => 'Privacy Policy',
        'privacy_updated' => '<b>Last updated:</b> July <script>document.write(new Date().getFullYear() - 1)</script>',

        'privacy_1_title' => '1. Introduction',
        'privacy_1_text' => '
<p>This Privacy Policy of EquiLoomPRO ("we," "us," or "our") explains how we collect, use, and protect your personal data when you use our services ("Services") and website <a href="/au/">EquiLoomPRO</a> ("Website"). Protecting your privacy and data is our priority in Australia.</p>
<p>Our Services and Website may link to third-party sites. We are not responsible for their privacy practices; please review their policies before engaging.</p>
<p>We treat all collected data as confidential and apply robust technical and organisational measures to protect Personal Data from unauthorised access, loss, or disclosure.</p>
<p>When using our Website, you may provide personal information (e.g., name, email, phone number). We may use this data to verify identity, provide support, fulfil obligations, or send updates with your consent. You can manage notification preferences or opt out of communications.</p>
',

        'privacy_2_title' => '2. Data Collection and Use',
        'privacy_2_1_title' => '2.1. General',
        'privacy_2_1_text' => '
<p>We collect data from Website visitors ("Visitors"), users ("Users"), and partners ("Partners"). Personal Data may include IP addresses, names, contact details, device identifiers, and relationship information, in line with applicable Australian privacy standards.</p>
',

        'privacy_2_2_title' => '2.2. Collection',
        'privacy_2_2_text' => '
<p>By accessing our Website, you consent to data collection (e.g., via cookies, IP addresses, analytics, or forms). If you disagree, please refrain from using the Website.</p>
',

        'privacy_2_3_title' => '2.3. Purpose',
        'privacy_2_3_text' => '
<p>We process Personal Data to improve our Services, personalise experiences, provide support, and comply with legal obligations. Purposes and legal bases include:</p>
<table>
  <tbody>
    <tr><td>Account registration</td><td>Consent; Contract performance</td></tr>
    <tr><td>Service provision</td><td>Contract performance</td></tr>
    <tr><td>Support and queries</td><td>Legitimate interests</td></tr>
    <tr><td>Marketing</td><td>Consent</td></tr>
    <tr><td>Service improvement</td><td>Legitimate interests</td></tr>
    <tr><td>Compliance and security</td><td>Legal obligations; Legitimate interests</td></tr>
  </tbody>
</table>
',

        'privacy_2_4_title' => '2.4. Data Sharing',
        'privacy_2_4_text' => '
<p>We may share data with trusted vendors and partners (e.g., hosting, analytics, payment and banking partners) under contracts that require appropriate safeguards. Where relevant, we apply measures consistent with international data protection standards.</p>
',

        'privacy_3_title' => '3. Partners',
        'privacy_3_text' => '
<p>We process Partner data with consent or for legitimate interests (e.g., onboarding, due diligence, contract management). We ensure secure handling and compliance with applicable privacy laws.</p>
',

        'privacy_4_title' => '4. Security',
        'privacy_4_text' => '
<p>We implement technical and organisational safeguards (access controls, encryption in transit where appropriate, logging and monitoring). Third parties we share data with are contractually obligated to maintain equivalent standards. While we strive for security, no system is fully immune to breaches, and Users accept this risk.</p>
',

        'privacy_5_title' => '5. Cookies',
        'privacy_5_text' => '
<p>See our <a href="/au/cookie">Cookie Policy</a> for details on cookies and similar tracking technologies, how we use them, and how you can manage your preferences.</p>
',

        'privacy_6_title' => '6. Third-Party Links',
        'privacy_6_text' => '
<p>Our Website may link to external sites. We are not responsible for their privacy practices; please review their policies before sharing data.</p>
',

        'privacy_7_title' => '7. Data Retention',
        'privacy_7_text' => '
<p>We retain Personal Data only as long as necessary for the purposes described in this Policy or as required by law. Upon account termination, data is deleted or anonymised in accordance with applicable laws and our internal retention schedules.</p>
',

        'privacy_8_title' => '8. Your Rights',
        'privacy_8_text' => '
<p>Subject to applicable law, you may have rights to access, rectify, erase, restrict, or port your Personal Data; object to processing; or withdraw consent. To exercise these rights, contact us using the details below. We may need to verify your identity before fulfilling your request.</p>
',

        'privacy_9_title' => '9. Marketing',
        'privacy_9_text' => '
<p>We may use your data for marketing with your consent (e.g., newsletters, product updates). You can withdraw consent at any time using unsubscribe links or by contacting us.</p>
',

        'privacy_10_title' => '10. Policy Acceptance',
        'privacy_10_text' => '
<p>Your use of the Website or Services signifies agreement with this Policy. We may update it from time to time; continued use after changes constitutes acceptance. Material changes will be highlighted on this page.</p>
',

        'privacy_11_title' => '11. Legal Disclosure',
        'privacy_11_text' => '
<p>We may disclose Personal Data if required by law, court order, or competent authorities, or to protect our rights, security, Users, partners, or the public, and to enforce our Terms.</p>
',

        'privacy_12_title' => '12. Contact',
        'privacy_12_text' => '
<p>For privacy enquiries or to exercise your rights, contact our Data Protection Officer at <a href="mailto:support@zevriocapiture.org">support@zevriocapiture.org</a>. You may also contact us via the form on our <a href="/au/contact">Contact</a> page.</p>
',
        // Terms of Use
        'terms_title' => 'Terms of Use',
        'terms_updated' => '<b>Last updated:</b> July <script>document.write(new Date().getFullYear() - 1)</script>',

        'terms_1_title' => '1. Introduction',
        'terms_1_text' => '
<p>Welcome to the EquiLoomPRO website ("Website"), operated by EquiLoomPRO ("we," "us," "our"). By using our Website or services ("Services"), you agree to these Terms and Conditions ("Terms") and our <a href="/au/privacy">Privacy Policy</a>. Contact us at <a href="mailto:support@zevriocapiture.org">support@zevriocapiture.org</a>.</p>
<p>We may update these Terms from time to time. Continued use of the Website or Services after changes signifies acceptance. If you disagree with these Terms, you are not authorised to use the Website or Services.</p>
',

        'terms_2_title' => '2. No Investment Advice',
        'terms_2_text' => '
<p>Our Website does not provide personal financial, legal, or investment advice. Information is general in nature and does not consider your objectives, financial situation, or needs. Seek advice from an independent, qualified financial adviser before making investment decisions.</p>
',

        'terms_3_title' => '3. Services',
        'terms_3_text' => '
<p>Some Services may be provided by third parties. Links or references to third-party services, websites, or products do not constitute endorsement. We are not responsible for third-party content, availability, or services.</p>
',

        'terms_4_title' => '4. Scope and Modification',
        'terms_4_text' => '
<p>These Terms constitute the entire agreement between you and us regarding the Website and Services and supersede prior understandings. We may modify the Terms at our discretion. Your continued use after updates constitutes acceptance of the revised Terms.</p>
',

        'terms_5_title' => '5. Eligibility',
        'terms_5_text' => '
<p>The Services are intended for individuals aged 18 or older who can enter into legally binding agreements. By using the Website or Services, you represent that you meet these requirements.</p>
',

        'terms_6_title' => '6. Description of Services',
        'terms_6_text' => '
<p><b>Subscription Services:</b> Upon registration, you may access subscription content or tools (free or paid), including content provided by us or third parties. This content is for informational purposes only and is not investment advice.</p>
<p><b>Third-Party Services:</b> Products or services from third parties may be listed or offered. We do not control their accuracy, availability, or terms and are not responsible for your inability to access them.</p>
<p><b>General:</b> You must provide accurate, complete registration information and keep it updated. We may refuse or cancel registrations that are incomplete, inaccurate, or fraudulent. Service availability may be interrupted for maintenance, upgrades, or other reasons.</p>
',

        'terms_7_title' => '7. Proprietary Rights',
        'terms_7_text' => '
<p>The Website and its content, including text, graphics, logos, software, and trademarks, are protected by intellectual property laws. You may not copy, reproduce, distribute, modify, reverse engineer, scrape, or create derivative works without our prior written consent.</p>
',

        'terms_8_title' => '8. Confidential Information',
        'terms_8_text' => '
<p>Information disclosed by us that is marked or reasonably understood to be confidential must be protected and used solely for the intended purpose. Your confidentiality obligations survive for one (1) year after termination, excluding information that is public, independently developed, or lawfully obtained without restrictions.</p>
',

        'terms_9_title' => '9. Hyperlinking and Framing',
        'terms_9_text' => '
<p>You may not frame, mirror, deep-link, or otherwise reference the Website in a way that implies affiliation or endorsement without our prior written permission. You are responsible for any damages resulting from unauthorised linking or framing.</p>
',

        'terms_10_title' => '10. Disclaimer',
        'terms_10_text' => '
<p>The Website, Services, and all content are provided on an "as is" and "as available" basis without warranties of any kind, express or implied. We do not warrant that the Services will be uninterrupted, error-free, secure, or free of harmful components.</p>
',

        'terms_11_title' => '11. Limitation of Liability',
        'terms_11_text' => '
<p>To the fullest extent permitted by law, we are not liable for any indirect, incidental, special, consequential, exemplary, or punitive damages, or for loss of profits, revenue, data, or goodwill, arising out of or related to your use of the Website or Services, even if advised of the possibility of such damages.</p>
<p>Where liability cannot be excluded, our aggregate liability for all claims relating to the Website or Services shall not exceed <b>390 AUD</b>.</p>
',

        'terms_12_title' => '12. Indemnification',
        'terms_12_text' => '
<p>You agree to indemnify, defend, and hold harmless EquiLoomPRO, its affiliates, and their officers, directors, employees, and agents from and against any claims, liabilities, damages, losses, and expenses (including reasonable legal fees) arising out of or related to your use of the Website or Services, your breach of these Terms, or your violation of any rights of another party.</p>
',

        'terms_13_title' => '13. Third-Party Websites',
        'terms_13_text' => '
<p>The Website may contain links to third-party websites or resources. We do not control and are not responsible for the content, products, services, or policies of third-party websites. Accessing such websites is at your own risk.</p>
',

        'terms_14_title' => '14. Data Protection',
        'terms_14_text' => '
<p>We process personal data in accordance with our <a href="/au/privacy">Privacy Policy</a>. We implement security measures, obtain necessary consents, and assist with data subject rights requests in accordance with applicable laws. We will notify you of data breaches as required by law.</p>
',

        'terms_15_title' => '15. Governing Law and Dispute Resolution',
        'terms_15_text' => '
<p>These Terms and any dispute or claim arising out of or in connection with them (including non-contractual disputes or claims) shall be governed by and construed in accordance with the laws of Australia.</p>
<p>Any dispute shall be finally settled by confidential arbitration in <b>Sydney</b> before a single arbitrator, conducted in English, under applicable institutional rules. The seat and venue of arbitration shall be Sydney, Australia. Judgment on the award may be entered in any court of competent jurisdiction. You and we agree to waive any right to participate in class or representative actions to the extent permitted by law.</p>
',

        'terms_16_title' => '16. Contact',
        'terms_16_text' => '
<p>For questions about these Terms, contact us at <a href="mailto:support@zevriocapiture.org">support@zevriocapiture.org</a> or via the form on our <a href="/au/contact">Contact</a> page.</p>
',

    ],
    'bd' => [
        'language_iso' => 'en',
        'country_name' => 'Bangladesh',
        'locale' => 'en_BD',
        'locale_lang' => 'en-BD',
        'language_name' => 'English',
        'city' => 'Dhaka',
        'country_code' => 'BD',
        'geo_position' => '23.8103, 90.4125',
        'jsonld_organization_name' => 'EquiLoomPRO',
        'jsonld_organization_review_rating' => '4.95',
        'jsonld_organization_review_author' => 'EquiLoomPRO User',
        'jsonld_software_categories' => 'Cryptocurrency Investment Tool',
        'jsonld_software_price' => '16000',
        'jsonld_software_price_currency' => 'BDT',
        'brand_name_api' => 'EquLum App AI',

        'home' => 'Home',
        'about' => 'About Us',
        'contact' => 'Contact Us',
        'privacy' => 'Privacy Policy',
        'terms' => 'Terms and Conditions',

        // Home (index)
        'title' => 'EquiLoomPRO — Automated Investing & Cash Management in Bangladesh',
        'meta_description' => 'Grow wealth with EquiLoomPRO in Bangladesh. AI-assisted portfolios, automated savings, and efficient features to help you invest confidently in Dhaka, Chattogram, and beyond.',
        'meta_keywords' => 'EquiLoomPRO, automated investing, AI investing, portfolio management, cash account, savings, Bangladesh, Dhaka, Chattogram',

        // Open Graph / Twitter
        'og_title' => 'EquiLoomPRO — AI-Powered Investing Platform in Bangladesh',
        'og_description' => 'Automated portfolios, smart cash, and effortless investing. Start with EquiLoomPRO and grow wealth with confidence in Bangladesh.',
        'og_image' => '/assets/images/share.webp',

        'twitter_title' => 'EquiLoomPRO — Automated Investing',
        'twitter_description' => 'AI-assisted portfolios and automated savings to help you grow wealth with confidence in Bangladesh.',

        // About
        'about_desc_content' => 'Meet EquiLoomPRO — a Dhaka-based investment and AI-driven team delivering a high-speed platform that empowers Bangladeshis to grow wealth with confidence.',
        'about_keywords' => 'about EquiLoomPRO, Bangladesh, Dhaka, AI investing team, investment platform',

        // Contact
        'contact_desc_content' => 'Questions or support? Contact EquiLoomPRO — our experts in Dhaka and Chattogram are here to guide your investing decisions.',
        'contact_keywords' => 'contact EquiLoomPRO, support, investing questions, Dhaka, Bangladesh',

        // Terms
        'terms_desc_content' => 'Read the Terms and Conditions for using EquiLoomPRO’s website and services in Bangladesh, including eligibility, limitations, and legal notices.',
        'terms_keywords' => 'terms of use, EquiLoomPRO, Bangladesh legal',

        // Privacy
        'privacy_desc_content' => 'How EquiLoomPRO collects, uses, and protects your personal data under Bangladesh law, including your rights and our privacy practices.',
        'privacy_keywords' => 'privacy policy, data protection, Bangladesh, EquiLoomPRO',

        // ---------- JSON-LD content ----------
        'jsonld_organization_review_body' => 'EquiLoomPRO delivers an AI-assisted investing platform that combines automated portfolios, smart cash management, and efficient features to help clients in Dhaka and across Bangladesh grow wealth with confidence.',

        // FAQ
        'jsonld_faq_1_question' => 'What is EquiLoomPRO?',
        'jsonld_faq_1_answer' => 'EquiLoomPRO is an AI-assisted investing platform that helps you build and automate diversified portfolios, optimize savings, and invest with confidence in Bangladesh.',

        'jsonld_faq_2_question' => 'How does EquiLoomPRO help me invest?',
        'jsonld_faq_2_answer' => 'We offer customizable or automated portfolios, smart cash tools, and features designed to improve financial outcomes — so you can invest effortlessly while staying in control.',

        'jsonld_faq_3_question' => 'Is EquiLoomPRO available in Bangladesh?',
        'jsonld_faq_3_answer' => 'Yes. EquiLoomPRO serves clients in Dhaka, Chattogram, and across Bangladesh, supporting local currency (BDT).',

        'jsonld_faq_4_question' => 'Do I need to use automation or AI?',
        'jsonld_faq_4_answer' => 'Automation is optional. You can let the platform manage tasks or build and adjust your own portfolio anytime.',

        'jsonld_faq_5_question' => 'How do I get started?',
        'jsonld_faq_5_answer' => 'Sign up, choose or customize a portfolio, and fund your account in BDT. No hidden fees — partner services may have their own requirements.',

        'jsonld_faq_6_question' => 'How does EquiLoomPRO protect my data?',
        'jsonld_faq_6_answer' => 'We apply robust security measures and comply with the Bangladesh Data Protection Act <script>document.write(new Date().getFullYear() - 2)</script> to safeguard your information.',
        // Header section
        'header_logo_alt' => 'EquiLoomPRO Logo',
        'header_logo_text' => 'EquiLoomPRO',
        'header_burger_alt' => 'Menu',
        'header_cross_alt' => 'Close',

        // Hero section
        'hero_form_title' => 'Register now',
        'hero_form_notice' => '* By clicking the button you agree and accept the <a href="/bd/privacy" class="form-link">Privacy Policy</a> and <a href="/bd/terms" class="form-link">Terms & Conditions</a>.',
        'hero_title' => 'Make wealth your own in Bangladesh.',
        'hero_subtitle' => 'Personalized, Automated, Effortless Investing and Savings — in BDT.',
        'hero_stat_nerdwallet' => "Best Robo-advisor, 2019<sup class=\"sup\">1</sup><br>Best Cash Management App, 2020<sup class=\"sup\">1</sup>",
        'hero_stat_investopedia' => "Best Robo-advisor, 2020<sup class=\"sup\">1</sup>",
        'hero_stat_clients' => 'Trusted clients in Bangladesh',
        'hero_stat_funds' => 'In client funds (BDT)',
        'hero_stat_appstore' => 'Apple App Store <sup class=\"sup\">2</sup>',
        'hero_stat_playstore' => 'Google Play Store <sup class=\"sup\">2</sup>',

        // Investition section
        'investition_title' => 'Investing isn’t easy. We make it feel effortless.',
        'investition_text' => 'Let us customize a portfolio for you or build it yourself. Our automation maximizes returns, optimizes performance, and helps lower your taxes in Bangladesh.',
        'investition_btn_start' => 'Start investing',
        'investition_btn_more' => 'Learn more',
        'investition_notification_app' => 'EquiLoomPRO',
        'investition_notification_time' => 'now',
        // пример пересчитан под BDT (около 6,500)
        'investition_notification_1' => 'We saved you <span>৳6,500</span> on your taxes.',
        // пример депозита — ৳20,000
        'investition_notification_2' => 'We automatically invested your <span>৳20,000</span> deposit.',

        // Cash section
        'cash_title' => 'Everyday cash, designed to grow your future.',
        'cash_text' => 'Our Cash account, offered with regulated partners in Bangladesh, lets you automate savings, pay bills, withdraw at ATMs across Dhaka and Chattogram, and invest extra cash instantly.',
        'cash_btn_start' => 'Start saving',
        'cash_btn_more' => 'Learn more',
        'cash_img_phone_alt' => 'Phone',
        'cash_img_card_alt' => 'Card',

        // Saving section
        'saving_title' => 'Saving and investing while you relax.',
        'saving_text' => 'Tell us your goals, and we’ll automatically set aside extra BDT to reach them. Connect all your accounts — track your wealth with a single app.',
        'saving_img_alt' => 'Saving',
        // Testimonials section
        'testimonial_title' => 'TESTIMONIAL',
        'testimonial_1_quote' => 'It\'s the single <strong>best</strong> resource for investing, planning retirement, and seeing my full financial picture.',
        'testimonial_1_author' => 'Rahim Uddin',
        'testimonial_2_quote' => '<strong>EquiLoomPRO</strong> fue lo primero que realmente me motivó a ahorrar dinero.',
        'testimonial_2_author' => 'Nusrat Jahan',
        'testimonial_3_quote' => 'Es <strong>automático</strong>, y yo soy práctico.',
        'testimonial_3_author' => 'Mehedi Hasan',

        // Trust section
        'trust_title' => 'More than <strong>120,000</strong> people are using EquiLoomPRO to earn more and worry less',
        'trust_btn' => 'Get started',
        'trust_img_alt' => 'Open window with plant',
        'trust_subtitle' => 'AS FEATURED IN',
        'trust_logo_wsj_alt' => 'WSJ',
        'trust_logo_bloomberg_alt' => 'Bloomberg',
        'trust_logo_nyt_alt' => 'The New York Times',
        'trust_logo_reuters_alt' => 'Reuters',
        'trust_logo_cnbc_alt' => 'CNBC',

        // Footer section
        'footer_logo_alt' => 'EquiLoomPRO Logo',
        'footer_logo_text' => 'EquiLoomPRO',
        'footer_legal_note_1' => 'Testimonials were given by clients of EquiLoomPRO. There is no guarantee that clients will have similar experiences or success.',
        'footer_legal_note_2' => 'Endorsers may receive compensation for referrals to EquiLoomPRO via ads on their websites. Their ratings are determined by their editorial teams and rely on sources they consider reliable but cannot guarantee.',
        'footer_legal_note_3' => 'Apple App Store and Google Play Store ratings are based on user ratings from February 2014 (Apple) and December 2015 (Google) through June <span class="currentYear"></span>. Ratings compiled by Apple, Inc., and Google, Inc.',
        'footer_legal_note_4' => 'By using this website, you agree that the information is provided for informational purposes only and accept our <a href="/bd/terms" class="legal-link">Terms of Use</a> and <a href="/bd/privacy" class="legal-link">Privacy Policy</a>.',
        'footer_legal_note_5' => 'EquiLoomPRO relies on information from sources believed to be reliable, but cannot guarantee its accuracy or completeness. Nothing herein is an offer or solicitation to buy or sell any security. We do not provide tax advice; consult your tax advisor.',
        'footer_legal_note_6' => 'We partner with regulated banking and payment providers where available in Bangladesh to offer cash and card features. Banking services are provided by third-party partners, subject to identity verification and applicable local regulations.',
        'footer_legal_note_7' => 'Cash account services are offered via regulated brokers and banking partners and are separate from investing accounts. Investment management and advisory services may be provided by EquiLoomPRO or affiliated entities. Availability varies by jurisdiction.',
        'footer_legal_note_8' => 'The effectiveness of any tax-loss harvesting strategy depends on each client’s tax situation and activity across accounts. Such strategies may increase trading and costs, may generate gains and wash sales, and could be limited by applicable tax rules.',
        'footer_legal_note_9' => 'All investing involves risk, including possible loss of principal. Past performance does not guarantee future results. Projections are for illustration only and may not reflect actual performance.',

        'footer_legal_copy' => 'EquiLoomPRO and its affiliated entities are subsidiaries of EquiLoomPRO Corporation. <br><br> © <span class="currentYear"></span> EquiLoomPRO Corporation. All rights reserved.',
        // About -----------------------------------------------
        'about_title' => 'About',
        'about_text' => 'At <span class="brand-name">EquiLoomPRO</span>, our Dhaka-based team of experienced investors and AI experts is building a world-class platform for precise and fast investment solutions.',
        'about_content_title' => 'A diverse, passionate team with one mission — reshape the future of investing in Bangladesh.',
        'about_content_text_1' => 'We are dedicated to transforming the financial landscape in Bangladesh by leveraging artificial intelligence. Combining expert insights with modern technology, we deliver a platform that excels in accuracy, speed, and profitability.',
        'about_content_text_2' => 'Our global and local team brings diverse perspectives and continuously innovates to integrate the latest AI and financial trends. We unite human expertise and machine intelligence to create a new era of investing.',
        'about_content_img_alt' => 'About EquiLoomPRO team in Bangladesh',
        'period' => [
            [
                'date' => 'April <script>document.write(new Date().getFullYear() - 3)</script>',
                'title' => 'Birth of a Vision',
                'description' => 'EquiLoomPRO was founded with a bold vision to revolutionize investing through AI.',
            ],
            [
                'date' => 'July <script>document.write(new Date().getFullYear() - 3)</script>',
                'title' => 'Growth and Development',
                'description' => 'We raised ৳260 million in funding, driving platform development and expanding our team.',
            ],
            [
                'date' => 'November <script>document.write(new Date().getFullYear() - 3)</script>',
                'title' => 'Beta Testing Phase',
                'description' => 'The beta version launched in Dhaka, gathering feedback and refining technology.',
            ],
            [
                'date' => 'June <script>document.write(new Date().getFullYear() - 2)</script>',
                'title' => 'Bangladesh Launch',
                'description' => 'EquiLoomPRO officially debuted in Bangladesh, providing advanced AI-powered investing tools tailored to local needs.',
            ],
        ],
        'investment_title' => 'Transform Your Investment Approach',
        'investment_text' => 'Experience the future of investing with EquiLoomPRO. Our innovative blend of AI and analytics delivers exceptional tools, helping Bangladeshi investors navigate markets with confidence.',
        'investment_btn' => 'Get started',

        // Contact -----------------------------------------------
        'contact_title' => 'Contact us',
        'contact_text' => 'Reach out for guidance or support, and our Dhaka-based expert team will help you make confident and strategic investment decisions.',
        'contact_form_enable_js' => 'Please enable JavaScript in your browser to complete this form.',
        'contact_label_name' => 'Name',
        'contact_label_email' => 'Email',
        'contact_label_message' => 'Comment or Message',
        'contact_submit' => 'Submit',
        'contact_form_agreement' => ' * By clicking the button you agree and accept the <a href="/bd/privacy" class="form-link">Privacy Policy</a> and <a href="/bd/terms" class="form-link">Terms &amp; Conditions</a>.',
        'contact_form_success' => 'Form submitted successfully!',
        // Privacy Policy -----------------------------------------------
        'privacy_title' => 'Privacy Policy',
        'privacy_updated' => '<b>Last updated:</b> July <script>document.write(new Date().getFullYear() - 1)</script>',

        'privacy_1_title' => '1. Introduction',
        'privacy_1_text' => '
<p>This Privacy Policy of EquiLoomPRO ("we," "us," "our") explains how we collect, use, and protect your personal data when you use our services ("Services") and website <a href="/bd">EquiLoomPRO</a> ("Website"). Protecting your privacy is our priority.</p>
<p>Our Website may link to third-party sites. We are not responsible for their privacy practices, so please review their policies before sharing data.</p>
<p>We treat all data as confidential and apply technical and organizational safeguards to prevent unauthorized access, loss, or disclosure.</p>
<p>When using our Website, you may provide personal information (e.g., name, email, phone). This data may be used to verify identity, provide support, meet contractual obligations, or send updates with your consent.</p>
',

        'privacy_2_title' => '2. Data Collection and Use',
        'privacy_2_1_title' => '2.1 General',
        'privacy_2_1_text' => '
<p>We collect data from visitors ("Visitors"), registered users ("Users"), and business partners ("Partners"). Personal Data includes IP addresses, names, contact details, and other identifiers as per Bangladesh Data Protection Act <script>document.write(new Date().getFullYear() - 2)</script>.</p>
',

        'privacy_2_2_title' => '2.2 Collection',
        'privacy_2_2_text' => '
<p>By using our Website, you consent to the collection of data through cookies, IP addresses, and submitted forms. If you disagree, please stop using the Website.</p>
',

        'privacy_2_3_title' => '2.3 Purpose',
        'privacy_2_3_text' => '
<p>We process Personal Data for:</p>
<table>
  <tbody>
    <tr><td>Account registration</td><td>Consent; Contract performance</td></tr>
    <tr><td>Service provision</td><td>Contract performance</td></tr>
    <tr><td>Customer support</td><td>Legitimate interests</td></tr>
    <tr><td>Marketing</td><td>Consent</td></tr>
    <tr><td>Service improvement</td><td>Legitimate interests</td></tr>
    <tr><td>Legal compliance</td><td>Local regulations (BD Data Protection Act <script>document.write(new Date().getFullYear() - 2)</script>)</td></tr>
  </tbody>
</table>
',

        'privacy_2_4_title' => '2.4 Data Sharing',
        'privacy_2_4_text' => '
<p>We may share data with trusted vendors and partners, ensuring compliance with Bangladesh data protection laws. For international transfers, we apply additional safeguards.</p>
',

        'privacy_3_title' => '3. Partners',
        'privacy_3_text' => '
<p>Partner data is processed with consent or legitimate interests, ensuring secure handling and compliance with Bangladesh law.</p>
',

        'privacy_4_title' => '4. Security',
        'privacy_4_text' => '
<p>We implement encryption, access controls, and monitoring to safeguard Personal Data. Third parties we work with must follow similar standards. However, no system is fully immune, and Users accept inherent risks.</p>
',

        'privacy_5_title' => '5. Cookies',
        'privacy_5_text' => '
<p>See our <a href="/bd/cookie">Cookie Policy</a> for details on cookies and tracking technologies.</p>
',

        'privacy_6_title' => '6. Third-Party Links',
        'privacy_6_text' => '
<p>Our Website may link to external services. We are not responsible for their content or privacy practices.</p>
',

        'privacy_7_title' => '7. Data Retention',
        'privacy_7_text' => '
<p>We store Personal Data only as long as necessary. Upon request or account termination, data is deleted as required by Bangladeshi law.</p>
',

        'privacy_8_title' => '8. Your Rights',
        'privacy_8_text' => '
<p>You have the right to access, correct, delete, or restrict the processing of your Personal Data. You may also withdraw consent at any time. Contact us to exercise these rights under the Bangladesh Data Protection Act <script>document.write(new Date().getFullYear() - 2)</script>.</p>
',

        'privacy_9_title' => '9. Marketing',
        'privacy_9_text' => '
<p>We may use your data for marketing purposes only with your consent. You can opt out anytime via email.</p>
',

        'privacy_10_title' => '10. Policy Acceptance',
        'privacy_10_text' => '
<p>By using our Website, you agree to this Privacy Policy. Updates may be posted, and continued use implies acceptance.</p>
',

        'privacy_11_title' => '11. Legal Disclosure',
        'privacy_11_text' => '
<p>We may disclose data if legally required by Bangladeshi authorities or to protect our rights.</p>
',

        'privacy_12_title' => '12. Contact',
        'privacy_12_text' => '
<p>For privacy concerns, contact our Data Protection Officer in Dhaka: <a href="mailto:support@zevriocapiture.org">support@zevriocapiture.org</a>.</p>
',
        // Terms of Use -----------------------------------------------
        'terms_title' => 'Terms of Use',
        'terms_updated' => '<b>Last updated:</b> July <script>document.write(new Date().getFullYear() - 1)</script>',

        'terms_1_title' => '1. Introduction',
        'terms_1_text' => '
<p>Welcome to the EquiLoomPRO website ("Website"), operated by EquiLoomPRO ("we," "us," "our"). By using our Website or services ("Services"), you agree to these Terms and Conditions ("Terms") and our <a href="/bd/privacy" class="legal-link">Privacy Policy</a>. Contact us at <a href="mailto:support@zevriocapiture.org">support@zevriocapiture.org</a>.</p>
<p>Our primary point of contact is in Dhaka, Bangladesh, with operational support available in Chattogram.</p>
<p>We may update these Terms periodically. If you continue using the Website after updates, you accept the revised Terms.</p>
',

        'terms_2_title' => '2. No Investment Advice',
        'terms_2_text' => '
<p>Content on this Website is for general information only and does not constitute personal financial, legal, tax, or investment advice. You should seek independent professional advice before making financial decisions.</p>
',

        'terms_3_title' => '3. Services',
        'terms_3_text' => '
<p>Some Services may be provided by third parties. Links or references to third-party sites, tools, or offers do not constitute endorsement. We are not responsible for third-party content, availability, or performance.</p>
',

        'terms_4_title' => '4. Scope and Modification',
        'terms_4_text' => '
<p>These Terms, together with policies referenced herein, constitute the entire agreement between you and us regarding your use of the Website. We may modify, suspend, or discontinue any feature without notice.</p>
',

        'terms_5_title' => '5. Eligibility',
        'terms_5_text' => '
<p>You must be at least 18 years old and capable of entering into a binding contract under Bangladeshi law to use the Services. By registering, you represent that the information you provide is accurate and complete.</p>
',

        'terms_6_title' => '6. Description of Services',
        'terms_6_text' => '
<p><b>Subscription Services:</b> After registration, you may access free or paid subscriptions delivering market data, analytics, or educational content. Such content is not personalized advice, and accuracy is not guaranteed.</p>
<p><b>Third-Party Services:</b> We may facilitate access to third-party products (e.g., payments, brokerage integrations). Their terms and policies apply. We are not liable for your inability to access or use third-party services.</p>
<p><b>General:</b> We may verify your identity in accordance with applicable Bangladeshi regulations. Service availability may be affected by maintenance, outages, or local network conditions.</p>
',

        'terms_7_title' => '7. Proprietary Rights',
        'terms_7_text' => '
<p>The Website, its design, text, graphics, code, and trademarks are owned by or licensed to us and protected by applicable intellectual property laws. You may not copy, scrape, reverse-engineer, or create derivative works without our written permission.</p>
',

        'terms_8_title' => '8. Confidential Information',
        'terms_8_text' => '
<p>Non-public information disclosed by either party shall be kept confidential for one (1) year after termination, except for information that is publicly available, independently developed, or lawfully obtained without restriction.</p>
',

        'terms_9_title' => '9. Hyperlinking and Framing',
        'terms_9_text' => '
<p>You may not frame, mirror, or deep-link to our pages without prior written consent. Any unauthorized linking or automated access (bots, scrapers) is prohibited and may result in access restrictions and claims for damages.</p>
',

        'terms_10_title' => '10. Disclaimer',
        'terms_10_text' => '
<p>The Website and Services are provided on an "as-is" and "as-available" basis without warranties of any kind, express or implied (including merchantability, fitness for a particular purpose, and non-infringement). We do not warrant uninterrupted or error-free operation.</p>
',

        'terms_11_title' => '11. Limitation of Liability',
        'terms_11_text' => '
<p>To the maximum extent permitted by Bangladeshi law, we are not liable for indirect, incidental, special, consequential, or punitive damages, or loss of profits, revenue, data, or goodwill. Our aggregate liability for all claims arising out of or related to these Terms or the Services shall not exceed ৳25,000 (Bangladeshi Taka).</p>
',

        'terms_12_title' => '12. Indemnification',
        'terms_12_text' => '
<p>You agree to defend, indemnify, and hold harmless EquiLoomPRO and its affiliates, officers, and employees from any claims, liabilities, damages, losses, and expenses (including reasonable legal fees) arising from your use of the Website, violation of these Terms, or infringement of third-party rights.</p>
',

        'terms_13_title' => '13. Third-Party Websites',
        'terms_13_text' => '
<p>Links to external sites are provided for convenience only. We do not control and are not responsible for third-party content, security, or privacy practices. Review their terms and policies before use.</p>
',

        'terms_14_title' => '14. Data Protection',
        'terms_14_text' => '
<p>We handle Personal Data in accordance with applicable Bangladeshi laws and our <a href="/bd/privacy" class="legal-link">Privacy Policy</a>. Where required, we obtain consent, implement safeguards, and support data subject requests. We will notify you of material data breaches as required by law.</p>
',

        'terms_15_title' => '15. Governing Law and Dispute Resolution',
        'terms_15_text' => '
<p>These Terms are governed by the laws of the People’s Republic of Bangladesh. Any dispute shall be resolved through arbitration seated in Dhaka under the Arbitration Act of Bangladesh. The language of arbitration shall be English or Bangla.</p>
',

        'terms_16_title' => '16. Contact',
        'terms_16_text' => '
<p>Questions about these Terms? Contact our team in Dhaka at <a href="mailto:support@zevriocapiture.org">support@zevriocapiture.org</a>. For general information, visit <a href="/bd/terms">/bd/terms</a>.</p>
',
    ],
    'kr' => [
        'language_iso' => 'ko',
        'country_name' => '대한민국',
        'locale' => 'ko_KR',
        'locale_lang' => 'ko-KR',
        'language_name' => '한국어',
        'city' => '서울',
        'country_code' => 'KR',
        'geo_position' => '37.566535, 126.977969', // 서울

        'jsonld_organization_name' => 'EquiLoomPRO',
        'jsonld_organization_review_rating' => '4.96',
        'jsonld_organization_review_author' => 'EquiLoomPRO 사용자',
        'jsonld_software_categories' => '가상자산 투자 도구',
        'jsonld_software_price' => '210000',
        'jsonld_software_price_currency' => 'KRW',
        'brand_name_api' => 'EquLum App AI',

        'home' => '홈',
        'about' => '회사 소개',
        'contact' => '문의하기',
        'privacy' => '개인정보처리방침',
        'terms' => '이용약관',

        // Home (index)
        'title' => 'EquiLoomPRO — 자동 투자 & 현금 관리',
        'meta_description' => 'EquiLoomPRO와 함께 당신만의 부를 설계하세요. AI 보조 포트폴리오, 자동 저축, 세후 최적화를 통해 자신 있게 투자하고 자산을 키우세요.',
        'meta_keywords' => 'EquiLoomPRO, 자동 투자, AI 투자, 포트폴리오 관리, 현금 계정, 저축, 세금 최적화, 한국, 서울',

        // Open Graph / Twitter (global)
        'og_title' => 'EquiLoomPRO — AI 기반 투자 플랫폼',
        'og_description' => '자동 포트폴리오, 스마트 캐시, 손쉬운 투자. EquiLoomPRO로 자신 있게 자산을 늘리세요.',
        'og_image' => '/assets/images/share.webp',

        'twitter_title' => 'EquiLoomPRO — 자동 투자',
        'twitter_description' => 'AI 보조 포트폴리오와 자동 저축으로 자신 있게 자산을 성장시키세요.',

        // About (SEO)
        'about_desc_content' => 'EquiLoomPRO를 소개합니다 — 서울을 기반으로 한 투자자와 AI 전문가 팀이 정확하고 빠른 투자 플랫폼을 만듭니다.',
        'about_keywords' => 'EquiLoomPRO 소개, 회사, AI 투자 팀, 투자 플랫폼, 서울',

        // Contact (SEO)
        'contact_desc_content' => '질문이 있으신가요? EquiLoomPRO에 문의하세요 — 전문팀이 전략적인 투자 결정을 도와드립니다.',
        'contact_keywords' => 'EquiLoomPRO 연락처, 지원, 도움말, 투자 문의, 서울',

        // Terms (SEO)
        'terms_desc_content' => 'EquiLoomPRO 웹사이트 및 서비스 이용 약관: 이용 자격, 제한, 법적 고지 등을 확인하세요.',
        'terms_keywords' => '이용약관, 서비스 약관, EquiLoomPRO, 법적 고지, 대한민국',

        // Privacy (SEO)
        'privacy_desc_content' => 'EquiLoomPRO가 개인정보를 수집·이용·보호하는 방법과 이용자의 권리, 보안에 대한 약속을 안내합니다.',
        'privacy_keywords' => '개인정보처리방침, 개인정보 보호, 한국, PIPA, EquiLoomPRO',

        // ---------- JSON-LD content ----------
        'jsonld_organization_review_body' => 'EquiLoomPRO는 자동화된 포트폴리오, 스마트 현금 관리, 세후 최적화 기능을 결합한 AI 보조 투자 플랫폼으로, 서울의 고객이 자신 있게 자산을 키우도록 돕습니다.',

        // FAQ (home page)
        'jsonld_faq_1_question' => 'EquiLoomPRO는 무엇인가요?',
        'jsonld_faq_1_answer' => 'EquiLoomPRO는 분산 포트폴리오를 구축하고 자동화하며, 저축을 최적화하고, 자신 있게 투자하도록 돕는 AI 보조 투자 플랫폼입니다.',

        'jsonld_faq_2_question' => '어떻게 투자를 도와주나요?',
        'jsonld_faq_2_answer' => '맞춤 또는 자동 포트폴리오, 스마트 캐시 도구, 세후 성과 개선을 위한 기능을 제공합니다. 자동으로 투자하면서도 사용자가 통제할 수 있습니다.',

        'jsonld_faq_3_question' => '한국에서도 이용할 수 있나요?',
        'jsonld_faq_3_answer' => '네. EquiLoomPRO는 서울과 부산을 포함해 한국 전역의 고객을 지원하며, 현지 언어와 통화에 맞춘 경험을 제공합니다.',

        'jsonld_faq_4_question' => '자동화나 AI를 꼭 써야 하나요?',
        'jsonld_faq_4_answer' => '선택 사항입니다. 플랫폼에 반복 작업을 맡기거나, 직접 포트폴리오를 구성하고 조정할 수 있습니다.',

        'jsonld_faq_5_question' => '어떻게 시작하나요?',
        'jsonld_faq_5_answer' => '프로필을 만들고 포트폴리오를 선택(또는 커스터마이즈)한 뒤 계좌에 자금을 입금하세요. 가입 수수료는 없으며, 제휴 서비스는 자체 요건이 있을 수 있습니다.',

        'jsonld_faq_6_question' => '개인정보는 어떻게 보호하나요?',
        'jsonld_faq_6_answer' => '엄격한 기술·관리적 보호조치를 적용하며, 한국 관련 법령에 부합하는 기준을 따라 정보를 보호합니다.',

        // Header
        'header_logo_alt' => 'EquiLoomPRO 로고',
        'header_logo_text' => 'EquiLoomPRO',
        'header_burger_alt' => '메뉴',
        'header_cross_alt' => '닫기',

        // Hero
        'hero_form_title' => '지금 가입하기',
        'hero_form_notice' => '* 버튼을 클릭하면 <a href="/kr/privacy" class="form-link">개인정보처리방침</a>과 <a href="/kr/terms" class="form-link">이용약관</a>에 동의한 것으로 간주됩니다.',
        'hero_title' => '당신의 부를, 당신답게.',
        'hero_subtitle' => '맞춤형, 자동화된, 손쉬운 투자와 저축.',
        'hero_stat_nerdwallet' => "최고의 로보어드바이저, 2019<sup class=\"sup\">1</sup><br>최고의 현금관리 앱, 2020<sup class=\"sup\">1</sup>",
        'hero_stat_investopedia' => "최고의 로보어드바이저, 2020<sup class=\"sup\">1</sup>",
        'hero_stat_clients' => '신뢰하는 고객 수',
        'hero_stat_funds' => '관리 자산',
        'hero_stat_appstore' => 'Apple App Store <sup class="sup">2</sup>',
        'hero_stat_playstore' => 'Google Play Store <sup class="sup">2</sup>',

        // Investition section
        'investition_title' => '투자는 어렵습니다. 우리는 쉽게 느껴지게 만듭니다.',
        'investition_text' => '당신만을 위한 포트폴리오를 맞춤 구성하거나 직접 만들 수 있습니다. 강력한 자동화가 투자 성과를 극대화하고 세 부담 완화에 도움을 줍니다.',
        'investition_btn_start' => '투자 시작하기',
        'investition_btn_more' => '자세히 보기',
        'investition_notification_app' => 'EquiLoomPRO',
        'investition_notification_time' => '방금',
        'investition_notification_1' => '세금에서 <span>₩62,500</span>을 절감해 드렸습니다.',
        'investition_notification_2' => '입금하신 <span>₩200,000</span>을 자동으로 투자했습니다.',

        // Cash section
        'cash_title' => '일상 현금, 장기 자산 형성을 위해 설계되었습니다.',
        'cash_text' => '규제된 금융 파트너와 제공하는 Cash 계정으로 자동 저축, 요금 납부, 전국 ATM 출금, 여유 현금의 즉시 투자가 가능합니다.',
        'cash_btn_start' => '저축 시작하기',
        'cash_btn_more' => '자세히 보기',
        'cash_img_phone_alt' => '휴대폰',
        'cash_img_card_alt' => '카드',

        // Saving section
        'saving_title' => '저축과 투자를, 당신이 쉬는 사이에.',
        'saving_text' => '목표를 알려주세요. 목표 달성을 위해 여유 현금을 자동으로 적립합니다. 모든 계좌를 연결하면 하나의 앱으로 자산 성장을 한눈에 볼 수 있습니다.',
        'saving_img_alt' => '저축',

        // Testimonials
        'testimonial_title' => '이용 후기',
        'testimonial_1_quote' => '투자, 노후 준비, 전체 재무 상황을 한눈에 보는 데 있어 <strong>가장 뛰어난</strong> 도구예요.',
        'testimonial_1_author' => '김민준',
        'testimonial_2_quote' => '<strong>EquiLoomPRO</strong> 덕분에 처음으로 저축할 동기가 생겼어요.',
        'testimonial_2_author' => '이서연',
        'testimonial_3_quote' => '모든 게 <strong>자동</strong>이라 편해요. 저는 게으르거든요.',
        'testimonial_3_author' => '박지훈',

        // Trust
        'trust_title' => '한국 전역에서 <strong>120,000+</strong>명이 EquiLoomPRO로 더 벌고 덜 걱정합니다',
        'trust_btn' => '지금 시작',
        'trust_img_alt' => '식물이 있는 열린 창문',
        'trust_subtitle' => '언론 보도',
        'trust_logo_wsj_alt' => 'WSJ',
        'trust_logo_bloomberg_alt' => 'Bloomberg',
        'trust_logo_nyt_alt' => 'The New York Times',
        'trust_logo_reuters_alt' => 'Reuters',
        'trust_logo_cnbc_alt' => 'CNBC',

        // Footer
        'footer_logo_alt' => 'EquiLoomPRO 로고',
        'footer_logo_text' => 'EquiLoomPRO',
        'footer_legal_note_1' => '후기는 EquiLoomPRO Advisers와 EquiLoomPRO Brokerage의 고객이 제공했습니다. 모든 고객이 동일한 경험이나 성과를 보장받는 것은 아닙니다.',
        'footer_legal_note_2' => 'Nerdwallet과 Investopedia(“추천사 제공자”)는 EquiLoomPRO Advisers, LLC로의 잠재 고객 유치를 대가로 보상을 받을 수 있습니다. 추천사 제공자와 EquiLoomPRO Advisers는 별도의 제휴 관계가 없습니다.',
        'footer_legal_note_3' => 'Apple App Store 및 Google Play Store 평점은 2014년 2월(Apple), 2015년 12월(Google)부터 <span class="currentYear"></span>년 6월까지의 사용자 평점을 기반으로 합니다.',
        'footer_legal_note_4' => '본 웹사이트의 정보는 참고용입니다. 이용 시 <a href="/kr/terms" class="legal-link">이용약관</a>과 <a href="/kr/privacy" class="legal-link">개인정보처리방침</a>에 동의하는 것으로 간주됩니다.',
        'footer_legal_note_5' => 'EquiLoomPRO Advisers는 신뢰할 수 있다고 판단되는 다양한 출처의 정보를 활용하지만 완전성과 정확성을 보장하지 않습니다. 본 정보는 매수·매도 권유가 아니며, 당사는 세무 자문을 제공하지 않습니다.',
        'footer_legal_note_6' => '계정 및 카드 기능은 한국 관련 규제를 준수하는 금융·지급결제 파트너를 통해 제공됩니다. 본인 확인 및 현지 규제가 적용됩니다.',
        'footer_legal_note_7' => 'Cash 계정 서비스는 규제된 중개사 및 금융 파트너를 통해 제공되며 투자계좌와는 별개입니다. 상품과 서비스는 관할권에 따라 다를 수 있습니다.',
        'footer_legal_note_8' => '세금손실상계의 효과는 고객의 전체 세무·투자 상황에 따라 달라집니다. 더 많은 거래가 발생할 수 있으며, 경우에 따라 양도차익 또는 거래 비용이 증가할 수 있습니다. 관련 법규에 따른 제한이 적용될 수 있습니다.',
        'footer_legal_note_9' => '투자에는 원금 손실을 포함한 위험이 존재합니다. 과거 수익률과 기대수익, 확률 추정치는 예시일 뿐이며, 미래 성과를 보장하지 않습니다.',
        'footer_legal_copy' => 'EquiLoomPRO, EquiLoomPRO Advisers, EquiLoomPRO Brokerage는 EquiLoomPRO Corporation의 완전 자회사입니다. <br><br> © <span class="currentYear"></span> EquiLoomPRO Corporation. 판권소유.',

        // About -----------------------------------------------
        'about_title' => '회사 소개',
        'about_text' => '<span class="brand-name">EquiLoomPRO</span>는 숙련된 투자자와 AI 전문가로 이루어진 팀으로, 정밀하고 빠른 최고 수준의 투자 플랫폼을 만듭니다.',
        'about_content_title' => '투자의 미래를 새롭게 그리는, 다양한 배경의 글로벌 팀.',
        'about_content_text_1' => '우리는 투자 전문성과 최첨단 인공지능을 결합해 정확도·속도·수익성을 모두 갖춘 투자 경험을 제공합니다.',
        'about_content_text_2' => '글로벌 팀의 다양한 관점으로 최신 AI·금융 트렌드를 지속 반영합니다. 사람의 전문성과 기계 지능의 시너지가 변화를 만듭니다.',
        'about_content_img_alt' => 'EquiLoomPRO 팀',
        'period' => [
            [
                'date' => '<script>document.write(new Date().getFullYear() - 3)</script>년 4월',
                'title' => '비전의 탄생',
                'description' => '인공지능으로 투자를 혁신하겠다는 목표로 EquiLoomPRO가 설립되었습니다.',
            ],
            [
                'date' => '<script>document.write(new Date().getFullYear() - 3)</script>년 7월',
                'title' => '성장과 개발',
                'description' => '플랫폼 개발과 팀 확장을 위해 ₩3,000만 상당의 초기 자금을 유치했습니다.',
            ],
            [
                'date' => '<script>document.write(new Date().getFullYear() - 3)</script>년 11월',
                'title' => '베타 테스트',
                'description' => '베타 버전을 공개하여 사용자 피드백을 수집하고 기술을 고도화했습니다.',
            ],
            [
                'date' => '<script>document.write(new Date().getFullYear() - 2)</script>년 6월',
                'title' => '글로벌 론칭',
                'description' => '전 세계 사용자에게 고급 투자 기술을 제공하는 글로벌 데뷔를 이루었습니다.',
            ],
        ],
        'investment_title' => '당신의 투자 방식을 바꾸세요',
        'investment_text' => 'EquiLoomPRO의 AI와 데이터 분석으로 시장을 정밀하게 탐색하세요.',
        'investment_btn' => '시작하기',

        // Contact
        'contact_title' => '문의하기',
        'contact_text' => '가이드가 필요하신가요? 질문을 보내주세요. 전문팀이 자신 있는 전략적 결정을 도와드립니다.',
        'contact_form_enable_js' => '양식을 작성하려면 브라우저에서 JavaScript를 활성화하세요.',
        'contact_label_name' => '이름',
        'contact_label_email' => '이메일',
        'contact_label_message' => '메시지',
        'contact_submit' => '제출',
        'contact_form_agreement' => ' * 버튼을 클릭하면 <a href="/kr/privacy" class="form-link">개인정보처리방침</a>과 <a href="/kr/terms" class="form-link">이용약관</a>에 동의합니다.',
        'contact_form_success' => '성공적으로 접수되었습니다!',

        // Privacy Policy --------------------------------------
        'privacy_title' => '개인정보처리방침',
        'privacy_updated' => '<b>최종 업데이트:</b> <script>document.write(new Date().getFullYear() - 1)</script>년 7월',

        'privacy_1_title' => '1. 소개',
        'privacy_1_text' => '
<p>EquiLoomPRO("당사")는 서비스("서비스") 및 웹사이트 <a href="/kr/">EquiLoomPRO</a>("웹사이트") 이용 시 개인정보 처리 방식을 안내합니다.</p>
<p>웹사이트에는 제3자 사이트 링크가 포함될 수 있습니다. 각 사이트의 방침을 확인해 주세요.</p>
<p>당사는 수집된 개인정보를 기밀로 취급하며, 무단 접근·분실·유출을 방지하기 위한 적절한 보호조치를 적용합니다.</p>
<p>웹사이트 이용 중 제공되는 이름, 이메일, 전화번호 등은 본인 확인, 지원 제공, 계약 이행, 동의하신 범위의 알림 등에 활용됩니다. 알림 수신은 언제든 설정에서 변경하거나 거부할 수 있습니다.</p>
',

        'privacy_2_title' => '2. 수집 및 이용',
        'privacy_2_1_title' => '2.1. 일반',
        'privacy_2_1_text' => '
<p>방문자, 사용자, 파트너의 정보를 처리합니다. 처리되는 개인정보에는 IP, 성명, 연락처, 관계 정보 등이 포함될 수 있습니다.</p>
',

        'privacy_2_2_title' => '2.2. 수집 방법',
        'privacy_2_2_text' => '
<p>웹사이트에 접속함으로써 쿠키, IP, 양식 등을 통한 수집에 동의하게 됩니다. 동의하지 않으시면 이용을 중단해 주세요.</p>
',

        'privacy_2_3_title' => '2.3. 목적 및 법적 근거',
        'privacy_2_3_text' => '
<p>서비스 개선, 개인화, 지원 제공, 법적 의무 준수 등을 위해 개인정보를 처리합니다. 주요 목적 및 근거는 다음과 같습니다.</p>
<table>
    <tbody>
        <tr><td>계정 등록</td><td>동의; 계약 이행</td></tr>
        <tr><td>서비스 제공</td><td>계약 이행</td></tr>
        <tr><td>문의 대응</td><td>정당한 이익</td></tr>
        <tr><td>마케팅</td><td>동의</td></tr>
        <tr><td>서비스 개선</td><td>정당한 이익</td></tr>
    </tbody>
</table>
',

        'privacy_2_4_title' => '2.4. 제3자 제공',
        'privacy_2_4_text' => '
<p>신뢰할 수 있는 공급업체 및 파트너와 정보를 공유할 수 있습니다. 한국 관련 개인정보 보호 법령을 준수하여 처리 및 이전이 이루어지도록 관리합니다.</p>
',

        'privacy_3_title' => '3. 파트너 데이터',
        'privacy_3_text' => '
<p>파트너 데이터는 동의 또는 정당한 이익에 근거하여 처리되며, 안전하게 관리됩니다.</p>
',

        'privacy_4_title' => '4. 보안',
        'privacy_4_text' => '
<p>당사는 개인정보 보호를 위해 기술적·관리적 조치를 적용합니다. 제3자 역시 동등한 수준의 보안을 준수하도록 계약상 의무를 집행합니다. 다만 어떤 시스템도 완전한 안전을 보장할 수 없음을 이해합니다.</p>
',

        'privacy_5_title' => '5. 쿠키',
        'privacy_5_text' => '
<p><a href="/kr/cookie">쿠키 정책</a>에서 쿠키 및 추적 기술에 대해 안내합니다.</p>
',

        'privacy_6_title' => '6. 외부 링크',
        'privacy_6_text' => '
<p>외부 사이트 링크가 포함될 수 있으며, 해당 사이트의 개인정보 처리에 대해서는 책임지지 않습니다.</p>
',

        'privacy_7_title' => '7. 보관 기간',
        'privacy_7_text' => '
<p>목적 달성에 필요한 기간 동안만 보관합니다. 계정 해지 시 관련 법령에 따라 삭제합니다.</p>
',

        'privacy_8_title' => '8. 이용자 권리',
        'privacy_8_text' => '
<p>열람, 정정, 삭제, 처리 정지, 이동권, 처리 반대, 동의 철회 등의 권리가 있습니다. 연락해 주시면 신속히 조치합니다.</p>
',

        'privacy_9_title' => '9. 마케팅',
        'privacy_9_text' => '
<p>마케팅 활용은 동의하신 경우에만 이루어지며, 언제든 철회할 수 있습니다.</p>
',

        'privacy_10_title' => '10. 정책 동의',
        'privacy_10_text' => '
<p>웹사이트 또는 서비스를 이용하면 본 정책에 동의한 것으로 간주됩니다. 변경 시 공지하며, 계속 이용하면 변경에 동의한 것으로 봅니다.</p>
',

        'privacy_11_title' => '11. 법적 공개',
        'privacy_11_text' => '
<p>법령에 따른 요구 또는 권리 보호를 위해 필요한 경우 개인정보를 공개할 수 있습니다.</p>
',

        'privacy_12_title' => '12. 연락처',
        'privacy_12_text' => '
<p>개인정보 관련 문의: <a href="mailto:support@zevriocapiture.org">support@zevriocapiture.org</a>.</p>
',

        // Terms of Use -----------------------------------------------
        'terms_title' => '이용약관',
        'terms_updated' => '<b>최종 업데이트:</b> <script>document.write(new Date().getFullYear() - 1)</script>년 7월',

        'terms_1_title' => '1. 소개',
        'terms_1_text' => '
<p>EquiLoomPRO("당사")의 웹사이트("웹사이트")와 서비스("서비스")를 이용하면 본 약관과 <a href="/kr/privacy" class="legal-link">개인정보처리방침</a>에 동의하는 것입니다. 문의: <a href="mailto:support@zevriocapiture.org">support@zevriocapiture.org</a>.</p>
<p>약관은 사전 통지 없이 변경될 수 있으며, 계속 이용 시 변경에 동의한 것으로 간주됩니다.</p>
',

        'terms_2_title' => '2. 비(非)투자자문',
        'terms_2_text' => '
<p>웹사이트 정보는 일반적 참고용이며, 개인별 재무 상황을 반영한 투자·세무·법률 자문이 아닙니다. 투자 전 독립된 전문가의 자문을 받으세요.</p>
',

        'terms_3_title' => '3. 서비스',
        'terms_3_text' => '
<p>일부 서비스는 제3자에 의해 제공됩니다. 외부 링크·상품은 당사의 보증이나 추천을 의미하지 않습니다.</p>
',

        'terms_4_title' => '4. 범위 및 변경',
        'terms_4_text' => '
<p>본 약관은 사용자와 당사 간의 전체 합의입니다. 당사는 웹사이트 기능을 수정·중단할 수 있습니다.</p>
',

        'terms_5_title' => '5. 이용 자격',
        'terms_5_text' => '
<p>만 18세 이상으로 법적 계약 체결 능력이 있는 개인만 이용할 수 있습니다.</p>
',

        'terms_6_title' => '6. 서비스 설명',
        'terms_6_text' => '
<p><b>구독형 서비스:</b> 등록 후 무료/유료 콘텐츠에 접근할 수 있습니다. 이는 맞춤 자문이 아니며 정확성을 보장하지 않습니다.</p>
<p><b>제3자 서비스:</b> 제3자 제공 상품/서비스에는 해당 제공자의 약관이 적용됩니다.</p>
<p><b>일반:</b> 등록 정보는 정확해야 하며, 부정확·사기성 정보는 거부될 수 있습니다.</p>
',

        'terms_7_title' => '7. 권리',
        'terms_7_text' => '
<p>웹사이트의 콘텐츠·코드·상표는 당사 또는 라이선스 보유자에 속합니다. 무단 복제·배포·스크래핑을 금지합니다.</p>
',

        'terms_8_title' => '8. 비밀정보',
        'terms_8_text' => '
<p>비밀정보는 관계 종료 후 1년간 보호됩니다(공개 정보 또는 제한 없이 제공된 정보 제외).</p>
',

        'terms_9_title' => '9. 링크 및 프레이밍',
        'terms_9_text' => '
<p>사전 허가 없이 링크·프레임·미러링을 할 수 없습니다. 위반 시 책임이 발생할 수 있습니다.</p>
',

        'terms_10_title' => '10. 보증 부인',
        'terms_10_text' => '
<p>서비스 및 콘텐츠는 "있는 그대로" 제공됩니다. 오류·중단·접근 불가에 대해 보증하지 않습니다.</p>
',

        'terms_11_title' => '11. 책임 제한',
        'terms_11_text' => '
<p>관련 법령이 허용하는 범위에서 간접손해 및 이익 손실에 대해 책임지지 않습니다. 총 책임 한도는 ₩200,000을 초과하지 않습니다.</p>
',

        'terms_12_title' => '12. 면책',
        'terms_12_text' => '
<p>사용으로부터 발생하는 청구로부터 당사와 파트너를 면책·보호하는 데 동의합니다.</p>
',

        'terms_13_title' => '13. 제3자 웹사이트',
        'terms_13_text' => '
<p>외부 웹사이트의 콘텐츠·정책·보안에 대해서는 책임지지 않습니다.</p>
',

        'terms_14_title' => '14. 데이터 보호',
        'terms_14_text' => '
<p>개인정보는 대한민국 관련 법령에 따라 처리됩니다. 자세한 내용은 <a href="/kr/privacy" class="legal-link">개인정보처리방침</a>을 참고하세요.</p>
',

        'terms_15_title' => '15. 준거법 및 분쟁 해결',
        'terms_15_text' => '
<p>본 약관은 대한민국 법률의 적용을 받습니다. 분쟁은 서울에서 한국어로 중재를 통해 해결합니다.</p>
',

        'terms_16_title' => '16. 문의',
        'terms_16_text' => '
<p>약관 관련 문의: <a href="mailto:support@zevriocapiture.org">support@zevriocapiture.org</a> — <a href="/kr/terms">/kr/terms</a>.</p>
',
    ],
    'my' => [
        'language_iso' => 'en',
        'country_name' => 'Malaysia',
        'locale' => 'en_MY',
        'locale_lang' => 'en-MY',
        'language_name' => 'English',
        'city' => 'Kuala Lumpur',
        'country_code' => 'MY',
        'geo_position' => '3.1390, 101.6869',
        'jsonld_organization_name' => 'EquiLoomPRO',
        'jsonld_organization_review_rating' => '4.96',
        'jsonld_organization_review_author' => 'EquiLoomPRO User',
        'jsonld_software_categories' => 'Cryptocurrency Investment Tool',
        'jsonld_software_price' => '1100',
        'jsonld_software_price_currency' => 'MYR',
        'brand_name_api' => 'EquLum App AI',
        'home' => 'Home',
        'about' => 'About Us',
        'contact' => 'Contact Us',
        'privacy' => 'Privacy Policy',
        'terms' => 'Terms and Conditions',
        'title' => 'EquiLoomPRO — Automated Investing & Cash Management',
        'meta_description' => 'Make wealth your own with EquiLoomPRO. AI-assisted portfolios, automated savings, and tax-efficient features to help you invest confidently and grow your money.',
        'meta_keywords' => 'EquiLoomPRO, automated investing, AI investing, portfolio management, cash account, savings, tax efficient, Malaysia, Kuala Lumpur',
        'og_title' => 'EquiLoomPRO — AI-Powered Investing Platform',
        'og_description' => 'Automated portfolios, smart cash, and effortless investing. Start with EquiLoomPRO and grow your wealth with confidence.',
        'og_image' => '/assets/images/share.webp',
        'twitter_title' => 'EquiLoomPRO — Automated Investing',
        'twitter_description' => 'AI-assisted portfolios and automated savings to help you grow wealth with confidence.',
        'about_desc_content' => 'Meet EquiLoomPRO — a Kuala Lumpur-based team of investors and AI experts building a high-precision, high-speed investment platform that helps you grow wealth confidently.',
        'about_keywords' => 'about EquiLoomPRO, company, AI investing team, investment platform, Kuala Lumpur',
        'contact_desc_content' => 'Questions or guidance? Contact EquiLoomPRO — our experts are ready to help you make confident, strategic investment decisions.',
        'contact_keywords' => 'contact EquiLoomPRO, support, help, investing questions, Kuala Lumpur',
        'terms_desc_content' => 'Read the Terms and Conditions for using EquiLoomPRO’s website and services, including eligibility, limitations, and legal notices.',
        'terms_keywords' => 'terms of use, terms and conditions, EquiLoomPRO, legal, Malaysia',
        'privacy_desc_content' => 'How EquiLoomPRO collects, uses, and protects your personal data, your rights, and our commitment to privacy and security.',
        'privacy_keywords' => 'privacy policy, data protection, PDPA, personal data, EquiLoomPRO',
        'jsonld_organization_review_body' => 'EquiLoomPRO delivers an AI-assisted investing platform that combines automated portfolios, smart cash management, and tax-efficient features to help clients in Kuala Lumpur grow wealth with confidence.',
        'jsonld_faq_1_question' => 'What is EquiLoomPRO?',
        'jsonld_faq_1_answer' => 'EquiLoomPRO is an AI-assisted investing platform that helps you build and automate diversified portfolios, optimize savings, and invest with confidence.',
        'jsonld_faq_2_question' => 'How does EquiLoomPRO help me invest?',
        'jsonld_faq_2_answer' => 'We offer customizable or automated portfolios, smart cash tools, and features designed to improve after-tax outcomes — so you can invest effortlessly while staying in control.',
        'jsonld_faq_3_question' => 'Is EquiLoomPRO available in Malaysia?',
        'jsonld_faq_3_answer' => 'Yes. EquiLoomPRO supports clients in Kuala Lumpur and across Malaysia, with experiences tailored to your locale and currency.',
        'jsonld_faq_4_question' => 'Do I need to use automation or AI?',
        'jsonld_faq_4_answer' => 'Automation is optional. You can let the platform handle routine tasks or build and adjust your own portfolio whenever you like.',
        'jsonld_faq_5_question' => 'How do I get started?',
        'jsonld_faq_5_answer' => 'Create your profile, choose or customize a portfolio, and fund your account. There are no hidden sign-up fees; partner services may have their own requirements.',
        'jsonld_faq_6_question' => 'How does EquiLoomPRO protect my data?',
        'jsonld_faq_6_answer' => 'We apply robust technical and organizational security measures and follow applicable Malaysian data protection standards to safeguard your information.',
        'header_logo_alt' => 'EquiLoomPRO Logo',
        'header_logo_text' => 'EquiLoomPRO',
        'header_burger_alt' => 'Menu',
        'header_cross_alt' => 'Close',
        'hero_form_title' => 'Register now',
        'hero_form_notice' => '* By clicking the button you agree and accept the <a href="/privacy" class="form-link">Privacy Policy</a> and <a href="/terms" class="form-link">Terms & Conditions</a>.',
        'hero_title' => 'Make wealth your own.',
        'hero_subtitle' => 'Personalized, Automated, Effortless Investing and Savings.',
        'hero_stat_nerdwallet' => "Best Robo-advisor, 2019<sup class=\"sup\">1</sup><br>Best Cash Management App, 2020<sup class=\"sup\">1</sup>",
        'hero_stat_investopedia' => "Best Robo-advisor, 2020<sup class=\"sup\">1</sup>",
        'hero_stat_clients' => 'Trusted clients',
        'hero_stat_funds' => 'In client funds',
        'hero_stat_appstore' => 'Apple App Store <sup class=\"sup\">2</sup>',
        'hero_stat_playstore' => 'Google Play Store <sup class=\"sup\">2</sup>',
        'investition_title' => 'Investing isn’t easy. We just make it feel that way.',
        'investition_text' => 'Let us customize a portfolio just for you or build it yourself, and our powerful automation will make the most of your investments, optimizing your performance and helping lower your taxes.',
        'investition_btn_start' => 'Start investing',
        'investition_btn_more' => 'Learn more',
        'investition_notification_app' => 'EquiLoomPRO',
        'investition_notification_time' => 'now',
        'investition_notification_1' => 'We saved you <span>RM 275</span> on your taxes.',
        'investition_notification_2' => 'We automatically invested your <span>RM 1100</span> deposit.',
        'cash_title' => 'Everyday cash, designed to build long-term wealth.',
        'cash_text' => 'Our Cash account, offered with regulated banking partners, lets you automate your savings, pay bills, withdraw from thousands of ATMs, and invest your extra cash in seconds to keep building your future.',
        'cash_btn_start' => 'Start saving',
        'cash_btn_more' => 'Learn more',
        'cash_img_phone_alt' => 'Phone',
        'cash_img_card_alt' => 'Card',
        'saving_title' => 'Saving and investing. All while you’re relaxing.',
        'saving_text' => 'Tell us what you’re saving for, and we’ll automatically set aside extra cash to hit your goals. And since we connect with all your accounts, you only need one app to watch your wealth grow.',
        'saving_img_alt' => 'Saving',
        'testimonial_title' => 'TESTIMONIAL',
        'testimonial_1_quote' => 'It\'s the single <strong>best</strong> resource for both investing, managing retirement and seeing my entire financial picture.',
        'testimonial_1_author' => 'Oliver S',
        'testimonial_2_quote' => '<strong>EquiLoomPRO</strong> is the first thing in my life that actually motivated me to save money.',
        'testimonial_2_author' => 'Amelia R',
        'testimonial_3_quote' => 'It’s <strong>automatic</strong>, and I’m lazy.',
        'testimonial_3_author' => 'George L',
        'trust_title' => 'Over <strong>120,000</strong> people across Malaysia are already using EquiLoomPRO to earn more and worry less',
        'trust_btn' => 'Get started',
        'trust_img_alt' => 'Open window with plant',
        'trust_subtitle' => 'AS FEATURED IN',
        'trust_logo_wsj_alt' => 'WSJ',
        'trust_logo_bloomberg_alt' => 'Bloomberg',
        'trust_logo_nyt_alt' => 'The New York Times',
        'trust_logo_reuters_alt' => 'Reuters',
        'trust_logo_cnbc_alt' => 'CNBC',
        'footer_logo_alt' => 'EquiLoomPRO Logo',
        'footer_logo_text' => 'EquiLoomPRO',
        'footer_legal_note_1' => 'Testimonials were given by clients of both EquiLoomPRO Advisers and EquiLoomPRO Brokerage. There is no guarantee that clients will have similar experiences or success.',
        'footer_legal_note_2' => 'Nerdwallet and Investopedia (the “Endorsers”) receive cash compensation for referring potential clients to EquiLoomPRO Advisers, LLC (“EquiLoomPRO Advisers”) via advertisements placed on their respective websites. The Endorsers and EquiLoomPRO Advisers are not associated with one another and have no formal relationship outside of this arrangement. Nerdwallet’s opinions are their own. Their ratings are determined by their editorial team and rely on information they consider reliable, but cannot guarantee. Compensation does not influence product placement or rating. Consider a provider’s fees, features, and methodology before making a decision.',
        'footer_legal_note_3' => 'Apple App Store and Google Play Store ratings are based on user ratings from February 2014 (Apple) and December 2015 (Google) through June <span class="currentYear"></span>. Ratings compiled by Apple, Inc., and Google, Inc., who receive compensation for hosting our app.',
        'footer_legal_note_4' => 'By using this website, you understand the information being presented is provided for informational purposes only and agree to our <a href="/terms" class="legal-link">Terms of Use</a> and <a href="/privacy" class="legal-link">Privacy Policy</a>.',
        'footer_legal_note_5' => 'EquiLoomPRO Advisers relies on information from various sources believed to be reliable, including clients and third parties, but cannot guarantee the accuracy or completeness of that information. Nothing herein should be construed as an offer, recommendation, or solicitation to buy or sell any security. Additionally, EquiLoomPRO Advisers or its affiliates do not provide tax advice and investors are encouraged to consult with their personal tax advisors.',
        'footer_legal_note_6' => 'We partner with regulated banking and payment providers in Malaysia to bring you cash and card features. Banking services are provided by our third-party partners subject to identity verification and applicable local regulations.',
        'footer_legal_note_7' => 'Cash account services are offered via regulated brokers and banking partners and are separate from investing accounts. Investment management and advisory services are provided by EquiLoomPRO Advisers or affiliated entities. Products and services vary by jurisdiction.',
        'footer_legal_note_8' => 'The effectiveness of the Tax-Loss Harvesting strategy to reduce the tax liability of the client will depend on the client’s entire tax and investment profile, including purchases and dispositions in accounts outside of EquiLoomPRO and type of investments (e.g., taxable or nontaxable) or holding period (e.g., short-term or long-term). Tax loss harvesting may generate a higher number of trades due to attempts to capture losses. There is a chance that trading attributed to tax loss harvesting may create capital gains and wash sales and could be subject to higher transaction costs and market impacts. In addition, tax loss harvesting strategies may produce losses, which may not be offset by sufficient gains in the account and may be limited by applicable tax rules. Utilisation of harvested losses depends on recognition of capital gains in the same or a future tax period and may be subject to limitations under applicable tax laws. Losses harvested through the strategy that are not utilised in the tax period when recognised may generally be carried forward to offset future capital gains, if any.',
        'footer_legal_note_9' => 'All investing involves risk, including the possible loss of money you invest, and past performance does not guarantee future performance. Historical returns, expected returns, and probability projections are provided for informational and illustrative purposes, and may not reflect actual future performance.',
        'footer_legal_copy' => 'EquiLoomPRO, EquiLoomPRO Advisers and EquiLoomPRO Brokerage are wholly owned subsidiaries of EquiLoomPRO Corporation. <br><br> © <span class="currentYear"></span> EquiLoomPRO Corporation. All rights reserved.',
        'about_title' => 'About',
        'about_text' => 'At <span class="brand-name">EquiLoomPRO</span>, we’re a team of experienced investors and AI experts united to build a top-tier investment platform, renowned for its precision and rapid performance.',
        'about_content_title' => 'Our core is a diverse, passionate global team united by a mission to reshape the future of investing.',
        'about_content_text_1' => 'We’re dedicated to transforming the investment landscape by leveraging the power of artificial intelligence. By combining expert investor insights with cutting-edge technology, we deliver an investment platform that excels in accuracy, speed, and profitability.',
        'about_content_text_2' => 'Our global team brings diverse perspectives, continuously innovating to incorporate the latest AI and financial trends into our platform. We’re driven by the synergy of human expertise and machine intelligence to provide a transformative investment experience.',
        'about_content_img_alt' => 'About EquiLoomPRO team',
        'period' => [
            [
                'date' => 'April <script>document.write(new Date().getFullYear() - 3)</script>',
                'title' => 'Birth of a Vision',
                'description' => 'EquiLoomPRO was established with a bold vision to revolutionise investing through artificial intelligence.',
            ],
            [
                'date' => 'July <script>document.write(new Date().getFullYear() - 3)</script>',
                'title' => 'Growth and Development',
                'description' => 'We raised RM 13 million in funding, driving platform development and team expansion.',
            ],
            [
                'date' => 'November <script>document.write(new Date().getFullYear() - 3)</script>',
                'title' => 'Beta Testing Phase',
                'description' => 'The beta version of EquiLoomPRO was launched, gathering user feedback and refining our technology.',
            ],
            [
                'date' => 'June <script>document.write(new Date().getFullYear() - 2)</script>',
                'title' => 'Global Launch',
                'description' => 'EquiLoomPRO debuted globally, bringing our advanced investment technology to users worldwide, marking a key milestone in revolutionising the investment sector.',
            ],
        ],
        'investment_title' => 'Revolutionise Your Investment Approach',
        'investment_text' => 'Experience the future of asset investing with EquiLoomPRO. Our innovative blend of AI and comprehensive data analytics delivers exceptional investment capabilities, enabling investors to navigate market challenges with unmatched precision.',
        'investment_btn' => 'Get started',
        'contact_title' => 'Contact us',
        'contact_text' => 'Reach out to us for guidance or answers to your questions, and our expert team will help you make confident, strategic investment decisions.',
        'contact_form_enable_js' => 'Please enable JavaScript in your browser to complete this form.',
        'contact_label_name' => 'Name',
        'contact_label_email' => 'Email',
        'contact_label_message' => 'Comment or Message',
        'contact_submit' => 'Submit',
        'contact_form_agreement' => ' * By clicking the button you agree and accept the <a href="/privacy" class="form-link">Privacy Policy</a> and <a href="/terms" class="form-link">Terms &amp; Conditions</a>.',
        'contact_form_success' => 'Form submitted successfully!',
        'privacy_title' => 'Privacy Policy',
        'privacy_updated' => '<b>Last updated:</b> July <script>document.write(new Date().getFullYear() - 1)</script>',
        'privacy_1_title' => '1. Introduction',
        'privacy_1_text' => '
<p>This Privacy Policy of EquiLoomPRO ("we," "us," or "our") details how we manage personal data when you use our services ("Services") and website <a href="/">EquiLoomPRO</a> ("Website"). Safeguarding your privacy and data is our priority.</p>
<p>Our Services and Website may link to third-party sites. We are not responsible for their privacy practices, so please review their policies before engaging.</p>
<p>We treat all collected data as confidential, employing robust technical and organizational measures to protect Personal Data from unauthorized access, loss, or disclosure.</p>
<p>When using our Website, you may provide personal information (e.g., name, email, phone number). This data may be used to verify identity, offer support, fulfill obligations, or send updates with your consent. You can manage notification preferences or opt out of communications.</p>
',
        'privacy_2_title' => '2. Data Collection and Use',
        'privacy_2_1_title' => '2.1. General',
        'privacy_2_1_text' => '
<p>We collect data from Website visitors ("Visitors"), users ("Users"), and partners ("Partners"). Personal Data includes IP addresses, names, contact details, and relationship information, as per data protection laws.</p>
',
        'privacy_2_2_title' => '2.2. Collection',
        'privacy_2_2_text' => '
<p>By accessing our Website, you consent to data collection (e.g., via cookies, IP addresses, or forms). If you disagree, please refrain from using the Website.</p>
',
        'privacy_2_3_title' => '2.3. Purpose',
        'privacy_2_3_text' => '
<p>We process Personal Data to improve our Services, personalize experiences, provide support, and comply with legal obligations. Purposes and legal bases include:</p>
<table>
    <tbody>
        <tr><td>Account registration</td><td>Consent; Contract performance</td></tr>
        <tr><td>Service provision</td><td>Contract performance</td></tr>
        <tr><td>Support and queries</td><td>Legitimate interests</td></tr>
        <tr><td>Marketing</td><td>Consent</td></tr>
        <tr><td>Service improvement</td><td>Legitimate interests</td></tr>
    </tbody>
</table>
',
        'privacy_2_4_title' => '2.4. Data Sharing',
        'privacy_2_4_text' => '
<p>We may share data with trusted vendors and partners, ensuring PDPA compliance for Users in Kuala Lumpur and Malaysia.</p>
',
        'privacy_3_title' => '3. Partners',
        'privacy_3_text' => '
<p>We process Partner data with consent or for legitimate interests, ensuring secure handling and compliance with data protection laws.</p>
',
        'privacy_4_title' => '4. Security',
        'privacy_4_text' => '
<p>We implement technical and organizational safeguards to protect Personal Data. Third parties we share data with are contractually obligated to maintain equivalent standards. While we strive for security, no system is fully immune to breaches, and Users accept this risk.</p>
',
        'privacy_5_title' => '5. Cookies',
        'privacy_5_text' => '
<p>See our <a href="/cookie">Cookie Policy</a> for details on cookies and tracking technologies.</p>
',
        'privacy_6_title' => '6. Third-Party Links',
        'privacy_6_text' => '
<p>Our Website may link to external sites. We are not responsible for their privacy practices, so review their policies before sharing data.</p>
',
        'privacy_7_title' => '7. Data Retention',
        'privacy_7_text' => '
<p>We retain Personal Data only as long as necessary. Upon account termination, data is deleted in accordance with applicable laws.</p>
',
        'privacy_8_title' => '8. Your Rights',
        'privacy_8_text' => '
<p>You have rights to access, rectify, erase, restrict, or port your Personal Data, object to processing, or withdraw consent. Contact us to exercise these rights.</p>
',
        'privacy_9_title' => '9. Marketing',
        'privacy_9_text' => '
<p>We may use your data for marketing with your consent. You can withdraw consent by emailing us.</p>
',
        'privacy_10_title' => '10. Policy Acceptance',
        'privacy_10_text' => '
<p>Using our Website or Services implies agreement with this Policy. We may update it, and continued use signifies acceptance.</p>
',
        'privacy_11_title' => '11. Legal Disclosure',
        'privacy_11_text' => '
<p>We may disclose Personal Data if legally required or to protect our rights.</p>
',
        'privacy_12_title' => '12. Contact',
        'privacy_12_text' => '
<p>For privacy concerns, contact our Data Protection Officer at <a href="mailto:support@zevriocapiture.org">support@zevriocapiture.org</a>.</p>
',
        'terms_title' => 'Terms of Use',
        'terms_updated' => '<b>Last updated:</b> July <script>document.write(new Date().getFullYear() - 1)</script>',
        'terms_1_title' => '1. Introduction',
        'terms_1_text' => '
<p>Welcome to the EquiLoomPRO website ("Website"), operated by EquiLoomPRO ("we," "us," "our"). By using our Website or services ("Services"), you agree to these Terms and Conditions ("Terms") and our Privacy Policy. Contact us at <a href="mailto:support@zevriocapiture.org">support@zevriocapiture.org</a>.</p>
<p>These Terms may be updated without notice. Continued use of the Website or Services implies acceptance of changes. If you disagree, you are not authorized to use the Website or Services.</p>
',
        'terms_2_title' => '2. No Investment Advice',
        'terms_2_text' => '
<p>Our Website does not offer personal financial or investment advice. Information provided is general and does not account for your specific objectives, financial situation, or needs. Consult an independent financial adviser before making investment decisions.</p>
',
        'terms_3_title' => '3. Services',
        'terms_3_text' => '
<p>Not all Services are provided by us. Third-party services, websites, or products linked on our Website are not endorsed by us. We are not liable for third-party content or services.</p>
',
        'terms_4_title' => '4. Scope and Modification',
        'terms_4_text' => '
<p>These Terms constitute the entire agreement between you and us, superseding prior agreements. We may modify Terms at our discretion, and continued use signifies acceptance.</p>
',
        'terms_5_title' => '5. Eligibility',
        'terms_5_text' => '
<p>Services are for individuals aged 18+ who can enter legally binding contracts. Minors are not permitted to use the Website or Services.</p>
',
        'terms_6_title' => '6. Description of Services',
        'terms_6_text' => '
<p><b>Subscription Services:</b> Upon registration, you may access Subscription Services (free or paid), including content from us or third-party providers. This is not investment advice, and we are not liable for its accuracy.</p>
<p><b>Third-Party Services:</b> Products or services from third parties may be offered. We are not responsible for their accuracy or your inability to access them.</p>
<p><b>General:</b> Accurate registration data is required. We may reject incomplete or fraudulent data and are not liable for service interruptions.</p>
',
        'terms_7_title' => '7. Proprietary Rights',
        'terms_7_text' => '
<p>The Website and its content are protected by copyrights, trademarks, and other rights. Unauthorized reproduction, redistribution, or scraping is prohibited.</p>
',
        'terms_8_title' => '8. Confidential Information',
        'terms_8_text' => '
<p>Confidential information is protected for one year post-termination, excluding publicly available data or information received without restrictions.</p>
',
        'terms_9_title' => '9. Hyperlinking and Framing',
        'terms_9_text' => '
<p>Hyperlinking, framing, or referencing our Website without permission is prohibited. You are liable for damages caused by such actions.</p>
',
        'terms_10_title' => '10. Disclaimer',
        'terms_10_text' => '
<p>Services and content are provided "as-is" without warranties. We are not liable for errors, interruptions, or inability to use the Website or Services.</p>
',
        'terms_11_title' => '11. Limitation of Liability',
        'terms_11_text' => '
<p>We are not liable for any damages, including loss of profits or data. Our maximum liability is RM 1100, where permitted by law.</p>
',
        'terms_12_title' => '12. Indemnification',
        'terms_12_text' => '
<p>You agree to indemnify us against claims arising from your use of the Website, breach of Terms, or violation of rights.</p>
',
        'terms_13_title' => '13. Third-Party Websites',
        'terms_13_text' => '
<p>We are not responsible for third-party websites or resources linked on our Website, nor their content or policies.</p>
',
        'terms_14_title' => '14. Data Protection',
        'terms_14_text' => '
<p>We comply with PDPA and Malaysian data protection laws. We maintain security measures, obtain consents, and assist with data subject rights requests. We notify of data breaches promptly.</p>
',
        'terms_15_title' => '15. Governing Law',
        'terms_15_text' => '
<p>These Terms are governed by Malaysian law. Disputes will be resolved through arbitration in Kuala Lumpur under applicable rules.</p>
',
        'terms_16_title' => '16. Contact',
        'terms_16_text' => '
<p>For questions, contact us at <a href="mailto:support@zevriocapiture.org">support@zevriocapiture.org</a>.</p>
',
    ],

    'pa' => [
        'language_iso' => 'es',
        'country_name' => 'Panamá',
        'locale' => 'es_PA',
        'locale_lang' => 'es-PA',
        'language_name' => 'Español',
        'city' => 'Ciudad de Panamá',
        'country_code' => 'PA',
        'geo_position' => '8.983333, -79.516667',
        'jsonld_organization_name' => 'EquiLoomPRO',
        'jsonld_organization_review_rating' => '4.96',
        'jsonld_organization_review_author' => 'Usuario de EquiLoomPRO',
        'jsonld_software_categories' => 'Herramienta de Inversión en Criptomonedas',
        // 190 USD ≈ igual en PAB (paridad 1:1)
        'jsonld_software_price' => '190',
        'jsonld_software_price_currency' => 'USD',
        'brand_name_api' => 'EquLum App AI',

        'home' => 'Inicio',
        'about' => 'Sobre Nosotros',
        'contact' => 'Contáctenos',
        'privacy' => 'Política de Privacidad',
        'terms' => 'Términos y Condiciones',

        // Home (index)
        'title' => 'EquiLoomPRO — Inversión Automática y Gestión de Efectivo en Panamá',
        'meta_description' => 'Haz tuya la riqueza con EquiLoomPRO. Portafolios asistidos por IA, ahorro automático y funciones fiscales eficientes para ayudarte a invertir con confianza en Panamá.',
        'meta_keywords' => 'EquiLoomPRO, inversión automática, IA, gestión de portafolios, cuenta de efectivo, ahorro, Panamá, Ciudad de Panamá',

        // Open Graph / Twitter
        'og_title' => 'EquiLoomPRO — Plataforma de Inversión con IA (Panamá)',
        'og_description' => 'Portafolios automatizados, gestión inteligente de efectivo e inversión sin esfuerzo. Comienza con EquiLoomPRO y haz crecer tu patrimonio en Panamá.',
        'og_image' => '/assets/images/share.webp',

        'twitter_title' => 'EquiLoomPRO — Inversión Automatizada en Panamá',
        'twitter_description' => 'Portafolios con IA y ahorro automático para ayudarte a crecer tu patrimonio con confianza en Panamá.',

        // About (short descriptors)
        'about_desc_content' => 'Conoce a EquiLoomPRO — un equipo en Ciudad de Panamá de inversionistas y expertos en IA construyendo una plataforma de inversión de alta precisión y velocidad.',
        'about_keywords' => 'sobre EquiLoomPRO, equipo de inversión IA, plataforma de inversión, Panamá',

        // Contact (short descriptors)
        'contact_desc_content' => '¿Preguntas o asesoría? Contáctanos — nuestro equipo en Panamá está listo para ayudarte a tomar decisiones estratégicas con confianza.',
        'contact_keywords' => 'contacto EquiLoomPRO, soporte, ayuda, inversión, Panamá',

        // Terms / Privacy
        'terms_desc_content' => 'Lee los Términos y Condiciones para usar el sitio web y servicios de EquiLoomPRO en Panamá.',
        'terms_keywords' => 'términos de uso, condiciones, EquiLoomPRO, Panamá',

        'privacy_desc_content' => 'Cómo EquiLoomPRO recopila, utiliza y protege tus datos personales en Panamá.',
        'privacy_keywords' => 'política de privacidad, protección de datos, EquiLoomPRO, Panamá',

        // JSON-LD review
        'jsonld_organization_review_body' => 'EquiLoomPRO ofrece una plataforma de inversión asistida por IA que combina portafolios automatizados, gestión de efectivo y funciones fiscales eficientes para ayudar a los clientes en Ciudad de Panamá a crecer su patrimonio con confianza.',

        // FAQ
        'jsonld_faq_1_question' => '¿Qué es EquiLoomPRO?',
        'jsonld_faq_1_answer' => 'EquiLoomPRO es una plataforma de inversión asistida por IA que te ayuda a crear y automatizar portafolios diversificados, optimizar ahorros e invertir con confianza.',

        'jsonld_faq_2_question' => '¿Cómo me ayuda EquiLoomPRO a invertir?',
        'jsonld_faq_2_answer' => 'Ofrecemos portafolios personalizables o automatizados, herramientas de efectivo inteligente y funciones para mejorar resultados después de impuestos.',

        'jsonld_faq_3_question' => '¿Está disponible EquiLoomPRO en Panamá?',
        'jsonld_faq_3_answer' => 'Sí. EquiLoomPRO atiende clientes en Ciudad de Panamá y en todo el país, con experiencias adaptadas a tu moneda (USD/PAB).',

        'jsonld_faq_4_question' => '¿Debo usar la automatización o la IA?',
        'jsonld_faq_4_answer' => 'La automatización es opcional. Puedes dejar que la plataforma maneje tareas rutinarias o ajustar tu portafolio cuando lo prefieras.',

        'jsonld_faq_5_question' => '¿Cómo empiezo?',
        'jsonld_faq_5_answer' => 'Crea tu perfil, elige o personaliza un portafolio y fondea tu cuenta en USD/PAB. No hay costos ocultos de registro; algunos servicios de socios pueden tener sus propios requisitos.',

        'jsonld_faq_6_question' => '¿Cómo protege EquiLoomPRO mis datos?',
        'jsonld_faq_6_answer' => 'Aplicamos medidas de seguridad técnicas y organizativas y seguimos estándares internacionales de protección de datos aplicables en Panamá.',

        // Header
        'header_logo_alt' => 'Logo de EquiLoomPRO',
        'header_logo_text' => 'EquiLoomPRO',
        'header_burger_alt' => 'Menú',
        'header_cross_alt' => 'Cerrar',

        // Hero
        'hero_form_title' => 'Regístrate ahora',
        'hero_form_notice' => '* Al hacer clic aceptas la <a href="/pa/privacy" class="form-link">Política de Privacidad</a> y los <a href="/pa/terms" class="form-link">Términos y Condiciones</a>.',
        'hero_title' => 'Haz tuya la riqueza.',
        'hero_subtitle' => 'Inversión y ahorro personalizados, automáticos y sin esfuerzo.',
        'hero_stat_nerdwallet' => "Mejor Robo-advisor, 2019<sup class=\"sup\">1</sup><br>Mejor App de Gestión de Efectivo, 2020<sup class=\"sup\">1</sup>",
        'hero_stat_investopedia' => "Mejor Robo-advisor, 2020<sup class=\"sup\">1</sup>",
        'hero_stat_clients' => 'Clientes de confianza',
        'hero_stat_funds' => 'Fondos gestionados',
        'hero_stat_appstore' => 'Apple App Store <sup class=\"sup\">2</sup>',
        'hero_stat_playstore' => 'Google Play Store <sup class=\"sup\">2</sup>',

        // Investition
        'investition_title' => 'Invertir no es fácil. Nosotros lo hacemos parecer así.',
        'investition_text' => 'Permítenos personalizar un portafolio para ti o créalo tú mismo, y nuestra automatización maximizará tu inversión, optimizando el rendimiento y ayudándote a pagar menos impuestos.',
        'investition_btn_start' => 'Comenzar a invertir',
        'investition_btn_more' => 'Saber más',
        'investition_notification_app' => 'EquiLoomPRO',
        'investition_notification_time' => 'ahora',
        'investition_notification_1' => 'Te ahorramos <span>$78</span> en impuestos.',
        'investition_notification_2' => 'Invertimos automáticamente tu depósito de <span>$250</span>.',

        // Cash
        'cash_title' => 'Efectivo diario, diseñado para construir riqueza a largo plazo en Panamá.',
        'cash_text' => 'Nuestra cuenta Cash, ofrecida con socios bancarios regulados en Panamá, te permite automatizar ahorros, pagar cuentas, retirar en cajeros y mover tu dinero a inversiones en segundos.',
        'cash_btn_start' => 'Comenzar a ahorrar',
        'cash_btn_more' => 'Saber más',
        'cash_img_phone_alt' => 'Teléfono',
        'cash_img_card_alt' => 'Tarjeta',

        // Saving
        'saving_title' => 'Ahorrando e invirtiendo. Todo mientras descansas.',
        'saving_text' => 'Dinos para qué ahorras y apartaremos dinero automáticamente para tus metas. Conectamos todas tus cuentas en una sola app.',
        'saving_img_alt' => 'Ahorro',

        // Testimonials (nombres locales)
        'testimonial_title' => 'TESTIMONIOS',
        'testimonial_1_quote' => 'Es el recurso <strong>más útil</strong> que he tenido para invertir y ver toda mi vida financiera.',
        'testimonial_1_author' => 'Juan M',
        'testimonial_2_quote' => '<strong>EquiLoomPRO</strong> fue lo primero que realmente me motivó a ahorrar dinero.',
        'testimonial_2_author' => 'María G',
        'testimonial_3_quote' => 'Es <strong>automático</strong>, y soy perezoso.',
        'testimonial_3_author' => 'Carlos R',

        // Trust
        'trust_title' => 'Más de <strong>120,000</strong> personas en Panamá ya usan EquiLoomPRO para ganar más y preocuparse menos',
        'trust_btn' => 'Comenzar ahora',
        'trust_img_alt' => 'Ventana abierta con planta',
        'trust_subtitle' => 'VISTO EN',
        'trust_logo_wsj_alt' => 'WSJ',
        'trust_logo_bloomberg_alt' => 'Bloomberg',
        'trust_logo_nyt_alt' => 'The New York Times',
        'trust_logo_reuters_alt' => 'Reuters',
        'trust_logo_cnbc_alt' => 'CNBC',

        // Footer section
        'footer_logo_alt' => 'Logo de EquiLoomPRO',
        'footer_logo_text' => 'EquiLoomPRO',
        'footer_legal_note_1' => 'Los testimonios fueron proporcionados por clientes de EquiLoomPRO Advisers y EquiLoomPRO Brokerage. No hay garantía de que otros clientes obtengan resultados similares.',
        'footer_legal_note_2' => 'Nerdwallet e Investopedia (los “Endosantes”) reciben compensación por referir clientes potenciales a EquiLoomPRO Advisers, LLC mediante anuncios en sus sitios web. Los Endosantes y EquiLoomPRO Advisers no están afiliados y no tienen una relación formal fuera de este acuerdo. Las opiniones de Nerdwallet son propias. Sus calificaciones se determinan por su equipo editorial y se basan en información que consideran fiable, pero no pueden garantizar. La compensación no influye en la colocación ni la calificación del producto. Considera tarifas, funciones y metodología antes de decidir.',
        'footer_legal_note_3' => 'Las calificaciones en Apple App Store y Google Play Store se basan en valoraciones de usuarios desde febrero de 2014 (Apple) y diciembre de 2015 (Google) hasta junio de <span class="currentYear"></span>. Calificaciones compiladas por Apple, Inc. y Google, Inc., quienes reciben compensación por alojar nuestra app.',
        'footer_legal_note_4' => 'Al usar este sitio aceptas que la información se presenta solo con fines informativos y estás de acuerdo con nuestros <a href="/pa/terms" class="legal-link">Términos de Uso</a> y <a href="/pa/privacy" class="legal-link">Política de Privacidad</a>.',
        'footer_legal_note_5' => 'EquiLoomPRO Advisers depende de diversas fuentes que se consideran fiables, incluidos clientes y terceros, pero no puede garantizar su exactitud o exhaustividad. Nada aquí debe interpretarse como oferta o recomendación para comprar o vender valores. EquiLoomPRO Advisers o sus afiliadas no proveen asesoría fiscal; consulta a tu asesor tributario personal.',
        'footer_legal_note_6' => 'Trabajamos con proveedores bancarios y de pagos regulados en Panamá para ofrecer funciones de efectivo y tarjeta. Los servicios bancarios son provistos por terceros, sujetos a verificación de identidad y a la normativa local aplicable.',
        'footer_legal_note_7' => 'Los servicios de cuenta de efectivo se ofrecen mediante corredores y socios bancarios regulados y son independientes de las cuentas de inversión. La gestión y asesoría de inversiones la presta EquiLoomPRO Advisers o entidades afiliadas. Los productos y servicios pueden variar según la jurisdicción.',
        'footer_legal_note_8' => 'La efectividad de la estrategia de “Tax-Loss Harvesting” para reducir tu carga fiscal depende de tu perfil tributario y de inversión en su conjunto, incluyendo actividad en cuentas fuera de EquiLoomPRO, tipos de inversión y periodos de tenencia. Puede aumentar el número de operaciones, generar ganancias de capital o “wash sales” y costos de transacción. Las pérdidas podrían no compensarse totalmente con ganancias y están sujetas a normas fiscales aplicables. El uso de pérdidas depende del reconocimiento de ganancias en el mismo u otro periodo fiscal y puede tener limitaciones legales.',
        'footer_legal_note_9' => 'Invertir implica riesgos, incluida la posible pérdida del capital invertido. Los rendimientos históricos y las proyecciones son informativos e ilustrativos y pueden no reflejar el desempeño futuro.',

        'footer_legal_copy' => 'EquiLoomPRO, EquiLoomPRO Advisers y EquiLoomPRO Brokerage son subsidiarias propiedad total de EquiLoomPRO Corporation. <br><br> © <span class="currentYear"></span> EquiLoomPRO Corporation. Todos los derechos reservados.',

        // About -----------------------------------------------
        'about_title' => 'Sobre Nosotros',
        'about_text' => 'En <span class="brand-name">EquiLoomPRO</span>, somos un equipo con sede en Ciudad de Panamá de inversionistas y expertos en IA que construye una plataforma de inversión de primer nivel, reconocida por su precisión y velocidad.',
        'about_content_title' => 'Nuestro núcleo es un equipo diverso y apasionado con la misión de transformar el futuro de la inversión en Panamá.',
        'about_content_text_1' => 'Aprovechamos el poder de la inteligencia artificial para redefinir la forma de invertir. Combinando la experiencia humana con tecnología de vanguardia, ofrecemos una plataforma que destaca por su exactitud, rapidez y potencial de rentabilidad.',
        'about_content_text_2' => 'Nuestro equipo aporta perspectivas variadas y se mantiene innovando para integrar las últimas tendencias de IA y finanzas en la plataforma, ofreciendo una experiencia de inversión transformadora.',
        'about_content_img_alt' => 'Equipo de EquiLoomPRO',

        'period' => [
            [
                'date' => 'Abril de <script>document.write(new Date().getFullYear() - 3)</script>',
                'title' => 'Nace una visión',
                'description' => 'EquiLoomPRO se fundó con la visión de revolucionar la inversión en Panamá mediante IA.',
            ],
            [
                'date' => 'Julio de <script>document.write(new Date().getFullYear() - 3)</script>',
                'title' => 'Crecimiento y desarrollo',
                // referencia ilustrativa
                'description' => 'Levantamos 1.3 millones USD (≈ 1.3 millones PAB) para impulsar el desarrollo de la plataforma y ampliar el equipo.',
            ],
            [
                'date' => 'Noviembre de <script>document.write(new Date().getFullYear() - 3)</script>',
                'title' => 'Fase beta',
                'description' => 'Lanzamos la beta en Ciudad de Panamá, recogiendo feedback de usuarios y afinando la tecnología.',
            ],
            [
                'date' => 'Junio de <script>document.write(new Date().getFullYear() - 2)</script>',
                'title' => 'Lanzamiento global',
                'description' => 'EquiLoomPRO debutó globalmente llevando nuestra tecnología de inversión avanzada a usuarios de todo el mundo, con Panamá como hub clave.',
            ],
        ],

        'investment_title' => 'Revoluciona tu forma de invertir',
        'investment_text' => 'Vive el futuro de la inversión de activos con EquiLoomPRO en Panamá. Nuestra mezcla de IA y analítica profunda ofrece capacidades excepcionales para navegar el mercado con precisión.',
        'investment_btn' => 'Empezar',

        // Contact
        'contact_title' => 'Contáctenos',
        'contact_text' => 'Escríbenos para orientación o respuestas a tus preguntas; nuestro equipo en Panamá te ayudará a tomar decisiones estratégicas con confianza.',
        'contact_form_enable_js' => 'Habilita JavaScript en tu navegador para completar este formulario.',
        'contact_label_name' => 'Nombre',
        'contact_label_email' => 'Correo electrónico',
        'contact_label_message' => 'Comentario o mensaje',
        'contact_submit' => 'Enviar',
        'contact_form_agreement' => ' * Al hacer clic aceptas la <a href="/pa/privacy" class="form-link">Política de Privacidad</a> y los <a href="/pa/terms" class="form-link">Términos y Condiciones</a>.',
        'contact_form_success' => '¡Formulario enviado con éxito!',
        // Política de Privacidad
        'privacy_title' => 'Política de Privacidad',
        'privacy_updated' => '<b>Última actualización:</b> julio de <script>document.write(new Date().getFullYear() - 1)</script>',

        'privacy_1_title' => '1. Introducción',
        'privacy_1_text' => '
<p>Esta Política de Privacidad de EquiLoomPRO ("nosotros", "nos" o "nuestro") explica cómo recopilamos, usamos y protegemos tus datos personales cuando utilizas nuestros servicios ("Servicios") y el sitio web <a href="/pa/">EquiLoomPRO</a> ("Sitio"). Proteger tu privacidad y tus datos es nuestra prioridad en la República de Panamá.</p>
<p>Los Servicios y el Sitio pueden contener enlaces a sitios de terceros. No somos responsables de sus prácticas de privacidad; revisa sus políticas antes de interactuar con ellos.</p>
<p>Tratamos toda la información recopilada como confidencial y aplicamos medidas técnicas y organizativas sólidas para proteger los Datos Personales contra acceso no autorizado, pérdida o divulgación.</p>
<p>Al usar el Sitio puedes proporcionarnos información personal (por ejemplo, nombre, correo, teléfono). Esta información puede utilizarse para verificar identidad, brindar soporte, cumplir obligaciones contractuales o enviarte actualizaciones con tu consentimiento. Puedes gestionar tus preferencias o darte de baja de comunicaciones.</p>
',

        'privacy_2_title' => '2. Recopilación y Uso de Datos',
        'privacy_2_1_title' => '2.1. General',
        'privacy_2_1_text' => '
<p>Recopilamos datos de visitantes del Sitio ("Visitantes"), usuarios ("Usuarios") y socios ("Socios"). Los Datos Personales pueden incluir direcciones IP, nombres, datos de contacto, identificadores de dispositivo e información de relación, de conformidad con la normativa aplicable.</p>
',

        'privacy_2_2_title' => '2.2. Métodos de recopilación',
        'privacy_2_2_text' => '
<p>Al acceder al Sitio, consientes la recopilación de datos (p. ej., mediante cookies, dirección IP, analítica o formularios). Si no estás de acuerdo, por favor no utilices el Sitio.</p>
',

        'privacy_2_3_title' => '2.3. Finalidades',
        'privacy_2_3_text' => '
<p>Procesamos Datos Personales para mejorar los Servicios, personalizar la experiencia, proveer soporte y cumplir obligaciones legales. Las finalidades y bases legales incluyen:</p>
<table>
  <tbody>
    <tr><td>Registro de cuenta</td><td>Consentimiento; Ejecución de contrato</td></tr>
    <tr><td>Prestación de Servicios</td><td>Ejecución de contrato</td></tr>
    <tr><td>Soporte y consultas</td><td>Intereses legítimos</td></tr>
    <tr><td>Marketing</td><td>Consentimiento</td></tr>
    <tr><td>Mejora del servicio</td><td>Intereses legítimos</td></tr>
    <tr><td>Cumplimiento y seguridad</td><td>Obligaciones legales; Intereses legítimos</td></tr>
  </tbody>
</table>
',

        'privacy_2_4_title' => '2.4. Compartición de Datos',
        'privacy_2_4_text' => '
<p>Podemos compartir datos con proveedores y socios de confianza (alojamiento, analítica, pagos y socios bancarios), mediante contratos que exigen salvaguardas adecuadas. Cuando corresponda, aplicamos medidas coherentes con estándares internacionales de protección de datos.</p>
',

        'privacy_3_title' => '3. Socios',
        'privacy_3_text' => '
<p>Procesamos datos de Socios con consentimiento o por intereses legítimos (p. ej., incorporación, debida diligencia, gestión contractual), asegurando manejo seguro y cumplimiento normativo.</p>
',

        'privacy_4_title' => '4. Seguridad',
        'privacy_4_text' => '
<p>Implementamos medidas técnicas y organizativas (controles de acceso, cifrado en tránsito cuando corresponda, registros y monitoreo). Los terceros con quienes compartimos datos están obligados contractualmente a mantener estándares equivalentes. Aunque trabajamos para mantener la seguridad, ningún sistema es completamente inmune a brechas, y el Usuario acepta este riesgo.</p>
',

        'privacy_5_title' => '5. Cookies',
        'privacy_5_text' => '
<p>Consulta nuestra <a href="/pa/cookie">Política de Cookies</a> para conocer los tipos de cookies y tecnologías de seguimiento que usamos y cómo gestionar tus preferencias.</p>
',

        'privacy_6_title' => '6. Enlaces a Terceros',
        'privacy_6_text' => '
<p>El Sitio puede enlazar a sitios externos. No somos responsables de sus prácticas de privacidad ni de su contenido. Revisa sus políticas antes de compartir datos.</p>
',

        'privacy_7_title' => '7. Conservación de Datos',
        'privacy_7_text' => '
<p>Conservamos los Datos Personales solo el tiempo necesario para las finalidades descritas en esta Política o según lo exija la ley. Al cerrar tu cuenta, eliminamos o anonimizamos los datos conforme a la normativa aplicable y a nuestros calendarios internos de retención.</p>
',

        'privacy_8_title' => '8. Tus Derechos',
        'privacy_8_text' => '
<p>Conforme a la ley aplicable, puedes tener derechos de acceso, rectificación, supresión, restricción u oposición al tratamiento, portabilidad de datos o retiro del consentimiento. Para ejercerlos, contáctanos mediante los datos de abajo. Podemos solicitar verificación de identidad antes de atender tu solicitud.</p>
',

        'privacy_9_title' => '9. Marketing',
        'privacy_9_text' => '
<p>Podemos utilizar tus datos para marketing con tu consentimiento (boletines, actualizaciones de producto). Puedes retirarlo en cualquier momento usando los enlaces para cancelar suscripción o escribiéndonos.</p>
',

        'privacy_10_title' => '10. Aceptación de la Política',
        'privacy_10_text' => '
<p>El uso del Sitio o los Servicios implica tu aceptación de esta Política. Podemos actualizarla periódicamente; el uso continuado tras los cambios constituye tu aceptación. Los cambios materiales se señalarán en esta página.</p>
',

        'privacy_11_title' => '11. Divulgación Legal',
        'privacy_11_text' => '
<p>Podemos divulgar Datos Personales si así lo requiere la ley, una orden judicial o autoridades competentes, o para proteger nuestros derechos, seguridad, a los Usuarios, Socios o al público, y para hacer cumplir nuestros Términos.</p>
',

        'privacy_12_title' => '12. Contacto',
        'privacy_12_text' => '
<p>Para consultas de privacidad o para ejercer tus derechos, escribe a nuestro Responsable de Protección de Datos en <a href="mailto:support@zevriocapiture.org">support@zevriocapiture.org</a> o utiliza el formulario de nuestra página de <a href="/pa/contact">Contacto</a>.</p>
',
        // Términos de Uso
        'terms_title' => 'Términos de Uso',
        'terms_updated' => '<b>Última actualización:</b> julio de <script>document.write(new Date().getFullYear() - 1)</script>',

        'terms_1_title' => '1. Introducción',
        'terms_1_text' => '
<p>Bienvenido al sitio web de EquiLoomPRO ("Sitio"), operado por EquiLoomPRO ("nosotros", "nos", "nuestro"). Al usar nuestro Sitio o servicios ("Servicios"), aceptas estos Términos y nuestra Política de Privacidad. Para consultas escríbenos a <a href="mailto:support@zevriocapiture.org">support@zevriocapiture.org</a>.</p>
<p>Podemos actualizar los Términos en cualquier momento sin previo aviso. El uso continuado del Sitio implica tu aceptación. Si no estás de acuerdo, no uses el Sitio ni los Servicios.</p>
',

        'terms_2_title' => '2. Sin Asesoría de Inversión',
        'terms_2_text' => '
<p>El Sitio no ofrece asesoría financiera o de inversión personalizada. La información es de carácter general y no considera tus objetivos ni situación particular. Antes de invertir, consulta a un asesor financiero independiente en Panamá.</p>
',

        'terms_3_title' => '3. Servicios',
        'terms_3_text' => '
<p>Algunos Servicios pueden ser proporcionados por terceros. Los enlaces o productos de terceros en el Sitio no constituyen respaldo nuestro. No nos hacemos responsables por su contenido ni disponibilidad.</p>
',

        'terms_4_title' => '4. Alcance y Modificación',
        'terms_4_text' => '
<p>Estos Términos constituyen el acuerdo completo entre tú y nosotros. Podemos modificarlos en cualquier momento; el uso continuado del Sitio supone aceptación de los cambios.</p>
',

        'terms_5_title' => '5. Elegibilidad',
        'terms_5_text' => '
<p>Los Servicios están dirigidos a personas mayores de 18 años que puedan celebrar contratos legalmente vinculantes conforme a la ley panameña. Los menores no están autorizados a usar el Sitio.</p>
',

        'terms_6_title' => '6. Descripción de los Servicios',
        'terms_6_text' => '
<p><b>Servicios de Suscripción:</b> Al registrarte podrás acceder a Servicios (gratuitos o de pago) con contenido propio o de terceros. No constituye asesoría de inversión y no garantizamos su exactitud.</p>
<p><b>Servicios de Terceros:</b> Los productos o servicios ofrecidos por terceros son responsabilidad exclusiva de ellos. No respondemos por su disponibilidad ni exactitud.</p>
<p><b>General:</b> Debes proporcionar datos veraces al registrarte. Podemos rechazar registros incompletos o fraudulentos. No somos responsables de interrupciones o errores en el servicio.</p>
',

        'terms_7_title' => '7. Derechos de Propiedad',
        'terms_7_text' => '
<p>El Sitio y su contenido están protegidos por derechos de autor, marcas y otras leyes. Se prohíbe la reproducción, distribución o extracción no autorizada.</p>
',

        'terms_8_title' => '8. Información Confidencial',
        'terms_8_text' => '
<p>La información confidencial compartida se protegerá durante un (1) año después de la terminación, excepto si ya es pública o se recibe sin restricciones de terceros.</p>
',

        'terms_9_title' => '9. Hipervínculos y Marcos',
        'terms_9_text' => '
<p>No se permite enlazar, enmarcar o referenciar nuestro Sitio sin autorización previa. Eres responsable de los daños derivados de dichas acciones no autorizadas.</p>
',

        'terms_10_title' => '10. Exención de Garantías',
        'terms_10_text' => '
<p>Los Servicios y el contenido se proporcionan "tal cual". No garantizamos disponibilidad continua, precisión ni idoneidad para un propósito particular.</p>
',

        'terms_11_title' => '11. Limitación de Responsabilidad',
        'terms_11_text' => '
<p>No seremos responsables por daños directos, indirectos, incidentales o consecuentes (incluyendo pérdida de beneficios o datos). Nuestra responsabilidad máxima, donde la ley lo permita, no excederá de $200 USD o su equivalente en balboas (PAB).</p>
',

        'terms_12_title' => '12. Indemnización',
        'terms_12_text' => '
<p>Te comprometes a indemnizarnos y eximirnos de responsabilidad frente a reclamaciones derivadas de tu uso del Sitio, incumplimiento de estos Términos o violación de derechos de terceros.</p>
',

        'terms_13_title' => '13. Sitios de Terceros',
        'terms_13_text' => '
<p>No somos responsables por sitios de terceros enlazados en nuestro Sitio ni por sus políticas o contenidos.</p>
',

        'terms_14_title' => '14. Protección de Datos',
        'terms_14_text' => '
<p>Cumplimos con la normativa aplicable en Panamá sobre protección de datos. Implementamos medidas de seguridad, obtenemos consentimientos y respondemos a solicitudes de derechos de los titulares. Notificaremos cualquier incidente de seguridad según lo exija la ley.</p>
',

        'terms_15_title' => '15. Ley Aplicable',
        'terms_15_text' => '
<p>Estos Términos se rigen por las leyes de la República de Panamá. Cualquier disputa se resolverá mediante arbitraje en la Ciudad de Panamá, conforme a las reglas de la Cámara de Comercio de Panamá. El idioma del arbitraje será el español.</p>
',

        'terms_16_title' => '16. Contacto',
        'terms_16_text' => '
<p>Si tienes preguntas sobre estos Términos, contáctanos en <a href="mailto:support@zevriocapiture.org">support@zevriocapiture.org</a> o usa nuestro formulario en <a href="/pa/contact">/pa/contact</a>.</p>
',
    ],
    'pe' => [
        'language_iso' => 'es',
        'country_name' => 'Perú',
        'locale' => 'es_PE',
        'locale_lang' => 'es-PE',
        'language_name' => 'Español',
        'city' => 'Lima',
        'country_code' => 'PE',
        'geo_position' => '-12.0464, -77.0428',
        'jsonld_organization_name' => 'EquiLoomPRO',
        'jsonld_organization_review_rating' => '4.96',
        'jsonld_organization_review_author' => 'Usuario de EquiLoomPRO',
        'jsonld_software_categories' => 'Herramienta de Inversión en Criptomonedas',
        // precio ajustado proporcional en soles (aprox. 190 USD → 710 PEN)
        'jsonld_software_price' => '710',
        'jsonld_software_price_currency' => 'PEN',
        'brand_name_api' => 'EquLum App AI',

        'home' => 'Inicio',
        'about' => 'Sobre Nosotros',
        'contact' => 'Contáctanos',
        'privacy' => 'Política de Privacidad',
        'terms' => 'Términos y Condiciones',

        // Home (index)
        'title' => 'EquiLoomPRO — Inversión Automatizada y Gestión de Efectivo',
        'meta_description' => 'Haz crecer tu patrimonio con EquiLoomPRO. Portafolios asistidos por IA, ahorros automatizados y funciones fiscales inteligentes para invertir con confianza en Perú.',
        'meta_keywords' => 'EquiLoomPRO, inversión automatizada, IA, gestión de portafolios, cuenta de efectivo, ahorro, Perú, Lima',

        // Open Graph / Twitter (global)
        'og_title' => 'EquiLoomPRO — Plataforma de Inversión con IA',
        'og_description' => 'Portafolios automatizados, gestión inteligente de efectivo e inversión sin esfuerzo. Comienza con EquiLoomPRO y haz crecer tu dinero con confianza.',
        'og_image' => '/assets/images/share.webp',

        'twitter_title' => 'EquiLoomPRO — Inversión Automatizada',
        'twitter_description' => 'Portafolios asistidos por IA y ahorro automático para ayudarte a crecer tu patrimonio con confianza.',

        // About
        'about_desc_content' => 'Conoce a EquiLoomPRO — un equipo con sede en Lima formado por expertos en inversión e inteligencia artificial que construyen una plataforma de inversión precisa y de alto rendimiento.',
        'about_keywords' => 'sobre EquiLoomPRO, empresa, inversión con IA, plataforma de inversión, Lima',

        // Contact
        'contact_desc_content' => '¿Preguntas o necesitas orientación? Contáctanos en EquiLoomPRO — nuestros expertos están listos para ayudarte a tomar decisiones de inversión seguras y estratégicas.',
        'contact_keywords' => 'contacto EquiLoomPRO, soporte, ayuda, preguntas de inversión, Lima',

        // Terms
        'terms_desc_content' => 'Lee los Términos y Condiciones para usar el sitio web y servicios de EquiLoomPRO, incluyendo elegibilidad, limitaciones y avisos legales.',
        'terms_keywords' => 'términos de uso, EquiLoomPRO, legal, Perú',

        // Privacy
        'privacy_desc_content' => 'Cómo EquiLoomPRO recopila, usa y protege tus datos personales, tus derechos y nuestro compromiso con la seguridad.',
        'privacy_keywords' => 'política de privacidad, protección de datos, Perú, EquiLoomPRO',
        // ---------- JSON-LD content ----------
        'jsonld_organization_review_body' => 'EquiLoomPRO ofrece una plataforma de inversión asistida por IA que combina portafolios automatizados, gestión inteligente de efectivo y funciones fiscales eficientes para ayudar a clientes en Lima a hacer crecer su patrimonio con confianza.',

        // FAQ (se usa en la página principal si page === "index")
        'jsonld_faq_1_question' => '¿Qué es EquiLoomPRO?',
        'jsonld_faq_1_answer' => 'EquiLoomPRO es una plataforma de inversión asistida por IA que te ayuda a construir y automatizar portafolios diversificados, optimizar ahorros e invertir con confianza en Perú.',

        'jsonld_faq_2_question' => '¿Cómo me ayuda EquiLoomPRO a invertir?',
        'jsonld_faq_2_answer' => 'Ofrecemos portafolios personalizables o automatizados, herramientas de efectivo inteligente y funciones diseñadas para mejorar resultados después de impuestos, para que inviertas sin esfuerzo y mantengas el control.',

        'jsonld_faq_3_question' => '¿Está disponible EquiLoomPRO en Perú?',
        'jsonld_faq_3_answer' => 'Sí. EquiLoomPRO atiende a clientes en Lima y en todo el Perú, con experiencias adaptadas a tu localidad y moneda (PEN).',

        'jsonld_faq_4_question' => '¿Tengo que usar automatización o IA?',
        'jsonld_faq_4_answer' => 'La automatización es opcional. Puedes dejar que la plataforma gestione tareas rutinarias o crear y ajustar tu propio portafolio cuando quieras.',

        'jsonld_faq_5_question' => '¿Cómo empiezo?',
        'jsonld_faq_5_answer' => 'Crea tu perfil, elige o personaliza un portafolio y fondea tu cuenta en soles peruanos (PEN). No hay cargos ocultos de registro; servicios de socios pueden tener requisitos propios.',

        'jsonld_faq_6_question' => '¿Cómo protege EquiLoomPRO mis datos?',
        'jsonld_faq_6_answer' => 'Aplicamos medidas técnicas y organizativas robustas y seguimos estándares de protección de datos aplicables en Perú e internacionales para resguardar tu información.',

        // Header section
        'header_logo_alt' => 'Logo de EquiLoomPRO',
        'header_logo_text' => 'EquiLoomPRO',
        'header_burger_alt' => 'Menú',
        'header_cross_alt' => 'Cerrar',

        // Hero section
        'hero_form_title' => 'Regístrate ahora',
        'hero_form_notice' => '* Al hacer clic aceptas la <a href="/pe/privacy" class="form-link">Política de Privacidad</a> y los <a href="/pe/terms" class="form-link">Términos y Condiciones</a>.',
        'hero_title' => 'Haz tuya la riqueza.',
        'hero_subtitle' => 'Inversión y ahorro personalizados, automáticos y sin esfuerzo.',
        'hero_stat_nerdwallet' => "Mejor Robo-advisor, 2019<sup class=\"sup\">1</sup><br>Mejor App de Gestión de Efectivo, 2020<sup class=\"sup\">1</sup>",
        'hero_stat_investopedia' => "Mejor Robo-advisor, 2020<sup class=\"sup\">1</sup>",
        'hero_stat_clients' => 'Clientes de confianza',
        'hero_stat_funds' => 'Fondos gestionados',
        'hero_stat_appstore' => 'Apple App Store <sup class=\"sup\">2</sup>',
        'hero_stat_playstore' => 'Google Play Store <sup class=\"sup\">2</sup>',

        // Investition section
        'investition_title' => 'Invertir no es fácil. Nosotros lo hacemos parecer así.',
        'investition_text' => 'Personalizamos un portafolio para ti —o constrúyelo tú— y nuestra potente automatización hará más por tu inversión, optimizando el rendimiento y ayudando a reducir impuestos.',
        'investition_btn_start' => 'Comenzar a invertir',
        'investition_btn_more' => 'Saber más',
        'investition_notification_app' => 'EquiLoomPRO',
        'investition_notification_time' => 'ahora',
        // Referencias ilustrativas (aprox. $78 → 290 PEN; $250 → 950 PEN)
        'investition_notification_1' => 'Te ahorramos <span>290 PEN</span> en impuestos.',
        'investition_notification_2' => 'Invertimos automáticamente tu depósito de <span>950 PEN</span>.',

        // Cash section
        'cash_title' => 'Efectivo del día a día, diseñado para construir riqueza a largo plazo en Perú.',
        'cash_text' => 'Nuestra cuenta Cash, ofrecida con socios bancarios regulados en Perú, te permite automatizar ahorros, pagar servicios, retirar en cajeros y mover tu efectivo a inversión en segundos para seguir construyendo tu futuro.',
        'cash_btn_start' => 'Comenzar a ahorrar',
        'cash_btn_more' => 'Saber más',
        'cash_img_phone_alt' => 'Teléfono',
        'cash_img_card_alt' => 'Tarjeta',

        // Saving section
        'saving_title' => 'Ahorrando e invirtiendo. Todo mientras descansas.',
        'saving_text' => 'Cuéntanos para qué estás ahorrando y apartaremos efectivo automáticamente para tus metas. Como conectamos todas tus cuentas, solo necesitas una app para ver crecer tu patrimonio.',
        'saving_img_alt' => 'Ahorro',

        // Testimonials section (nombres locales)
        'testimonial_title' => 'TESTIMONIOS',
        'testimonial_1_quote' => 'Es el recurso <strong>más útil</strong> para invertir, planear mi jubilación y ver toda mi vida financiera en un solo lugar.',
        'testimonial_1_author' => 'José A',
        'testimonial_2_quote' => '<strong>EquiLoomPRO</strong> fue lo primero que realmente me motivó a ahorrar.',
        'testimonial_2_author' => 'Camila P',
        'testimonial_3_quote' => 'Es <strong>automático</strong>, y yo soy flojo.',
        'testimonial_3_author' => 'Diego R',

        // Trust section
        'trust_title' => 'Más de <strong>120,000</strong> personas en Perú ya usan EquiLoomPRO para ganar más y preocuparse menos',
        'trust_btn' => 'Empezar ahora',
        'trust_img_alt' => 'Ventana abierta con planta',
        'trust_subtitle' => 'APARECIMOS EN',
        'trust_logo_wsj_alt' => 'WSJ',
        'trust_logo_bloomberg_alt' => 'Bloomberg',
        'trust_logo_nyt_alt' => 'The New York Times',
        'trust_logo_reuters_alt' => 'Reuters',
        'trust_logo_cnbc_alt' => 'CNBC',
        // Footer section
        'footer_logo_alt' => 'Logo de EquiLoomPRO',
        'footer_logo_text' => 'EquiLoomPRO',
        'footer_legal_note_1' => 'Los testimonios fueron proporcionados por clientes de EquiLoomPRO Advisers y EquiLoomPRO Brokerage. No garantizamos que otros clientes obtengan experiencias o resultados similares.',
        'footer_legal_note_2' => 'Nerdwallet e Investopedia (los “Patrocinadores”) reciben compensación por referir potenciales clientes a EquiLoomPRO Advisers, LLC mediante anuncios en sus sitios web. No existe relación formal entre los Patrocinadores y EquiLoomPRO Advisers fuera de este acuerdo. Las opiniones y calificaciones pertenecen a sus respectivos equipos editoriales y se basan en información que consideran fiable, sin garantía. Considera comisiones, funciones y metodología antes de decidir.',
        'footer_legal_note_3' => 'Las valoraciones en Apple App Store y Google Play se basan en calificaciones de usuarios desde febrero de 2014 (Apple) y diciembre de 2015 (Google) hasta junio de <span class="currentYear"></span>. Calificaciones compiladas por Apple, Inc. y Google, Inc., quienes reciben compensación por alojar nuestra app.',
        'footer_legal_note_4' => 'Al usar este sitio aceptas que la información se presenta solo con fines informativos y aceptas nuestros <a href="/pe/terms" class="legal-link">Términos de Uso</a> y la <a href="/pe/privacy" class="legal-link">Política de Privacidad</a>.',
        'footer_legal_note_5' => 'EquiLoomPRO Advisers utiliza fuentes que se consideran fiables, incluidos clientes y terceros, pero no garantiza su exactitud o integridad. Nada aquí constituye oferta o recomendación para comprar o vender valores. EquiLoomPRO Advisers o sus afiliadas no brindan asesoría tributaria; consulta a tu asesor fiscal.',
        'footer_legal_note_6' => 'Trabajamos con proveedores bancarios y de pagos regulados en Perú para ofrecer funciones de efectivo y tarjeta. Los servicios bancarios los proveen terceros, sujetos a verificación de identidad y a la normativa local aplicable.',
        'footer_legal_note_7' => 'Los servicios de cuenta de efectivo se ofrecen mediante corredores y socios bancarios regulados y son independientes de las cuentas de inversión. La gestión y asesoría de inversiones la presta EquiLoomPRO Advisers o entidades afiliadas. La disponibilidad de productos y servicios puede variar por jurisdicción.',
        'footer_legal_note_8' => 'La efectividad de la estrategia de “Tax-Loss Harvesting” para reducir la carga fiscal depende de tu perfil tributario y de inversión, incluida la actividad fuera de EquiLoomPRO, tipos de activos y periodos de tenencia. Puede incrementar el número de operaciones, generar ganancias de capital o “wash sales” y costos de transacción. Las pérdidas podrían no compensarse totalmente y están sujetas a normas fiscales aplicables.',
        'footer_legal_note_9' => 'Invertir implica riesgos, incluida la posible pérdida del capital invertido. Los rendimientos históricos y proyecciones son informativos e ilustrativos y pueden no reflejar el desempeño futuro.',

        'footer_legal_copy' => 'EquiLoomPRO, EquiLoomPRO Advisers y EquiLoomPRO Brokerage son subsidiarias de propiedad total de EquiLoomPRO Corporation. <br><br> © <span class="currentYear"></span> EquiLoomPRO Corporation. Todos los derechos reservados.',

        // About -----------------------------------------------
        'about_title' => 'Sobre Nosotros',
        'about_text' => 'En <span class="brand-name">EquiLoomPRO</span>, somos un equipo con sede en Lima de inversionistas y expertos en IA que construye una plataforma de inversión de primer nivel, reconocida por su precisión y velocidad.',
        'about_content_title' => 'Nuestro núcleo es un equipo diverso y apasionado con la misión de transformar el futuro de la inversión en Perú.',
        'about_content_text_1' => 'Aprovechamos el poder de la inteligencia artificial para redefinir la forma de invertir. Al combinar la pericia de inversionistas con tecnología de vanguardia, ofrecemos una plataforma que destaca por su exactitud, rapidez y potencial de rentabilidad.',
        'about_content_text_2' => 'Nuestro equipo aporta perspectivas variadas desde Lima y otras ciudades, incorporando continuamente las últimas tendencias de IA y finanzas para brindar una experiencia de inversión transformadora.',
        'about_content_img_alt' => 'Equipo de EquiLoomPRO',

        'period' => [
            [
                'date' => 'Abril de <script>document.write(new Date().getFullYear() - 3)</script>',
                'title' => 'Nace una visión',
                'description' => 'EquiLoomPRO se fundó con la ambición de revolucionar la inversión en Perú mediante inteligencia artificial.',
            ],
            [
                'date' => 'Julio de <script>document.write(new Date().getFullYear() - 3)</script>',
                'title' => 'Crecimiento y desarrollo',
                // cifra ilustrativa
                'description' => 'Obtuvimos financiación para acelerar el desarrollo de la plataforma y ampliar el equipo en Lima.',
            ],
            [
                'date' => 'Noviembre de <script>document.write(new Date().getFullYear() - 3)</script>',
                'title' => 'Fase beta',
                'description' => 'Lanzamos la beta en Lima, recopilando retroalimentación de usuarios y puliendo nuestra tecnología.',
            ],
            [
                'date' => 'Junio de <script>document.write(new Date().getFullYear() - 2)</script>',
                'title' => 'Lanzamiento global',
                'description' => 'Debut global de EquiLoomPRO, llevando nuestra tecnología de inversión a usuarios de todo el mundo, con Perú como punto clave.',
            ],
        ],

        'investment_title' => 'Revoluciona tu forma de invertir',
        'investment_text' => 'Vive el futuro de la inversión de activos con EquiLoomPRO en Perú. Nuestra combinación de IA y analítica de datos ofrece capacidades excepcionales para navegar el mercado con precisión.',
        'investment_btn' => 'Empezar',

        // Contact
        'contact_title' => 'Contáctanos',
        'contact_text' => 'Escríbenos para orientación o respuestas a tus preguntas; nuestro equipo en Lima te ayudará a tomar decisiones estratégicas con confianza.',
        'contact_form_enable_js' => 'Habilita JavaScript en tu navegador para completar este formulario.',
        'contact_label_name' => 'Nombre',
        'contact_label_email' => 'Correo electrónico',
        'contact_label_message' => 'Comentario o mensaje',
        'contact_submit' => 'Enviar',
        'contact_form_agreement' => ' * Al hacer clic aceptas la <a href="/pe/privacy" class="form-link">Política de Privacidad</a> y los <a href="/pe/terms" class="form-link">Términos y Condiciones</a>.',
        'contact_form_success' => '¡Formulario enviado con éxito!',
        // Política de Privacidad
        'privacy_title' => 'Política de Privacidad',
        'privacy_updated' => '<b>Última actualización:</b> julio de <script>document.write(new Date().getFullYear() - 1)</script>',

        'privacy_1_title' => '1. Introducción',
        'privacy_1_text' => '
<p>Esta Política de Privacidad de EquiLoomPRO ("nosotros") detalla cómo gestionamos los datos personales al usar nuestros servicios ("Servicios") y el sitio web <a href="/pe/">EquiLoomPRO</a> ("Sitio"). La protección de tu privacidad es nuestra prioridad.</p>
<p>Nuestros Servicios y Sitio pueden contener enlaces a terceros. No somos responsables de sus prácticas de privacidad.</p>
<p>Tratamos toda la información como confidencial y aplicamos medidas técnicas y organizativas robustas para proteger tus datos personales.</p>
<p>Al usar el Sitio, puedes proporcionar información personal (nombre, correo, teléfono). Esta puede usarse para verificar identidad, ofrecer soporte, cumplir obligaciones o enviarte actualizaciones con tu consentimiento.</p>
',

        'privacy_2_title' => '2. Recopilación y Uso de Datos',
        'privacy_2_1_title' => '2.1. General',
        'privacy_2_1_text' => '
<p>Recopilamos datos de visitantes, usuarios y socios. Incluye IP, nombre, datos de contacto y relación, según la ley peruana de protección de datos.</p>
',

        'privacy_2_2_title' => '2.2. Recopilación',
        'privacy_2_2_text' => '
<p>Al acceder al Sitio consientes la recopilación de datos (cookies, IP, formularios). Si no aceptas, por favor no uses el Sitio.</p>
',

        'privacy_2_3_title' => '2.3. Finalidad',
        'privacy_2_3_text' => '
<p>Procesamos datos personales para mejorar servicios, personalizar experiencia, proveer soporte y cumplir obligaciones legales.</p>
<table>
<tbody>
<tr><td>Registro de cuenta</td><td>Consentimiento; Ejecución contractual</td></tr>
<tr><td>Prestación de servicios</td><td>Ejecución contractual</td></tr>
<tr><td>Soporte</td><td>Intereses legítimos</td></tr>
<tr><td>Marketing</td><td>Consentimiento</td></tr>
<tr><td>Mejora de servicios</td><td>Intereses legítimos</td></tr>
</tbody>
</table>
',

        'privacy_2_4_title' => '2.4. Compartición',
        'privacy_2_4_text' => '
<p>Podemos compartir datos con proveedores y socios de confianza, asegurando cumplimiento de la normativa peruana e internacional.</p>
',

        'privacy_3_title' => '3. Socios',
        'privacy_3_text' => '
<p>Procesamos datos de socios con base en consentimiento o intereses legítimos, garantizando un manejo seguro y legal.</p>
',

        'privacy_4_title' => '4. Seguridad',
        'privacy_4_text' => '
<p>Implementamos medidas técnicas y organizativas para proteger datos. Aunque buscamos altos estándares, ningún sistema es 100% seguro.</p>
',

        'privacy_5_title' => '5. Cookies',
        'privacy_5_text' => '
<p>Consulta nuestra <a href="/pe/cookie">Política de Cookies</a> para más detalles.</p>
',

        'privacy_6_title' => '6. Enlaces a Terceros',
        'privacy_6_text' => '
<p>Nuestro Sitio puede contener enlaces a externos. No somos responsables de sus políticas de privacidad.</p>
',

        'privacy_7_title' => '7. Retención de Datos',
        'privacy_7_text' => '
<p>Conservamos datos personales solo el tiempo necesario. Al cerrar tu cuenta, los datos se eliminan conforme a la ley.</p>
',

        'privacy_8_title' => '8. Derechos del Usuario',
        'privacy_8_text' => '
<p>Puedes acceder, rectificar, suprimir, oponerte al tratamiento o solicitar portabilidad de tus datos. Escríbenos para ejercer estos derechos.</p>
',

        'privacy_9_title' => '9. Marketing',
        'privacy_9_text' => '
<p>Podemos usar tus datos para marketing con tu consentimiento. Puedes retirarlo escribiendo a nuestro soporte.</p>
',

        'privacy_10_title' => '10. Aceptación',
        'privacy_10_text' => '
<p>El uso del Sitio implica aceptación de esta política. Podemos actualizarla y el uso continuado implica conformidad.</p>
',

        'privacy_11_title' => '11. Divulgación Legal',
        'privacy_11_text' => '
<p>Podemos divulgar datos si es legalmente requerido o para proteger nuestros derechos.</p>
',

        'privacy_12_title' => '12. Contacto',
        'privacy_12_text' => '
<p>Para consultas de privacidad, escribe a nuestro DPO: <a href="mailto:support@zevriocapiture.org">support@zevriocapiture.org</a>.</p>
',

        // Términos de Uso
        'terms_title' => 'Términos de Uso',
        'terms_updated' => '<b>Última actualización:</b> julio de <script>document.write(new Date().getFullYear() - 1)</script>',

        'terms_1_title' => '1. Introducción',
        'terms_1_text' => '
<p>Bienvenido al sitio de EquiLoomPRO ("Sitio"), operado por EquiLoomPRO ("nosotros"). Al usar el Sitio o servicios ("Servicios"), aceptas estos Términos y nuestra Política de Privacidad. Escríbenos a <a href="mailto:support@zevriocapiture.org">support@zevriocapiture.org</a>.</p>
<p>Podemos actualizar los Términos sin previo aviso. El uso continuado implica aceptación.</p>
',

        'terms_2_title' => '2. Sin Asesoría de Inversión',
        'terms_2_text' => '
<p>No brindamos asesoría financiera personalizada. La información es general. Consulta a un asesor independiente en Perú antes de invertir.</p>
',

        'terms_3_title' => '3. Servicios',
        'terms_3_text' => '
<p>Algunos servicios pueden ser prestados por terceros. No somos responsables por su contenido ni disponibilidad.</p>
',

        'terms_4_title' => '4. Alcance y Modificación',
        'terms_4_text' => '
<p>Estos Términos constituyen el acuerdo completo. Podemos modificarlos y el uso continuado supone aceptación.</p>
',

        'terms_5_title' => '5. Elegibilidad',
        'terms_5_text' => '
<p>Los Servicios están dirigidos a mayores de 18 años que puedan celebrar contratos válidos según la ley peruana.</p>
',

        'terms_6_title' => '6. Descripción de Servicios',
        'terms_6_text' => '
<p><b>Servicios de Suscripción:</b> Acceso gratuito o de pago a contenido propio o de terceros. No es asesoría de inversión.</p>
<p><b>Servicios de Terceros:</b> No respondemos por exactitud ni disponibilidad.</p>
<p><b>General:</b> Debes registrar datos veraces. No somos responsables por interrupciones.</p>
',

        'terms_7_title' => '7. Derechos de Propiedad',
        'terms_7_text' => '
<p>El Sitio y contenido están protegidos por derechos de autor y marcas. Prohibida su reproducción no autorizada.</p>
',

        'terms_8_title' => '8. Información Confidencial',
        'terms_8_text' => '
<p>La información confidencial se protege durante un año tras la terminación, salvo que ya sea pública.</p>
',

        'terms_9_title' => '9. Hipervínculos y Marcos',
        'terms_9_text' => '
<p>No se permite enlazar o enmarcar nuestro Sitio sin autorización. Eres responsable de los daños causados.</p>
',

        'terms_10_title' => '10. Exención de Garantías',
        'terms_10_text' => '
<p>Los Servicios se ofrecen "tal cual". No garantizamos exactitud ni disponibilidad.</p>
',

        'terms_11_title' => '11. Limitación de Responsabilidad',
        'terms_11_text' => '
<p>No somos responsables por daños indirectos o pérdida de datos. Nuestra responsabilidad máxima, donde la ley lo permita, no excederá de 750 PEN.</p>
',

        'terms_12_title' => '12. Indemnización',
        'terms_12_text' => '
<p>Te comprometes a indemnizarnos frente a reclamaciones derivadas de tu uso del Sitio o incumplimiento de Términos.</p>
',

        'terms_13_title' => '13. Sitios de Terceros',
        'terms_13_text' => '
<p>No somos responsables de sitios de terceros enlazados ni de sus políticas.</p>
',

        'terms_14_title' => '14. Protección de Datos',
        'terms_14_text' => '
<p>Cumplimos con la Ley de Protección de Datos Personales de Perú. Aplicamos medidas de seguridad, solicitamos consentimientos y notificamos incidentes según la normativa.</p>
',

        'terms_15_title' => '15. Ley Aplicable',
        'terms_15_text' => '
<p>Estos Términos se rigen por las leyes de la República del Perú. Cualquier disputa se resolverá mediante arbitraje en Lima, conforme a las reglas de la Cámara de Comercio de Lima. El idioma será el español.</p>
',

        'terms_16_title' => '16. Contacto',
        'terms_16_text' => '
<p>Para consultas sobre estos Términos, contáctanos en <a href="mailto:support@zevriocapiture.org">support@zevriocapiture.org</a> o a través de <a href="/pe/contact">/pe/contact</a>.</p>
',
    ],
    'br' => [
        'language_iso' => 'pt',
        'country_name' => 'Brasil',
        'locale' => 'pt_BR',
        'locale_lang' => 'pt-BR',
        'language_name' => 'Português',
        'city' => 'Rio de Janeiro',
        'country_code' => 'BR',
        'geo_position' => '-22.9068, -43.1729',
        'jsonld_organization_name' => 'EquiLoomPRO',
        'jsonld_organization_review_rating' => '4.96',
        'jsonld_organization_review_author' => 'Usuário EquiLoomPRO',
        'jsonld_software_categories' => 'Ferramenta de Investimento em Criptoativos',
        // preço ilustrativo convertido para BRL (~US$190 → ~R$990)
        'jsonld_software_price' => '990',
        'jsonld_software_price_currency' => 'BRL',
        'brand_name_api' => 'EquLum App AI',

        'home' => 'Início',
        'about' => 'Sobre Nós',
        'contact' => 'Fale Conosco',
        'privacy' => 'Política de Privacidade',
        'terms' => 'Termos e Condições',

        // Home (index)
        'title' => 'EquiLoomPRO — Investimento Automatizado & Gestão de Caixa',
        'meta_description' => 'Faça a riqueza trabalhar por você com a EquiLoomPRO. Portfólios assistidos por IA, poupança automatizada e recursos fiscais inteligentes para investir com confiança no Brasil.',
        'meta_keywords' => 'EquiLoomPRO, investimento automatizado, IA, gestão de portfólio, conta de caixa, poupança, Brasil, Rio de Janeiro, São Paulo',

        // Open Graph / Twitter (globais)
        'og_title' => 'EquiLoomPRO — Plataforma de Investimentos com IA',
        'og_description' => 'Portfólios automatizados, caixa inteligente e investimento sem esforço. Comece com a EquiLoomPRO e cresça seu patrimônio com confiança.',
        'og_image' => '/assets/images/share.webp',

        'twitter_title' => 'EquiLoomPRO — Investimento Automatizado',
        'twitter_description' => 'Portfólios assistidos por IA e poupança automática para ajudar você a crescer patrimônio com confiança.',

        // About (descrição curta)
        'about_desc_content' => 'Conheça a EquiLoomPRO — um time sediado entre Rio de Janeiro e São Paulo, unindo investidores e especialistas em IA para construir uma plataforma de investimentos precisa e de alta performance.',
        'about_keywords' => 'sobre EquiLoomPRO, equipe, investimento com IA, plataforma de investimentos, Brasil',

        // Contact (descrição curta)
        'contact_desc_content' => 'Dúvidas ou orientação? Fale com a EquiLoomPRO — nossos especialistas ajudam você a tomar decisões estratégicas de investimento com confiança.',
        'contact_keywords' => 'contato EquiLoomPRO, suporte, ajuda, dúvidas de investimento, Brasil',

        // Terms (descrição curta)
        'terms_desc_content' => 'Leia os Termos e Condições de uso do site e serviços da EquiLoomPRO: elegibilidade, limitações e avisos legais.',
        'terms_keywords' => 'termos de uso, termos e condições, EquiLoomPRO, jurídico, Brasil',

        // Privacy (descrição curta)
        'privacy_desc_content' => 'Como a EquiLoomPRO coleta, utiliza e protege seus dados pessoais, seus direitos e nosso compromisso com privacidade e segurança.',
        'privacy_keywords' => 'política de privacidade, proteção de dados, Brasil, EquiLoomPRO',
        // ---------- JSON-LD content ----------
        'jsonld_organization_review_body' => 'A EquiLoomPRO oferece uma plataforma de investimentos assistida por IA que combina portfólios automatizados, gestão inteligente de caixa e recursos fiscais eficientes para ajudar clientes no Rio de Janeiro, São Paulo e em todo o Brasil a crescer patrimônio com confiança.',

        // FAQ (usado na home quando page === "index")
        'jsonld_faq_1_question' => 'O que é a EquiLoomPRO?',
        'jsonld_faq_1_answer' => 'A EquiLoomPRO é uma plataforma de investimentos assistida por IA que ajuda você a construir e automatizar portfólios diversificados, otimizar poupança e investir com confiança no Brasil.',

        'jsonld_faq_2_question' => 'Como a EquiLoomPRO me ajuda a investir?',
        'jsonld_faq_2_answer' => 'Oferecemos portfólios personalizáveis ou automatizados, ferramentas de caixa inteligente e recursos pensados para melhorar resultados após impostos — para você investir sem esforço e seguir no controle.',

        'jsonld_faq_3_question' => 'A EquiLoomPRO está disponível no Brasil?',
        'jsonld_faq_3_answer' => 'Sim. Atendemos clientes no Rio de Janeiro, São Paulo e em todo o Brasil, com experiências adaptadas à sua localidade e moeda (BRL).',

        'jsonld_faq_4_question' => 'Preciso usar automação ou IA?',
        'jsonld_faq_4_answer' => 'A automação é opcional. Você pode deixar a plataforma cuidar das rotinas ou montar e ajustar seu próprio portfólio quando quiser.',

        'jsonld_faq_5_question' => 'Como começo?',
        'jsonld_faq_5_answer' => 'Crie seu perfil, escolha ou personalize um portfólio e deposite em reais (BRL). Não há taxas ocultas de cadastro; serviços de parceiros podem ter requisitos próprios.',

        'jsonld_faq_6_question' => 'Como a EquiLoomPRO protege meus dados?',
        'jsonld_faq_6_answer' => 'Aplicamos medidas técnicas e organizacionais robustas e seguimos padrões aplicáveis de proteção de dados para resguardar suas informações no Brasil.',

        // Header
        'header_logo_alt' => 'Logo da EquiLoomPRO',
        'header_logo_text' => 'EquiLoomPRO',
        'header_burger_alt' => 'Menu',
        'header_cross_alt' => 'Fechar',

        // Hero
        'hero_form_title' => 'Cadastre-se agora',
        'hero_form_notice' => '* Ao clicar, você aceita a <a href="/br/privacy" class="form-link">Política de Privacidade</a> e os <a href="/br/terms" class="form-link">Termos e Condições</a>.',
        'hero_title' => 'Faça a riqueza trabalhar por você.',
        'hero_subtitle' => 'Investimento e poupança personalizados, automáticos e sem esforço.',
        'hero_stat_nerdwallet' => "Melhor Robo-advisor, 2019<sup class=\"sup\">1</sup><br>Melhor App de Gestão de Caixa, 2020<sup class=\"sup\">1</sup>",
        'hero_stat_investopedia' => "Melhor Robo-advisor, 2020<sup class=\"sup\">1</sup>",
        'hero_stat_clients' => 'Clientes de confiança',
        'hero_stat_funds' => 'Em recursos de clientes',
        'hero_stat_appstore' => 'Apple App Store <sup class="sup">2</sup>',
        'hero_stat_playstore' => 'Google Play Store <sup class="sup">2</sup>',

        // Investimento
        'investition_title' => 'Investir não é fácil. A gente só faz parecer.',
        'investition_text' => 'Deixe a gente personalizar um portfólio para você — ou monte o seu. Nossa automação potente extrai mais do seu investimento, otimizando desempenho e ajudando a reduzir impostos.',
        'investition_btn_start' => 'Começar a investir',
        'investition_btn_more' => 'Saiba mais',
        'investition_notification_app' => 'EquiLoomPRO',
        'investition_notification_time' => 'agora',
        // valores ilustrativos (~US$78 ≈ R$400; ~US$250 ≈ R$1.300)
        'investition_notification_1' => 'Economizamos <span>R$ 400</span> em impostos para você.',
        'investition_notification_2' => 'Investimos automaticamente seu depósito de <span>R$ 1.300</span>.',

        // Caixa (Cash)
        'cash_title' => 'Caixa do dia a dia, pensado para construir riqueza no longo prazo.',
        'cash_text' => 'Nossa conta Cash, oferecida com parceiros bancários regulados no Brasil, permite automatizar sua poupança, pagar contas, sacar em milhares de caixas eletrônicos e investir o excedente em segundos.',
        'cash_btn_start' => 'Começar a poupar',
        'cash_btn_more' => 'Saiba mais',
        'cash_img_phone_alt' => 'Celular',
        'cash_img_card_alt' => 'Cartão',

        // Poupança (Saving)
        'saving_title' => 'Poupando e investindo. Tudo enquanto você relaxa.',
        'saving_text' => 'Diga para o que você está poupando e nós separamos automaticamente o caixa extra para suas metas. Conectamos suas contas para você acompanhar tudo em um único app.',
        'saving_img_alt' => 'Poupança',

        // Depoimentos (Testimonials)
        'testimonial_title' => 'DEPOIMENTOS',
        'testimonial_1_quote' => 'É o recurso <strong>mais completo</strong> para investir, planejar aposentadoria e ver toda a minha vida financeira.',
        'testimonial_1_author' => 'Lucas M',
        'testimonial_2_quote' => '<strong>EquiLoomPRO</strong> foi a primeira coisa que realmente me motivou a poupar.',
        'testimonial_2_author' => 'Mariana A',
        'testimonial_3_quote' => 'É <strong>automático</strong>, e eu sou preguiçoso.',
        'testimonial_3_author' => 'João P',

        // Confiança (Trust)
        'trust_title' => 'Mais de <strong>120.000</strong> pessoas no Brasil já usam a EquiLoomPRO para ganhar mais e se preocupar menos',
        'trust_btn' => 'Começar agora',
        'trust_img_alt' => 'Janela aberta com planta',
        'trust_subtitle' => 'DESTAQUES NA MÍDIA',
        'trust_logo_wsj_alt' => 'WSJ',
        'trust_logo_bloomberg_alt' => 'Bloomberg',
        'trust_logo_nyt_alt' => 'The New York Times',
        'trust_logo_reuters_alt' => 'Reuters',
        'trust_logo_cnbc_alt' => 'CNBC',
        // Footer section
        'footer_logo_alt' => 'Logo da EquiLoomPRO',
        'footer_logo_text' => 'EquiLoomPRO',
        'footer_legal_note_1' => 'Os depoimentos foram fornecidos por clientes da EquiLoomPRO Advisers e da EquiLoomPRO Brokerage. Não há garantia de experiências ou resultados iguais.',
        'footer_legal_note_2' => 'Nerdwallet e Investopedia (os “Patrocinadores”) recebem compensação por indicar potenciais clientes à EquiLoomPRO Advisers, LLC por meio de anúncios em seus sites. As opiniões e classificações são de responsabilidade de suas equipes editoriais.',
        'footer_legal_note_3' => 'As avaliações na Apple App Store e Google Play são baseadas em notas de usuários de fevereiro de 2014 (Apple) e dezembro de 2015 (Google) até junho de <span class="currentYear"></span>. Compiladas por Apple, Inc. e Google, Inc., que recebem compensação por hospedar nosso app.',
        'footer_legal_note_4' => 'Ao usar este site, você reconhece que as informações têm caráter informativo e concorda com nossos <a href="/br/terms" class="legal-link">Termos de Uso</a> e a <a href="/br/privacy" class="legal-link">Política de Privacidade</a>.',
        'footer_legal_note_5' => 'A EquiLoomPRO Advisers utiliza fontes consideradas confiáveis, incluindo clientes e terceiros, mas não garante exatidão ou integralidade. Nada aqui constitui oferta ou recomendação para compra ou venda de valores mobiliários. Não fornecemos aconselhamento tributário — procure seu contador.',
        'footer_legal_note_6' => 'Trabalhamos com instituições financeiras e provedores de pagamentos regulados no Brasil para oferecer recursos de conta e cartão. Os serviços bancários são prestados por terceiros, sujeitos à verificação de identidade e à regulamentação local.',
        'footer_legal_note_7' => 'A conta de caixa é oferecida por corretores e parceiros bancários regulados e é separada das contas de investimento. A gestão/assessoria de investimentos é fornecida pela EquiLoomPRO Advisers ou afiliadas. A disponibilidade de produtos e serviços pode variar por jurisdição.',
        'footer_legal_note_8' => 'A eficácia de estratégias como “Tax-Loss Harvesting” depende do seu perfil fiscal e de investimento, inclusive operações fora da EquiLoomPRO, tipos de ativos e prazos de posse. Pode aumentar o número de operações, gerar ganhos de capital, “wash sales” e custos de transação.',
        'footer_legal_note_9' => 'Todo investimento envolve riscos, inclusive a possível perda do capital investido. Retornos históricos e projeções são informativos e podem não refletir o desempenho futuro.',

        'footer_legal_copy' => 'EquiLoomPRO, EquiLoomPRO Advisers e EquiLoomPRO Brokerage são subsidiárias integrais da EquiLoomPRO Corporation. <br><br> © <span class="currentYear"></span> EquiLoomPRO Corporation. Todos os direitos reservados.',

        // About -----------------------------------------------
        'about_title' => 'Sobre Nós',
        'about_text' => 'Na <span class="brand-name">EquiLoomPRO</span>, somos um time de investidores e especialistas em IA sediado entre Rio de Janeiro e São Paulo, construindo uma plataforma de investimentos de alto nível, reconhecida por precisão e velocidade.',
        'about_content_title' => 'Nosso núcleo é um time global diverso e apaixonado com a missão de redefinir o futuro dos investimentos.',
        'about_content_text_1' => 'Transformamos a forma de investir alavancando inteligência artificial. Ao combinar experiência de mercado com tecnologia de ponta, entregamos uma plataforma que se destaca em exatidão, rapidez e potencial de rentabilidade.',
        'about_content_text_2' => 'De Rio e São Paulo para o mundo, trazemos perspectivas variadas e inovamos continuamente para incorporar as tendências mais recentes de IA e finanças.',
        'about_content_img_alt' => 'Equipe da EquiLoomPRO',

        'period' => [
            [
                'date' => 'Abril de <script>document.write(new Date().getFullYear() - 3)</script>',
                'title' => 'Nascimento de uma Visão',
                'description' => 'A EquiLoomPRO foi criada com a ambição de revolucionar os investimentos no Brasil por meio de IA.',
            ],
            [
                'date' => 'Julho de <script>document.write(new Date().getFullYear() - 3)</script>',
                'title' => 'Crescimento e Desenvolvimento',
                // nota ilustrativa
                'description' => 'Captação de recursos para acelerar o desenvolvimento da plataforma e ampliar o time em São Paulo e Rio.',
            ],
            [
                'date' => 'Novembro de <script>document.write(new Date().getFullYear() - 3)</script>',
                'title' => 'Fase Beta',
                'description' => 'Lançamento beta com usuários no Brasil, coletando feedback e aprimorando nossa tecnologia.',
            ],
            [
                'date' => 'Junho de <script>document.write(new Date().getFullYear() - 2)</script>',
                'title' => 'Lançamento Global',
                'description' => 'Estreia global da EquiLoomPRO, levando nossa tecnologia de investimento a usuários no Brasil e no exterior.',
            ],
        ],

        'investment_title' => 'Revolucione sua forma de investir',
        'investment_text' => 'Experimente o futuro dos investimentos em ativos com a EquiLoomPRO. A combinação de IA e análise de dados amplia sua capacidade de navegar o mercado com precisão.',
        'investment_btn' => 'Começar',

        // Contact
        'contact_title' => 'Fale Conosco',
        'contact_text' => 'Fale com a gente para tirar dúvidas ou receber orientação — nosso time em São Paulo e Rio ajuda você a tomar decisões estratégicas com confiança.',
        'contact_form_enable_js' => 'Ative o JavaScript no seu navegador para concluir este formulário.',
        'contact_label_name' => 'Nome',
        'contact_label_email' => 'E-mail',
        'contact_label_message' => 'Comentário ou mensagem',
        'contact_submit' => 'Enviar',
        'contact_form_agreement' => ' * Ao clicar, você aceita a <a href="/br/privacy" class="form-link">Política de Privacidade</a> e os <a href="/br/terms" class="form-link">Termos &amp; Condições</a>.',
        'contact_form_success' => 'Formulário enviado com sucesso!',
        // Política de Privacidade
        'privacy_title' => 'Política de Privacidade',
        'privacy_updated' => '<b>Última atualização:</b> julho de <script>document.write(new Date().getFullYear() - 1)</script>',

        'privacy_1_title' => '1. Introdução',
        'privacy_1_text' => '
<p>Esta Política de Privacidade da EquiLoomPRO ("nós") explica como tratamos dados pessoais ao usar nossos serviços ("Serviços") e o site <a href="/br/">EquiLoomPRO</a> ("Site"). Proteger sua privacidade é prioridade.</p>
<p>Nossos Serviços e o Site podem conter links para terceiros. Não somos responsáveis pelas práticas de privacidade desses sites.</p>
<p>Tratamos as informações como confidenciais e aplicamos medidas técnicas e organizacionais robustas para proteger seus dados pessoais contra acesso não autorizado, perda ou divulgação.</p>
<p>Ao usar o Site, você pode fornecer informações pessoais (ex.: nome, e-mail, telefone). Utilizamos esses dados para verificar identidade, oferecer suporte, cumprir obrigações e enviar comunicações mediante seu consentimento.</p>
',

        'privacy_2_title' => '2. Coleta e Uso de Dados',
        'privacy_2_1_title' => '2.1. Geral',
        'privacy_2_1_text' => '
<p>Coletamos dados de visitantes, usuários e parceiros. Isso pode incluir endereço IP, nome, contato e informações de relacionamento, conforme a legislação brasileira aplicável.</p>
',

        'privacy_2_2_title' => '2.2. Coleta',
        'privacy_2_2_text' => '
<p>Ao acessar o Site, você consente com a coleta de dados (por exemplo, cookies, IP, formulários). Se não concordar, pedimos que não utilize o Site.</p>
',

        'privacy_2_3_title' => '2.3. Finalidade',
        'privacy_2_3_text' => '
<p>Tratamos dados pessoais para melhorar os Serviços, personalizar a experiência, prover suporte e cumprir obrigações legais. Bases legais e finalidades incluem:</p>
<table>
  <tbody>
    <tr><td>Cadastro de conta</td><td>Consentimento; Execução de contrato</td></tr>
    <tr><td>Prestação de serviços</td><td>Execução de contrato</td></tr>
    <tr><td>Suporte e atendimento</td><td>Interesse legítimo</td></tr>
    <tr><td>Marketing</td><td>Consentimento</td></tr>
    <tr><td>Melhoria de serviços</td><td>Interesse legítimo</td></tr>
  </tbody>
</table>
',

        'privacy_2_4_title' => '2.4. Compartilhamento',
        'privacy_2_4_text' => '
<p>Podemos compartilhar dados com fornecedores e parceiros confiáveis, assegurando compromisso com a Lei Geral de Proteção de Dados (LGPD — Lei nº 13.709/2018) e boas práticas de segurança.</p>
',

        'privacy_3_title' => '3. Parceiros',
        'privacy_3_text' => '
<p>Tratamos dados de parceiros com base em consentimento ou interesse legítimo, garantindo segurança e conformidade com a legislação de proteção de dados.</p>
',

        'privacy_4_title' => '4. Segurança',
        'privacy_4_text' => '
<p>Implementamos salvaguardas técnicas e organizacionais para proteger dados pessoais. Embora busquemos altos padrões, nenhum sistema é totalmente imune a incidentes.</p>
',

        'privacy_5_title' => '5. Cookies',
        'privacy_5_text' => '
<p>Consulte nossa <a href="/br/cookie">Política de Cookies</a> para detalhes sobre cookies e tecnologias de rastreamento.</p>
',

        'privacy_6_title' => '6. Links de Terceiros',
        'privacy_6_text' => '
<p>Nosso Site pode conter links externos. Não somos responsáveis pelas políticas de privacidade desses terceiros.</p>
',

        'privacy_7_title' => '7. Retenção de Dados',
        'privacy_7_text' => '
<p>Reteremos dados pessoais apenas pelo tempo necessário. Após o encerramento de conta, os dados são eliminados conforme a lei aplicável.</p>
',

        'privacy_8_title' => '8. Seus Direitos',
        'privacy_8_text' => '
<p>Nos termos da LGPD, você pode solicitar acesso, correção, exclusão, portabilidade, restrição de tratamento ou se opor ao tratamento de seus dados, além de revogar consentimentos.</p>
',

        'privacy_9_title' => '9. Marketing',
        'privacy_9_text' => '
<p>Podemos usar seus dados para marketing com seu consentimento. Você pode revogá-lo a qualquer momento, entrando em contato conosco.</p>
',

        'privacy_10_title' => '10. Aceitação da Política',
        'privacy_10_text' => '
<p>Ao usar o Site ou os Serviços, você concorda com esta Política. Poderemos atualizá-la, e o uso continuado implica aceitação das alterações.</p>
',

        'privacy_11_title' => '11. Divulgação Legal',
        'privacy_11_text' => '
<p>Poderemos divulgar dados pessoais quando exigido por lei ou para proteger nossos direitos.</p>
',

        'privacy_12_title' => '12. Contato',
        'privacy_12_text' => '
<p>Para questões de privacidade, fale com nosso Encarregado (DPO) em <a href="mailto:support@zevriocapiture.org">support@zevriocapiture.org</a>.</p>
',

        // Termos de Uso
        'terms_title' => 'Termos de Uso',
        'terms_updated' => '<b>Última atualização:</b> julho de <script>document.write(new Date().getFullYear() - 1)</script>',

        'terms_1_title' => '1. Introdução',
        'terms_1_text' => '
<p>Bem-vindo ao site da EquiLoomPRO ("Site"), operado pela EquiLoomPRO ("nós"). Ao usar o Site ou os serviços ("Serviços"), você concorda com estes Termos e com nossa Política de Privacidade. Contato: <a href="mailto:support@zevriocapiture.org">support@zevriocapiture.org</a>.</p>
<p>Podemos atualizar os Termos sem aviso prévio. O uso contínuo indica aceitação.</p>
',

        'terms_2_title' => '2. Ausência de Assessoria de Investimentos',
        'terms_2_text' => '
<p>Não oferecemos assessoria financeira personalizada. As informações têm caráter geral e não consideram seus objetivos, situação financeira ou necessidades. Procure um profissional independente antes de investir.</p>
',

        'terms_3_title' => '3. Serviços',
        'terms_3_text' => '
<p>Nem todos os Serviços são prestados diretamente por nós. Serviços, sites ou produtos de terceiros exibidos não constituem endosso. Não nos responsabilizamos por conteúdo ou disponibilidade de terceiros.</p>
',

        'terms_4_title' => '4. Escopo e Alterações',
        'terms_4_text' => '
<p>Estes Termos constituem o acordo integral entre você e nós. Podemos modificá-los a nosso critério; o uso contínuo significa aceitação.</p>
',

        'terms_5_title' => '5. Elegibilidade',
        'terms_5_text' => '
<p>Os Serviços destinam-se a maiores de 18 anos capazes de celebrar contratos válidos segundo as leis brasileiras.</p>
',

        'terms_6_title' => '6. Descrição dos Serviços',
        'terms_6_text' => '
<p><b>Serviços por Assinatura:</b> Mediante cadastro, você pode acessar conteúdos próprios ou de terceiros (gratuitos ou pagos). Não constituem assessoria de investimentos.</p>
<p><b>Serviços de Terceiros:</b> Produtos e serviços de terceiros podem ser oferecidos. Não respondemos por sua exatidão ou indisponibilidade.</p>
<p><b>Geral:</b> Você deve fornecer dados verídicos no cadastro. Não nos responsabilizamos por interrupções de serviço.</p>
',

        'terms_7_title' => '7. Direitos de Propriedade',
        'terms_7_text' => '
<p>O Site e seus conteúdos são protegidos por direitos autorais, marcas e outras leis. É proibida a reprodução ou redistribuição não autorizada.</p>
',

        'terms_8_title' => '8. Informações Confidenciais',
        'terms_8_text' => '
<p>Informações confidenciais serão protegidas por um ano após a rescisão, exceto se já forem públicas ou recebidas sem restrições.</p>
',

        'terms_9_title' => '9. Hiperlinks e Frames',
        'terms_9_text' => '
<p>É vedado criar links, frames ou referências ao nosso Site sem permissão. Você é responsável por danos decorrentes dessas ações.</p>
',

        'terms_10_title' => '10. Isenção de Garantias',
        'terms_10_text' => '
<p>Os Serviços e conteúdos são fornecidos "no estado em que se encontram". Não garantimos ausência de erros, interrupções ou disponibilidade contínua.</p>
',

        'terms_11_title' => '11. Limitação de Responsabilidade',
        'terms_11_text' => '
<p>Na máxima extensão permitida por lei, não seremos responsáveis por danos indiretos, lucros cessantes ou perda de dados. Nossa responsabilidade total, quando aplicável, não excederá <b>R$ 1.000</b>.</p>
',

        'terms_12_title' => '12. Indenização',
        'terms_12_text' => '
<p>Você concorda em nos indenizar por reclamações decorrentes do uso do Site, violação destes Termos ou de direitos de terceiros.</p>
',

        'terms_13_title' => '13. Sites de Terceiros',
        'terms_13_text' => '
<p>Não somos responsáveis por sites de terceiros vinculados nem por suas políticas e conteúdos.</p>
',

        'terms_14_title' => '14. Proteção de Dados',
        'terms_14_text' => '
<p>Observamos a LGPD (Lei nº 13.709/2018) e demais normas brasileiras de privacidade. Mantemos medidas de segurança, coletamos consentimentos quando necessários e atendemos solicitações de titulares. Notificaremos incidentes de segurança conforme exigido pela lei aplicável.</p>
',

        'terms_15_title' => '15. Lei Aplicável e Resolução de Conflitos',
        'terms_15_text' => '
<p>Estes Termos são regidos pelas leis da República Federativa do Brasil. Quaisquer controvérsias serão resolvidas por arbitragem em São Paulo/SP, conforme regulamento aplicável, com idioma português.</p>
',

        'terms_16_title' => '16. Contato',
        'terms_16_text' => '
<p>Para dúvidas sobre estes Termos, entre em contato em <a href="mailto:support@zevriocapiture.org">support@zevriocapiture.org</a> ou via <a href="/br/contact">/br/contact</a>.</p>
',
    ],
    'co' => [
        'language_iso' => 'es',
        'country_name' => 'Colombia',
        'locale' => 'es_CO',
        'locale_lang' => 'es-CO',
        'language_name' => 'Español',
        'city' => 'Bogotá',
        'country_code' => 'CO',
        'geo_position' => '4.710989, -74.072090',
        'jsonld_organization_name' => 'EquiLoomPRO',
        'jsonld_organization_review_rating' => '4.95',
        'jsonld_organization_review_author' => 'Usuario de EquiLoomPRO',
        'jsonld_software_categories' => 'Herramienta de Inversión en Criptomonedas',
        // precio convertido a COP (~190 USD ≈ 780.000 COP aprox)
        'jsonld_software_price' => '780000',
        'jsonld_software_price_currency' => 'COP',
        'brand_name_api' => 'Zevcap App IA',

        'home' => 'Inicio',
        'about' => 'Sobre Nosotros',
        'contact' => 'Contacto',
        'privacy' => 'Política de Privacidad',
        'terms' => 'Términos y Condiciones',

        // Home (index)
        'title' => 'EquiLoomPRO — Inversión Automatizada & Gestión de Efectivo',
        'meta_description' => 'Haz crecer tu patrimonio con EquiLoomPRO. Portafolios asistidos por IA, ahorro automatizado y funciones eficientes para invertir con confianza.',
        'meta_keywords' => 'EquiLoomPRO, inversión automatizada, inversión IA, gestión de portafolio, cuenta de efectivo, ahorro, impuestos, Colombia, Bogotá',

        // Open Graph / Twitter
        'og_title' => 'EquiLoomPRO — Plataforma de Inversión con IA',
        'og_description' => 'Portafolios automatizados, efectivo inteligente e inversión sin esfuerzo. Empieza con EquiLoomPRO y haz crecer tu patrimonio con confianza.',
        'og_image' => '/assets/images/share.webp',

        'twitter_title' => 'EquiLoomPRO — Inversión Automatizada',
        'twitter_description' => 'Portafolios asistidos por IA y ahorro automatizado para ayudarte a crecer tu dinero con confianza.',

        // About desc
        'about_desc_content' => 'Conoce EquiLoomPRO — un equipo en Bogotá y Medellín de inversionistas y expertos en IA construyendo una plataforma de inversión precisa y veloz para tu crecimiento financiero.',
        'about_keywords' => 'sobre EquiLoomPRO, compañía, equipo IA inversión, plataforma de inversión, Colombia',

        // Contact desc
        'contact_desc_content' => '¿Preguntas o asesoría? Contacta a EquiLoomPRO — nuestros expertos en Colombia están listos para ayudarte a tomar decisiones financieras con confianza.',
        'contact_keywords' => 'contactar EquiLoomPRO, soporte, ayuda, inversión, Bogotá',

        // Terms desc
        'terms_desc_content' => 'Lee los Términos y Condiciones para usar el sitio y servicios de EquiLoomPRO en Colombia.',
        'terms_keywords' => 'términos de uso, condiciones, EquiLoomPRO, legal, Colombia',

        // Privacy desc
        'privacy_desc_content' => 'Cómo EquiLoomPRO recolecta, usa y protege tus datos personales, tus derechos y nuestro compromiso con la privacidad.',
        'privacy_keywords' => 'política de privacidad, protección de datos, habeas data, EquiLoomPRO, Colombia',

        // JSON-LD content
        'jsonld_organization_review_body' => 'EquiLoomPRO ofrece una plataforma de inversión asistida por IA que combina portafolios automatizados, gestión de efectivo inteligente y funciones fiscales eficientes para ayudar a clientes en Bogotá y Medellín a crecer su patrimonio con confianza.',

        // FAQ
        'jsonld_faq_1_question' => '¿Qué es EquiLoomPRO?',
        'jsonld_faq_1_answer' => 'EquiLoomPRO es una plataforma de inversión asistida por IA que te ayuda a construir y automatizar portafolios diversificados, optimizar ahorros e invertir con confianza.',

        'jsonld_faq_2_question' => '¿Cómo me ayuda EquiLoomPRO a invertir?',
        'jsonld_faq_2_answer' => 'Ofrecemos portafolios personalizables o automatizados, herramientas de efectivo y funciones diseñadas para mejorar resultados después de impuestos.',

        'jsonld_faq_3_question' => '¿Está disponible EquiLoomPRO en Colombia?',
        'jsonld_faq_3_answer' => 'Sí. EquiLoomPRO apoya clientes en Bogotá, Medellín y en toda Colombia, adaptando la experiencia a tu moneda local.',

        'jsonld_faq_4_question' => '¿Debo usar automatización o IA?',
        'jsonld_faq_4_answer' => 'La automatización es opcional. Puedes dejar que la plataforma maneje tareas rutinarias o ajustar tu portafolio manualmente.',

        'jsonld_faq_5_question' => '¿Cómo empiezo?',
        'jsonld_faq_5_answer' => 'Crea tu perfil, elige o personaliza un portafolio y fondea tu cuenta. No hay comisiones ocultas.',

        'jsonld_faq_6_question' => '¿Cómo protege EquiLoomPRO mis datos?',
        'jsonld_faq_6_answer' => 'Aplicamos medidas de seguridad robustas y seguimos la legislación colombiana (Habeas Data, Ley 1581 de 2012).',

        // Header
        'header_logo_alt' => 'Logo EquiLoomPRO',
        'header_logo_text' => 'EquiLoomPRO',
        'header_burger_alt' => 'Menú',
        'header_cross_alt' => 'Cerrar',

        // Hero
        'hero_form_title' => 'Regístrate ahora',
        'hero_form_notice' => '* Al hacer clic aceptas la <a href="/co/privacy" class="form-link">Política de Privacidad</a> y los <a href="/co/terms" class="form-link">Términos y Condiciones</a>.',
        'hero_title' => 'Haz tuyo el patrimonio.',
        'hero_subtitle' => 'Inversión y ahorro personalizados, automatizados y sin esfuerzo.',
        'hero_stat_nerdwallet' => "Mejor Robo-advisor, 2019<sup class=\"sup\">1</sup><br>Mejor App de Gestión de Efectivo, 2020<sup class=\"sup\">1</sup>",
        'hero_stat_investopedia' => "Mejor Robo-advisor, 2020<sup class=\"sup\">1</sup>",
        'hero_stat_clients' => 'Clientes confiables',
        'hero_stat_funds' => 'En fondos de clientes',
        'hero_stat_appstore' => 'App Store de Apple <sup class=\"sup\">2</sup>',
        'hero_stat_playstore' => 'Google Play Store <sup class=\"sup\">2</sup>',

        // Inversión
        'investition_title' => 'Invertir no es fácil. Nosotros lo hacemos parecerlo.',
        'investition_text' => 'Podemos personalizar un portafolio para ti o dejar que lo armes tú mismo. Nuestra automatización optimiza tu rendimiento y ayuda a reducir impuestos.',
        'investition_btn_start' => 'Comenzar a invertir',
        'investition_btn_more' => 'Saber más',
        'investition_notification_app' => 'EquiLoomPRO',
        'investition_notification_time' => 'ahora',
        'investition_notification_1' => 'Te ahorramos <span>$250.000 COP</span> en impuestos.',
        'investition_notification_2' => 'Invertimos automáticamente tu depósito de <span>$800.000 COP</span>.',

        // Efectivo
        'cash_title' => 'Efectivo diario, diseñado para construir riqueza a largo plazo.',
        'cash_text' => 'Nuestra cuenta de Efectivo, en alianza con bancos regulados, te permite automatizar ahorros, pagar facturas, retirar en cajeros y reinvertir tu excedente en segundos.',
        'cash_btn_start' => 'Empezar a ahorrar',
        'cash_btn_more' => 'Saber más',
        'cash_img_phone_alt' => 'Teléfono',
        'cash_img_card_alt' => 'Tarjeta',

        // Ahorro
        'saving_title' => 'Ahorrar e invertir. Todo mientras descansas.',
        'saving_text' => 'Cuéntanos tu meta de ahorro y reservaremos automáticamente efectivo extra. Al conectar todas tus cuentas, solo necesitas una app para ver crecer tu patrimonio.',
        'saving_img_alt' => 'Ahorro',

        // Testimonios
        'testimonial_title' => 'TESTIMONIOS',
        'testimonial_1_quote' => 'Es el recurso <strong>más útil</strong> para invertir, planear mi retiro y ver toda mi vida financiera.',
        'testimonial_1_author' => 'Andrés M',
        'testimonial_2_quote' => '<strong>EquiLoomPRO</strong> fue lo primero que realmente me motivó a ahorrar.',
        'testimonial_2_author' => 'Camila R',
        'testimonial_3_quote' => 'Es <strong>automático</strong>, y soy perezoso.',
        'testimonial_3_author' => 'Juan P',

        // Confianza
        'trust_title' => 'Más de <strong>120.000</strong> personas en Colombia ya usan EquiLoomPRO para ganar más y preocuparse menos',
        'trust_btn' => 'Comenzar ahora',
        'trust_img_alt' => 'Ventana abierta con planta',
        'trust_subtitle' => 'MENCIONADO EN',
        'trust_logo_wsj_alt' => 'WSJ',
        'trust_logo_bloomberg_alt' => 'Bloomberg',
        'trust_logo_nyt_alt' => 'The New York Times',
        'trust_logo_reuters_alt' => 'Reuters',
        'trust_logo_cnbc_alt' => 'CNBC',
        // Footer
        'footer_logo_alt' => 'Logo EquiLoomPRO',
        'footer_logo_text' => 'EquiLoomPRO',

        'footer_legal_note_1' => 'Los testimonios fueron dados por clientes de EquiLoomPRO. No se garantiza que otros tengan experiencias o éxitos similares.',
        'footer_legal_note_2' => 'Nerdwallet e Investopedia (los “Patrocinadores”) reciben compensación por referir potenciales clientes a EquiLoomPRO. No existe relación formal entre ellos y EquiLoomPRO más allá de esta publicidad.',
        'footer_legal_note_3' => 'Las calificaciones de App Store y Google Play se basan en reseñas desde febrero 2014 (Apple) y diciembre 2015 (Google) hasta junio <span class="currentYear"></span>.',
        'footer_legal_note_4' => 'Al usar este sitio, aceptas los <a href="/co/terms" class="legal-link">Términos de Uso</a> y la <a href="/co/privacy" class="legal-link">Política de Privacidad</a>.',
        'footer_legal_note_5' => 'EquiLoomPRO confía en fuentes consideradas confiables, incluyendo clientes y terceros, pero no garantiza su exactitud.',
        'footer_legal_note_6' => 'Trabajamos con bancos y proveedores regulados en Colombia para ofrecer servicios de efectivo y tarjeta.',
        'footer_legal_note_7' => 'Los servicios de cuenta de efectivo se ofrecen a través de aliados bancarios regulados y son distintos a las cuentas de inversión.',
        'footer_legal_note_8' => 'La estrategia de cosecha de pérdidas fiscales depende del perfil tributario completo del cliente y puede generar más operaciones o costos adicionales.',
        'footer_legal_note_9' => 'Toda inversión implica riesgo, incluida la posible pérdida del capital invertido. El rendimiento pasado no garantiza resultados futuros.',

        'footer_legal_copy' => 'EquiLoomPRO y sus entidades afiliadas son propiedad de EquiLoomPRO Corporation.<br><br> © <span class="currentYear"></span> EquiLoomPRO Corporation. Todos los derechos reservados.',

        // About
        'about_title' => 'Sobre Nosotros',
        'about_text' => 'En <span class="brand-name">EquiLoomPRO</span>, unimos expertos en IA e inversionistas de Bogotá y Medellín para construir una plataforma de inversión de primer nivel.',
        'about_content_title' => 'Nuestro núcleo es un equipo global diverso y apasionado, unido por la misión de transformar el futuro de la inversión.',
        'about_content_text_1' => 'Transformamos el panorama de inversión aprovechando el poder de la inteligencia artificial. Combinamos la visión de expertos financieros con tecnología de vanguardia.',
        'about_content_text_2' => 'Nuestro equipo multicultural innova constantemente, integrando las últimas tendencias de IA y finanzas para ofrecer precisión, velocidad y rentabilidad.',
        'about_content_img_alt' => 'Equipo de EquiLoomPRO en Colombia',

        'period' => [
            [
                'date' => 'Abril <script>document.write(new Date().getFullYear() - 3)</script>',
                'title' => 'Nacimiento de una Visión',
                'description' => 'EquiLoomPRO fue fundada con la meta de revolucionar la inversión con IA.',
            ],
            [
                'date' => 'Julio <script>document.write(new Date().getFullYear() - 3)</script>',
                'title' => 'Crecimiento y Desarrollo',
                'description' => 'Recaudamos 3.000 millones COP para impulsar el desarrollo de la plataforma y expandir el equipo en Bogotá.',
            ],
            [
                'date' => 'Noviembre <script>document.write(new Date().getFullYear() - 3)</script>',
                'title' => 'Fase Beta',
                'description' => 'Lanzamos la versión beta en Medellín, recolectando retroalimentación de usuarios colombianos.',
            ],
            [
                'date' => 'Junio <script>document.write(new Date().getFullYear() - 2)</script>',
                'title' => 'Lanzamiento Global',
                'description' => 'EquiLoomPRO debutó a nivel mundial, llevando su tecnología de inversión avanzada a usuarios de todo el mundo.',
            ],
        ],

        'investment_title' => 'Revoluciona tu forma de invertir',
        'investment_text' => 'Experimenta el futuro de la inversión con EquiLoomPRO. Nuestra combinación de IA y analítica avanzada ofrece precisión y oportunidades únicas.',
        'investment_btn' => 'Comenzar ahora',

        // Contact
        'contact_title' => 'Contáctanos',
        'contact_text' => 'Escríbenos para resolver tus dudas. Nuestro equipo en Colombia te ayudará a tomar decisiones financieras estratégicas y seguras.',
        'contact_form_enable_js' => 'Por favor habilita JavaScript en tu navegador para completar este formulario.',
        'contact_label_name' => 'Nombre',
        'contact_label_email' => 'Correo electrónico',
        'contact_label_message' => 'Mensaje',
        'contact_submit' => 'Enviar',
        'contact_form_agreement' => '* Al enviar aceptas la <a href="/co/privacy" class="form-link">Política de Privacidad</a> y los <a href="/co/terms" class="form-link">Términos y Condiciones</a>.',
        'contact_form_success' => '¡Formulario enviado con éxito!',

        // Privacy Policy (Colombia, completo 1–12)
        'privacy_title' => 'Política de Privacidad',
        'privacy_updated' => '<b>Última actualización:</b> Julio <script>document.write(new Date().getFullYear() - 1)</script>',

        'privacy_1_title' => '1. Introducción',
        'privacy_1_text' => '
<p>Esta Política de Privacidad de EquiLoomPRO (en adelante, "EquiLoomPRO", "nosotros") describe cómo tratamos los datos personales cuando utilizas nuestros servicios ("Servicios") y el sitio web <a href="/co/">EquiLoomPRO</a> (el "Sitio").</p>
<p>Tratamos los datos conforme a la normativa colombiana de protección de datos personales, incluida la Ley 1581 de 2012, el Decreto 1377 de 2013 y demás disposiciones aplicables. La autoridad de control en Colombia es la Superintendencia de Industria y Comercio (SIC).</p>
<p>Cuando esta Política haga referencia a "Responsable", se entenderá EquiLoomPRO como responsable del tratamiento; cuando haga referencia a "Encargados", se entenderá a los terceros que tratan datos por cuenta nuestra.</p>
',

        'privacy_2_title' => '2. Recolección y Uso de Datos',
        'privacy_2_1_title' => '2.1. Alcance y categorías de datos',
        'privacy_2_1_text' => '
<p>Recolectamos datos de visitantes del Sitio ("Visitantes"), usuarios registrados ("Usuarios") y aliados comerciales ("Aliados"). Las categorías pueden incluir: datos identificativos (nombre, documento, ciudad), de contacto (correo, teléfono), transaccionales y financieros necesarios para la prestación del servicio, datos de uso del Sitio (p. ej., dirección IP, identificadores de dispositivo, páginas visitadas) y cualquier información que nos suministres voluntariamente en formularios.</p>
',

        'privacy_2_2_title' => '2.2. Medios de recolección',
        'privacy_2_2_text' => '
<p>Recolectamos datos cuando: (i) completas formularios o te registras en <a href="/co/">/co/</a>; (ii) te comunicas con soporte; (iii) interactúas con funciones del Sitio (cookies y tecnologías similares); y (iv) cuando terceros autorizados nos transfieren datos para prestar los Servicios. Si no estás de acuerdo con esta recolección, por favor abstente de usar el Sitio.</p>
',

        'privacy_2_3_title' => '2.3. Finalidades y bases legales',
        'privacy_2_3_text' => '
<p>Tratamos datos personales para las siguientes finalidades y con las bases legales indicadas:</p>
<table>
  <tbody>
    <tr><td>Registro de cuenta y verificación de identidad</td><td>Consentimiento; Ejecución de contrato</td></tr>
    <tr><td>Prestación, operación y mejora de los Servicios</td><td>Ejecución de contrato; Interés legítimo</td></tr>
    <tr><td>Atención de peticiones, quejas, reclamos y soporte</td><td>Interés legítimo; Obligación legal</td></tr>
    <tr><td>Gestión de pagos y procesos contables</td><td>Ejecución de contrato; Obligación legal</td></tr>
    <tr><td>Prevención de fraude y seguridad</td><td>Interés legítimo; Obligación legal</td></tr>
    <tr><td>Comunicaciones comerciales y marketing</td><td>Consentimiento</td></tr>
    <tr><td>Cumplimiento regulatorio y requerimientos de autoridades</td><td>Obligación legal</td></tr>
  </tbody>
</table>
',

        'privacy_2_4_title' => '2.4. Compartición y transferencias',
        'privacy_2_4_text' => '
<p>Podemos compartir datos con Encargados y Aliados regulados (p. ej., proveedores tecnológicos, entidades financieras y de pagos) para las finalidades descritas, bajo acuerdos de confidencialidad y protección de datos. Cuando sea necesario transferir datos a otros países, aplicaremos las salvaguardas exigidas por la ley colombiana (cláusulas contractuales, consentimiento del titular u otras habilitaciones).</p>
',

        'privacy_3_title' => '3. Tratamiento de datos de Aliados',
        'privacy_3_text' => '
<p>Tratamos datos de contacto y de relación de nuestros Aliados con base en el consentimiento o interés legítimo, para fines de gestión contractual, cumplimiento y administración de la relación comercial, adoptando medidas de seguridad adecuadas.</p>
',

        'privacy_4_title' => '4. Seguridad de la información',
        'privacy_4_text' => '
<p>Implementamos medidas técnicas, administrativas y organizativas razonables para proteger los datos personales contra acceso, pérdida, alteración o divulgación no autorizada. Aunque buscamos la máxima seguridad, ningún sistema es totalmente infalible.</p>
',

        'privacy_5_title' => '5. Cookies y tecnologías similares',
        'privacy_5_text' => '
<p>Usamos cookies y tecnologías similares para recordar tus preferencias, analizar el uso del Sitio y mejorar la experiencia. Consulta nuestra <a href="/co/cookie">Política de Cookies</a> para conocer tipos, finalidades y cómo gestionar tu consentimiento.</p>
',

        'privacy_6_title' => '6. Enlaces y servicios de terceros',
        'privacy_6_text' => '
<p>El Sitio puede enlazar a sitios o servicios de terceros. No controlamos sus prácticas de privacidad; revisa sus políticas antes de proporcionar datos personales.</p>
',

        'privacy_7_title' => '7. Conservación de datos',
        'privacy_7_text' => '
<p>Conservamos los datos durante el tiempo necesario para cumplir con las finalidades informadas, la relación contractual y los plazos exigidos por normas colombianas (p. ej., obligaciones contables y tributarias). Una vez cumplidos, los datos se eliminarán o anonimizarán de forma segura, salvo obligaciones de conservación adicionales.</p>
',

        'privacy_8_title' => '8. Derechos del titular y procedimientos',
        'privacy_8_text' => '
<p>Como titular, puedes ejercer los derechos de acceso, actualización, rectificación, supresión (cuando proceda), revocación del consentimiento y presentación de reclamos. Para ejercerlos:</p>
<ol>
  <li>Escríbenos a <a href="mailto:soporte@zevriocapiture.org">soporte@zevriocapiture.org</a> o usa el formulario en <a href="/co/contact">/co/contact</a>, indicando tu nombre, tipo y número de documento, datos de contacto y solicitud concreta.</li>
  <li>Consultas: responderemos hasta en 10 días hábiles; reclamos: hasta en 15 días hábiles, conforme a la normativa colombiana. Si requerimos más tiempo, te informaremos los motivos y el nuevo plazo.</li>
  <li>Si consideras que no hemos atendido adecuadamente, puedes acudir ante la Superintendencia de Industria y Comercio (SIC), de acuerdo con la ley.</li>
</ol>
',

        'privacy_9_title' => '9. Comunicaciones comerciales y opt-out',
        'privacy_9_text' => '
<p>Podemos enviarte comunicaciones comerciales cuando hayas otorgado tu consentimiento. Puedes retirar tu consentimiento en cualquier momento utilizando los enlaces de cancelación incluidos en los mensajes o escribiendo a <a href="mailto:soporte@zevriocapiture.org">soporte@zevriocapiture.org</a>. La revocatoria no afecta tratamientos previos realizados legítimamente.</p>
',

        'privacy_10_title' => '10. Aceptación y cambios de esta Política',
        'privacy_10_text' => '
<p>Al usar el Sitio o los Servicios aceptas esta Política de Privacidad. Podemos actualizarla para reflejar cambios normativos o de operación. Publicaremos la versión vigente en <a href="/co/privacy">/co/privacy</a> e indicaremos la fecha de actualización. El uso continuo implica la aceptación de los cambios.</p>
',

        'privacy_11_title' => '11. Divulgación por requerimientos legales',
        'privacy_11_text' => '
<p>Podemos divulgar datos personales cuando sea requerido por ley, por autoridades competentes o para proteger nuestros derechos, seguridad, usuarios o el público, en cumplimiento de la normativa aplicable.</p>
',

        'privacy_12_title' => '12. Contacto del Responsable',
        'privacy_12_text' => '
<p>Responsable: EquiLoomPRO</p>
<p>Dirección de contacto: Bogotá, D.C., Colombia</p>
<p>Correo de soporte y protección de datos: <a href="mailto:soporte@zevriocapiture.org">soporte@zevriocapiture.org</a></p>
<p>Si tienes preguntas sobre esta Política o sobre el tratamiento de tus datos, contáctanos mediante el formulario en <a href="/co/contact">/co/contact</a>.</p>
',

        // Terms of Use (Colombia, completo 1–16)
        'terms_title' => 'Términos de Uso',
        'terms_updated' => '<b>Última actualización:</b> Julio <script>document.write(new Date().getFullYear() - 1)</script>',

        'terms_1_title' => '1. Introducción',
        'terms_1_text' => '
<p>Bienvenido al sitio web de EquiLoomPRO ("Sitio"), operado por EquiLoomPRO ("nosotros"). Al usar nuestro Sitio o servicios ("Servicios"), aceptas estos Términos de Uso ("Términos") y la <a href="/co/privacy">Política de Privacidad</a>. Si no estás de acuerdo, no utilices el Sitio ni los Servicios. Para soporte: <a href="mailto:soporte@zevriocapiture.org">soporte@zevriocapiture.org</a>.</p>
<p>Podemos actualizar estos Términos en cualquier momento. El uso continuado implica aceptación de los cambios.</p>
',

        'terms_2_title' => '2. No constituye asesoría de inversión',
        'terms_2_text' => '
<p>La información del Sitio es de carácter general y no considera tus objetivos, situación financiera o necesidades particulares. No constituye asesoría financiera, legal, tributaria ni de inversión. Antes de invertir, consulta a un asesor independiente.</p>
',

        'terms_3_title' => '3. Servicios',
        'terms_3_text' => '
<p>Algunos Servicios pueden prestarse junto con terceros (p. ej., entidades financieras o proveedores tecnológicos en Colombia). No respaldamos ni garantizamos el contenido, desempeño o disponibilidad de servicios de terceros y no somos responsables por ellos.</p>
',

        'terms_4_title' => '4. Alcance y modificaciones',
        'terms_4_text' => '
<p>Estos Términos constituyen el acuerdo completo entre tú y EquiLoomPRO respecto del uso del Sitio y los Servicios, y sustituyen acuerdos previos sobre la misma materia. Podemos modificar o descontinuar funciones del Sitio en cualquier momento.</p>
',

        'terms_5_title' => '5. Elegibilidad',
        'terms_5_text' => '
<p>El Sitio y los Servicios están dirigidos a personas naturales mayores de 18 años con capacidad legal para contratar conforme a las leyes de la República de Colombia. Al usar el Sitio declaras cumplir con estos requisitos.</p>
',

        'terms_6_title' => '6. Descripción de los Servicios',
        'terms_6_text' => '
<p><b>Servicios por Suscripción:</b> Al registrarte puedes acceder a contenidos y herramientas (gratuitas o pagas) provistos por nosotros o por terceros. Dicho material es informativo y no sustituye asesoría profesional.</p>
<p><b>Servicios de Terceros:</b> Podrían ofrecerse productos o servicios de terceros (financieros o no). No garantizamos su exactitud o disponibilidad ni respondemos por imposibilidad de acceso.</p>
<p><b>General:</b> Debes proporcionar datos veraces y completos al registrarte. Podemos rechazar o suspender registros con información incompleta, inexacta o fraudulenta. No garantizamos disponibilidad ininterrumpida del Sitio.</p>
',

        'terms_7_title' => '7. Derechos de propiedad',
        'terms_7_text' => '
<p>El Sitio, su software, marcas, logotipos, textos, diseños y demás contenidos están protegidos por derechos de autor y otras normas aplicables. Queda prohibida su reproducción, distribución, extracción de datos ("scraping") o ingeniería inversa sin autorización escrita.</p>
',

        'terms_8_title' => '8. Información confidencial',
        'terms_8_text' => '
<p>Cada parte se compromete a proteger la información confidencial de la otra y usarla únicamente para los fines aquí permitidos. Esta obligación subsiste por un (1) año tras la terminación. No se considera confidencial la información pública, la desarrollada independientemente o la recibida legítimamente sin deber de confidencialidad.</p>
',

        'terms_9_title' => '9. Hipervínculos y "framing"',
        'terms_9_text' => '
<p>No puedes crear enlaces, "frames" o referencias que presenten el Sitio de forma engañosa o que afecten su reputación sin autorización previa y por escrito. Responderás por los perjuicios ocasionados por dichas acciones.</p>
',

        'terms_10_title' => '10. Descargos de responsabilidad',
        'terms_10_text' => '
<p>El Sitio y los Servicios se ofrecen "tal cual" y "según disponibilidad". No aseguramos que estén libres de errores, interrupciones o vulnerabilidades. No garantizamos resultados de inversión ni rendimiento alguno.</p>
',

        'terms_11_title' => '11. Limitación de responsabilidad',
        'terms_11_text' => '
<p>En la medida permitida por la ley, EquiLoomPRO no será responsable por daños indirectos, incidentales, especiales, punitivos o consecuenciales (incluida pérdida de utilidades, datos o ahorros). La responsabilidad total acumulada frente a ti por cualquier reclamación relacionada con el Sitio o los Servicios no excederá <b>$800.000 COP</b>.</p>
',

        'terms_12_title' => '12. Indemnización',
        'terms_12_text' => '
<p>Te comprometes a defender e indemnizar a EquiLoomPRO, sus directivos, empleados y afiliadas frente a reclamaciones de terceros derivadas de tu uso del Sitio o de un incumplimiento de estos Términos, en la medida permitida por la ley.</p>
',

        'terms_13_title' => '13. Sitios web de terceros',
        'terms_13_text' => '
<p>El Sitio puede contener enlaces a sitios de terceros. No controlamos ni somos responsables de su contenido, políticas o prácticas. Accedes bajo tu propio riesgo y te sugerimos revisar sus términos y políticas.</p>
',

        'terms_14_title' => '14. Protección de datos',
        'terms_14_text' => '
<p>Cumplimos la normativa colombiana de protección de datos personales (Ley 1581 de 2012 y demás normas). Implementamos medidas de seguridad, obtenemos consentimientos cuando corresponda y atendemos solicitudes de los titulares. En caso de incidentes de seguridad, seguiremos los procedimientos exigidos por la autoridad competente.</p>
',

        'terms_15_title' => '15. Ley aplicable y resolución de controversias',
        'terms_15_text' => '
<p>Estos Términos se rigen por las leyes de la República de Colombia. Cualquier disputa se someterá a los jueces de Bogotá, D.C., salvo que las partes acuerden previamente un mecanismo alternativo de solución de controversias conforme a la ley colombiana.</p>
',

        'terms_16_title' => '16. Contacto',
        'terms_16_text' => '
<p>Si tienes preguntas sobre estos Términos, contáctanos en <a href="mailto:soporte@zevriocapiture.org">soporte@zevriocapiture.org</a> o a través de nuestro formulario en <a href="/co/contact">/co/contact</a>.</p>
',
    ],
    'hn' => [
        'language_iso' => 'es',
        'country_name' => 'Honduras',
        'locale' => 'es_HN',
        'locale_lang' => 'es-HN',
        'language_name' => 'Español',
        'city' => 'Tegucigalpa',
        'country_code' => 'HN',
        'geo_position' => '14.0723, -87.1921',
        'jsonld_organization_name' => 'EquiLoomPRO',
        'jsonld_organization_review_rating' => '4.96',
        'jsonld_organization_review_author' => 'Usuario de EquiLoomPRO',
        'jsonld_software_categories' => 'Herramienta de Inversión en Criptomonedas',
        'jsonld_software_price' => '3700',
        'jsonld_software_price_currency' => 'HNL',
        'brand_name_api' => 'Zevcap App IA',

        'home' => 'Inicio',
        'about' => 'Sobre nosotros',
        'contact' => 'Contáctanos',
        'privacy' => 'Política de Privacidad',
        'terms' => 'Términos y Condiciones',

        // Home (index)
        'title' => 'EquiLoomPRO — Inversión Automática y Gestión de Efectivo',
        'meta_description' => 'Haz tuyo el crecimiento financiero con EquiLoomPRO. Portafolios asistidos por IA, ahorro automático y funciones fiscales inteligentes para invertir con confianza y aumentar tu dinero.',
        'meta_keywords' => 'EquiLoomPRO, inversión automática, inversión con IA, gestión de portafolios, cuenta de efectivo, ahorro, eficiente en impuestos, Honduras, Tegucigalpa',

        // Open Graph / Twitter
        'og_title' => 'EquiLoomPRO — Plataforma de Inversión con IA',
        'og_description' => 'Portafolios automatizados, efectivo inteligente e inversión sin esfuerzo. Comienza con EquiLoomPRO y haz crecer tu patrimonio con confianza.',
        'og_image' => '/assets/images/share.webp',

        'twitter_title' => 'EquiLoomPRO — Inversión Automatizada',
        'twitter_description' => 'Portafolios asistidos por IA y ahorro automático para ayudarte a crecer tu dinero con confianza.',

        // ---------- JSON-LD content ----------
        'jsonld_organization_review_body' => 'EquiLoomPRO ofrece una plataforma de inversión asistida por IA que combina portafolios automatizados, gestión inteligente de efectivo y funciones fiscales eficientes para ayudar a los clientes en Tegucigalpa a hacer crecer su patrimonio con confianza.',

        // FAQ
        'jsonld_faq_1_question' => '¿Qué es EquiLoomPRO?',
        'jsonld_faq_1_answer' => 'EquiLoomPRO es una plataforma de inversión asistida por IA que te ayuda a construir y automatizar portafolios diversificados, optimizar ahorros e invertir con confianza.',

        'jsonld_faq_2_question' => '¿Cómo me ayuda EquiLoomPRO a invertir?',
        'jsonld_faq_2_answer' => 'Ofrecemos portafolios personalizables o automatizados, herramientas de efectivo inteligentes y funciones diseñadas para mejorar los resultados después de impuestos.',

        'jsonld_faq_3_question' => '¿Está disponible EquiLoomPRO en Honduras?',
        'jsonld_faq_3_answer' => 'Sí. EquiLoomPRO apoya a clientes en Tegucigalpa y en todo Honduras, adaptando la experiencia a tu moneda y región.',

        'jsonld_faq_4_question' => '¿Debo usar siempre la automatización o la IA?',
        'jsonld_faq_4_answer' => 'La automatización es opcional. Puedes dejar que la plataforma maneje las tareas rutinarias o ajustar tu portafolio cuando lo desees.',

        'jsonld_faq_5_question' => '¿Cómo empiezo?',
        'jsonld_faq_5_answer' => 'Crea tu perfil, elige o personaliza un portafolio y deposita fondos en tu cuenta. No hay tarifas ocultas de registro; los servicios asociados pueden tener sus propios requisitos.',

        'jsonld_faq_6_question' => '¿Cómo protege EquiLoomPRO mis datos?',
        'jsonld_faq_6_answer' => 'Aplicamos medidas técnicas y organizativas robustas, siguiendo estándares de protección de datos aplicables en Honduras y la región.',

        // Header section
        'header_logo_alt' => 'Logo de EquiLoomPRO',
        'header_logo_text' => 'EquiLoomPRO',
        'header_burger_alt' => 'Menú',
        'header_cross_alt' => 'Cerrar',

        // Hero section
        'hero_form_title' => 'Regístrate ahora',
        'hero_form_notice' => '* Al hacer clic aceptas la <a href="/hn/privacy" class="form-link">Política de Privacidad</a> y los <a href="/hn/terms" class="form-link">Términos y Condiciones</a>.',
        'hero_title' => 'Haz tuyo el crecimiento financiero.',
        'hero_subtitle' => 'Inversión y Ahorro Personalizados, Automatizados y Sin Esfuerzo.',
        'hero_stat_nerdwallet' => "Mejor Robo-advisor, 2019<sup class=\"sup\">1</sup><br>Mejor App de Gestión de Efectivo, 2020<sup class=\"sup\">1</sup>",
        'hero_stat_investopedia' => "Mejor Robo-advisor, 2020<sup class=\"sup\">1</sup>",
        'hero_stat_clients' => 'Clientes de confianza',
        'hero_stat_funds' => 'Fondos gestionados',
        'hero_stat_appstore' => 'Apple App Store <sup class=\"sup\">2</sup>',
        'hero_stat_playstore' => 'Google Play Store <sup class=\"sup\">2</sup>',

        // Investition section
        'investition_title' => 'Invertir no es fácil. Nosotros lo hacemos sentir así.',
        'investition_text' => 'Podemos personalizar un portafolio para ti o dejar que lo construyas tú mismo, y nuestra poderosa automatización sacará el máximo provecho de tus inversiones, optimizando tu rendimiento y ayudando a reducir impuestos.',
        'investition_btn_start' => 'Comenzar a invertir',
        'investition_btn_more' => 'Saber más',
        'investition_notification_app' => 'EquiLoomPRO',
        'investition_notification_time' => 'ahora',
        'investition_notification_1' => 'Te ahorramos <span>L 1,500</span> en impuestos.',
        'investition_notification_2' => 'Invertimos automáticamente tu depósito de <span>L 4,800</span>.',

        // Cash section
        'cash_title' => 'Efectivo diario, diseñado para construir riqueza a largo plazo.',
        'cash_text' => 'Nuestra cuenta de Efectivo, ofrecida con bancos regulados, te permite automatizar ahorros, pagar facturas, retirar en miles de cajeros y reinvertir tu dinero extra en segundos.',
        'cash_btn_start' => 'Comenzar a ahorrar',
        'cash_btn_more' => 'Saber más',
        'cash_img_phone_alt' => 'Teléfono',
        'cash_img_card_alt' => 'Tarjeta',

        // Saving section
        'saving_title' => 'Ahorrar e invertir. Todo mientras descansas.',
        'saving_text' => 'Dinos para qué ahorras y apartaremos automáticamente dinero extra para alcanzar tus metas. Al conectar todas tus cuentas, solo necesitas una app para ver crecer tu patrimonio.',
        'saving_img_alt' => 'Ahorro',

        // Testimonials section
        'testimonial_title' => 'TESTIMONIOS',
        'testimonial_1_quote' => 'Es el mejor recurso para invertir, planear mi retiro y ver mi panorama financiero completo.',
        'testimonial_1_author' => 'Carlos M',
        'testimonial_2_quote' => '<strong>EquiLoomPRO</strong> fue lo primero que realmente me motivó a ahorrar dinero.',
        'testimonial_2_author' => 'Ana L',
        'testimonial_3_quote' => 'Es <strong>automático</strong>, y yo soy flojo.',
        'testimonial_3_author' => 'José R',

        // Trust section
        'trust_title' => 'Más de <strong>120,000</strong> personas en Honduras ya usan EquiLoomPRO para ganar más y preocuparse menos',
        'trust_btn' => 'Comenzar ahora',
        'trust_img_alt' => 'Ventana abierta con planta',
        'trust_subtitle' => 'MENCIONADO EN',
        'trust_logo_wsj_alt' => 'WSJ',
        'trust_logo_bloomberg_alt' => 'Bloomberg',
        'trust_logo_nyt_alt' => 'The New York Times',
        'trust_logo_reuters_alt' => 'Reuters',
        'trust_logo_cnbc_alt' => 'CNBC',

        // Footer section
        'footer_logo_alt' => 'Logo de EquiLoomPRO',
        'footer_logo_text' => 'EquiLoomPRO',
        'footer_legal_note_1' => 'Los testimonios fueron dados por clientes de EquiLoomPRO Asesores y EquiLoomPRO Corretaje. No hay garantía de que los clientes tengan experiencias o éxitos similares.',
        'footer_legal_note_2' => 'Nerdwallet e Investopedia (los “Patrocinadores”) reciben compensación por referir clientes potenciales a EquiLoomPRO Asesores a través de anuncios en sus sitios web. Los Patrocinadores y EquiLoomPRO Asesores no tienen relación formal fuera de este acuerdo.',
        'footer_legal_note_3' => 'Las calificaciones en Apple App Store y Google Play Store se basan en reseñas de usuarios recopiladas entre febrero 2014 (Apple) y diciembre 2015 (Google) hasta junio <span class="currentYear"></span>.',
        'footer_legal_note_4' => 'Al usar este sitio, entiendes que la información es solo con fines informativos y aceptas nuestros <a href="/hn/terms" class="legal-link">Términos de Uso</a> y <a href="/hn/privacy" class="legal-link">Política de Privacidad</a>.',
        'footer_legal_note_5' => 'EquiLoomPRO Asesores depende de fuentes confiables, incluidos clientes y terceros, pero no puede garantizar exactitud o integridad. No constituye oferta o recomendación para comprar o vender valores.',
        'footer_legal_note_6' => 'Colaboramos con bancos y proveedores de pagos regulados en Honduras para ofrecerte funciones de efectivo y tarjeta. Los servicios bancarios dependen de la verificación de identidad y leyes locales.',
        'footer_legal_note_7' => 'Las cuentas de efectivo se ofrecen mediante bancos y corredores regulados, separados de las cuentas de inversión. Los servicios de gestión son provistos por EquiLoomPRO Asesores o entidades afiliadas.',
        'footer_legal_note_8' => 'La efectividad de la estrategia de Cosecha de Pérdidas Fiscales depende del perfil fiscal del cliente y puede generar más transacciones y costos. Puede que las pérdidas no sean compensadas por ganancias suficientes.',
        'footer_legal_note_9' => 'Toda inversión implica riesgo, incluida la posible pérdida del dinero invertido. Los rendimientos pasados no garantizan resultados futuros.',
        'footer_legal_copy' => 'EquiLoomPRO, EquiLoomPRO Asesores y EquiLoomPRO Corretaje son subsidiarias de EquiLoomPRO Corporation. <br><br> © <span class="currentYear"></span> EquiLoomPRO Corporation. Todos los derechos reservados.',

        // About -----------------------------------------------
        'about_title' => 'Sobre nosotros',
        'about_text' => 'En <span class="brand-name">EquiLoomPRO</span>, somos un equipo de inversionistas y expertos en IA dedicados a crear una plataforma de inversión de alto nivel, reconocida por su precisión y rapidez.',
        'about_content_title' => 'Nuestro núcleo es un equipo global diverso y apasionado, con la misión de transformar el futuro de la inversión.',
        'about_content_text_1' => 'Nos enfocamos en revolucionar el panorama de inversión aprovechando el poder de la inteligencia artificial. Combinamos la experiencia de inversionistas con tecnología de vanguardia para ofrecer precisión, velocidad y rentabilidad.',
        'about_content_text_2' => 'Nuestro equipo global aporta perspectivas diversas, innovando constantemente para incorporar las últimas tendencias financieras y de IA en nuestra plataforma.',
        'about_content_img_alt' => 'Equipo de EquiLoomPRO',
        'period' => [
            [
                'date' => 'Abril <script>document.write(new Date().getFullYear() - 3)</script>',
                'title' => 'Nacimiento de una visión',
                'description' => 'EquiLoomPRO se fundó con la visión de revolucionar la inversión mediante inteligencia artificial.',
            ],
            [
                'date' => 'Julio <script>document.write(new Date().getFullYear() - 3)</script>',
                'title' => 'Crecimiento y desarrollo',
                'description' => 'Recaudamos L 90 millones en financiamiento, impulsando el desarrollo de la plataforma y la expansión del equipo.',
            ],
            [
                'date' => 'Noviembre <script>document.write(new Date().getFullYear() - 3)</script>',
                'title' => 'Fase Beta',
                'description' => 'Lanzamos la versión beta de EquiLoomPRO, obteniendo retroalimentación de usuarios y mejorando la tecnología.',
            ],
            [
                'date' => 'Junio <script>document.write(new Date().getFullYear() - 2)</script>',
                'title' => 'Lanzamiento Global',
                'description' => 'EquiLoomPRO debutó globalmente, llevando nuestra tecnología de inversión avanzada a usuarios en todo el mundo.',
            ],
        ],
        'investment_title' => 'Revoluciona tu manera de invertir',
        'investment_text' => 'Vive el futuro de la inversión en activos con EquiLoomPRO. Nuestra combinación innovadora de IA y análisis de datos te permite navegar el mercado con precisión inigualable.',
        'investment_btn' => 'Comenzar ahora',

        // Contact
        'contact_title' => 'Contáctanos',
        'contact_text' => 'Escríbenos para recibir orientación o resolver dudas. Nuestro equipo de expertos te ayudará a tomar decisiones de inversión seguras y estratégicas.',
        'contact_form_enable_js' => 'Activa JavaScript en tu navegador para completar este formulario.',
        'contact_label_name' => 'Nombre',
        'contact_label_email' => 'Correo electrónico',
        'contact_label_message' => 'Comentario o mensaje',
        'contact_submit' => 'Enviar',
        'contact_form_agreement' => '* Al enviar aceptas la <a href="/hn/privacy" class="form-link">Política de Privacidad</a> y los <a href="/hn/terms" class="form-link">Términos y Condiciones</a>.',
        'contact_form_success' => '¡Formulario enviado con éxito!',
        // Privacy Policy
        'privacy_title' => 'Política de Privacidad',
        'privacy_updated' => '<b>Última actualización:</b> Julio <script>document.write(new Date().getFullYear() - 1)</script>',

        'privacy_1_title' => '1. Introducción',
        'privacy_1_text' => '
<p>Esta Política de Privacidad de EquiLoomPRO ("nosotros", "nuestro") detalla cómo gestionamos los datos personales al usar nuestros servicios ("Servicios") y el sitio web <a href="/hn">EquiLoomPRO</a> ("Sitio"). Proteger tu privacidad y tus datos es nuestra prioridad.</p>
<p>Nuestros Servicios y Sitio pueden enlazar a sitios de terceros. No somos responsables de sus prácticas de privacidad, por lo que te recomendamos revisar sus políticas.</p>
<p>Todos los datos recopilados son tratados como confidenciales. Aplicamos medidas técnicas y organizativas para protegerlos contra acceso no autorizado, pérdida o divulgación.</p>
<p>Al usar nuestro Sitio, puedes proporcionar información personal (por ejemplo, nombre, correo electrónico, teléfono). Estos datos se usan para verificar identidad, ofrecer soporte, cumplir obligaciones o enviarte actualizaciones con tu consentimiento. Puedes gestionar tus preferencias de notificación o darte de baja en cualquier momento.</p>
',

        'privacy_2_title' => '2. Recolección y uso de datos',
        'privacy_2_1_title' => '2.1. General',
        'privacy_2_1_text' => '
<p>Recopilamos datos de visitantes ("Visitantes"), usuarios ("Usuarios") y socios ("Socios"). Los Datos Personales incluyen direcciones IP, nombres, datos de contacto e información de relación, conforme a las leyes de protección de datos.</p>
',

        'privacy_2_2_title' => '2.2. Métodos de recolección',
        'privacy_2_2_text' => '
<p>Al acceder a nuestro Sitio, aceptas la recopilación de datos (por ejemplo, mediante cookies, direcciones IP o formularios). Si no estás de acuerdo, por favor no uses el Sitio.</p>
',

        'privacy_2_3_title' => '2.3. Finalidad',
        'privacy_2_3_text' => '
<p>Procesamos los Datos Personales para mejorar los Servicios, personalizar la experiencia, brindar soporte y cumplir obligaciones legales. Las finalidades y bases legales incluyen:</p>
<table>
    <tbody>
        <tr><td>Registro de cuenta</td><td>Consentimiento; Ejecución de contrato</td></tr>
        <tr><td>Prestación de servicios</td><td>Ejecución de contrato</td></tr>
        <tr><td>Atención y soporte</td><td>Interés legítimo</td></tr>
        <tr><td>Marketing</td><td>Consentimiento</td></tr>
        <tr><td>Mejora de servicios</td><td>Interés legítimo</td></tr>
    </tbody>
</table>
',

        'privacy_2_4_title' => '2.4. Compartición de datos',
        'privacy_2_4_text' => '
<p>Podemos compartir datos con proveedores de confianza y socios, asegurando cumplimiento con la legislación aplicable en Honduras y estándares internacionales de privacidad.</p>
',

        'privacy_3_title' => '3. Socios',
        'privacy_3_text' => '
<p>Procesamos los datos de Socios con consentimiento o interés legítimo, garantizando manejo seguro y conforme a la ley.</p>
',

        'privacy_4_title' => '4. Seguridad',
        'privacy_4_text' => '
<p>Implementamos medidas técnicas y organizativas para proteger los Datos Personales. Los terceros con los que compartimos datos están obligados contractualmente a mantener estándares equivalentes. Aunque trabajamos para garantizar seguridad, ningún sistema es 100% inmune, y los Usuarios aceptan este riesgo.</p>
',

        'privacy_5_title' => '5. Cookies',
        'privacy_5_text' => '
<p>Consulta nuestra <a href="/hn/cookie">Política de Cookies</a> para más detalles sobre cookies y tecnologías de rastreo.</p>
',

        'privacy_6_title' => '6. Enlaces a terceros',
        'privacy_6_text' => '
<p>Nuestro Sitio puede enlazar a páginas externas. No somos responsables de sus prácticas de privacidad, por lo que recomendamos revisar sus políticas antes de compartir datos.</p>
',

        'privacy_7_title' => '7. Retención de datos',
        'privacy_7_text' => '
<p>Conservamos los Datos Personales solo el tiempo necesario. Al cerrar la cuenta, eliminamos los datos conforme a la ley aplicable en Honduras.</p>
',

        'privacy_8_title' => '8. Tus derechos',
        'privacy_8_text' => '
<p>Tienes derecho a acceder, rectificar, eliminar, restringir u oponerte al tratamiento de tus Datos Personales, así como a retirar tu consentimiento. Contáctanos para ejercer estos derechos.</p>
',

        'privacy_9_title' => '9. Marketing',
        'privacy_9_text' => '
<p>Podemos usar tus datos para fines de marketing con tu consentimiento. Puedes retirarlo en cualquier momento escribiendo a nuestro correo de soporte.</p>
',

        'privacy_10_title' => '10. Aceptación',
        'privacy_10_text' => '
<p>El uso de nuestro Sitio o Servicios implica tu aceptación de esta Política. Podemos actualizarla, y el uso continuo implica conformidad con los cambios.</p>
',

        'privacy_11_title' => '11. Divulgación legal',
        'privacy_11_text' => '
<p>Podemos divulgar Datos Personales si es requerido legalmente o para proteger nuestros derechos.</p>
',

        'privacy_12_title' => '12. Contacto',
        'privacy_12_text' => '
<p>Si tienes inquietudes sobre privacidad, contacta a nuestro Delegado de Protección de Datos en <a href="mailto:support@zevriocapiture.org">support@zevriocapiture.org</a>.</p>
',
        // Terms of Use
        'terms_title' => 'Términos y Condiciones',
        'terms_updated' => '<b>Última actualización:</b> Julio <script>document.write(new Date().getFullYear() - 1)</script>',

        'terms_1_title' => '1. Introducción',
        'terms_1_text' => '
<p>Bienvenido al sitio web de EquiLoomPRO ("Sitio"), operado por EquiLoomPRO ("nosotros", "nuestro"). Al usar el Sitio o nuestros servicios ("Servicios"), aceptas estos Términos y nuestra <a href="/hn/privacy">Política de Privacidad</a>. Contáctanos en <a href="mailto:support@zevriocapiture.org">support@zevriocapiture.org</a>.</p>
<p>Podemos actualizar estos Términos en cualquier momento. El uso continuado del Sitio o los Servicios implica la aceptación de los cambios. Si no estás de acuerdo, no estás autorizado a usar el Sitio o los Servicios.</p>
',

        'terms_2_title' => '2. Sin asesoría de inversión',
        'terms_2_text' => '
<p>La información del Sitio es de carácter general y no constituye asesoría financiera, legal, fiscal ni de inversión. No considera tus objetivos, situación financiera ni necesidades particulares. Consulta a un asesor independiente antes de tomar decisiones financieras.</p>
',

        'terms_3_title' => '3. Servicios',
        'terms_3_text' => '
<p>No todos los Servicios son provistos directamente por nosotros. Podemos enlazar u ofrecer acceso a servicios, sitios o productos de terceros. No avalamos ni somos responsables por el contenido, disponibilidad o desempeño de terceros.</p>
',

        'terms_4_title' => '4. Alcance y modificaciones',
        'terms_4_text' => '
<p>Estos Términos constituyen el acuerdo completo entre tú y nosotros respecto al uso del Sitio y los Servicios. Podemos modificarlos a nuestra discreción. Las modificaciones entran en vigor al publicarse en el Sitio.</p>
',

        'terms_5_title' => '5. Elegibilidad',
        'terms_5_text' => '
<p>Los Servicios están destinados a personas de 18 años o más capaces de celebrar contratos válidos conforme a la legislación de Honduras. Los menores no deben usar el Sitio o los Servicios.</p>
',

        'terms_6_title' => '6. Descripción de los Servicios',
        'terms_6_text' => '
<p><b>Servicios por suscripción:</b> Con el registro, puedes acceder a contenidos gratuitos o de pago, incluidos materiales de terceros. No constituyen asesoría de inversión y no garantizamos su exactitud o actualidad.</p>
<p><b>Servicios de terceros:</b> Podemos facilitar productos o servicios de terceros. No somos responsables por su precisión, disponibilidad ni por tu imposibilidad de acceder a ellos.</p>
<p><b>General:</b> Debes proporcionar datos de registro exactos y completos. Podemos rechazar registros inexactos o fraudulentos y no somos responsables por interrupciones de servicio.</p>
',

        'terms_7_title' => '7. Derechos de propiedad',
        'terms_7_text' => '
<p>El Sitio y su contenido están protegidos por derechos de autor, marcas y otras leyes. Está prohibida la reproducción, redistribución, scraping o uso no autorizado del contenido.</p>
',

        'terms_8_title' => '8. Información confidencial',
        'terms_8_text' => '
<p>Cierta información que recibas puede ser confidencial. Debes protegerla y no divulgarla durante la vigencia de tu relación con nosotros y por un año después de su terminación, salvo que ya sea pública o la recibas sin restricciones de un tercero legítimo.</p>
',

        'terms_9_title' => '9. Hipervínculos y encuadre',
        'terms_9_text' => '
<p>No puedes crear hipervínculos, iframes o técnicas de framing hacia el Sitio sin nuestro permiso previo por escrito. Eres responsable de cualquier daño ocasionado por dichas acciones no autorizadas.</p>
',

        'terms_10_title' => '10. Descargos de responsabilidad',
        'terms_10_text' => '
<p>El Sitio y los Servicios se proporcionan "tal cual" y "según disponibilidad". No ofrecemos garantías de ningún tipo, expresas o implícitas, incluyendo comerciabilidad, idoneidad para un propósito particular o no infracción. No garantizamos que el Sitio esté libre de errores o interrupciones.</p>
',

        'terms_11_title' => '11. Limitación de responsabilidad',
        'terms_11_text' => '
<p>En la medida permitida por la ley, no seremos responsables por daños indirectos, incidentales, especiales, consecuenciales o pérdida de datos, ingresos o beneficios. Nuestra responsabilidad total acumulada, por cualquier reclamación relacionada con el Sitio o los Servicios, no excederá HNL 6,000, cuando la ley lo permita.</p>
',

        'terms_12_title' => '12. Indemnización',
        'terms_12_text' => '
<p>Nos indemnizarás y mantendrás indemnes frente a reclamaciones, daños, responsabilidades, costos y gastos (incluidos honorarios razonables de abogados) que surjan de tu uso del Sitio o los Servicios, tu incumplimiento de estos Términos o la violación de derechos de terceros.</p>
',

        'terms_13_title' => '13. Sitios de terceros',
        'terms_13_text' => '
<p>Los enlaces a sitios o recursos de terceros se proporcionan para tu conveniencia. No controlamos ni somos responsables por su contenido, políticas o prácticas.</p>
',

        'terms_14_title' => '14. Protección de datos',
        'terms_14_text' => '
<p>Tratamos los Datos Personales conforme a nuestra <a href="/hn/privacy">Política de Privacidad</a> y la legislación aplicable en Honduras. Implementamos medidas de seguridad, obtenemos consentimientos y atendemos solicitudes de derechos de los titulares cuando corresponda.</p>
',

        'terms_15_title' => '15. Ley aplicable y jurisdicción',
        'terms_15_text' => '
<p>Estos Términos se rigen por las leyes de la República de Honduras. Cualquier disputa se resolverá preferentemente mediante negociación. Si no se alcanza un acuerdo, las partes podrán someterse a arbitraje en Tegucigalpa, de conformidad con las reglas aplicables, sin perjuicio de los derechos irrenunciables del consumidor bajo la ley hondureña.</p>
',

        'terms_16_title' => '16. Contacto',
        'terms_16_text' => '
<p>Si tienes preguntas sobre estos Términos, contáctanos en <a href="mailto:support@zevriocapiture.org">support@zevriocapiture.org</a>.</p>
',
    ],
    'ar' => [
        'language_iso' => 'es',
        'country_name' => 'Argentina',
        'locale' => 'es_AR',
        'locale_lang' => 'es-AR',
        'language_name' => 'Español',
        'city' => 'Buenos Aires',
        'country_code' => 'AR',
        'geo_position' => '-34.603722, -58.381592',
        'jsonld_organization_name' => 'EquiLoomPRO',
        'jsonld_organization_review_rating' => '4.96',
        'jsonld_organization_review_author' => 'Usuario de EquiLoomPRO',
        'jsonld_software_categories' => 'Herramienta de Inversión en Criptomonedas',
        'jsonld_software_price' => '152',
        'jsonld_software_price_currency' => 'ARS',
        'brand_name_api' => 'EquLum App AI',

        'home' => 'Inicio',
        'about' => 'Sobre nosotros',
        'contact' => 'Contáctanos',
        'privacy' => 'Política de Privacidad',
        'terms' => 'Términos y Condiciones',

        // Home (index)
        'title' => 'EquiLoomPRO — Inversión Automatizada y Gestión de Efectivo',
        'meta_description' => 'Hacé tuya la riqueza con EquiLoomPRO. Portafolios asistidos por IA, ahorro automático y funciones fiscales inteligentes para invertir con confianza y hacer crecer tu dinero en Argentina.',
        'meta_keywords' => 'EquiLoomPRO, inversión automatizada, inversión con IA, gestión de portafolios, cuenta de efectivo, ahorro, Argentina, Buenos Aires, Córdoba',

        // Open Graph / Twitter (global)
        'og_title' => 'EquiLoomPRO — Plataforma de Inversión con IA',
        'og_description' => 'Portafolios automatizados, efectivo inteligente e inversión sin esfuerzo. Empezá con EquiLoomPRO y hacé crecer tu patrimonio con confianza.',
        'og_image' => '/assets/images/share.webp',

        'twitter_title' => 'EquiLoomPRO — Inversión Automatizada',
        'twitter_description' => 'Portafolios asistidos por IA y ahorro automático para ayudarte a crecer tu patrimonio con confianza.',

        // About (meta)
        'about_desc_content' => 'Conocé EquiLoomPRO — un equipo con base en Buenos Aires de inversores y expertos en IA que construye una plataforma de inversión veloz y precisa para ayudarte a crecer tu patrimonio con confianza.',
        'about_keywords' => 'sobre EquiLoomPRO, empresa, equipo IA, plataforma de inversión, Buenos Aires',

        // Contact (meta)
        'contact_desc_content' => '¿Dudas o necesitás orientación? Contactá a EquiLoomPRO — nuestro equipo está listo para ayudarte a tomar decisiones de inversión confiables y estratégicas.',
        'contact_keywords' => 'contacto EquiLoomPRO, soporte, ayuda, preguntas de inversión, Argentina',

        // Terms (meta)
        'terms_desc_content' => 'Leé los Términos y Condiciones para usar el sitio y los servicios de EquiLoomPRO, incluyendo elegibilidad, limitaciones y avisos legales.',
        'terms_keywords' => 'términos de uso, términos y condiciones, EquiLoomPRO, legal, Argentina',

        // Privacy (meta)
        'privacy_desc_content' => 'Cómo EquiLoomPRO recopila, usa y protege tus datos personales, tus derechos y nuestro compromiso con la privacidad y la seguridad.',
        'privacy_keywords' => 'política de privacidad, protección de datos, datos personales, EquiLoomPRO, Argentina',

        // ---------- JSON-LD content ----------
        'jsonld_organization_review_body' => 'EquiLoomPRO ofrece una plataforma de inversión asistida por IA que combina portafolios automatizados, gestión inteligente de efectivo y funciones fiscales diseñadas para ayudar a clientes en Buenos Aires y en toda Argentina a crecer su patrimonio con confianza.',

        // FAQ (para la home si page === "index")
        'jsonld_faq_1_question' => '¿Qué es EquiLoomPRO?',
        'jsonld_faq_1_answer' => 'EquiLoomPRO es una plataforma de inversión asistida por IA que te ayuda a construir y automatizar portafolios diversificados, optimizar el ahorro e invertir con confianza.',

        'jsonld_faq_2_question' => '¿Cómo me ayuda EquiLoomPRO a invertir?',
        'jsonld_faq_2_answer' => 'Ofrecemos portafolios personalizables o automatizados, herramientas de efectivo inteligente y funciones pensadas para mejorar resultados después de impuestos — así podés invertir sin esfuerzo pero con control.',

        'jsonld_faq_3_question' => '¿EquiLoomPRO está disponible en Argentina?',
        'jsonld_faq_3_answer' => 'Sí. EquiLoomPRO atiende clientes en Buenos Aires, Córdoba y en todo el país, con experiencias adaptadas a tu localidad y moneda (ARS).',

        'jsonld_faq_4_question' => '¿Debo usar automatización o IA?',
        'jsonld_faq_4_answer' => 'La automatización es opcional. Podés dejar que la plataforma gestione tareas rutinarias o armar y ajustar tu portafolio cuando quieras.',

        'jsonld_faq_5_question' => '¿Cómo empiezo?',
        'jsonld_faq_5_answer' => 'Creá tu perfil, elegí o personalizá un portafolio y fondeá tu cuenta. No hay cargos ocultos de registro; los servicios de partners pueden tener sus propios requisitos.',

        'jsonld_faq_6_question' => '¿Cómo protege EquiLoomPRO mis datos?',
        'jsonld_faq_6_answer' => 'Aplicamos medidas técnicas y organizativas robustas y seguimos estándares locales aplicables de protección de datos para resguardar tu información.',

        // Header
        'header_logo_alt' => 'Logo de EquiLoomPRO',
        'header_logo_text' => 'EquiLoomPRO',
        'header_burger_alt' => 'Menú',
        'header_cross_alt' => 'Cerrar',

        // Hero
        'hero_form_title' => 'Registrate ahora',
        'hero_form_notice' => '* Al hacer clic aceptás la <a href="/ar/privacy" class="form-link">Política de Privacidad</a> y los <a href="/ar/terms" class="form-link">Términos y Condiciones</a>.',
        'hero_title' => 'Hacé tuya la riqueza.',
        'hero_subtitle' => 'Inversión y ahorro personalizados, automatizados y sin esfuerzo.',
        'hero_stat_nerdwallet' => "Mejor Robo-Advisor, 2019<sup class=\"sup\">1</sup><br>Mejor App de Efectivo, 2020<sup class=\"sup\">1</sup>",
        'hero_stat_investopedia' => "Mejor Robo-Advisor, 2020<sup class=\"sup\">1</sup>",
        'hero_stat_clients' => 'Clientes que confían',
        'hero_stat_funds' => 'En fondos de clientes',
        'hero_stat_appstore' => 'Apple App Store <sup class=\"sup\">2</sup>',
        'hero_stat_playstore' => 'Google Play Store <sup class=\"sup\">2</sup>',

        // Investition
        'investition_title' => 'Invertir no es fácil. Nosotros lo hacemos sentirse así.',
        'investition_text' => 'Dejanos personalizar un portafolio para vos o crealo a tu manera; nuestra potente automatización aprovechará tus inversiones, optimizando el rendimiento y ayudando a reducir impuestos.',
        'investition_btn_start' => 'Empezar a invertir',
        'investition_btn_more' => 'Saber más',
        'investition_notification_app' => 'EquiLoomPRO',
        'investition_notification_time' => 'ahora',
        'investition_notification_1' => 'Te ahorramos <span>ARS 62.500</span> en impuestos.',
        'investition_notification_2' => 'Invertimos automáticamente tu depósito de <span>ARS 200.000</span>.',

        // Cash
        'cash_title' => 'Tu efectivo del día a día, pensado para construir riqueza a largo plazo.',
        'cash_text' => 'Nuestra Cuenta Cash, ofrecida con socios bancarios regulados, te permite automatizar tu ahorro, pagar cuentas, retirar en cajeros y mover excedentes a inversión en segundos para seguir construyendo tu futuro.',
        'cash_btn_start' => 'Empezar a ahorrar',
        'cash_btn_more' => 'Saber más',
        'cash_img_phone_alt' => 'Teléfono',
        'cash_img_card_alt' => 'Tarjeta',

        // Saving
        'saving_title' => 'Ahorro e inversión. Todo mientras vos descansás.',
        'saving_text' => 'Contanos para qué estás ahorrando y reservaremos efectivo extra automáticamente para cumplir tus metas. Como conectamos todas tus cuentas, necesitás una sola app para ver crecer tu patrimonio.',
        'saving_img_alt' => 'Ahorro',

        // Testimonials
        'testimonial_title' => 'TESTIMONIOS',
        'testimonial_1_quote' => 'Es el <strong>mejor</strong> recurso para invertir, manejar mi jubilación y ver todo mi panorama financiero en un solo lugar.',
        'testimonial_1_author' => 'Martín G',
        'testimonial_2_quote' => '<strong>EquiLoomPRO</strong> fue lo primero que realmente me motivó a ahorrar.',
        'testimonial_2_author' => 'Valentina R',
        'testimonial_3_quote' => 'Es <strong>automático</strong>, y yo soy cómodo.',
        'testimonial_3_author' => 'Juan P',

        // Trust
        'trust_title' => 'Más de <strong>120.000</strong> personas en Argentina ya usan EquiLoomPRO para ganar más y preocuparse menos',
        'trust_btn' => 'Comenzar',
        'trust_img_alt' => 'Ventana abierta con planta',
        'trust_subtitle' => 'MENCIONADOS EN',
        'trust_logo_wsj_alt' => 'WSJ',
        'trust_logo_bloomberg_alt' => 'Bloomberg',
        'trust_logo_nyt_alt' => 'The New York Times',
        'trust_logo_reuters_alt' => 'Reuters',
        'trust_logo_cnbc_alt' => 'CNBC',
        // Footer
        'footer_logo_alt' => 'Logo de EquiLoomPRO',
        'footer_logo_text' => 'EquiLoomPRO',
        'footer_legal_note_1' => 'Los testimonios fueron brindados por clientes de EquiLoomPRO Advisers y EquiLoomPRO Brokerage. No se garantiza que otros clientes tengan experiencias o éxitos similares.',
        'footer_legal_note_2' => 'Nerdwallet e Investopedia (los “Promotores”) reciben compensación económica por referir potenciales clientes a EquiLoomPRO Advisers, LLC (“EquiLoomPRO Advisers”) mediante anuncios en sus sitios. Los Promotores y EquiLoomPRO Advisers no están asociados entre sí fuera de este acuerdo. Las opiniones de Nerdwallet son propias. Sus calificaciones se basan en información que consideran confiable, pero no garantizan. La compensación no influye en la posición de productos ni en la calificación. Considerá tarifas, características y metodología antes de decidir.',
        'footer_legal_note_3' => 'Las calificaciones en Apple App Store y Google Play Store se basan en valoraciones de usuarios desde febrero de 2014 (Apple) y diciembre de 2015 (Google) hasta junio de <span class="currentYear"></span>. Calificaciones recopiladas por Apple, Inc. y Google, Inc., quienes reciben compensación por alojar nuestra aplicación.',
        'footer_legal_note_4' => 'Al usar este sitio, entendés que la información presentada es solo con fines informativos y aceptás nuestros <a href="/ar/terms" class="legal-link">Términos de Uso</a> y <a href="/ar/privacy" class="legal-link">Política de Privacidad</a>.',
        'footer_legal_note_5' => 'EquiLoomPRO Advisers depende de información de varias fuentes consideradas confiables, incluidos clientes y terceros, pero no garantiza su exactitud o integridad. Nada aquí debe interpretarse como oferta o recomendación para comprar o vender valores. Además, EquiLoomPRO Advisers o sus afiliadas no brindan asesoramiento fiscal; los inversores deben consultar a sus asesores tributarios personales.',
        'footer_legal_note_6' => 'Trabajamos con bancos y proveedores de pago regulados en Argentina para ofrecer funciones de efectivo y tarjeta. Los servicios bancarios son provistos por terceros sujetos a verificación de identidad y a la normativa local aplicable.',
        'footer_legal_note_7' => 'Los servicios de cuenta Cash se ofrecen mediante brokers y bancos regulados, y son independientes de las cuentas de inversión. Los servicios de gestión e inversión son provistos por EquiLoomPRO Advisers o entidades afiliadas. Los productos y servicios pueden variar según la jurisdicción.',
        'footer_legal_note_8' => 'La efectividad de la estrategia de Tax-Loss Harvesting para reducir tu carga fiscal depende de tu perfil tributario y de inversión, incluidas operaciones fuera de EquiLoomPRO, tipo de activos o plazo de tenencia. Puede generar más operaciones intentando capturar pérdidas. Existe el riesgo de que dichas operaciones generen ganancias de capital o ventas ficticias, además de mayores costos de transacción. Las pérdidas no siempre pueden compensarse con ganancias y están sujetas a límites según la ley tributaria aplicable. Las pérdidas no utilizadas pueden trasladarse a ejercicios futuros para compensar ganancias de capital.',
        'footer_legal_note_9' => 'Toda inversión conlleva riesgo, incluida la posible pérdida del capital invertido. El rendimiento pasado no garantiza resultados futuros. Los retornos históricos, proyecciones y probabilidades se presentan solo con fines informativos y pueden no reflejar el desempeño real.',
        'footer_legal_copy' => 'EquiLoomPRO, EquiLoomPRO Advisers y EquiLoomPRO Brokerage son subsidiarias de EquiLoomPRO Corporation.<br><br> © <span class="currentYear"></span> EquiLoomPRO Corporation. Todos los derechos reservados.',
        // Privacy Policy
        'privacy_title' => 'Política de Privacidad',
        'privacy_updated' => '<b>Última actualización:</b> Julio <script>document.write(new Date().getFullYear() - 1)</script>',

        'privacy_1_title' => '1. Introducción',
        'privacy_1_text' => '
<p>La presente Política de Privacidad de EquiLoomPRO ("nosotros", "nuestro") detalla cómo gestionamos los datos personales cuando usás nuestros servicios ("Servicios") y el sitio web <a href="/ar">EquiLoomPRO</a> ("Sitio"). Proteger tu privacidad y tus datos es nuestra prioridad.</p>
<p>Nuestros Servicios y el Sitio pueden contener enlaces a sitios de terceros. No somos responsables por sus prácticas de privacidad, por lo que recomendamos revisar sus políticas antes de usarlos.</p>
<p>Tratamos toda la información recopilada como confidencial y aplicamos medidas técnicas y organizativas para proteger los Datos Personales frente a accesos no autorizados, pérdida o divulgación.</p>
<p>Al usar nuestro Sitio, podés proporcionarnos información personal (ej. nombre, correo electrónico, número de teléfono). Estos datos pueden usarse para verificar identidad, brindar soporte, cumplir obligaciones o enviarte novedades con tu consentimiento. Podés gestionar tus preferencias de notificación o darte de baja en cualquier momento.</p>
',

        'privacy_2_title' => '2. Recolección y uso de datos',
        'privacy_2_1_title' => '2.1. General',
        'privacy_2_1_text' => '
<p>Recopilamos datos de visitantes del Sitio ("Visitantes"), usuarios ("Usuarios") y socios ("Partners"). Los Datos Personales incluyen direcciones IP, nombres, información de contacto y datos de relación, conforme a la normativa de protección de datos en Argentina.</p>
',

        'privacy_2_2_title' => '2.2. Recolección',
        'privacy_2_2_text' => '
<p>Al acceder al Sitio consentís la recolección de datos (ej. mediante cookies, direcciones IP o formularios). Si no estás de acuerdo, no utilices el Sitio.</p>
',

        'privacy_2_3_title' => '2.3. Finalidad',
        'privacy_2_3_text' => '
<p>Procesamos Datos Personales para mejorar nuestros Servicios, personalizar tu experiencia, brindar soporte y cumplir obligaciones legales. Las finalidades y bases legales incluyen:</p>
<table>
    <tbody>
        <tr><td>Registro de cuenta</td><td>Consentimiento; Ejecución de contrato</td></tr>
        <tr><td>Prestación de servicios</td><td>Ejecución de contrato</td></tr>
        <tr><td>Soporte y consultas</td><td>Interés legítimo</td></tr>
        <tr><td>Marketing</td><td>Consentimiento</td></tr>
        <tr><td>Mejora de servicios</td><td>Interés legítimo</td></tr>
    </tbody>
</table>
',

        'privacy_2_4_title' => '2.4. Compartición de datos',
        'privacy_2_4_text' => '
<p>Podemos compartir datos con proveedores y socios de confianza, garantizando que cumplan con las normativas de protección de datos aplicables en Argentina y, cuando corresponda, con estándares internacionales.</p>
',

        'privacy_3_title' => '3. Socios',
        'privacy_3_text' => '
<p>Procesamos los datos de Partners con base en el consentimiento o en intereses legítimos, asegurando un manejo seguro y conforme a la ley.</p>
',

        'privacy_4_title' => '4. Seguridad',
        'privacy_4_text' => '
<p>Implementamos medidas técnicas y organizativas para proteger los Datos Personales. Los terceros con quienes compartimos datos están obligados contractualmente a mantener estándares equivalentes. Si bien trabajamos para garantizar la seguridad, ningún sistema es 100% inmune a incidentes, y los Usuarios aceptan este riesgo.</p>
',

        'privacy_5_title' => '5. Cookies',
        'privacy_5_text' => '
<p>Consultá nuestra <a href="/ar/cookie">Política de Cookies</a> para más información sobre cookies y tecnologías de seguimiento.</p>
',

        'privacy_6_title' => '6. Enlaces a terceros',
        'privacy_6_text' => '
<p>Nuestro Sitio puede contener enlaces a páginas externas. No somos responsables de sus prácticas de privacidad; revisá sus políticas antes de proporcionar datos.</p>
',

        'privacy_7_title' => '7. Retención de datos',
        'privacy_7_text' => '
<p>Conservamos los Datos Personales solo mientras sea necesario para las finalidades establecidas. Una vez que canceles tu cuenta, eliminaremos tus datos conforme a la ley argentina vigente.</p>
',

        'privacy_8_title' => '8. Tus derechos',
        'privacy_8_text' => '
<p>Tenés derecho a acceder, rectificar, suprimir, limitar u oponerte al tratamiento de tus Datos Personales, así como a la portabilidad de los mismos. Podés retirar tu consentimiento en cualquier momento. Para ejercer estos derechos, contactanos.</p>
',

        'privacy_9_title' => '9. Marketing',
        'privacy_9_text' => '
<p>Podemos usar tus datos para fines de marketing con tu consentimiento. Podés revocarlo en cualquier momento escribiendo a nuestro correo de contacto.</p>
',

        'privacy_10_title' => '10. Aceptación de la política',
        'privacy_10_text' => '
<p>Al usar nuestro Sitio o Servicios aceptás esta Política. Podemos actualizarla y tu uso continuado implica aceptación de los cambios.</p>
',

        'privacy_11_title' => '11. Divulgación legal',
        'privacy_11_text' => '
<p>Podemos divulgar Datos Personales si lo exige la ley o para proteger nuestros derechos.</p>
',

        'privacy_12_title' => '12. Contacto',
        'privacy_12_text' => '
<p>Si tenés consultas sobre privacidad, escribinos a nuestro Delegado de Protección de Datos en <a href="mailto:support@zevriocapiture.org">support@zevriocapiture.org</a>.</p>
',
        // Terms of Use
        'terms_title' => 'Términos y Condiciones',
        'terms_updated' => '<b>Última actualización:</b> Julio <script>document.write(new Date().getFullYear() - 1)</script>',

        'terms_1_title' => '1. Introducción',
        'terms_1_text' => '
<p>Bienvenido al sitio web de EquiLoomPRO ("Sitio"), operado por EquiLoomPRO ("nosotros", "nuestro"). Al usar el Sitio o nuestros servicios ("Servicios"), aceptás estos Términos y Condiciones ("Términos") y nuestra Política de Privacidad. Contacto: <a href="mailto:support@zevriocapiture.org">support@zevriocapiture.org</a>.</p>
<p>Podemos actualizar estos Términos sin previo aviso. El uso continuo del Sitio implica la aceptación de los cambios. Si no estás de acuerdo, no estás autorizado a usar el Sitio o los Servicios.</p>
',

        'terms_2_title' => '2. Sin asesoramiento de inversión',
        'terms_2_text' => '
<p>El contenido del Sitio es de carácter general e informativo. No constituye asesoramiento financiero, legal, tributario ni de inversión. Considerá tus objetivos y situación antes de invertir y, de ser necesario, consultá a un asesor independiente.</p>
',

        'terms_3_title' => '3. Servicios',
        'terms_3_text' => '
<p>No todos los Servicios son provistos directamente por nosotros. Podés encontrar servicios, sitios o productos de terceros enlazados en el Sitio. No los respaldamos ni somos responsables por su contenido, precisión o disponibilidad.</p>
',

        'terms_4_title' => '4. Alcance y modificaciones',
        'terms_4_text' => '
<p>Estos Términos constituyen el acuerdo completo entre vos y nosotros con respecto al uso del Sitio y los Servicios, y reemplazan acuerdos previos. Podemos modificarlos a nuestro criterio; el uso posterior al cambio implica aceptación.</p>
',

        'terms_5_title' => '5. Elegibilidad',
        'terms_5_text' => '
<p>Los Servicios están dirigidos a personas mayores de 18 años con capacidad para contratar conforme a las leyes de la República Argentina. Los menores no pueden utilizar el Sitio ni los Servicios.</p>
',

        'terms_6_title' => '6. Descripción de los Servicios',
        'terms_6_text' => '
<p><b>Servicios por suscripción:</b> tras registrarte, podrás acceder a servicios gratuitos o pagos, incluido contenido propio o de terceros. No constituye asesoramiento de inversión y no garantizamos su exactitud.</p>
<p><b>Servicios de terceros:</b> pueden ofrecerse productos o servicios de terceros. No somos responsables de su precisión, disponibilidad ni de tu imposibilidad de acceder a ellos.</p>
<p><b>General:</b> debés proporcionar datos veraces y completos. Podemos rechazar registros incompletos/fraudulentos y no respondemos por interrupciones de servicio, mantenimiento o fallos técnicos.</p>
',

        'terms_7_title' => '7. Derechos de propiedad',
        'terms_7_text' => '
<p>El Sitio y su contenido están protegidos por derechos de autor, marcas y otras protecciones. Está prohibida la reproducción, redistribución, scraping o ingeniería inversa sin autorización previa por escrito.</p>
',

        'terms_8_title' => '8. Información confidencial',
        'terms_8_text' => '
<p>La información confidencial intercambiada se protegerá durante la vigencia de la relación y por un (1) año después de su terminación, excepto cuando sea pública o recibida sin restricciones de terceros legítimos.</p>
',

        'terms_9_title' => '9. Enlaces y framing',
        'terms_9_text' => '
<p>El enlace, framing o referencia a nuestro Sitio sin autorización previa por escrito está prohibido. Serás responsable por los daños que dichas acciones causen.</p>
',

        'terms_10_title' => '10. Descargos de responsabilidad',
        'terms_10_text' => '
<p>El Sitio y los Servicios se proporcionan "tal cual" y "según disponibilidad". No garantizamos ausencia de errores, interrupciones ni la exactitud del contenido. El uso es a tu propio riesgo.</p>
',

        'terms_11_title' => '11. Limitación de responsabilidad',
        'terms_11_text' => '
<p>En la máxima medida permitida por la ley, no seremos responsables por daños indirectos, incidentales, especiales, punitivos o pérdida de datos/beneficios. Nuestra responsabilidad total agregada por cualquier reclamo relacionado con el Sitio o los Servicios no excederá <b>ARS 200.000</b>.</p>
',

        'terms_12_title' => '12. Indemnidad',
        'terms_12_text' => '
<p>Te comprometés a mantenernos indemnes frente a reclamos, daños, responsabilidades, costos o gastos derivados de tu uso del Sitio o Servicios, incumplimiento de estos Términos o violación de derechos de terceros.</p>
',

        'terms_13_title' => '13. Sitios de terceros',
        'terms_13_text' => '
<p>No controlamos ni respaldamos los sitios o recursos de terceros enlazados. No somos responsables por su contenido, políticas o prácticas.</p>
',

        'terms_14_title' => '14. Protección de datos',
        'terms_14_text' => '
<p>Tratamos Datos Personales conforme a la normativa aplicable en Argentina (incluida la regulación de la AAIP) y a nuestra <a href="/ar/privacy">Política de Privacidad</a>. Implementamos medidas de seguridad, obtenemos consentimientos cuando corresponda y asistimos con solicitudes de derechos.</p>
',

        'terms_15_title' => '15. Ley aplicable y jurisdicción',
        'terms_15_text' => '
<p>Estos Términos se rigen por las leyes de la República Argentina. Toda controversia se resolverá en Buenos Aires mediante arbitraje administrado por la Cámara de Comercio Internacional (CCI) conforme a su reglamento, en idioma español.</p>
',

        'terms_16_title' => '16. Contacto',
        'terms_16_text' => '
<p>Si tenés consultas sobre estos Términos, escribinos a <a href="mailto:support@zevriocapiture.org">support@zevriocapiture.org</a>.</p>
',

    ],
    'cr' => [
        'language_iso' => 'es',
        'country_name' => 'Costa Rica',
        'locale' => 'es_CR',
        'locale_lang' => 'es-CR',
        'language_name' => 'Español (Costa Rica)',
        'city' => 'San José',
        'country_code' => 'CR',
        'geo_position' => '9.928069, -84.090725',
        'jsonld_organization_name' => 'EquiLoomPRO',
        'jsonld_organization_review_rating' => '4.96',
        'jsonld_organization_review_author' => 'Usuario de EquiLoomPRO',
        'jsonld_software_categories' => 'Herramienta de Inversión en Criptomonedas',
        'jsonld_software_price' => '99000',
        'jsonld_software_price_currency' => 'CRC',
        'brand_name_api' => 'EquLum App AI',

        'home' => 'Inicio',
        'about' => 'Nosotros',
        'contact' => 'Contáctanos',
        'privacy' => 'Política de Privacidad',
        'terms' => 'Términos y Condiciones',

        // Home (index)
        'title' => 'EquiLoomPRO — Inversión Automatizada y Gestión de Efectivo',
        'meta_description' => 'Hacé tuya la riqueza con EquiLoomPRO. Portafolios asistidos por IA, ahorro automático y funciones eficientes en impuestos para invertir con confianza y hacer crecer tu dinero.',
        'meta_keywords' => 'EquiLoomPRO, inversión automatizada, inversión con IA, gestión de portafolios, cuenta de efectivo, ahorro, eficiencia fiscal, Costa Rica, San José',

        // Open Graph / Twitter (global)
        'og_title' => 'EquiLoomPRO — Plataforma de Inversión con IA',
        'og_description' => 'Portafolios automatizados, efectivo inteligente e inversión sin esfuerzo. Empezá con EquiLoomPRO y hacé crecer tu patrimonio con confianza.',
        'og_image' => '/assets/images/share.webp',

        'twitter_title' => 'EquiLoomPRO — Inversión Automatizada',
        'twitter_description' => 'Portafolios asistidos por IA y ahorro automático para ayudarte a hacer crecer tu patrimonio con confianza.',

        // About
        'about_desc_content' => 'Conocé EquiLoomPRO — un equipo con base en San José de inversionistas y expertos en IA construyendo una plataforma de inversión de alta precisión y velocidad para que crezcas tu patrimonio con confianza.',
        'about_keywords' => 'sobre EquiLoomPRO, empresa, equipo de inversión con IA, plataforma de inversión, San José',

        // Contact
        'contact_desc_content' => '¿Dudas o guía? Contactá a EquiLoomPRO — nuestros expertos están listos para ayudarte a tomar decisiones de inversión seguras y estratégicas.',
        'contact_keywords' => 'contacto EquiLoomPRO, soporte, ayuda, preguntas de inversión, San José',

        // Terms
        'terms_desc_content' => 'Leé los Términos y Condiciones del sitio y servicios de EquiLoomPRO: elegibilidad, límites y avisos legales.',
        'terms_keywords' => 'términos de uso, términos y condiciones, EquiLoomPRO, legal, Costa Rica',

        // Privacy
        'privacy_desc_content' => 'Cómo EquiLoomPRO recopila, usa y protege tus datos personales, tus derechos y nuestro compromiso con la privacidad y seguridad.',
        'privacy_keywords' => 'política de privacidad, protección de datos, Ley 8968, datos personales, EquiLoomPRO',

        // ---------- JSON-LD content ----------
        'jsonld_organization_review_body' => 'EquiLoomPRO ofrece una plataforma de inversión asistida por IA que combina portafolios automatizados, gestión inteligente de efectivo y funciones eficientes en impuestos para ayudar a clientes en San José y Costa Rica a crecer su patrimonio con confianza.',

        // FAQ (para "index")
        'jsonld_faq_1_question' => '¿Qué es EquiLoomPRO?',
        'jsonld_faq_1_answer' => 'EquiLoomPRO es una plataforma de inversión asistida por IA que te ayuda a construir y automatizar portafolios diversificados, optimizar tu ahorro e invertir con confianza.',

        'jsonld_faq_2_question' => '¿Cómo me ayuda EquiLoomPRO a invertir?',
        'jsonld_faq_2_answer' => 'Ofrecemos portafolios personalizables o automatizados, herramientas de efectivo inteligente y funciones diseñadas para mejorar resultados después de impuestos — así invertís sin esfuerzo y con control.',

        'jsonld_faq_3_question' => '¿EquiLoomPRO está disponible en Costa Rica?',
        'jsonld_faq_3_answer' => 'Sí. EquiLoomPRO atiende a clientes en San José y en todo Costa Rica, con experiencias adaptadas a tu localidad y moneda (CRC).',

        'jsonld_faq_4_question' => '¿Tengo que usar automatización o IA?',
        'jsonld_faq_4_answer' => 'La automatización es opcional. Podés dejar que la plataforma gestione tareas rutinarias o construir y ajustar tu portafolio cuando quieras.',

        'jsonld_faq_5_question' => '¿Cómo empiezo?',
        'jsonld_faq_5_answer' => 'Creá tu perfil, elegí o personalizá un portafolio y fondeá tu cuenta. No hay tarifas ocultas de registro; los servicios de socios pueden tener sus propios requisitos.',

        'jsonld_faq_6_question' => '¿Cómo protege EquiLoomPRO mis datos?',
        'jsonld_faq_6_answer' => 'Aplicamos medidas técnicas y organizativas robustas y cumplimos la normativa costarricense (Ley 8968 y lineamientos de PRODHAB) para resguardar tu información.',

        // Header
        'header_logo_alt' => 'Logo de EquiLoomPRO',
        'header_logo_text' => 'EquiLoomPRO',
        'header_burger_alt' => 'Menú',
        'header_cross_alt' => 'Cerrar',

        // Hero
        'hero_form_title' => 'Registrate ahora',
        'hero_form_notice' => '* Al hacer clic aceptás la <a href="/cr/privacy" class="form-link">Política de Privacidad</a> y los <a href="/cr/terms" class="form-link">Términos y Condiciones</a>.',
        'hero_title' => 'Hacé tuya la riqueza.',
        'hero_subtitle' => 'Inversión y ahorro personalizados, automatizados y sin esfuerzo.',
        'hero_stat_nerdwallet' => "Mejor robo-advisor, 2019<sup class=\"sup\">1</sup><br>Mejor app de gestión de efectivo, 2020<sup class=\"sup\">1</sup>",
        'hero_stat_investopedia' => "Mejor robo-advisor, 2020<sup class=\"sup\">1</sup>",
        'hero_stat_clients' => 'Clientes confiables',
        'hero_stat_funds' => 'Fondos de clientes',
        'hero_stat_appstore' => 'Apple App Store <sup class="sup">2</sup>',
        'hero_stat_playstore' => 'Google Play Store <sup class="sup">2</sup>',

        // Investition
        'investition_title' => 'Invertir no es fácil. Nosotros lo hacemos sentirse así.',
        'investition_text' => 'Dejanos personalizar un portafolio para vos —o construí el tuyo— y nuestra potente automatización aprovechará tus inversiones, optimizará el desempeño y ayudará a reducir impuestos.',
        'investition_btn_start' => 'Empezar a invertir',
        'investition_btn_more' => 'Más información',
        'investition_notification_app' => 'EquiLoomPRO',
        'investition_notification_time' => 'ahora',
        'investition_notification_1' => 'Te ahorramos <span>₡39 000</span> en impuestos.',
        'investition_notification_2' => 'Invertimos automáticamente tu depósito de <span>₡125 000</span>.',

        // Cash
        'cash_title' => 'Efectivo del día a día, diseñado para crear riqueza a largo plazo.',
        'cash_text' => 'Nuestra cuenta de Efectivo, ofrecida con socios bancarios regulados, te permite automatizar ahorros, pagar, retirar en miles de cajeros y convertir excedentes en inversión en segundos.',
        'cash_btn_start' => 'Empezar a ahorrar',
        'cash_btn_more' => 'Más información',
        'cash_img_phone_alt' => 'Teléfono',
        'cash_img_card_alt' => 'Tarjeta',

        // Saving
        'saving_title' => 'Ahorrá e invertí. Mientras vos descansás.',
        'saving_text' => 'Contanos para qué estás ahorrando y apartaremos efectivo extra automáticamente para que logrés tus metas. Al conectarnos con tus cuentas, sólo necesitás una app para ver crecer tu patrimonio.',
        'saving_img_alt' => 'Ahorro',

        // Testimonials
        'testimonial_title' => 'TESTIMONIOS',
        'testimonial_1_quote' => 'Es el recurso <strong>más completo</strong> para invertir, planear retiro y ver toda mi situación financiera.',
        'testimonial_1_author' => 'Carlos M',
        'testimonial_2_quote' => '<strong>EquiLoomPRO</strong> fue lo primero que realmente me motivó a ahorrar.',
        'testimonial_2_author' => 'María José R',
        'testimonial_3_quote' => 'Es <strong>automático</strong>, y yo soy pura pereza.',
        'testimonial_3_author' => 'Andrés L',

        // Trust
        'trust_title' => 'Más de <strong>120.000</strong> personas en Costa Rica ya usan EquiLoomPRO para ganar más y preocuparse menos',
        'trust_btn' => 'Comenzar',
        'trust_img_alt' => 'Ventana abierta con planta',
        'trust_subtitle' => 'EN LOS MEDIOS',
        'trust_logo_wsj_alt' => 'WSJ',
        'trust_logo_bloomberg_alt' => 'Bloomberg',
        'trust_logo_nyt_alt' => 'The New York Times',
        'trust_logo_reuters_alt' => 'Reuters',
        'trust_logo_cnbc_alt' => 'CNBC',

        // Footer
        'footer_logo_alt' => 'Logo de EquiLoomPRO',
        'footer_logo_text' => 'EquiLoomPRO',
        'footer_legal_note_1' => 'Los testimonios fueron brindados por clientes de EquiLoomPRO Advisers y EquiLoomPRO Brokerage. No se garantiza que otros clientes tengan experiencias similares.',
        'footer_legal_note_2' => 'Nerdwallet e Investopedia (los “Patrocinadores”) reciben compensación por referir potenciales clientes a EquiLoomPRO Advisers, LLC mediante anuncios en sus sitios. No existe relación formal distinta a este acuerdo.',
        'footer_legal_note_3' => 'Las calificaciones en Apple App Store y Google Play Store se basan en valoraciones de usuarios desde febrero de 2014 (Apple) y diciembre de 2015 (Google) hasta junio de <span class="currentYear"></span>.',
        'footer_legal_note_4' => 'Al usar este sitio, entendés que la información se brinda sólo con fines informativos y aceptás nuestros <a href="/cr/terms" class="legal-link">Términos de Uso</a> y <a href="/cr/privacy" class="legal-link">Política de Privacidad</a>.',
        'footer_legal_note_5' => 'EquiLoomPRO Advisers se basa en fuentes consideradas fiables, pero no garantiza su exactitud o integridad. Nada aquí es oferta o recomendación para comprar o vender valores. No brindamos asesoría tributaria; consultá a tu asesor personal.',
        'footer_legal_note_6' => 'Trabajamos con proveedores bancarios y de pago regulados en Costa Rica para ofrecer funciones de efectivo y tarjeta. Los servicios bancarios los prestan terceros sujetos a verificación de identidad y normativa local.',
        'footer_legal_note_7' => 'La cuenta de Efectivo se ofrece a través de corredores y socios bancarios regulados y es separada de las cuentas de inversión. Los servicios de inversión y asesoría los presta EquiLoomPRO Advisers o entidades afiliadas. La oferta varía por jurisdicción.',
        'footer_legal_note_8' => 'La efectividad de la cosecha de pérdidas fiscales depende del perfil tributario y de inversión del cliente, incluyendo operaciones fuera de EquiLoomPRO y la naturaleza/plazo de las inversiones. Puede generar más operaciones y costos, y estar sujeta a reglas y limitaciones legales.',
        'footer_legal_note_9' => 'Invertir implica riesgo, incluida la posible pérdida del capital. Los rendimientos históricos o esperados son ilustrativos y pueden no reflejar el desempeño futuro.',
        'footer_legal_copy' => 'EquiLoomPRO, EquiLoomPRO Advisers y EquiLoomPRO Brokerage son subsidiarias de EquiLoomPRO Corporation. <br><br> © <span class="currentYear"></span> EquiLoomPRO Corporation. Todos los derechos reservados.',

        // About -----------------------------------------------
        'about_title' => 'Nosotros',
        'about_text' => 'En <span class="brand-name">EquiLoomPRO</span>, somos un equipo de inversionistas y expertos en IA comprometidos con construir una plataforma de inversión de primer nivel, reconocida por su precisión y velocidad.',
        'about_content_title' => 'Nuestro núcleo es un equipo global diverso y apasionado, unido por la misión de transformar el futuro de la inversión.',
        'about_content_text_1' => 'Transformamos el mundo de la inversión aprovechando la inteligencia artificial. Al combinar la experiencia humana con tecnología de punta, entregamos una plataforma que destaca por su exactitud, rapidez y rentabilidad.',
        'about_content_text_2' => 'Nuestro equipo global aporta perspectivas diversas e innova continuamente para incorporar las últimas tendencias financieras y de IA. La sinergia entre experticia y máquina impulsa una experiencia de inversión transformadora.',
        'about_content_img_alt' => 'Equipo de EquiLoomPRO',
        'period' => [
            [
                'date' => 'Abril <script>document.write(new Date().getFullYear() - 3)</script>',
                'title' => 'Nacimiento de una visión',
                'description' => 'EquiLoomPRO se fundó con la visión de revolucionar la inversión mediante IA.',
            ],
            [
                'date' => 'Julio <script>document.write(new Date().getFullYear() - 3)</script>',
                'title' => 'Crecimiento y desarrollo',
                'description' => 'Levantamos financiamiento (≈ ₡2 000 000 000) para impulsar el desarrollo de la plataforma y expandir el equipo.',
            ],
            [
                'date' => 'Noviembre <script>document.write(new Date().getFullYear() - 3)</script>',
                'title' => 'Fase beta',
                'description' => 'Lanzamos la beta de EquiLoomPRO, recopilando feedback y afinando nuestra tecnología.',
            ],
            [
                'date' => 'Junio <script>document.write(new Date().getFullYear() - 2)</script>',
                'title' => 'Lanzamiento global',
                'description' => 'EquiLoomPRO debutó globalmente, acercando inversión avanzada a usuarios de todo el mundo.',
            ],
        ],
        'investment_title' => 'Revolucioná tu forma de invertir',
        'investment_text' => 'Viví el futuro de la inversión en activos con EquiLoomPRO. Nuestra combinación de IA y analítica integral te ayuda a navegar el mercado con precisión excepcional.',
        'investment_btn' => 'Comenzar',

        // Contact
        'contact_title' => 'Contáctanos',
        'contact_text' => 'Escribinos para recibir guía o resolver dudas; nuestro equipo te ayudará a tomar decisiones estratégicas con confianza.',
        'contact_form_enable_js' => 'Por favor, activá JavaScript en tu navegador para completar este formulario.',
        'contact_label_name' => 'Nombre',
        'contact_label_email' => 'Correo electrónico',
        'contact_label_message' => 'Comentario o mensaje',
        'contact_submit' => 'Enviar',
        'contact_form_agreement' => '* Al enviar aceptás la <a href="/cr/privacy" class="form-link">Política de Privacidad</a> y los <a href="/cr/terms" class="form-link">Términos y Condiciones</a>.',
        'contact_form_success' => '¡Formulario enviado con éxito!',

        // Privacy Policy (resumen local completo)
        'privacy_title' => 'Política de Privacidad',
        'privacy_updated' => '<b>Última actualización:</b> Julio <script>document.write(new Date().getFullYear() - 1)</script>',

        'privacy_1_title' => '1. Introducción',
        'privacy_1_text' => '
<p>Esta Política de Privacidad de EquiLoomPRO ("nosotros") explica cómo tratamos los datos personales cuando usás nuestros servicios ("Servicios") y el sitio web <a href="/cr/">EquiLoomPRO</a> ("Sitio"). Proteger tu privacidad es prioridad.</p>
<p>El Sitio puede enlazar a sitios de terceros. Revisá sus políticas antes de compartir datos, ya que no controlamos sus prácticas.</p>
<p>Mantenemos la confidencialidad de los datos recolectados y aplicamos medidas técnicas y organizativas para prevenir accesos no autorizados, pérdida o divulgación.</p>
<p>Podés brindarnos datos como nombre, correo, teléfono o información financiera limitada para operar funciones. Usamos estos datos para verificar identidad, proveer soporte, cumplir obligaciones o enviarte comunicaciones con tu consentimiento. Podés ajustar preferencias o darte de baja.</p>
',

        'privacy_2_title' => '2. Datos que recopilamos y uso',
        'privacy_2_1_title' => '2.1. General',
        'privacy_2_1_text' => '
<p>Recopilamos datos de visitantes del Sitio ("Visitantes"), usuarios ("Usuarios") y socios ("Socios"). Los Datos Personales incluyen direcciones IP, identificadores en línea, datos de contacto, y relaciones con los Servicios conforme a la normativa aplicable.</p>
',

        'privacy_2_2_title' => '2.2. Recopilación',
        'privacy_2_2_text' => '
<p>Al acceder al Sitio consentís la recopilación de datos (p. ej., cookies, dirección IP, formularios). Si no estás de acuerdo, por favor no utilices el Sitio.</p>
',

        'privacy_2_3_title' => '2.3. Finalidades y bases legales',
        'privacy_2_3_text' => '
<p>Procesamos Datos Personales para mejorar los Servicios, personalizar experiencias, brindar soporte y cumplir obligaciones legales. Finalidades y bases incluyen:</p>
<table><tbody>
<tr><td>Registro de cuenta</td><td>Consentimiento; Ejecución de contrato</td></tr>
<tr><td>Prestación de Servicios</td><td>Ejecución de contrato</td></tr>
<tr><td>Soporte y consultas</td><td>Interés legítimo</td></tr>
<tr><td>Marketing</td><td>Consentimiento</td></tr>
<tr><td>Mejora del Servicio</td><td>Interés legítimo</td></tr>
</tbody></table>
',

        'privacy_2_4_title' => '2.4. Compartir datos',
        'privacy_2_4_text' => '
<p>Podemos compartir datos con proveedores y socios de confianza. Para Costa Rica cumplimos la Ley 8968 y lineamientos de PRODHAB; en otras jurisdicciones, la normativa local aplicable.</p>
',

        'privacy_3_title' => '3. Socios',
        'privacy_3_text' => '
<p>Tratamos datos de Socios con base en consentimiento o interés legítimo, asegurando resguardo adecuado y cumplimiento normativo.</p>
',

        'privacy_4_title' => '4. Seguridad',
        'privacy_4_text' => '
<p>Implementamos salvaguardas técnicas y organizativas proporcionales al riesgo. Los terceros con quienes compartimos datos asumen obligaciones contractuales de seguridad equivalentes. Ningún sistema es infalible; el uso implica aceptar este riesgo residual.</p>
',

        'privacy_5_title' => '5. Cookies',
        'privacy_5_text' => '
<p>Consultá nuestra <a href="/cr/cookie">Política de Cookies</a> para detalles sobre cookies y tecnologías de seguimiento.</p>
',

        'privacy_6_title' => '6. Enlaces de terceros',
        'privacy_6_text' => '
<p>Los enlaces externos son provistos para conveniencia. No somos responsables por sus prácticas de privacidad o contenido.</p>
',

        'privacy_7_title' => '7. Conservación de datos',
        'privacy_7_text' => '
<p>Conservamos los datos sólo el tiempo necesario para las finalidades indicadas y conforme a la ley. Al cerrar tu cuenta, eliminamos datos según los plazos y obligaciones legales.</p>
',

        'privacy_8_title' => '8. Tus derechos',
        'privacy_8_text' => '
<p>Podés ejercer derechos de acceso, rectificación, cancelación, oposición, portabilidad y limitación del tratamiento según la Ley 8968. Para ejercerlos, escribinos y verificaremos tu identidad. También podés acudir a PRODHAB.</p>
',

        'privacy_9_title' => '9. Marketing',
        'privacy_9_text' => '
<p>Usamos tus datos para marketing sólo con tu consentimiento. Podés retirarlo en cualquier momento escribiendo a nuestro correo.</p>
',

        'privacy_10_title' => '10. Aceptación de la Política',
        'privacy_10_text' => '
<p>El uso del Sitio o de los Servicios implica la aceptación de esta Política. Podemos actualizarla; el uso posterior supone aceptación de los cambios.</p>
',

        'privacy_11_title' => '11. Divulgación legal',
        'privacy_11_text' => '
<p>Podemos divulgar datos si es requerido por ley, autoridad competente o para proteger nuestros derechos.</p>
',

        'privacy_12_title' => '12. Contacto',
        'privacy_12_text' => '
<p>Para temas de privacidad, contactá a nuestro oficial de protección de datos en <a href="mailto:support@zevriocapiture.org">support@zevriocapiture.org</a>.</p>
',

        // Terms of Use (local)
        'terms_title' => 'Términos y Condiciones',
        'terms_updated' => '<b>Última actualización:</b> Julio <script>document.write(new Date().getFullYear() - 1)</script>',

        'terms_1_title' => '1. Introducción',
        'terms_1_text' => '
<p>Bienvenido al sitio web de EquiLoomPRO ("Sitio"). Al usar el Sitio o los servicios ("Servicios"), aceptás estos Términos y la Política de Privacidad. Contacto: <a href="mailto:support@zevriocapiture.org">support@zevriocapiture.org</a>.</p>
<p>Podemos actualizar estos Términos sin aviso. El uso continuo implica aceptación. Si no estás de acuerdo, no uses el Sitio ni los Servicios.</p>
',

        'terms_2_title' => '2. Sin asesoramiento de inversión',
        'terms_2_text' => '
<p>La información es general y no constituye asesoría financiera, legal, tributaria ni de inversión. Considerá tus objetivos y, si corresponde, consultá a un asesor independiente.</p>
',

        'terms_3_title' => '3. Servicios',
        'terms_3_text' => '
<p>Algunos Servicios pueden ser provistos por terceros enlazados. No los respaldamos ni respondemos por su contenido o disponibilidad.</p>
',

        'terms_4_title' => '4. Alcance y cambios',
        'terms_4_text' => '
<p>Estos Términos son el acuerdo completo entre vos y nosotros respecto del Sitio y Servicios, y pueden ser modificados a nuestro criterio.</p>
',

        'terms_5_title' => '5. Elegibilidad',
        'terms_5_text' => '
<p>Servicios dirigidos a mayores de 18 años con capacidad para contratar según las leyes de Costa Rica.</p>
',

        'terms_6_title' => '6. Descripción de los Servicios',
        'terms_6_text' => '
<p><b>Suscripciones:</b> acceso a servicios gratuitos o pagos, con contenido propio o de terceros. No es asesoría de inversión ni garantizamos exactitud.</p>
<p><b>Servicios de terceros:</b> productos/servicios de terceros pueden ofrecerse; no somos responsables por su precisión o disponibilidad.</p>
<p><b>General:</b> Debés proporcionar datos veraces. Podemos rechazar registros incompletos o fraudulentos y no respondemos por interrupciones técnicas.</p>
',

        'terms_7_title' => '7. Propiedad intelectual',
        'terms_7_text' => '
<p>El Sitio y su contenido están protegidos por derechos de autor y marcas. Se prohíbe reproducir, redistribuir o hacer scraping sin autorización escrita.</p>
',

        'terms_8_title' => '8. Información confidencial',
        'terms_8_text' => '
<p>La información confidencial será protegida durante la relación y por un (1) año tras su término, salvo información pública o recibida sin restricciones de un tercero legítimo.</p>
',

        'terms_9_title' => '9. Enlaces y framing',
        'terms_9_text' => '
<p>No se permite enlazar, enmarcar o referenciar el Sitio sin autorización previa por escrito. Serás responsable por los daños causados.</p>
',

        'terms_10_title' => '10. Descargos de responsabilidad',
        'terms_10_text' => '
<p>El Sitio y los Servicios se brindan "tal cual" y "según disponibilidad". No garantizamos ausencia de errores o interrupciones.</p>
',

        'terms_11_title' => '11. Limitación de responsabilidad',
        'terms_11_text' => '
<p>En la máxima medida legal, no seremos responsables por daños indirectos, especiales o pérdida de datos/beneficios. Nuestra responsabilidad total agregada no excederá <b>₡150 000</b>.</p>
',

        'terms_12_title' => '12. Indemnidad',
        'terms_12_text' => '
<p>Te comprometés a indemnizarnos ante reclamos derivados de tu uso del Sitio/Servicios o incumplimiento de estos Términos.</p>
',

        'terms_13_title' => '13. Sitios de terceros',
        'terms_13_text' => '
<p>No controlamos ni respaldamos los sitios de terceros enlazados ni sus políticas.</p>
',

        'terms_14_title' => '14. Protección de datos',
        'terms_14_text' => '
<p>Tratamos datos conforme a la Ley 8968 y nuestra <a href="/cr/privacy">Política de Privacidad</a>. Implementamos medidas de seguridad y atendemos solicitudes de derechos.</p>
',

        'terms_15_title' => '15. Ley aplicable y resolución de disputas',
        'terms_15_text' => '
<p>Regidos por las leyes de Costa Rica. Las controversias se resolverán en San José mediante arbitraje administrado por el Centro de Conciliación y Arbitraje de la Cámara de Comercio de Costa Rica, en español.</p>
',

        'terms_16_title' => '16. Contacto',
        'terms_16_text' => '
<p>Consultas sobre estos Términos: <a href="mailto:support@zevriocapiture.org">support@zevriocapiture.org</a>.</p>
',
    ],
    'mx' => [
        'language_iso' => 'es',
        'country_name' => 'México',
        'locale' => 'es_MX',
        'locale_lang' => 'es-MX',
        'language_name' => 'Español (México)',
        'city' => 'Ciudad de México',
        'country_code' => 'MX',
        'geo_position' => '19.432608, -99.133209', // CDMX
        'jsonld_organization_name' => 'EquiLoomPRO',
        'jsonld_organization_review_rating' => '4.95',
        'jsonld_organization_review_author' => 'Usuario de EquiLoomPRO',
        'jsonld_software_categories' => 'Herramienta de Inversión en Criptomonedas',
        // 190 USD ≈ 3,400 MXN (redondeado)
        'jsonld_software_price' => '3400',
        'jsonld_software_price_currency' => 'MXN',
        'brand_name_api' => 'EquLum App AI',

        'home' => 'Inicio',
        'about' => 'Sobre nosotros',
        'contact' => 'Contáctanos',
        'privacy' => 'Política de Privacidad',
        'terms' => 'Términos y Condiciones',

        // Home (index)
        'title' => 'EquiLoomPRO — Inversión Automatizada y Gestión de Efectivo',
        'meta_description' => 'Haz crecer tu patrimonio con EquiLoomPRO. Portafolios asistidos por IA, ahorro automático y funciones fiscales inteligentes para invertir con confianza en México.',
        'meta_keywords' => 'EquiLoomPRO, inversión automatizada, inversión IA, gestión de portafolios, cuenta de efectivo, ahorro, México, Ciudad de México, Guadalajara',

        // Open Graph / Twitter
        'og_title' => 'EquiLoomPRO — Plataforma de Inversión con IA',
        'og_description' => 'Portafolios automatizados, gestión inteligente de efectivo e inversión sin esfuerzo. Empieza con EquiLoomPRO y haz crecer tu dinero con confianza.',
        'og_image' => '/assets/images/share.webp',

        'twitter_title' => 'EquiLoomPRO — Inversión Automatizada',
        'twitter_description' => 'Portafolios con IA y ahorro automático para ayudarte a crecer tu patrimonio con confianza.',

        // About
        'about_desc_content' => 'Conoce EquiLoomPRO — un equipo en México y global de inversionistas y expertos en IA creando una plataforma de inversión rápida y precisa para hacer crecer tu patrimonio.',
        'about_keywords' => 'sobre EquiLoomPRO, empresa, inversión con IA, plataforma de inversión, Ciudad de México, Guadalajara',

        // Contact
        'contact_desc_content' => '¿Preguntas o asesoría? Contacta a EquiLoomPRO — nuestros expertos en México están listos para ayudarte a tomar decisiones financieras estratégicas y seguras.',
        'contact_keywords' => 'contacto EquiLoomPRO, soporte, ayuda, inversión México',

        // Terms
        'terms_desc_content' => 'Lee los Términos y Condiciones para usar el sitio web y los servicios de EquiLoomPRO en México, incluyendo elegibilidad, limitaciones y avisos legales.',
        'terms_keywords' => 'términos de uso, términos y condiciones, EquiLoomPRO, legal, México',

        // Privacy
        'privacy_desc_content' => 'Cómo EquiLoomPRO recopila, usa y protege tus datos personales en México, tus derechos y nuestro compromiso con la privacidad y seguridad.',
        'privacy_keywords' => 'política de privacidad, protección de datos, EquiLoomPRO, México',

        // ---------- JSON-LD FAQ ----------
        'jsonld_organization_review_body' => 'EquiLoomPRO ofrece una plataforma de inversión asistida por IA que combina portafolios automatizados, gestión inteligente de efectivo y funciones fiscales eficientes para ayudar a los clientes en México a hacer crecer su patrimonio con confianza.',

        'jsonld_faq_1_question' => '¿Qué es EquiLoomPRO?',
        'jsonld_faq_1_answer' => 'EquiLoomPRO es una plataforma de inversión asistida por inteligencia artificial que te ayuda a construir y automatizar portafolios diversificados, optimizar tu ahorro e invertir con confianza.',

        'jsonld_faq_2_question' => '¿Cómo me ayuda EquiLoomPRO a invertir?',
        'jsonld_faq_2_answer' => 'Ofrecemos portafolios personalizables o automatizados, herramientas inteligentes de efectivo y funciones diseñadas para mejorar los resultados después de impuestos, para que inviertas sin esfuerzo y manteniendo el control.',

        'jsonld_faq_3_question' => '¿Está disponible EquiLoomPRO en México?',
        'jsonld_faq_3_answer' => 'Sí. EquiLoomPRO atiende a clientes en Ciudad de México, Guadalajara y en todo México, con experiencias adaptadas a tu moneda local (MXN).',

        'jsonld_faq_4_question' => '¿Tengo que usar la automatización o la IA?',
        'jsonld_faq_4_answer' => 'La automatización es opcional. Puedes dejar que la plataforma maneje las tareas rutinarias o construir y ajustar tu propio portafolio cuando quieras.',

        'jsonld_faq_5_question' => '¿Cómo empiezo?',
        'jsonld_faq_5_answer' => 'Crea tu perfil, elige o personaliza un portafolio y deposita fondos en tu cuenta. No hay costos ocultos de registro; los servicios de socios pueden tener sus propios requisitos.',

        'jsonld_faq_6_question' => '¿Cómo protege EquiLoomPRO mis datos?',
        'jsonld_faq_6_answer' => 'Aplicamos medidas de seguridad técnicas y organizativas robustas y cumplimos con la Ley Federal de Protección de Datos Personales en Posesión de los Particulares en México para resguardar tu información.',
        // ---------- Header ----------
        'header_logo_alt' => 'Logo de EquiLoomPRO',
        'header_logo_text' => 'EquiLoomPRO',
        'header_burger_alt' => 'Menú',
        'header_cross_alt' => 'Cerrar',

        // ---------- Hero ----------
        'hero_form_title' => 'Regístrate ahora',
        'hero_form_notice' => '* Al hacer clic aceptas la <a href="/mx/privacy" class="form-link">Política de Privacidad</a> y los <a href="/mx/terms" class="form-link">Términos y Condiciones</a>.',
        'hero_title' => 'Haz tu patrimonio tuyo.',
        'hero_subtitle' => 'Inversión y ahorro personalizados, automatizados y sin fricción.',
        'hero_stat_nerdwallet' => "Mejor Robo-Advisor, 2019<sup class=\"sup\">1</sup><br>Mejor App de Gestión de Efectivo, 2020<sup class=\"sup\">1</sup>",
        'hero_stat_investopedia' => "Mejor Robo-Advisor, 2020<sup class=\"sup\">1</sup>",
        'hero_stat_clients' => 'Personas que confían',
        'hero_stat_funds' => 'En fondos de clientes',
        'hero_stat_appstore' => 'App Store de Apple <sup class="sup">2</sup>',
        'hero_stat_playstore' => 'Google Play <sup class="sup">2</sup>',

        // ---------- Inversión ----------
        'investition_title' => 'Invertir no es fácil. Solo hacemos que se sienta así.',
        'investition_text' => 'Deja que personalicemos un portafolio para ti —o constrúyelo tú mismo— y nuestra automatización maximizará tus inversiones, mejorará tu rendimiento y ayudará a reducir tus impuestos.',
        'investition_btn_start' => 'Empezar a invertir',
        'investition_btn_more' => 'Saber más',
        'investition_notification_app' => 'EquiLoomPRO',
        'investition_notification_time' => 'ahora',
        'investition_notification_1' => 'Te ahorramos <span>$1,250 MXN</span> en impuestos.',
        'investition_notification_2' => 'Invertimos automáticamente tu depósito de <span>$5,000 MXN</span>.',

        // ---------- Efectivo (Cash) ----------
        'cash_title' => 'Efectivo para el día a día, diseñado para crear patrimonio a largo plazo.',
        'cash_text' => 'Nuestra cuenta de Efectivo, ofrecida con socios bancarios regulados, te permite automatizar ahorros, pagar servicios, retirar en miles de cajeros y mover excedentes a inversión en segundos.',
        'cash_btn_start' => 'Empezar a ahorrar',
        'cash_btn_more' => 'Saber más',
        'cash_img_phone_alt' => 'Teléfono',
        'cash_img_card_alt' => 'Tarjeta',

        // ---------- Ahorro ----------
        'saving_title' => 'Ahorra e invierte. Mientras tú te relajas.',
        'saving_text' => 'Cuéntanos para qué estás ahorrando y apartaremos efectivo automáticamente para cumplir tus metas. Como conectamos todas tus cuentas, solo necesitas una app para ver crecer tu dinero.',
        'saving_img_alt' => 'Ahorro',

        // ---------- Testimonios ----------
        'testimonial_title' => 'TESTIMONIO',
        'testimonial_1_quote' => 'Es el recurso <strong>más completo</strong> para invertir, preparar mi retiro y ver toda mi situación financiera en un solo lugar.',
        'testimonial_1_author' => 'Óscar G',
        'testimonial_2_quote' => '<strong>EquiLoomPRO</strong> fue lo primero que realmente me motivó a ahorrar.',
        'testimonial_2_author' => 'Mariana L',
        'testimonial_3_quote' => 'Es <strong>automático</strong>, y yo soy bien práctico.',
        'testimonial_3_author' => 'Jorge L',

        // ---------- Confianza ----------
        'trust_title' => 'Más de <strong>120,000</strong> personas en México ya usan EquiLoomPRO para ganar más y preocuparse menos',
        'trust_btn' => 'Comenzar',
        'trust_img_alt' => 'Ventana abierta con planta',
        'trust_subtitle' => 'MENCIONADO EN',
        'trust_logo_wsj_alt' => 'WSJ',
        'trust_logo_bloomberg_alt' => 'Bloomberg',
        'trust_logo_nyt_alt' => 'The New York Times',
        'trust_logo_reuters_alt' => 'Reuters',
        'trust_logo_cnbc_alt' => 'CNBC',
        // ---------- Footer ----------
        'footer_logo_alt' => 'Logo de EquiLoomPRO',
        'footer_logo_text' => 'EquiLoomPRO',
        'footer_legal_note_1' => 'Los testimonios fueron dados por clientes de EquiLoomPRO Advisers y EquiLoomPRO Brokerage. No hay garantía de que otros clientes tengan experiencias o resultados similares.',
        'footer_legal_note_2' => 'Nerdwallet e Investopedia (los “Endosantes”) reciben compensación por referir posibles clientes a EquiLoomPRO Advisers, LLC (“EquiLoomPRO Advisers”) mediante anuncios en sus sitios. Los Endosantes y EquiLoomPRO Advisers no están asociados más allá de este acuerdo. Las opiniones de Nerdwallet son propias. Sus calificaciones se basan en información que consideran confiable, pero no garantizada.',
        'footer_legal_note_3' => 'Las calificaciones en App Store y Google Play se basan en reseñas de usuarios desde febrero 2014 (Apple) y diciembre 2015 (Google) hasta junio <span class="currentYear"></span>. Compiladas por Apple, Inc. y Google, Inc.',
        'footer_legal_note_4' => 'Al usar este sitio, aceptas nuestros <a href="/mx/terms" class="legal-link">Términos de Uso</a> y <a href="/mx/privacy" class="legal-link">Política de Privacidad</a>.',
        'footer_legal_note_5' => 'EquiLoomPRO Advisers se basa en fuentes consideradas confiables, incluidos clientes y terceros, pero no garantiza la precisión o integridad. Nada aquí constituye oferta o recomendación de comprar o vender valores. EquiLoomPRO Advisers ni sus afiliados proveen asesoría fiscal: consulta con tu propio asesor.',
        'footer_legal_note_6' => 'Colaboramos con bancos y proveedores de pago regulados en México para ofrecer funciones de efectivo y tarjeta, sujetos a verificación de identidad y normativas locales.',
        'footer_legal_note_7' => 'Los servicios de cuenta de efectivo se ofrecen mediante corredores y bancos regulados y son independientes de las cuentas de inversión. La gestión de inversiones es provista por EquiLoomPRO Advisers o entidades afiliadas. Los productos y servicios varían según la jurisdicción.',
        'footer_legal_note_8' => 'La efectividad de la estrategia de “Tax-Loss Harvesting” para reducir impuestos depende de tu perfil fiscal completo y tipo de inversiones. Puede generar más operaciones y costos, además de posibles ganancias sujetas a impuestos. Las pérdidas no siempre podrán compensarse en el mismo periodo fiscal.',
        'footer_legal_note_9' => 'Toda inversión implica riesgo, incluida la posible pérdida del capital. El rendimiento pasado no garantiza resultados futuros. Las proyecciones son ilustrativas y pueden no reflejar el desempeño real.',
        'footer_legal_copy' => 'EquiLoomPRO, EquiLoomPRO Advisers y EquiLoomPRO Brokerage son subsidiarias de EquiLoomPRO Corporation. <br><br> © <span class="currentYear"></span> EquiLoomPRO Corporation. Todos los derechos reservados.',

        // ---------- About ----------
        'about_title' => 'Sobre nosotros',
        'about_text' => 'En <span class="brand-name">EquiLoomPRO</span>, somos un equipo de inversionistas y expertos en IA comprometidos a construir una plataforma de inversión de primer nivel, reconocida por su precisión y rapidez.',
        'about_content_title' => 'Nuestro núcleo es un equipo global diverso y apasionado con la misión de transformar el futuro de la inversión.',
        'about_content_text_1' => 'Nos dedicamos a reinventar el panorama de la inversión mediante la inteligencia artificial. Al combinar la experiencia de inversionistas con tecnología avanzada, ofrecemos una plataforma que destaca en precisión, velocidad y rentabilidad.',
        'about_content_text_2' => 'Nuestro equipo global aporta perspectivas diversas, innovando constantemente para integrar las últimas tendencias de IA y finanzas. Nos impulsa la sinergia entre la experiencia humana y la inteligencia de las máquinas para brindar una experiencia transformadora.',
        'about_content_img_alt' => 'Equipo de EquiLoomPRO',

        'period' => [
            [
                'date' => 'Abril <script>document.write(new Date().getFullYear() - 3)</script>',
                'title' => 'Nacimiento de una visión',
                'description' => 'EquiLoomPRO se fundó con la misión de revolucionar la inversión mediante la inteligencia artificial.',
            ],
            [
                'date' => 'Julio <script>document.write(new Date().getFullYear() - 3)</script>',
                'title' => 'Crecimiento y desarrollo',
                'description' => 'Levantamos $75 millones MXN en financiamiento para impulsar el desarrollo y la expansión del equipo.',
            ],
            [
                'date' => 'Noviembre <script>document.write(new Date().getFullYear() - 3)</script>',
                'title' => 'Fase Beta',
                'description' => 'Lanzamos la versión beta de EquiLoomPRO, recibiendo retroalimentación de usuarios y mejorando la tecnología.',
            ],
            [
                'date' => 'Junio <script>document.write(new Date().getFullYear() - 2)</script>',
                'title' => 'Lanzamiento global',
                'description' => 'EquiLoomPRO debutó a nivel mundial, llevando nuestra tecnología avanzada de inversión a usuarios en todo el mundo.',
            ],
        ],

        'investment_title' => 'Revoluciona tu forma de invertir',
        'investment_text' => 'Vive el futuro de la inversión en activos con EquiLoomPRO. Nuestra combinación de IA y analítica de datos ofrece capacidades excepcionales, ayudando a navegar los mercados con precisión sin precedentes.',
        'investment_btn' => 'Comenzar',

        // ---------- Contact ----------
        'contact_title' => 'Contáctanos',
        'contact_text' => 'Escríbenos para recibir orientación o resolver tus dudas. Nuestro equipo experto te ayudará a tomar decisiones estratégicas con confianza.',
        'contact_form_enable_js' => 'Por favor habilita JavaScript en tu navegador para completar este formulario.',
        'contact_label_name' => 'Nombre',
        'contact_label_email' => 'Correo electrónico',
        'contact_label_message' => 'Comentario o mensaje',
        'contact_submit' => 'Enviar',
        'contact_form_agreement' => '* Al enviar aceptas la <a href="/mx/privacy" class="form-link">Política de Privacidad</a> y los <a href="/mx/terms" class="form-link">Términos y Condiciones</a>.',
        'contact_form_success' => '¡Formulario enviado con éxito!',
        // ---------- Política de Privacidad ----------
        'privacy_title' => 'Política de Privacidad',
        'privacy_updated' => '<b>Última actualización:</b> Julio <script>document.write(new Date().getFullYear() - 1)</script>',

        'privacy_1_title' => '1. Introducción',
        'privacy_1_text' => '
<p>Esta Política de Privacidad de EquiLoomPRO ("nosotros") explica cómo tratamos los datos personales al usar nuestros servicios ("Servicios") y el sitio web <a href="/mx">EquiLoomPRO</a> ("Sitio"). Proteger tu información es nuestra prioridad.</p>
<p>Nuestros Servicios y Sitio pueden enlazar a sitios de terceros. No somos responsables de sus prácticas, por lo que te recomendamos revisar sus políticas.</p>
<p>Tratamos toda la información de manera confidencial, aplicando medidas técnicas y organizativas para evitar accesos no autorizados, pérdidas o divulgaciones.</p>
<p>Al usar nuestro Sitio, puedes proporcionar datos como nombre, correo o teléfono. Usamos esta información para verificar identidad, brindar soporte, cumplir obligaciones o enviarte actualizaciones con tu consentimiento.</p>
',

        'privacy_2_title' => '2. Recolección y uso de datos',
        'privacy_2_1_title' => '2.1. General',
        'privacy_2_1_text' => '
<p>Recopilamos información de visitantes ("Visitantes"), usuarios ("Usuarios") y socios ("Socios"). Los datos personales incluyen direcciones IP, nombre, contacto y datos de relación, conforme a la LFPDPPP.</p>
',

        'privacy_2_2_title' => '2.2. Métodos de recolección',
        'privacy_2_2_text' => '
<p>Al acceder a nuestro Sitio, aceptas la recolección de datos (cookies, direcciones IP, formularios). Si no estás de acuerdo, por favor no uses el Sitio.</p>
',

        'privacy_2_3_title' => '2.3. Finalidad',
        'privacy_2_3_text' => '
<p>Procesamos los datos para mejorar Servicios, personalizar experiencias, dar soporte y cumplir con obligaciones legales. Las bases incluyen:</p>
<table>
    <tbody>
        <tr><td>Registro de cuenta</td><td>Consentimiento; cumplimiento de contrato</td></tr>
        <tr><td>Prestación de servicios</td><td>Cumplimiento de contrato</td></tr>
        <tr><td>Soporte y consultas</td><td>Interés legítimo</td></tr>
        <tr><td>Marketing</td><td>Consentimiento</td></tr>
        <tr><td>Mejora de servicios</td><td>Interés legítimo</td></tr>
    </tbody>
</table>
',

        'privacy_2_4_title' => '2.4. Compartición de datos',
        'privacy_2_4_text' => '
<p>Podemos compartir datos con proveedores confiables y socios comerciales. Garantizamos que cumplan la LFPDPPP y mantengan medidas de seguridad equivalentes.</p>
',

        'privacy_3_title' => '3. Socios',
        'privacy_3_text' => '
<p>Procesamos datos de Socios con consentimiento o por interés legítimo, asegurando su manejo seguro y conforme a la legislación mexicana.</p>
',

        'privacy_4_title' => '4. Seguridad',
        'privacy_4_text' => '
<p>Implementamos controles técnicos y organizativos para proteger la información personal. Los terceros que reciben datos deben cumplir estándares similares. Aunque buscamos máxima seguridad, ningún sistema es 100% invulnerable.</p>
',

        'privacy_5_title' => '5. Cookies',
        'privacy_5_text' => '
<p>Consulta nuestra <a href="/mx/cookie">Política de Cookies</a> para más detalles sobre tecnologías de rastreo utilizadas.</p>
',

        'privacy_6_title' => '6. Enlaces de terceros',
        'privacy_6_text' => '
<p>Nuestro Sitio puede incluir enlaces a páginas externas. No somos responsables de sus políticas de privacidad o contenido.</p>
',

        'privacy_7_title' => '7. Conservación de datos',
        'privacy_7_text' => '
<p>Guardamos los datos solo el tiempo necesario para cumplir con las finalidades descritas y la legislación aplicable. Al cerrar tu cuenta, eliminaremos la información conforme a la LFPDPPP.</p>
',

        'privacy_8_title' => '8. Derechos ARCO',
        'privacy_8_text' => '
<p>Conforme a la LFPDPPP, tienes derecho de Acceso, Rectificación, Cancelación y Oposición (ARCO) respecto a tus datos personales. Puedes ejercerlos enviando una solicitud a nuestro contacto de privacidad.</p>
',

        'privacy_9_title' => '9. Marketing',
        'privacy_9_text' => '
<p>Podemos usar tu información para marketing con tu consentimiento. Puedes revocarlo en cualquier momento escribiéndonos.</p>
',

        'privacy_10_title' => '10. Aceptación',
        'privacy_10_text' => '
<p>El uso de nuestro Sitio o Servicios implica aceptación de esta Política. Podemos actualizarla; el uso continuo significará conformidad.</p>
',

        'privacy_11_title' => '11. Divulgación legal',
        'privacy_11_text' => '
<p>Podemos revelar información personal si la ley mexicana lo requiere o para proteger nuestros derechos.</p>
',

        'privacy_12_title' => '12. Contacto',
        'privacy_12_text' => '
<p>Para dudas de privacidad, escribe a nuestro Oficial de Datos en <a href="mailto:support@zevriocapiture.org">support@zevriocapiture.org</a>.</p>
',
        // ---------- Términos y Condiciones (MX) ----------
        'terms_title' => 'Términos y Condiciones',
        'terms_updated' => '<b>Última actualización:</b> Julio <script>document.write(new Date().getFullYear() - 1)</script>',

        'terms_1_title' => '1. Introducción',
        'terms_1_text' => '
<p>Bienvenido al sitio web de EquiLoomPRO ("Sitio"), operado por EquiLoomPRO ("nosotros"). Al usar el Sitio o nuestros servicios ("Servicios"), aceptas estos Términos y nuestra <a href="/mx/privacy" class="legal-link">Política de Privacidad</a>. Contáctanos en <a href="mailto:support@zevriocapiture.org">support@zevriocapiture.org</a>.</p>
<p>Podemos actualizar estos Términos en cualquier momento. El uso continuo del Sitio implica tu aceptación.</p>
',

        'terms_2_title' => '2. No es asesoría de inversión',
        'terms_2_text' => '
<p>La información del Sitio es general y no constituye asesoría financiera, fiscal o de inversión personalizada. Considera tus objetivos y consulta a un asesor independiente antes de invertir.</p>
',

        'terms_3_title' => '3. Servicios',
        'terms_3_text' => '
<p>Algunos Servicios pueden ser proporcionados por terceros. No respaldamos ni garantizamos contenido, disponibilidad o desempeño de servicios de terceros enlazados o integrados.</p>
',

        'terms_4_title' => '4. Alcance y modificaciones',
        'terms_4_text' => '
<p>Estos Términos constituyen el acuerdo completo entre tú y nosotros respecto del Sitio y Servicios. Podemos modificar funciones, contenidos o disponibilidad sin previo aviso.</p>
',

        'terms_5_title' => '5. Elegibilidad',
        'terms_5_text' => '
<p>Debes tener 18 años o más y capacidad legal para contratar en México. Nos reservamos el derecho de rechazar registros con datos inexactos o fraudulentos.</p>
',

        'terms_6_title' => '6. Descripción de los Servicios',
        'terms_6_text' => '
<p><b>Servicios por suscripción:</b> Podrás acceder a contenidos propios o de terceros (gratuitos o de pago). No constituyen recomendaciones de inversión.</p>
<p><b>Servicios de terceros:</b> Pueden aplicarse términos y comisiones adicionales. No somos responsables por la imposibilidad de acceso o errores de dichos servicios.</p>
<p><b>General:</b> Podrían ocurrir interrupciones, mantenimiento o actualizaciones. Haremos esfuerzos razonables para restablecer el servicio oportunamente.</p>
',

        'terms_7_title' => '7. Derechos de propiedad intelectual',
        'terms_7_text' => '
<p>El Sitio y su contenido están protegidos por derechos de autor, marcas y otras leyes aplicables. Se prohíbe copiar, redistribuir, minar o hacer scraping sin autorización escrita.</p>
',

        'terms_8_title' => '8. Información confidencial',
        'terms_8_text' => '
<p>La información confidencial compartida entre las partes se protegerá durante la vigencia de la relación y por un (1) año después de su terminación, salvo que sea pública o recibida sin obligación de confidencialidad.</p>
',

        'terms_9_title' => '9. Enlaces y framing',
        'terms_9_text' => '
<p>No puedes hacer framing, mirroring ni enlazar de forma que implique patrocinio sin autorización previa por escrito. Eres responsable por daños derivados de dichas acciones.</p>
',

        'terms_10_title' => '10. Descargos de responsabilidad',
        'terms_10_text' => '
<p>El Sitio y los Servicios se proporcionan "tal cual" y "según disponibilidad". No garantizamos exactitud, ausencia de errores, continuidad o idoneidad para un propósito particular.</p>
',

        'terms_11_title' => '11. Limitación de responsabilidad',
        'terms_11_text' => '
<p>En la medida permitida por la ley mexicana, no seremos responsables por daños indirectos, incidentales, punitivos o pérdida de datos/beneficios. Nuestra responsabilidad total agregada frente a ti no excederá MXN $5,000.</p>
',

        'terms_12_title' => '12. Indemnización',
        'terms_12_text' => '
<p>Nos indemnizarás y mantendrás indemnes por reclamaciones de terceros derivadas de tu uso del Sitio/Servicios, incumplimiento de estos Términos o violación de derechos de terceros.</p>
',

        'terms_13_title' => '13. Sitios de terceros',
        'terms_13_text' => '
<p>No somos responsables de contenidos, políticas o prácticas de sitios externos enlazados desde nuestro Sitio.</p>
',

        'terms_14_title' => '14. Protección de datos',
        'terms_14_text' => '
<p>Tratamos datos personales conforme a la Ley Federal de Protección de Datos Personales en Posesión de los Particulares (LFPDPPP). Revisa la <a href="/mx/privacy" class="legal-link">Política de Privacidad</a> para conocer tus derechos ARCO y nuestras prácticas.</p>
',

        'terms_15_title' => '15. Ley aplicable y jurisdicción',
        'terms_15_text' => '
<p>Estos Términos se rigen por las leyes de los Estados Unidos Mexicanos. Las controversias se resolverán mediante arbitraje confidencial en Ciudad de México conforme a reglas de una institución reconocida. Cuando la ley no permita arbitraje, los tribunales competentes de Ciudad de México tendrán jurisdicción.</p>
',

        'terms_16_title' => '16. Contacto',
        'terms_16_text' => '
<p>Para preguntas sobre estos Términos, contáctanos en <a href="mailto:support@zevriocapiture.org">support@zevriocapiture.org</a>.</p>
',
    ],
];
?>