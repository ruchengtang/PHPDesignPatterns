<?php

namespace Ruchengtang\PHPDesignPatterns\Behavioral\Command;

class Client
{
    public function run()
    {
        $remoteControl = new RemoteControl();

        $livingRoomlight = new Light('Living Room');
        $kitchenLight = new Light('Kitchen');
        $livingRoomTv = new Tv('Living Room');

        $remoteControl->setCommand(0, new LightOnCommand($livingRoomlight), new LightOffCommand($livingRoomlight));
        $remoteControl->setCommand(1, new LightOnCommand($kitchenLight), new LightOffCommand($kitchenLight));
        $remoteControl->setCommand(2, new TvOnCommand($livingRoomTv), new TvOffCommand($livingRoomTv));

        $remoteControl->onButtonWasPushed(0);
        $remoteControl->offButtonWasPushed(0);
        $remoteControl->undoButtonWasPushed();

        $remoteControl->onButtonWasPushed(1);
        $remoteControl->offButtonWasPushed(1);
        $remoteControl->undoButtonWasPushed();

        $remoteControl->onButtonWasPushed(2);
        $remoteControl->offButtonWasPushed(2);
        $remoteControl->undoButtonWasPushed();

        $remoteControl->onButtonWasPushed(3);
        $remoteControl->onButtonWasPushed(4);
        $remoteControl->offButtonWasPushed(3);
        $remoteControl->undoButtonWasPushed();
        $remoteControl->offButtonWasPushed(4);

        echo '---------<br/>';

        $this->macro();
    }

    private function macro()
    {
        $remoteControl = new RemoteControl();

        $livingRoomlight = new Light('Living Room');
        $kitchenLight = new Light('Kitchen');
        $livingRoomTv = new Tv('Living Room');

        $partyOn = [
            new LightOnCommand($livingRoomlight),
            new LightOnCommand($kitchenLight),
            new TvOnCommand($livingRoomTv),
        ];

        $partyOff = [
            new LightOffCommand($livingRoomlight),
            new LightOffCommand($kitchenLight),
            new TvOffCommand($livingRoomTv),
        ];

        $partyOnMacro = new MacroCommand($partyOn);
        $partyOffMacro = new MacroCommand($partyOff);

        $remoteControl->setCommand(0, $partyOnMacro, $partyOffMacro);

        $remoteControl->onButtonWasPushed(0);
        $remoteControl->offButtonWasPushed(0);
        $remoteControl->undoButtonWasPushed();
    }
}
