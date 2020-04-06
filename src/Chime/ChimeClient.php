<?php
namespace Aws\Chime;

use Aws\AwsClient;

/**
 * This client is used to interact with the **Amazon Chime** service.
 * @method \Aws\Result associatePhoneNumberWithUser(array $args = [])
 * @method \GuzzleHttp\Promise\Promise associatePhoneNumberWithUserAsync(array $args = [])
 * @method \Aws\Result associatePhoneNumbersWithVoiceConnector(array $args = [])
 * @method \GuzzleHttp\Promise\Promise associatePhoneNumbersWithVoiceConnectorAsync(array $args = [])
 * @method \Aws\Result associatePhoneNumbersWithVoiceConnectorGroup(array $args = [])
 * @method \GuzzleHttp\Promise\Promise associatePhoneNumbersWithVoiceConnectorGroupAsync(array $args = [])
 * @method \Aws\Result associateSigninDelegateGroupsWithAccount(array $args = [])
 * @method \GuzzleHttp\Promise\Promise associateSigninDelegateGroupsWithAccountAsync(array $args = [])
 * @method \Aws\Result batchCreateAttendee(array $args = [])
 * @method \GuzzleHttp\Promise\Promise batchCreateAttendeeAsync(array $args = [])
 * @method \Aws\Result batchCreateRoomMembership(array $args = [])
 * @method \GuzzleHttp\Promise\Promise batchCreateRoomMembershipAsync(array $args = [])
 * @method \Aws\Result batchDeletePhoneNumber(array $args = [])
 * @method \GuzzleHttp\Promise\Promise batchDeletePhoneNumberAsync(array $args = [])
 * @method \Aws\Result batchSuspendUser(array $args = [])
 * @method \GuzzleHttp\Promise\Promise batchSuspendUserAsync(array $args = [])
 * @method \Aws\Result batchUnsuspendUser(array $args = [])
 * @method \GuzzleHttp\Promise\Promise batchUnsuspendUserAsync(array $args = [])
 * @method \Aws\Result batchUpdatePhoneNumber(array $args = [])
 * @method \GuzzleHttp\Promise\Promise batchUpdatePhoneNumberAsync(array $args = [])
 * @method \Aws\Result batchUpdateUser(array $args = [])
 * @method \GuzzleHttp\Promise\Promise batchUpdateUserAsync(array $args = [])
 * @method \Aws\Result createAccount(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createAccountAsync(array $args = [])
 * @method \Aws\Result createAttendee(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createAttendeeAsync(array $args = [])
 * @method \Aws\Result createBot(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createBotAsync(array $args = [])
 * @method \Aws\Result createMeeting(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createMeetingAsync(array $args = [])
 * @method \Aws\Result createPhoneNumberOrder(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createPhoneNumberOrderAsync(array $args = [])
 * @method \Aws\Result createProxySession(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createProxySessionAsync(array $args = [])
 * @method \Aws\Result createRoom(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createRoomAsync(array $args = [])
 * @method \Aws\Result createRoomMembership(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createRoomMembershipAsync(array $args = [])
 * @method \Aws\Result createUser(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createUserAsync(array $args = [])
 * @method \Aws\Result createVoiceConnector(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createVoiceConnectorAsync(array $args = [])
 * @method \Aws\Result createVoiceConnectorGroup(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createVoiceConnectorGroupAsync(array $args = [])
 * @method \Aws\Result deleteAccount(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteAccountAsync(array $args = [])
 * @method \Aws\Result deleteAttendee(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteAttendeeAsync(array $args = [])
 * @method \Aws\Result deleteEventsConfiguration(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteEventsConfigurationAsync(array $args = [])
 * @method \Aws\Result deleteMeeting(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteMeetingAsync(array $args = [])
 * @method \Aws\Result deletePhoneNumber(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deletePhoneNumberAsync(array $args = [])
 * @method \Aws\Result deleteProxySession(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteProxySessionAsync(array $args = [])
 * @method \Aws\Result deleteRoom(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteRoomAsync(array $args = [])
 * @method \Aws\Result deleteRoomMembership(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteRoomMembershipAsync(array $args = [])
 * @method \Aws\Result deleteVoiceConnector(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteVoiceConnectorAsync(array $args = [])
 * @method \Aws\Result deleteVoiceConnectorGroup(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteVoiceConnectorGroupAsync(array $args = [])
 * @method \Aws\Result deleteVoiceConnectorOrigination(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteVoiceConnectorOriginationAsync(array $args = [])
 * @method \Aws\Result deleteVoiceConnectorProxy(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteVoiceConnectorProxyAsync(array $args = [])
 * @method \Aws\Result deleteVoiceConnectorStreamingConfiguration(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteVoiceConnectorStreamingConfigurationAsync(array $args = [])
 * @method \Aws\Result deleteVoiceConnectorTermination(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteVoiceConnectorTerminationAsync(array $args = [])
 * @method \Aws\Result deleteVoiceConnectorTerminationCredentials(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteVoiceConnectorTerminationCredentialsAsync(array $args = [])
 * @method \Aws\Result disassociatePhoneNumberFromUser(array $args = [])
 * @method \GuzzleHttp\Promise\Promise disassociatePhoneNumberFromUserAsync(array $args = [])
 * @method \Aws\Result disassociatePhoneNumbersFromVoiceConnector(array $args = [])
 * @method \GuzzleHttp\Promise\Promise disassociatePhoneNumbersFromVoiceConnectorAsync(array $args = [])
 * @method \Aws\Result disassociatePhoneNumbersFromVoiceConnectorGroup(array $args = [])
 * @method \GuzzleHttp\Promise\Promise disassociatePhoneNumbersFromVoiceConnectorGroupAsync(array $args = [])
 * @method \Aws\Result disassociateSigninDelegateGroupsFromAccount(array $args = [])
 * @method \GuzzleHttp\Promise\Promise disassociateSigninDelegateGroupsFromAccountAsync(array $args = [])
 * @method \Aws\Result getAccount(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getAccountAsync(array $args = [])
 * @method \Aws\Result getAccountSettings(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getAccountSettingsAsync(array $args = [])
 * @method \Aws\Result getAttendee(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getAttendeeAsync(array $args = [])
 * @method \Aws\Result getBot(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getBotAsync(array $args = [])
 * @method \Aws\Result getEventsConfiguration(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getEventsConfigurationAsync(array $args = [])
 * @method \Aws\Result getGlobalSettings(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getGlobalSettingsAsync(array $args = [])
 * @method \Aws\Result getMeeting(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getMeetingAsync(array $args = [])
 * @method \Aws\Result getPhoneNumber(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getPhoneNumberAsync(array $args = [])
 * @method \Aws\Result getPhoneNumberOrder(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getPhoneNumberOrderAsync(array $args = [])
 * @method \Aws\Result getPhoneNumberSettings(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getPhoneNumberSettingsAsync(array $args = [])
 * @method \Aws\Result getProxySession(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getProxySessionAsync(array $args = [])
 * @method \Aws\Result getRoom(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getRoomAsync(array $args = [])
 * @method \Aws\Result getUser(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getUserAsync(array $args = [])
 * @method \Aws\Result getUserSettings(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getUserSettingsAsync(array $args = [])
 * @method \Aws\Result getVoiceConnector(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getVoiceConnectorAsync(array $args = [])
 * @method \Aws\Result getVoiceConnectorGroup(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getVoiceConnectorGroupAsync(array $args = [])
 * @method \Aws\Result getVoiceConnectorLoggingConfiguration(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getVoiceConnectorLoggingConfigurationAsync(array $args = [])
 * @method \Aws\Result getVoiceConnectorOrigination(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getVoiceConnectorOriginationAsync(array $args = [])
 * @method \Aws\Result getVoiceConnectorProxy(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getVoiceConnectorProxyAsync(array $args = [])
 * @method \Aws\Result getVoiceConnectorStreamingConfiguration(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getVoiceConnectorStreamingConfigurationAsync(array $args = [])
 * @method \Aws\Result getVoiceConnectorTermination(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getVoiceConnectorTerminationAsync(array $args = [])
 * @method \Aws\Result getVoiceConnectorTerminationHealth(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getVoiceConnectorTerminationHealthAsync(array $args = [])
 * @method \Aws\Result inviteUsers(array $args = [])
 * @method \GuzzleHttp\Promise\Promise inviteUsersAsync(array $args = [])
 * @method \Aws\Result listAccounts(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listAccountsAsync(array $args = [])
 * @method \Aws\Result listAttendees(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listAttendeesAsync(array $args = [])
 * @method \Aws\Result listBots(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listBotsAsync(array $args = [])
 * @method \Aws\Result listMeetings(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listMeetingsAsync(array $args = [])
 * @method \Aws\Result listPhoneNumberOrders(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listPhoneNumberOrdersAsync(array $args = [])
 * @method \Aws\Result listPhoneNumbers(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listPhoneNumbersAsync(array $args = [])
 * @method \Aws\Result listProxySessions(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listProxySessionsAsync(array $args = [])
 * @method \Aws\Result listRoomMemberships(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listRoomMembershipsAsync(array $args = [])
 * @method \Aws\Result listRooms(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listRoomsAsync(array $args = [])
 * @method \Aws\Result listUsers(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listUsersAsync(array $args = [])
 * @method \Aws\Result listVoiceConnectorGroups(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listVoiceConnectorGroupsAsync(array $args = [])
 * @method \Aws\Result listVoiceConnectorTerminationCredentials(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listVoiceConnectorTerminationCredentialsAsync(array $args = [])
 * @method \Aws\Result listVoiceConnectors(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listVoiceConnectorsAsync(array $args = [])
 * @method \Aws\Result logoutUser(array $args = [])
 * @method \GuzzleHttp\Promise\Promise logoutUserAsync(array $args = [])
 * @method \Aws\Result putEventsConfiguration(array $args = [])
 * @method \GuzzleHttp\Promise\Promise putEventsConfigurationAsync(array $args = [])
 * @method \Aws\Result putVoiceConnectorLoggingConfiguration(array $args = [])
 * @method \GuzzleHttp\Promise\Promise putVoiceConnectorLoggingConfigurationAsync(array $args = [])
 * @method \Aws\Result putVoiceConnectorOrigination(array $args = [])
 * @method \GuzzleHttp\Promise\Promise putVoiceConnectorOriginationAsync(array $args = [])
 * @method \Aws\Result putVoiceConnectorProxy(array $args = [])
 * @method \GuzzleHttp\Promise\Promise putVoiceConnectorProxyAsync(array $args = [])
 * @method \Aws\Result putVoiceConnectorStreamingConfiguration(array $args = [])
 * @method \GuzzleHttp\Promise\Promise putVoiceConnectorStreamingConfigurationAsync(array $args = [])
 * @method \Aws\Result putVoiceConnectorTermination(array $args = [])
 * @method \GuzzleHttp\Promise\Promise putVoiceConnectorTerminationAsync(array $args = [])
 * @method \Aws\Result putVoiceConnectorTerminationCredentials(array $args = [])
 * @method \GuzzleHttp\Promise\Promise putVoiceConnectorTerminationCredentialsAsync(array $args = [])
 * @method \Aws\Result regenerateSecurityToken(array $args = [])
 * @method \GuzzleHttp\Promise\Promise regenerateSecurityTokenAsync(array $args = [])
 * @method \Aws\Result resetPersonalPIN(array $args = [])
 * @method \GuzzleHttp\Promise\Promise resetPersonalPINAsync(array $args = [])
 * @method \Aws\Result restorePhoneNumber(array $args = [])
 * @method \GuzzleHttp\Promise\Promise restorePhoneNumberAsync(array $args = [])
 * @method \Aws\Result searchAvailablePhoneNumbers(array $args = [])
 * @method \GuzzleHttp\Promise\Promise searchAvailablePhoneNumbersAsync(array $args = [])
 * @method \Aws\Result updateAccount(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateAccountAsync(array $args = [])
 * @method \Aws\Result updateAccountSettings(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateAccountSettingsAsync(array $args = [])
 * @method \Aws\Result updateBot(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateBotAsync(array $args = [])
 * @method \Aws\Result updateGlobalSettings(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateGlobalSettingsAsync(array $args = [])
 * @method \Aws\Result updatePhoneNumber(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updatePhoneNumberAsync(array $args = [])
 * @method \Aws\Result updatePhoneNumberSettings(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updatePhoneNumberSettingsAsync(array $args = [])
 * @method \Aws\Result updateProxySession(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateProxySessionAsync(array $args = [])
 * @method \Aws\Result updateRoom(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateRoomAsync(array $args = [])
 * @method \Aws\Result updateRoomMembership(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateRoomMembershipAsync(array $args = [])
 * @method \Aws\Result updateUser(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateUserAsync(array $args = [])
 * @method \Aws\Result updateUserSettings(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateUserSettingsAsync(array $args = [])
 * @method \Aws\Result updateVoiceConnector(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateVoiceConnectorAsync(array $args = [])
 * @method \Aws\Result updateVoiceConnectorGroup(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateVoiceConnectorGroupAsync(array $args = [])
 */
class ChimeClient extends AwsClient {}
