function PlayWave(sound_object)
{
	sound_object.Version = 1 ;
	sound_object.EnableContextMenu = -1 ;
	sound_object.ShowDisplay = 0 ;
	sound_object.ShowControls = 0 ;
	sound_object.ShowPositionControls = 0 ;
	sound_object.ShowSelectionControls = 0 ;
	sound_object.EnablePositionControls = 0 ;
	sound_object.EnableSelectionControls = 0 ;
	sound_object.ShowTracker = 0 ;
	sound_object.EnableTracker = 0 ;
	sound_object.AllowHideDisplay = 0 ;
	sound_object.AllowHideControls = 0 ;
	sound_object.AutoStart = 0 ;
	sound_object.Appearance = 0 ;
	sound_object.BorderStyle = 0 ;
	sound_object.DisplayMode = 0 ;
	sound_object.AllowChangeDisplayMode = -1 ;

	sound_object.PlayCount = 1;
	sound_object.Rate = 1 ;
	sound_object.Volume = 0 ;
	sound_object.Balance = 0 ;
	sound_object.CurrentPosition = 0 ;

	sound_object.Run();
}

function PlayScale8(milliseconds)
{
	setTimeout ( "PlayWave(sound1);", (milliseconds * 1) );
	setTimeout ( "PlayWave(sound2);", (milliseconds * 2) );
	setTimeout ( "PlayWave(sound3);", (milliseconds * 3) );
	setTimeout ( "PlayWave(sound4);", (milliseconds * 4) );
	setTimeout ( "PlayWave(sound5);", (milliseconds * 5) );
	setTimeout ( "PlayWave(sound6);", (milliseconds * 6) );
	setTimeout ( "PlayWave(sound7);", (milliseconds * 7) );
	setTimeout ( "PlayWave(sound8);", (milliseconds * 8) );

	setTimeout ( "PlayWave(sound8);", (milliseconds * 10) );
	setTimeout ( "PlayWave(sound7);", (milliseconds * 11) );
	setTimeout ( "PlayWave(sound6);", (milliseconds * 12) );
	setTimeout ( "PlayWave(sound5);", (milliseconds * 13) );
	setTimeout ( "PlayWave(sound4);", (milliseconds * 14) );
	setTimeout ( "PlayWave(sound3);", (milliseconds * 15) );
	setTimeout ( "PlayWave(sound2);", (milliseconds * 16) );
	setTimeout ( "PlayWave(sound1);", (milliseconds * 17) );
}
