<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Movie;

class MovieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $movie = new Movie();

        $movie->image = 'https://images-na.ssl-images-amazon.com/images/I/511pXcUSaRL.jpg';
        $movie->name = 'Spider-Man: No Way Home';
        $movie->description = 'Spider-Man: No Way Home is an upcoming American superhero film based on the Marvel Comics character Spider-Man, co-produced by Columbia Pictures and Marvel Studios, and distributed by Sony Pictures Releasing. It is intended to be the sequel to Spider-Man: Homecoming (2017) and Spider-Man: Far From Home (2019), and the 27th film in the Marvel Cinematic Universe (MCU). The film is directed by Jon Watts, written by Chris McKenna and Erik Sommers, and stars Tom Holland as Peter Parker / Spider-Man, alongside Zendaya, Benedict Cumberbatch, Jon Favreau, Jacob Batalon, Marisa Tomei, J. B. Smoove, Benedict Wong, Alfred Molina, and Jamie Foxx. In the film, Parker asks Dr. Stephen Strange (Cumberbatch) to help make his identity as Spider-Man a secret following its public revelation in Far From Home.';

        $movie->save();

        $movie2 = new Movie();

        $movie2->image = 'https://www.dreadcentral.com/wp-content/uploads/2020/09/Venom-Let-There-Be-Carnage-poster-1024x1268.jpg';
        $movie2->name = 'Venom: Let There Be Carnage';
        $movie2->description = "Venom: Let There Be Carnage is a 2021 American superhero film featuring the Marvel Comics character Venom, produced by Columbia Pictures in association with Marvel and Tencent Pictures. Distributed by Sony Pictures Releasing, it is the second film in Sony's Spider-Man Universe and the sequel to Venom (2018). The film is directed by Andy Serkis from a screenplay by Kelly Marcel, based on a story she wrote with Tom Hardy who stars as Eddie Brock / Venom alongside Michelle Williams, Naomie Harris, Reid Scott, Stephen Graham, and Woody Harrelson. In the film, Brock struggles to adjust to life as the host of the alien symbiote Venom, while serial killer Cletus Kasady (Harrelson) escapes from prison after becoming the host of Carnage, a chaotic spawn of Venom.";

        $movie2->save();

        $movie3 = new Movie();

        $movie3->image = 'https://lunateen.perfil.com/wp-content/uploads/2021/08/ETERNALS-POSTER.jpg';
        $movie3->name = 'Eternals';
        $movie3->description = 'Eternals is an upcoming American superhero film based on the Marvel Comics race of the same name. Produced by Marvel Studios and distributed by Walt Disney Studios Motion Pictures, it is intended to be the 26th film in the Marvel Cinematic Universe (MCU). The film was directed by Chloé Zhao, who wrote the screenplay with Patrick Burleigh, Ryan Firpo, and Kaz Firpo. It stars an ensemble cast including Gemma Chan, Richard Madden, Kumail Nanjiani, Lia McHugh, Brian Tyree Henry, Lauren Ridloff, Barry Keoghan, Don Lee, Harish Patel, Kit Harington, Salma Hayek, and Angelina Jolie. In the film, the Eternals, an immortal alien race, emerge from hiding after thousands of years to protect Earth from their evil counterparts, the Deviants.';

        $movie3->save();

        $movie4 = new Movie();

        $movie4->image = 'https://cdn.hobbyconsolas.com/sites/navi.axelspringer.es/public/styles/480/public/media/image/2021/08/dune-2433609.jpg?itok=cCnYTrFm';
        $movie4->name = 'Dune';
        $movie4->description = 'Duneis a 2021 American epic-science fiction film directed by Denis Villeneuve with a screenplay by Jon Spaihts, Villeneuve, and Eric Roth. It is the first of a planned two-part adaptation of the 1965 novel of the same name by Frank Herbert, primarily covering the first half of the book. Set in the far future, it follows Paul Atreides, as he and his family, the noble House Atreides, are thrust into a war for the dangerous desert planet Arrakis, between the native Fremen people and the enemy invaders, the House Harkonnen. The film stars an ensemble cast including Timothée Chalamet, Rebecca Ferguson, Oscar Isaac, Josh Brolin, Stellan Skarsgård, Dave Bautista, Stephen McKinley Henderson, Zendaya, David Dastmalchian, Chang Chen, Sharon Duncan-Brewster, Charlotte Rampling, Jason Momoa, and Javier Bardem.';

        $movie4->save();


        $movie5 = new Movie();
        $movie5->image = 'https://i.blogs.es/c2e6f6/the-batman-movie-logo-2021-1234637-1280x0/1366_2000.jpeg';
        $movie5->name = 'The Batman';
        $movie5->description = 'The Batman is an upcoming American superhero film based on DC Comics featuring the character Batman. Produced by DC Films and 6th & Idaho, and set for distribution by Warner Bros. Pictures, it is intended to be a reboot of the Batman film franchise. The film is being directed by Matt Reeves, who wrote the screenplay with Peter Craig, and stars Robert Pattinson as Bruce Wayne / Batman, alongside Zoë Kravitz, Paul Dano, Jeffrey Wright, John Turturro, Peter Sarsgaard, Barry Keoghan, Jayme Lawson, Andy Serkis, and Colin Farrell. Set in his second year of fighting crime, the film sees Batman uncover corruption in Gotham City while facing a serial killer known as the Riddler.';

        $movie5->save();


        $movie6 = new Movie();
        $movie6->image = 'https://phantom-marca.unidadeditorial.es/ab65ead1063666905a718bba855242bd/resize/1320/f/jpg/assets/multimedia/imagenes/2021/08/24/16297978604616.jpg';
        $movie6->name = 'Ghostbusters: Afterlife';
        $movie6->description = "Ghostbusters: Afterlife is a 2021 American supernatural comedy film directed by Jason Reitman, who co-wrote the screenplay with Gil Kenan. It is the sequel to Ghostbusters (1984) and Ghostbusters II (1989) and the fourth film overall in the Ghostbusters franchise. The film stars Carrie Coon, Finn Wolfhard, Mckenna Grace and Paul Rudd, while Bill Murray, Dan Aykroyd, Ernie Hudson, Sigourney Weaver and Annie Potts reprise their roles from the original films. Set thirty years after the events of the second film, a single mother and her two children move to a small town in Oklahoma, where they discover their connection to the original Ghostbusters and their grandfather's secret legacy.";
        $movie6->save();

        $movie7 = new Movie();
        $movie7->image = 'https://es.web.img3.acsta.net/pictures/19/12/16/12/17/2576000.jpg';
        $movie7->name = 'Top Gun: Maverick';
        $movie7->description = "Top Gun: Maverick is an upcoming American action drama film directed by Joseph Kosinski from a screenplay by Ehren Kruger, Eric Warren Singer, and Christopher McQuarrie. It is the sequel to 1986's Top Gun. The film stars Tom Cruise, Miles Teller, Jennifer Connelly, Jon Hamm, Glen Powell, Lewis Pullman, Ed Harris, and Val Kilmer. Cruise and Kilmer reprise their roles from the first film.";
        $movie7->save();

        $movie8 = new Movie();
        $movie8->image = 'https://i.pinimg.com/736x/1a/e7/96/1ae7965995cba0858cf60bee211985cb.jpg';
        $movie8->name = 'Halloween Kills';
        $movie8->description = "Halloween Kills is a 2021 American slasher film directed by David Gordon Green and written by Green, Danny McBride and Scott Teems. The film is a sequel to 2018's Halloween and the twelfth installment in the Halloween franchise. The film stars Jamie Lee Curtis and Nick Castle, who reprise their roles as Laurie Strode and Michael Myers, with James Jude Courtney also portraying Myers again. Judy Greer, Andi Matichak, and Will Patton also reprise their roles from the previous film, with Anthony Michael Hall and Thomas Mann joining the cast. The film, which begins precisely where the previous film ended, sees Strode and her family continuing to fend off Myers, this time, with the help of the Haddonfield community.";
        $movie8->save();

        $movie9 = new Movie();
        $movie9->image = 'https://www.themoviedb.org/t/p/original/6n0hjR5Z1gqx9abEBzjSThpGCj0.jpg';
        $movie9->name = 'Matrix: Resurrections';
        $movie9->description = 'The Matrix Resurrections is an upcoming American science fiction action film produced, co-written, and directed by Lana Wachowski. It is the sequel to The Matrix Revolutions (2003), and serves as the fourth installment in The Matrix film series overall. Keanu Reeves, Carrie-Anne Moss, and Jada Pinkett Smith reprise their roles from previous films in the series, where they are joined by Yahya Abdul-Mateen II, Jessica Henwick, Jonathan Groff, Neil Patrick Harris, Priyanka Chopra Jonas, and Christina Ricci.';
        $movie9->save();

        $movie10 = new Movie();
        $movie10->image = 'https://img.ecartelera.com/noticias/fotos/65200/65260/1.jpg';
        $movie10->name = 'Jurassic World: Dominion';
        $movie10->description = "Jurassic World: Dominion is an upcoming American science fiction adventure film directed by Colin Trevorrow, who wrote the screenplay with Emily Carmichael, based on a story by Trevorrow and his writing partner, Derek Connolly. It is the sequel to Jurassic World: Fallen Kingdom (2018), the sixth installment in the Jurassic Park franchise, and the third film in the Jurassic World trilogy. As with its predecessors, Frank Marshall and Patrick Crowley will produce the film, with Trevorrow and Jurassic Park (1993) director Steven Spielberg acting as executive producers. The film stars an ensemble cast including Chris Pratt, Bryce Dallas Howard, Laura Dern, Sam Neill, Jeff Goldblum, Daniella Pineda, Isabella Sermon, Justice Smith, Omar Sy, and BD Wong reprising their roles from previous films in the franchise, and they are joined by Mamoudou Athie, Scott Haze, Dichen Lachman, Campbell Scott, and DeWanda Wise.";
        $movie10->save();
    }
}
