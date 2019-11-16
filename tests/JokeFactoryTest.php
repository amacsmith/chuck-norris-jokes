<?php /** @noinspection ALL */

namespace AMacSmith\ChuckNorrisJokes\Tests;

use AMacSmith\ChuckNorrisJokes\JokeFactory;
use PHPUnit\Framework\TestCase;

class JokeFactoryTest extends TestCase
{
    protected $chuckNorrisjokes = [
'MacGyver can build an airplane out of gum and paper clips. Chuck Norris can kill him and take it.',
'Chuck Norris doesn\'t read books. He stares them down until he gets the information he wants.',
'If you ask Chuck Norris what time it is, he always answers "Two seconds till". After you ask "Two seconds to what?", he roundhouse kicks you in the face.',
'Chuck Norris lost his virginity before his dad did.',
'Since 1940, the year Chuck Norris was born, roundhouse kick related deaths have increased 13,000 percent.',
'Chuck Norris sheds his skin twice a year.',
'Chuck Norris once challenged Lance Armstrong in a "Who has more testicles?" contest. Chuck Norris won by 5.',
'There are no steroids in baseball. Just players Chuck Norris has breathed on.',
'When Chuck Norris goes to donate blood, he declines the syringe, and instead requests a hand gun and a bucket.',
'Pluto is actually an orbiting group of British soldiers from the American Revolution who entered space after the Chuck gave them a roundhouse kick to the face.',
'Chuck Norris does not teabag the ladies. He potato-sacks them.',
'According to the Encyclopedia Brittanica, the Native American "Trail of Tears" has been redefined as anywhere that Chuck Norris walks.',
'In an average living room there are 1,242 objects Chuck Norris could use to kill you, including the room itself.',
'The Chuck Norris military unit was not used in the game Civilization 4, because a single Chuck Norris could defeat the entire combined nations of the world in one turn.',
'Chuck Norris doesn\'t shower, he only takes blood baths.',
'Time waits for no man. Unless that man is Chuck Norris.',
'Chuck Norris can hit you so hard that he can actually alter your DNA. Decades from now your descendants will occasionally clutch their heads and yell "What The Hell was That?".',
'In the Bible, Jesus turned water into wine. But then Chuck Norris turned that wine into beer.',
'Chuck Norris is the only human being to display the Heisenberg uncertainty principle - you can never know both exactly where and how quickly he will roundhouse-kick you in the face.',
'Faster than a speeding bullet... More powerful than a locomotive... Able to leap tall buildings in a single bound... These are some of Chuck Norris\'s warm-up exercises.',
'Chuck Norris is not hung like a horse. Horses are hung like Chuck Norris.',
'Teenage Mutant Ninja Turtles is based on a true story: Chuck Norris once swallowed a turtle whole, and when he crapped it out, the turtle was six feet tall and had learned karate.',
'Someone once tried to tell Chuck Norris that roundhouse kicks aren\'t the best way to kick someone. This has been recorded by historians as the worst mistake anyone has ever made.',
'Chuck Norris has two speeds: Walk and Kill.',
'Chuck Norris once shot down a German fighter plane with his finger. By yelling "Bang!"',
'The opening scene of the movie "Saving Private Ryan" is loosely based on games of dodgeball Chuck Norris played in second grade.',
'Fool me once, shame on you. Fool Chuck Norris once and he will roundhouse kick you in the face.',
'Chuck Norris originally appeared in the "Street Fighter II" video game, but was removed by Beta Testers because every button caused him to do a roundhouse kick. When asked about this glitch, Norris replied "That\'s no glitch."',
'If you spell Chuck Norris in Scrabble, you win. Forever.',
'Someone once videotaped Chuck Norris getting pissed off. It was called Walker: Texas Chain Saw Masacre.',
'Chuck Norris will attain statehood in 2009. His state flower will be the Magnolia.',
'A handicapped parking sign does not signify that this spot is for handicapped people. It is actually in fact a warning, that the spot belongs to Chuck Norris and that you will be handicapped if you park there.',
'Chuck Norris doesn\'t wash his clothes. He disembowels them.',
'Chuck Norris doesn\'t churn butter. He roundhouse kicks the cows and the butter comes straight out.',
'Police label anyone attacking Chuck Norris as a Code 45-11.... A suicide.',
'Chuck Norris is the only man to ever defeat a brick wall in a game of tennis.',
'What was going through the minds of all of Chuck Norris\' victims before they died? His shoe.',
'Chuck Norris once ate three 72 oz. steaks in one hour. He spent the first 45 minutes having sex with his waitress.',
'There is no theory of evolution, just a list of creatures Chuck Norris allows to live.',
'Chuck Norris can win a game of Connect Four in only three moves.',
'CNN was originally created as the "Chuck Norris Network" to update Americans with on-the-spot ass kicking in real-time.',
'Chuck Norris invented Kentucky Fried Chicken\'s famous secret recipe with eleven herbs and spices. Nobody ever mentions the twelfth ingredient: Fear.',
'The quickest way to a man\'s heart is with Chuck Norris\' fist.',
'When Chuck Norris sends in his taxes, he sends blank forms and includes only a picture of himself, crouched and ready to attack. Chuck Norris has not had to pay taxes, ever.',
'Chuck Norris drives an ice cream truck covered in human skulls.',
'Most people have 23 pairs of chromosomes. Chuck Norris has 72... and they\'re all poisonous.',
'The Great Wall of China was originally created to keep Chuck Norris out. It failed miserably.',
'Chuck Norris is ten feet tall, weighs two-tons, breathes fire, and could eat a hammer and take a shotgun blast standing.',
'Crop circles are Chuck Norris\' way of telling the world that sometimes corn needs to lie down.',
'Chuck Norris once roundhouse kicked someone so hard that his foot broke the speed of light, went back in time, and killed Amelia Earhart while she was flying over the Pacific Ocean.',
'When Chuck Norris calls 1-900 numbers, he doesn\'t get charged. He holds up the phone and money falls out.',
'Chuck Norris once ate a whole cake before his friends could tell him there was a stripper in it.',
'Some people like to eat frogs\' legs. Chuck Norris likes to eat lizard legs. Hence, snakes.',
'There are no races, only countries of people Chuck Norris has beaten to different shades of black and blue.',
'When Chuck Norris was denied an Egg McMuffin at McDonald\'s because it was 10:35, he roundhouse kicked the store so hard it became a Wendy\'s.',
'Chuck Norris can\'t finish a "color by numbers" because his markers are filled with the blood of his victims. Unfortunately, all blood is dark red.',
'A Chuck Norris-delivered Roundhouse Kick is the preferred method of execution in 16 states.',
'When Chuck Norris falls in water, Chuck Norris doesn\'t get wet. Water gets Chuck Norris.',
'Scientists have estimated that the energy given off during the Big Bang is roughly equal to 1CNRhK (Chuck Norris Roundhouse Kick).',
'Chuck Norris\' house has no doors, only walls that he walks through.',
'When Chuck Norris has sex with a man, it won\'t be because he is gay. It will be because he has run out of women.',
'How much wood would a woodchuck chuck if a woodchuck could Chuck Norris? All of it.',
'Chuck Norris doesn\'t actually write books, the words assemble themselves out of fear.',
'In honor of Chuck Norris, all McDonald\'s in Texas have an even larger size than the super-size. When ordering, just ask to be Chucksized.',
'Chuck Norris can believe it\'s not butter.',
'If tapped, a Chuck Norris roundhouse kick could power the country of Australia for 44 minutes.',
'Chuck Norris can divide by zero.',
'The grass is always greener on the other side, unless Chuck Norris has been there. In that case the grass is most likely soaked in blood and tears.',
'Newton\'s Third Law is wrong: Although it states that for each action, there is an equal and opposite reaction, there is no force equal in reaction to a Chuck Norris roundhouse kick.',
'Chuck Norris invented his own type of karate. It\'s called Chuck-Will-Kill.',
'When an episode of Walker Texas Ranger was aired in France, the French surrendered to Chuck Norris just to be on the safe side.',
'While urinating, Chuck Norris is easily capable of welding titanium.',
'When Chuck Norris talks, everybody listens. And dies.',
'When Steven Seagal kills a ninja, he only takes its hide. When Chuck Norris kills a ninja, he uses every part.',
'Wilt Chamberlain claims to have slept with more than 20,000 women in his lifetime. Chuck Norris calls this "a slow Tuesday."',
'Contrary to popular belief, there is indeed enough Chuck Norris to go around.',
'Chuck Norris doesnt shave; he kicks himself in the face. The only thing that can cut Chuck Norris is Chuck Norris.',
'For some, the left testicle is larger than the right one. For Chuck Norris, each testicle is larger than the other one.',
'Chuck Norris always knows the EXACT location of Carmen SanDiego.',
'When taking the SAT, write "Chuck Norris" for every answer. You will score over 8000.',
'Chuck Norris invented black. In fact, he invented the entire spectrum of visible light. Except pink. Tom Cruise invented pink.',
'When you\'re Chuck Norris, anything + anything is equal to 1. One roundhouse kick to the face.',
'Chuck Norris has the greatest Poker-Face of all time. He won the 1983 World Series of Poker, despite holding only a Joker, a Get out of Jail Free Monopoly card, a 2 of clubs, 7 of spades and a green #4 card from the game UNO.',
'On his birthday, Chuck Norris randomly selects one lucky child to be thrown into the sun.',
'Nobody doesn\'t like Sara Lee. Except Chuck Norris.',
'Chuck Norris doesn\'t throw up if he drinks too much. Chuck Norris throws down!',
'In the beginning there was nothing...then Chuck Norris Roundhouse kicked that nothing in the face and said "Get a job". That is the story of the universe.',
'Chuck Norris has 12 moons. One of those moons is the Earth.',
'Chuck Norris grinds his coffee with his teeth and boils the water with his own rage.',
'Archaeologists unearthed an old english dictionary dating back to the year 1236. It defined "victim" as "one who has encountered Chuck Norris"',
'Chuck Norris ordered a Big Mac at Burger King, and got one.',
'Chuck Norris and Mr. T walked into a bar. The bar was instantly destroyed, as that level of awesome cannot be contained in one building.',
'If you Google search "Chuck Norris getting his ass kicked" you will generate zero results. It just doesn\'t happen.',
'Chuck Norris can drink an entire gallon of milk in thirty-seven seconds.',
'Little known medical fact: Chuck Norris invented the Caesarean section when he roundhouse-kicked his way out of his mother\'s womb.',
'Chuck Norris doesn\'t bowl strikes, he just knocks down one pin and the other nine faint.',
'The show Survivor had the original premise of putting people on an island with Chuck Norris. There were no survivors, and nobody is brave enough to go to the island to retrieve the footage.',
'It takes Chuck Norris 20 minutes to watch 60 Minutes.',
'You know how they say if you die in your dream then you will die in real life? In actuality, if you dream of death then Chuck Norris will find you and kill you.',
'Chuck Norris has a deep and abiding respect for human life... unless it gets in his way.',
'The Bermuda Triangle used to be the Bermuda Square, until Chuck Norris Roundhouse kicked one of the corners off.',
'Chuck Norris doesn\'t believe in Germany.',
'When Chuck Norris is in a crowded area, he doesn\'t walk around people. He walks through them.',
'Chuck Norris once ate an entire bottle of sleeping pills. They made him blink.',
'James Cameron wanted Chuck Norris to play the Terminator. However, upon reflection, he realized that would have turned his movie into a documentary, so he went with Arnold Schwarzenegger.',
'Chuck Norris can touch MC Hammer.',
'Thousands of years ago Chuck Norris came across a bear. It was so terrified that it fled north into the arctic. It was also so terrified that all of its decendents now have white hair.',
'Chuck Norris played Russian Roulette with a fully loaded gun and won.',
'It takes 14 puppeteers to make Chuck Norris smile, but only 2 to make him destroy an orphanage.',
'Chuck Norris is responsible for China\'s over-population. He hosted a Karate tournament in Beijing and all women within 1,000 miles became pregnant instantly.',
'Some people wear Superman pajamas. Superman wears Chuck Norris pajamas.',
'Chuck Norris once worked as a weatherman for the San Diego evening news. Every night he would make the same forecast: Partly cloudy with a 75% chance of Pain.',
'Simply by pulling on both ends, Chuck Norris can stretch diamonds back into coal.',
'When Chuck Norris does a pushup, he isn\'t lifting himself up, he\'s pushing the Earth down.',
'Chuck Norris invented the bolt-action rifle, liquor, sexual intercourse, and football-- in that order.',
'A high tide means Chuck Norris is flying over your coast. The tide is caused by God pissing his pants.',
'Chuck Norris keeps his friends close and his enemies closer. Close enough to drop them with one round house kick to the face.',
'There is in fact an \'I\' in Norris, but there is no \'team\'. Not even close.',
'Scotty in Star Trek often says "Ye cannae change the laws of physics." This is untrue. Chuck Norris can change the laws of physics. With his fists.',
'An anagram for Walker Texas Ranger is KARATE WRANGLER SEX. I don\'t know what that is, but it sounds AWESOME.',
'Chuck Norris doesn\'t stub his toes. He accidentally destroys chairs, bedframes, and sidewalks.',
'Using his trademark roundhouse kick, Chuck Norris once made a fieldgoal in RJ Stadium in Tampa Bay from the 50 yard line of Qualcomm stadium in San Diego.',
'Chuck Norris roundhouse kicks don\'t really kill people. They wipe out their entire existence from the space-time continuum.',
'Chuck Norris does not own a stove, oven, or microwave , because revenge is a dish best served cold.',
'Tom Clancy has to pay royalties to Chuck Norris because "The Sum of All Fears" is the name of Chuck Norris\' autobiography.',
'Chuck Norris can slam a revolving door.',
'Chuck Norris built a better mousetrap, but the world was too frightened to beat a path to his door.',
'The original draft of The Lord of the Rings featured Chuck Norris instead of Frodo Baggins. It was only 5 pages long, as Chuck roundhouse-kicked Sauron\'s ass halfway through the first chapter.',
'Hellen Keller\'s favorite color is Chuck Norris.',
'Chuck Norris eats beef jerky and craps gunpowder. Then, he uses that gunpowder to make a bullet, which he uses to kill a cow and make more beef jerky. Some people refer to this as the "Circle of Life."',
'If, by some incredible space-time paradox, Chuck Norris would ever fight himself, he\'d win. Period.',
'Chuck Norris is currently suing myspace for taking the name of what he calls everything around you.',
'The crossing lights in Chuck Norris\'s home town say "Die slowly" and "die quickly". They each have a picture of Chuck Norris punching or kicking a pedestrian.',
'Science Fact: Roundhouse kicks are comprised primarily of an element called Chucktanium.',
'Chuck Norris proved that we are alone in the universe. We weren\'t before his first space expedition.',
'Superman once watched an episode of Walker, Texas Ranger. He then cried himself to sleep.',
'Chuck Norris doesn\'t step on toes. Chuck Norris steps on necks.',
'The movie "Delta Force" was extremely hard to make because Chuck had to downplay his abilities. The first few cuts were completely unbelievable.',
'Movie trivia: The movie "Invasion U.S.A." is, in fact, a documentary.',
'Chuck Norris does not "style" his hair. It lays perfectly in place out of sheer terror.',
'There is no such thing as global warming. Chuck Norris was cold, so he turned the sun up.',
'A study showed the leading causes of death in the United States are: 1. Heart disease, 2. Chuck Norris, 3. Cancer',
'It\'s widely believed that Jesus was Chuck Norris\' stunt double for crucifixion due to the fact that it is impossible for nails to pierce Chuck Norris\' skin.',
'Chuck Norris did in fact, build Rome in a day.',
'Along with his black belt, Chuck Norris often chooses to wear brown shoes. No one has DARED call him on it. Ever.',
'Once you go Norris, you are physically unable to go back.',
'Ninjas want to grow up to be just like Chuck Norris. But usually they grow up just to be killed by Chuck Norris.',
'Chuck Norris once sued Burger King after they refused to put razor wire in his Whopper Jr, insisting that that actually is "his" way.',
'The last thing you hear before Chuck Norris gives you a roundhouse kick? No one knows because dead men tell no tales.',
'Chuck Norris doesn\'t play god. Playing is for children.',
'As a teen, Chuck Norris had sex with every nun in a convent tucked away in the hills of Tuscany. Nine months later the nuns gave birth to the 1972 Miami Dolphins, the only undefeated and untied team in professional football history.',
'Chuck Norris is the only person in the world that can actually email a roundhouse kick.',
'Chuck Norris won super bowls VII and VIII singlehandedly before unexpectedly retiring to pursue a career in ass-kicking.',
'Wo hu cang long. The translation from Mandarin Chinese reads: "Crouching Chuck, Hidden Norris"',
'Chuck Norris can set ants on fire with a magnifying glass. At night.',
'Some kids play Kick the can. Chuck Norris played Kick the keg.',
'Icy-Hot\' is too weak for Chuck Norris. After a workout, Chuck Norris rubs his muscles down with liquid-hot MAGMA.',
'Chuck Norris cannot love, he can only not kill.',
'When Chuck Norris was a baby, he didn\'t suck his mother\'s breast. His mother served him whiskey, straight out of the bottle.',
'According to Einstein\'s theory of relativity, Chuck Norris can actually roundhouse kick you yesterday.',
'Chuck Norris once pulled out a single hair from his beard and skewered three men through the heart with it.',
'In an act of great philanthropy, Chuck made a generous donation to the American Cancer Society. He donated 6,000 dead bodies for scientific research.',
'Chuck Norris? favourite cut of meat is the roundhouse.',
'When J. Robert Oppenheimer said "I am become death, the destroyer Of worlds", He was not referring to the atomic bomb. He was referring to the Chuck Norris halloween costume he was wearing.',
'Chuck Norris recently had the idea to sell his urine as a canned beverage. We know this beverage as Red Bull.',
'In a recent survey it was discovered the 94% of American women lost their virginity to Chuck Norris. The other 6% were incredibly fat or ugly.',
'Chuck Norris invented a language that incorporates karate and roundhouse kicks. So next time Chuck Norris is kicking your ass, don?t be offended or hurt, he may be just trying to tell you he likes your hat.',
'If at first you don\'t succeed, you\'re not Chuck Norris.',
'If Chuck Norris were a calendar, every month would be named Chucktober, and every day he\'d kick your ass.',
'Fear is not the only emotion Chuck Norris can smell. He can also detect hope, as in "I hope I don\'t get a roundhouse kick from Chuck Norris."',
'Chuck Norris\'s show is called Walker: Texas Ranger, because Chuck Norris doesn\'t run.',
'MacGyver can build an airplane out of gum and paper clips, but Chuck Norris can roundhouse-kick his head through a wall and take it.',
'Behind every successful man, there is a woman. Behind every dead man, there is Chuck Norris.',
'Chuck Norris brushes his teeth with a mixture of iron shavings, industrial paint remover, and wood-grain alcohol.',
'The easiest way to determine Chuck Norris\' age is to cut him in half and count the rings.',
'There is endless debate about the existence of the human soul. Well it does exist and Chuck Norris finds it delicious.',
'Most boots are made for walkin\'. Chuck Norris\' boots ain\'t that merciful.',
'The US did not boycott the 1980 Summer Olympics in Moscow due to political reasons: Chuck Norris killed the entire US team with a single round-house kick during TaeKwonDo practice.',
'Chuck Norris wears a live rattlesnake as a condom.',
'The Bible was originally titled "Chuck Norris and Friends"',
'Chuck Norris began selling the Total Gym as an ill-fated attempt to make his day-to-day opponents less laughably pathetic.',
'Do you know why Baskin Robbins only has 31 flavors? Because Chuck Norris doesn\'t like Fudge Ripple.',
'When Chuck Norris says "More cowbell", he MEANS it.',
'On the set of Walker Texas Ranger Chuck Norris brought a dying lamb back to life by nuzzling it with his beard. As the onlookers gathered, the lamb sprang to life. Chuck Norris then roundhouse kicked it, killing it instantly. This was just to prove that the good Chuck givet',
'Chuck Norris was what Willis was talkin\' about.',
'Google won\'t search for Chuck Norris because it knows you don\'t find Chuck Norris, he finds you.',
'Chuck Norris can lead a horse to water AND make it drink.',
'Nagasaki never had a bomb dropped on it. Chuck Norris jumped out of a plane and punched the ground',
'It is scientifically impossible for Chuck Norris to have had a mortal father. The most popular theory is that he went back in time and fathered himself.',
'Chuck Norris destroyed the periodic table, because Chuck Norris only recognizes the element of surprise.',
'It is believed dinosaurs are extinct due to a giant meteor. That\'s true if you want to call Chuck Norris a giant meteor.',
];

    /** @test */
    public function it_returns_a_random_joke()
    {
        $jokes = new JokeFactory([
            'This is a joke',
        ]);
        $joke = $jokes->getRandomJoke();

        $this->assertSame('This is a joke', $joke);
    }

    /** @test */
    public function it_returns_a_predefined_joke()
    {
        $jokes = new JokeFactory();
        $joke = $jokes->getRandomJoke();

        $this->assertContains($joke, $this->chuckNorrisjokes);
    }

    /** @test */
    public function it_returns_the_number_of_jokes_requested()
    {
        $jokes = new JokeFactory();
        $jokes = $jokes->getRandomJokes(5);

        $this->assertCount(5, $jokes);

        foreach($jokes as $joke){
            $this->assertContains($joke, $this->chuckNorrisjokes);
        }

    }

    /** @test */
    public function the_number_of_jokes_requested_cant_be_negative()
    {
        $this->expectExceptionCode(500);
        $this->expectErrorMessage("getRandomJokes requires a integer greater than 0. -5 was used for \$count argument.");

        $jokes = new JokeFactory();
        $jokes = $jokes->getRandomJokes(-5);
    }
}
