import BootScene from './scenes/BootScene.js';
import PreloadScene from './scenes/PreloadScene.js';
import IntroScene from './scenes/IntroScene.js';
import GameScene from './scenes/GameScene.js';
import GameOver from './scenes/GameOver.js';
import HighScores from './scenes/HighScores.js';

class Game extends Phaser.Game {
  constructor() {
    super({
      type: Phaser.AUTO,
      width: 700,
      height: 600,
      parent: 'game',
      title: `Examen`,
      scene: [BootScene, PreloadScene, IntroScene, GameScene,GameOver, HighScores],
      version: `1.0`,
      physics: {
        default: `arcade`,
        //  arcade: {
        //   debug: false,
        //    gravity: {y: 100}
        // }
      }
    });
    console.log(`Constructor Game class`);
  }
}
export default Game;
