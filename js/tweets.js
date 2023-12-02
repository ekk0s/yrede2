import { randomInt } from './modules/random.mjs';
import Repository from './modules/repository.mjs';

const TWEETS_KEY = '@TwitterClone/TWEETS';

const $tweetButton = document.querySelector('[data-js="tweet-button"]');
const $tweetDescription = document.querySelector('[data-js="tweet-description"]');
const $tweetContainer = document.querySelector('[data-js="tweets"]');

const tweets = [
  {
    description: '',
    time: '7 min',
    image: './assets/gatos_tweet1.jpg',
    page: {
      name: 'gatos fazendo gatices',
      id: 'gatinarios',
      image: './assets/gatos_avatar.jpg'
    },
    metrics: {
      comments: 5,
      likes: 188,
      retweets: 1800,
    },
  },

  {
    description: 'tá me olhando assim por que parça???????',
    time: '7 min',
    image: './assets/gatos_tweet2.jpg',
    page: {
      name: 'gatos fazendo gatices',
      id: 'gatinarios',
      image: './assets/gatos_avatar.jpg'
    },
    metrics: {
      comments: 12,
      likes: 424,
      retweets: 1250,
    },
  },

  {
    description: '5 sachês e pode passar',
    time: '7 min',
    image: './assets/gatos_tweet3.jpg',
    page: {
      name: 'gatos fazendo gatices',
      id: 'gatinarios',
      image: './assets/gatos_avatar.jpg'
    },
    metrics: {
      comments: 545,
      likes: 216,
      retweets: 14814,
    },
  },
];

function getDescription(description) {
  return description ? (
    `
      <p class="tweet__comment" data-user-description>
        ${description}
      </p>
    `
  ) : "";
}

function getImage(image, description) {
  return image ? (
    `\
      <figure style="${description ? 'margin-top: 1rem' : ''}">
        <img alt="Tweet" src="${image}" />
     </figure>`
  ) : '';
}

function formatMetric(metric) {
  return metric < 1000 ? metric : `${(metric / 1000).toLocaleString('pt-BR', { maximumFractionDigits: 1 })} mil`;
}

function toTweetString({ description, image, metrics, page, time, userTweet = false }) {
  return `\
      <div class="tweet" ${userTweet ? 'data-user-tweet' : ''}>
        <div class="tweet__more">
          <i class="fas fa-ellipsis-h"></i>
        </div>

        <div class="info">
          <figure class="user">
            <img alt="User Avatar" src="${page.image}" data-user-image />
          </figure>

          <div style="width: 100%;">
            <div class="tweet__content">
              <div class="posted">
                <div class="posted__title">
                  <h3 class="tweet__username" data-user-name>${page.name}</h3>
                  <p class="tweet__user_id" data-user-id>@${page.id}</p>
                </div>
                <p>· <span class="tweet__time" data-user-time>${time}</span></p>
              </div>

              ${getDescription(description)}

              ${getImage(image, description)}


            </div>

            <div class="tweet__actions">
              <div class="tweet__action">
                <i class="far fa-comment"></i>
                <span>${formatMetric(metrics.likes)}</span>
              </div>

              <div class="tweet__action">
                <i class="far fa-heart"></i>
                <span>${formatMetric(metrics.comments)}</span>
              </div>

              <div class="tweet__action">
                <i class="fas fa-retweet"></i>
                <span>${formatMetric(metrics.retweets)}</span>
              </div>

              <div class="tweet__action">
                <i class="fas fa-share-alt"></i>
                <span></span>
              </div>
            </div>
          </div>
        </div>
      </div>
    `;
}

function setupTweets() {
  const mappedTweets = tweets.map(toTweetString);
  const userMappedTweets = Repository.get(TWEETS_KEY) || [];
  $tweetContainer.innerHTML += userMappedTweets.join(' ') + mappedTweets.join(' ');
}

function handleTweetButtonClick() {
  const description = $tweetDescription.value.trim();

  if (!description) {
    return;
  }

  const image = 'https://avatars.githubusercontent.com/u/59753526?v=4';
  const time = 'now';

  const metrics = {
    comments: randomInt(0, 500),
    likes: randomInt(0, 1200),
    retweets: randomInt(0, 1200),
  };

  const page = {
    name: 'SkyG0D',
    id: 'skyg0d',
    image,
  };

  const tweet = document.createElement('div');
  const stringTweet = toTweetString({ description, time, metrics, page, userTweet: true });
  tweet.innerHTML = stringTweet;
  $tweetContainer.insertBefore(tweet, $tweetContainer.firstChild);

  $tweetDescription.value = '';

  const tweets = Repository.get(TWEETS_KEY) || [];

  Repository.save(TWEETS_KEY, [stringTweet, ...tweets]);
}

setupTweets();

$tweetButton.addEventListener('click', handleTweetButtonClick);
