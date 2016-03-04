# Google calendar timecard

Fetch calendar events saved with IFTTT with the _Timecard_ recipe.

## Usage

`$ php fetch_array.php 2014 > export/timecard.csv`


## Google_Service_Calendar_Event Object

```java
(
    [collection_key:protected] => recurrence
    [internal_gapi_mappings:protected] => Array
        (
        )

    [anyoneCanAddSelf] =>
    [attachmentsType:protected] => Google_Service_Calendar_EventAttachment
    [attachmentsDataType:protected] => array
    [attendeesType:protected] => Google_Service_Calendar_EventAttendee
    [attendeesDataType:protected] => array
    [attendeesOmitted] =>
    [colorId] =>
    [created] => 2015-01-07T08:28:06.000Z
    [creatorType:protected] => Google_Service_Calendar_EventCreator
    [creatorDataType:protected] =>
    [description] =>
    [endType:protected] => Google_Service_Calendar_EventDateTime
    [endDataType:protected] =>
    [endTimeUnspecified] =>
    [etag] => ""
    [extendedPropertiesType:protected] => Google_Service_Calendar_EventExtendedProperties
    [extendedPropertiesDataType:protected] =>
    [gadgetType:protected] => Google_Service_Calendar_EventGadget
    [gadgetDataType:protected] =>
    [guestsCanInviteOthers] =>
    [guestsCanModify] =>
    [guestsCanSeeOtherGuests] =>
    [hangoutLink] => 
    [htmlLink] => 
    [iCalUID] => <ID>@google.com
    [id] => <ID>
    [kind] => calendar#event
    [location] =>
    [locked] =>
    [organizerType:protected] => Google_Service_Calendar_EventOrganizer
    [organizerDataType:protected] =>
    [originalStartTimeType:protected] => Google_Service_Calendar_EventDateTime
    [originalStartTimeDataType:protected] =>
    [privateCopy] =>
    [recurrence] =>
    [recurringEventId] =>
    [remindersType:protected] => Google_Service_Calendar_EventReminders
    [remindersDataType:protected] =>
    [sequence] => 0
    [sourceType:protected] => Google_Service_Calendar_EventSource
    [sourceDataType:protected] =>
    [startType:protected] => Google_Service_Calendar_EventDateTime
    [startDataType:protected] =>
    [status] => confirmed
    [summary] => I entered work
    [transparency] =>
    [updated] => 2015-01-07T08:28:06.113Z
    [visibility] =>
    [modelData:protected] => Array
        (
            [creator] => Array
                (
                    [email] => 
                    [displayName] => Dharma Ferrari
                    [self] => 1
                )

            [organizer] => Array
                (
                    [email] => 
                    [displayName] => Dharma Ferrari
                    [self] => 1
                )

            [start] => Array
                (
                    [dateTime] => 2015-01-07T09:27:00+01:00
                )

            [end] => Array
                (
                    [dateTime] => 2015-01-07T10:27:00+01:00
                )

            [reminders] => Array
                (
                    [useDefault] => 1
                )

        )

    [processed:protected] => Array
        (
        )

)
```
