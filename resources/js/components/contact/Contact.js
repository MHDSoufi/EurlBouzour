import React from 'react';
import Menu from '../partage/Menu';
import './contact.css';
import {Tabs, Container, Tab, Col, Row } from 'react-bootstrap';
import MapContact from '../partage/MapContact'
import { FontAwesomeIcon } from '@fortawesome/react-fontawesome';


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
  					<Row>
    					<Col sm={6}>
    					<img 
    						className="imgContact"
    						src="storage/contact/Bureau Mostaganem.JPG"
    					/>

    					</Col>
    					<Col sm={6}>
    						<MapContact lat={35.913887} lng={0.145941}/> 
    						<div className="coordone">  
    							<a href="https://www.facebook.com/bouzour.promotion.immobiliere">
    							<FontAwesomeIcon icon={ [ 'fab' , 'facebook' ] } />
    							<span>bouzour.promotion.immobiliere</span>
    							</a><br />
    							<FontAwesomeIcon icon="phone-square" /><span>045 434 153 </span>
    						</div>					
    					</Col>
    				</Row>
  					</Tab>
  					<Tab eventKey="oran" title="Oran">
   						<Col sm={6}>
   							<img 
    						className="imgContact"
    						src="storage/contact/Bureau oran.jpg"/>

    					</Col>
    					<Col sm={6}>
    						<MapContact lat={35.704702} lng={-0.557890}/>   
    						<div className="coordone">  
    							<a href="https://www.facebook.com/bouzour.promotion.immobiliere">
    							<FontAwesomeIcon icon={ [ 'fab' , 'facebook' ] } />
    							<span>bouzour.promotion.immobiliere</span>
    							</a><br />
    							<FontAwesomeIcon icon="phone-square" /><span>045 434 153 </span>
    						</div>							
    					</Col>
 					</Tab>
  					<Tab eventKey="tel" title="Tlemcen" >
    					<Col sm={6}>

    					</Col>
    					<Col sm={6}>
    						<MapContact lat={34.918754} lng={-1.351002}/>   						
    					</Col>
  					</Tab>
  					<Tab eventKey="chlef" title="Chlef" >
    					<Col sm={6}>

    					</Col>
    					<Col sm={6}>
    						<MapContact lat={36.153676} lng={1.324959 }/>   						
    					</Col>
  					</Tab>
				</Tabs>
		    </Container>
		</div>
	);
}

export default Contact ;