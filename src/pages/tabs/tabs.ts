import { Component } from '@angular/core';

import { Feeds } from '../feeds/feeds';
import { Settings } from '../settings/settings';
import { Dashboard } from '../dashboard/dashboard';

@Component({
  templateUrl: 'tabs.html'
})
export class TabsPage {

  tab1Root = Dashboard;
  tab2Root = Feeds;
  tab3Root = Settings;

  constructor() {

  }
}
