import React from 'react';
import Menu from '../partage/Menu';
import './contact.css';
import {Tabs, Container, Tab, Col } from 'react-bootstrap';
import MapContact from '../partage/MapContact'


function Contact(){
	return(
		<div>
			<Menu isFixed={false} />
			<div className="parallaxContact">
				<h2 className="titreContact">Contact</h2>
		    </div>
		    <Container>
		    	<Tabs defaultActiveKey="mosta" id="uncontrolled-tab-example">
  					<Tab eventKey="mosta" title="Mostaghanem">
    					<Col sm={6}>

    					</Col>
    					<Col sm={6}>
    						<MapContact />   						
    					</Col>
  					</Tab>
  					<Tab eventKey="oran" title="Oran">
   						<p>Oran</p>
 					</Tab>
  					<Tab eventKey="tel" title="Tlemcen" >
    					<p>Tlemcen</p>
  					</Tab>
  					<Tab eventKey="chlef" title="Chlef" >
    					<p>Chlef</p>
  					</Tab>
				</Tabs>
		    </Container>
		</div>
	);
}

export default Contact ;