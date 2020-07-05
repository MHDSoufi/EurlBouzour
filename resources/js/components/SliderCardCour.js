import React from 'react';
import ReactDOM from 'react-dom';
import './SliderCard.scss';
import { Card, Button, Carousel, Row, Col } from 'react-bootstrap';
let propriete =[ {
    "id" : 0,
    "titre" : "Residence HEY BENSOUNA",
    "adr" : "Adresse complete de la promotion",
    "img" : "/storage/slider/promo1.jpg"
},
{
    "id" : 1,
    "titre" : "PROJET 160 LOGTS LPA BOUDJLIDA TLEMCEN",
    "adr" : "Adresse complete de la promotion",
    "img" : "/storage/slider/promo2.png"
},
{
    "id" : 2,
    "titre" : "Promotion Immobiliere Oran - Canastel",
    "adr" : "Adresse complete de la promotion",
    "img" : "/storage/slider/promo3.jpg"
},
{
    "id" : 3,
    "titre" : "RESIDENCE  ELYASMINE BELGAID ORAN",
    "adr" : "Adresse complete de la promotion",
    "img" : "/storage/slider/promo4.jpg"
},
{
    "id" : 4,
    "titre" : "RESIDENCE  ELYASMINE BELGAID ORAN2",
    "adr" : "Adresse complete de la promotion",
    "img" : "/storage/slider/promo4.jpg"
},
{
    "id" : 5,
    "titre" : "RESIDENCE  ELYASMINE BELGAID ORAN3",
    "adr" : "Adresse complete de la promotion",
    "img" : "/storage/slider/promo4.jpg"
}
];

function CardPromo (props){
    return(
        <Card style={{ width: '18rem' }} id={`card-${props.propriete.id}`}>
                <Card.Img variant="top" src={props.propriete.img} />
                <Card.Body>
                    <Card.Title>{props.propriete.titre}</Card.Title>
                    <Card.Text>
                        {props.propriete.adr}
                    </Card.Text>
                    <Button variant="primary">Voir les détail</Button>
                </Card.Body>
        </Card>
    );
}

function SlideCardMobil(props){
   /* let i = 0;
    let carsoul = [];
    while(i < props.propriete.length){
        let item = [];
        
        /*for (var j = 0; j < 3; j++) {
            if (i == propriete.length-1) {
                break;
            }
            item.push(<Col><CardPromo key={`${i}`} propriete={`props.propriete[${i}]`}/> </Col>);
            i++;
         } 
         carsoul.push(<Carousel.Item>{item}</Carousel.Item>);*/

          
    }
     console.log(carsoul); 

    /*return(
        <Carousel >
         
            
        </Carousel>
    );*/

}

class SliderCardCour extends React.Component {

constructor(props){
    super(props);
    this.state = {
        property : this.positionProperty(propriete),
    }
}
nextProperty() {
    const nextIndex = this.state.property.id+1;
    this.setState({
        property: propriete[nextIndex]
    })
    
}
prevProperty() {
    //console.log(this.state.property.id-1);
    const nextIndex = this.state.property.id-1;
    this.setState({
        property: propriete[nextIndex]
    })
}
positionProperty(propriete){
    if((propriete.length > 2)&&(propriete.length <= 4)){
        return propriete[1];
    }
    if (propriete.length%2 === 0) {
        return propriete[propriete.length/2];
    }else{
        return propriete[(propriete.length-1)/2];
    }
    return propriete[0];
}
    render(){
        console.log(navigator.userAgent);
        return (
        <>
        <div id="pcDevice">
            <button type="button" 
                        className="Btn-flech-droite"
                        onClick = {() => this.nextProperty()}
                        disabled = {this.state.property.id === propriete.length-1}
                        >
                        <img width={30}
                             height={30}
                             src="/storage/icons/flechdroite.png"/>
                </button>
        <button type="button" 
                        className="Btn-flech-gauche"
                        onClick = {() => this.prevProperty()}
                        disabled = {this.state.property.id === 0}
                        >
                        <img width={30}
                             height={30}
                             src="/storage/icons/flechgauche.png"/>
                </button>
        <div className={`cards-slider active-slide-${this.state.property.id}`}>
          <div className="cards-slider-wrapper" 
               style={{'transform':`translateX(-${this.state.property.id*(112)}%)`}}
               >
                
                {
                    propriete.map(property => <CardPromo key={property.id} propriete = {property}/>)
                } 
          </div>
        </div>
        <div id="mobilDevice">
            {--<SlideCardMobil propriete={propriete}/>--}
        </div>
        </div>
        </>
        );
    }
}

export default SliderCardCour;


