#!/usr/bin/env python
import worldometer

current_deaths = worldometer.deaths_today().get("deaths_today")
