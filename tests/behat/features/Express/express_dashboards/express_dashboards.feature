Feature: When I login to Express, I am redirected to my dashboard that correctly includes all components on the User tab.

<<<<<<< HEAD
  @api @dashboards @879
  Scenario: A Site Owner should see Who's Online, System Status, and username blocks.
    Given  I am logged in as a user with the "site_owner" role
=======
@dashboard
Feature: The Web Express Dashboard
When I login to a Web Express website
As an authenticated user
I am redirected to my dashboard

  Scenario Outline: An authenticated user should see Who's Online, System Status, and username blocks.
    Given  I am logged in as a user with the <role> role
    Then I should be on "admin/dashboard/user"
>>>>>>> 2.9.5
    Then I should see "Dashboard"
      And I should see "Who's online"
      And I should see "System Status"
