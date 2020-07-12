import React, {useState} from 'react';
import ReactDOM from 'react-dom';
import Menu from '../partage/Menu';
import './faq.css';
import {Button,Container, Card} from 'react-bootstrap';
import  '../FontawsomeIcons';
import { FontAwesomeIcon } from '@fortawesome/react-fontawesome';

function Accordion({faq, index, toggleFAQ}){
	return (
		<div 
			className = {"faq "+ (faq.open ? 'open' : '')} 
			key={index}
			onClick = {() => toggleFAQ(index)}
		 >
		 	<div className="faq-question">
		 		{faq.question}
		 	</div>
		 	<div className="faq-answer">
		 		{faq.answer}
		 	</div>
		</div>
	);
}

function Faq() {
const [faqs, setfaqs] = useState([
{
	question : "Quelles sont les modalités de paiementICI?",
	answer: "Le client a deux choix de financement : soit l’autofinancement soit passer par un crédit bancaire. Le client doit avoir un apport personnel agrémenté au crédit bancaire. Il faut que le client soit éligible à un crédit bancaire suivant les conditions du crédit.",
	open : false

},
{
	question : "Quelles sont les modalités de paiementICI2?",
	answer: "Le client a deux choix de financement : soit l’autofinancement soit passer par un crédit bancaire. Le client doit avoir un apport personnel agrémenté au crédit bancaire. Il faut que le client soit éligible à un crédit bancaire suivant les conditions du crédit.",
	open : false

},
{
	question : "Quelles sont les modalités de paiement?",
	answer: "Le client a deux choix de financement : soit l’autofinancement soit passer par un crédit bancaire. Le client doit avoir un apport personnel agrémenté au crédit bancaire. Il faut que le client soit éligible à un crédit bancaire suivant les conditions du crédit.",
	open : false

},
{
	question : "Quelles sont les modalités de paiement?",
	answer: "Le client a deux choix de financement : soit l’autofinancement soit passer par un crédit bancaire. Le client doit avoir un apport personnel agrémenté au crédit bancaire. Il faut que le client soit éligible à un crédit bancaire suivant les conditions du crédit.",
	open : false

},
{
	question : "Quelles sont les modalités de paiement?",
	answer: "Le client a deux choix de financement : soit l’autofinancement soit passer par un crédit bancaire. Le client doit avoir un apport personnel agrémenté au crédit bancaire. Il faut que le client soit éligible à un crédit bancaire suivant les conditions du crédit.",
	open : false

},
{
	question : "Quelles sont les modalités de paiementICI?",
	answer: "Le client a deux choix de financement : soit l’autofinancement soit passer par un crédit bancaire. Le client doit avoir un apport personnel agrémenté au crédit bancaire. Il faut que le client soit éligible à un crédit bancaire suivant les conditions du crédit.",
	open : false

},
{
	question : "Quelles sont les modalités de paiementICI2?",
	answer: "Le client a deux choix de financement : soit l’autofinancement soit passer par un crédit bancaire. Le client doit avoir un apport personnel agrémenté au crédit bancaire. Il faut que le client soit éligible à un crédit bancaire suivant les conditions du crédit.",
	open : false

},
{
	question : "Quelles sont les modalités de paiement?",
	answer: "Le client a deux choix de financement : soit l’autofinancement soit passer par un crédit bancaire. Le client doit avoir un apport personnel agrémenté au crédit bancaire. Il faut que le client soit éligible à un crédit bancaire suivant les conditions du crédit.",
	open : false

},
{
	question : "Quelles sont les modalités de paiement?",
	answer: "Le client a deux choix de financement : soit l’autofinancement soit passer par un crédit bancaire. Le client doit avoir un apport personnel agrémenté au crédit bancaire. Il faut que le client soit éligible à un crédit bancaire suivant les conditions du crédit.",
	open : false

},
{
	question : "Quelles sont les modalités de paiement?",
	answer: "Le client a deux choix de financement : soit l’autofinancement soit passer par un crédit bancaire. Le client doit avoir un apport personnel agrémenté au crédit bancaire. Il faut que le client soit éligible à un crédit bancaire suivant les conditions du crédit.",
	open : false

},
]);

const toggleFAQ  = index => {
	setfaqs(faqs.map((faq, i) => {
		if (i === index) {
			faq.open = !faq.open
		}else{
			faq.open = false
		}
		return faq;
	}))
}
  return (
    <Container fluid className="faqContainer">
    	<Menu isFixed={false} />
    	<div className="FaqText">
    	<h1>Foire aux questions</h1>
    	<p>Modalités de paiement ? Taux d’intérêts ? Commodités ? Les questions les plus fréquemment posées par les clients Bessa Promotion Immobilière sont recensées dans cette foire aux questions pour vous permettre de trouver des réponses sur des sujets très souvent abordés.</p>
    	</div>
    	<p className="qst">Découvrez dans cette FAQ les réponses à toutes les questions que vous vous posez :</p>
    	<div className="faqs">
    		{faqs.map((faq, i) => (
    		<Accordion key={i} faq={faq} index={i} toggleFAQ={toggleFAQ} />
    		))}
    	</div>
    </Container>
  );
}

export default Faq ;