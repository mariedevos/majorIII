export default class Santa extends Phaser.Physics.Arcade.Sprite {
  constructor(scene, x, y) {
    super(scene, x, y, `snowman`);
    scene.add.existing(this);
    scene.physics.add.existing(this);

    // this.setScale(1.2);
    this.createAnimation();
  }
}



createAnimation() {
  this.input.on('pointermove', function (pointer) {

        sprite.x += pointer.movementX;
        sprite.y += pointer.movementY;

        // Force the sprite to stay on screen
        sprite.x = Phaser.Math.Wrap(sprite.x, 0, game.renderer.width);
        sprite.y = Phaser.Math.Wrap(sprite.y, 0, game.renderer.height);

        if (pointer.movementX > 0) { sprite.setRotation(0.1); }
        else if (pointer.movementX < 0) { sprite.setRotation(-0.1); }
        else { sprite.setRotation(0); }

        updateLockText(true);

}, this);
}

